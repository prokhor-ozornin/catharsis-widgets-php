<?php
/**
 * YouTubeVideoWidget class.
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
 * Renders embedded YouTube video on web page.
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
class YouTubeVideoWidget extends HtmlWidget
{
    private $_height;
    private $_id;
    private $_privateMode = false;
    private $_secureMode = false;
    private $_width;

    /**
     * Height of video control.
     * This attribute is required.
     * @param string $height Height of video.
     * @return \Catharsis\Web\YouTubeVideoWidget Reference to the current widget.
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
     * This attribute is required.
     * @param string $id Identifier of video.
     * @return \Catharsis\Web\YouTubeVideoWidget Reference to the current widget.
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
     * Whether to keep track of user cookies or not.
     * Default is FALSE.
     * @param boolean $enabled TRUE to set cookies, FALSE to not.
     * @return \Catharsis\Web\YouTubeVideoWidget Reference to the current widget.
     */
    public function privateMode($enabled)
    {
        $this->_privateMode = (bool) $enabled;
        return $this;
    }

    /**
     * Whether to keep track of user cookies or not.
     * @return boolean TRUE to set cookies, FALSE to not.
     */
    public function getPrivateMode()
    {
        return $this->_privateMode;
    }

    /**
     * Whether to access video through secure HTTPS protocol or unsecure HTTP.
     * Default is FALSE.
     * @param boolean $enabled TRUE to use HTTPS protocol, FALSE to use HTTP.
     * @return \Catharsis\Web\YouTubeVideoWidget Reference to the current widget.
     */
    public function secureMode($enabled)
    {
        $this->_secureMode = (bool) $enabled;
        return $this;
    }

    /**
     * Whether to access video through secure HTTPS protocol or unsecure HTTP.
     * Default is FALSE.
     * @return boolean TRUE to use HTTPS protocol, FALSE to use HTTP.
     */
    public function getSecureMode()
    {
        return $this->_secureMode;
    }

    /**
     * Width of video control.
     * This attribute is required.
     * @param string $width Width of video.
     * @return \Catharsis\Web\YouTubeVideoWidget Reference to the current widget.
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

        $private = $this->getPrivateMode() ? 'www.youtube-nocookie.com' : 'www.youtube.com';
        $secure = $this->getSecureMode() ? 'https' : 'http';

        return self::htmlTag(
            'iframe',
            array(
                'allowfullscreen' => true,
                'frameborder' => 0,
                'height' => $this->getHeight(),
                'mozallowfullscreen' => true,
                'src' => "{$secure}://{$private}/embed/{$this->getId()}",
                'webkitallowfullscreen' => true,
                'width' => $this->getWidth()
            )
        );
    }
}

?>
