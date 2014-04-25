<?php
namespace Catharsis\Web;

/**
 * Renders embedded Facebook video on web page.
 */
class FacebookVideoWidget extends HtmlWidget
{
    private $_height;
    private $_id;
    private $_width;

    /**
     * Height of video control.
     * @param string $height Height of video.
     * @return \Catharsis\Web\FacebookVideoWidget Reference to the current widget.
     */
    public function height($height)
    {
        $this->_height = (string) $height;
        return $this;
    }

    /**
     * Identifier of video.
     * @param string $id Identifier of video.
     * @return \Catharsis\Web\FacebookVideoWidget Reference to the current widget.
     */
    public function id($id)
    {
        $this->_id = (string) $id;
        return $this;
    }

    /**
     * Width of video control.
     * @param string $width Width of video.
     * @return \Catharsis\Web\FacebookVideoWidget Reference to the current widget.
     */
    public function width($width)
    {
        $this->_width = (string) $width;
        return $this;
    }

    /**
     * Returns HTML markup text of widget.
     */
    public function __toString()
    {
        if (empty($this->_id) || empty($this->_width) || empty($this->_height)) {
            return "";
        }

        return self::htmlTag("iframe", array(
            "allowfullscreen" => true,
            "frameborder" => 0,
            "height" => $this->_height,
            "mozallowfullscreen" => true,
            "src" => "http://www.facebook.com/video/embed?video_id={$this->_id}",
            "webkitallowfullscreen" => true,
            "width" => $this->_width
        ));
    }
}

?>
