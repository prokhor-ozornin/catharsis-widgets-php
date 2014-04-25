<?php
namespace Catharsis\Web;

/**
 * Renders inline HTML image with BASE64-encoded binary data.
 */
class InlineImageWidget extends HtmlWidget
{
    private $_contents;
    private $_format;

    /**
     * Binary contents of image.
     * @param binary $contents Image data.
     * @return \Catharsis\Web\InlineImageWidget Reference to the current widget.
     */
    public function contents($contents)
    {
        $this->_contents = (string) $contents;
        return $this;
    }

    /**
     * MIME content-type of image.
     * @param string $format Image type.
     * @return \Catharsis\Web\InlineImageWidget Reference to the current widget.
     */
    public function format($format)
    {
        $this->_format = (string) $format;
        return $this;
    }

    /**
     * Returns HTML markup text of widget.
     */
    public function __toString()
    {
        if (empty($this->_contents)) {
            return "";
        }

        $format = empty($this->_format) ? "image" : $this->_format;
        $contents = base64_encode($this->_contents);

        return self::htmlTag("img", array(
                "src" => "data:{$format};base64,{$contents}"
        ));
    }
}

?>
