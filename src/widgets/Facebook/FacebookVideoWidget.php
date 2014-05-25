<?php
/**
 * FacebookVideoWidget class.
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
 * Renders embedded Facebook video on web page.
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
class FacebookVideoWidget extends HtmlWidget
{
    private $_height;
    private $_id;
    private $_width;

    /**
     * Height of video control.
     * @param string $height Height of video.
     * @return \Catharsis\Web\FacebookVideoWidget
     *         Reference to the current widget.
     */
    public function height($height)
    {
        $this->_height = (string) $height;
        return $this;
    }

    /**
     * Height of video control.
     * @return string Height of video.
     */
    public function getHeight()
    {
        return $this->_height;
    }

    /**
     * Identifier of video.
     * @param string $id Identifier of video.
     * @return \Catharsis\Web\FacebookVideoWidget
     *         Reference to the current widget.
     */
    public function id($id)
    {
        $this->_id = (string) $id;
        return $this;
    }

    /**
     * Identifier of video.
     * @return string Identifier of video.
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * Width of video control.
     * @param string $width Width of video.
     * @return \Catharsis\Web\FacebookVideoWidget
     *         Reference to the current widget.
     */
    public function width($width)
    {
        $this->_width = (string) $width;
        return $this;
    }

    /**
     * Width of video control.
     * @return string Width of video.
     */
    public function getWidth()
    {
        return $this->_width;
    }

    /**
     * Returns HTML markup text of widget.
     * @return string Widget's HTML markup.
     */
    public function __toString()
    {
        if (empty($this->getId())
            || empty($this->getWidth())
            || empty($this->getHeight())
        ) {
            return '';
        }

        return self::htmlTag(
            'iframe',
            array(
                'allowfullscreen' => true,
                'frameborder' => 0,
                'height' => $this->getHeight(),
                'mozallowfullscreen' => true,
                'src' => "http://www.facebook.com/video/embed?video_id={$this->getId()}",
                'webkitallowfullscreen' => true,
                'width' => $this->getWidth()
            )
        );
    }
}

?>
