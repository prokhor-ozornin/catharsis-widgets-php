<?php
/**
 * InlineImageWidget class.
 *
 * PHP version 5
 *
 * @category HTML
 * @package  WebWidgets
 * @author   Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @license  LGPL https://www.gnu.org/licenses/lgpl.html
 * @link     http://pear.php.net/package/HTML_WebWidgets
 */
namespace Catharsis\Web;

/**
 * Renders inline HTML image with BASE64-encoded binary data.
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
class InlineImageWidget extends HtmlWidget
{
    private $_contents;
    private $_format;

    /**
     * Binary contents of image.
     * @param binary $contents Image data.
     * @return \Catharsis\Web\InlineImageWidget
     *         Reference to the current widget.
     */
    public function contents($contents)
    {
        $this->_contents = (string) $contents;
        return $this;
    }

    /**
     * Binary contents of image.
     * @return string Image data.
     */
    public function getContents()
    {
        return $this->_contents;
    }

    /**
     * MIME content-type of image.
     * @param string $format Image type.
     * @return \Catharsis\Web\InlineImageWidget
     *         Reference to the current widget.
     */
    public function format($format)
    {
        $this->_format = (string) $format;
        return $this;
    }

    /**
     * MIME content-type of image.
     * @return string Image type.
     */
    public function getFormat()
    {
        return $this->_format;
    }

    /**
     * Returns HTML markup text of widget.
     * @return string Widget's HTML markup.
     */
    public function __toString()
    {
        if (empty($this->getContents())) {
            return '';
        }

        $format = empty($this->getFormat()) ? 'image' : $this->getFormat();
        $contents = base64_encode($this->getContents());

        return self::htmlTag('img', array('src' => "data:{$format};base64,{$contents}"));
    }
}

?>
