<?php
/**
 * VimeoVideoWidget class.
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
 * Renders embedded Vimeo video on web page.
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
class VimeoVideoWidget extends HtmlWidget
{
    private $_autoPlay = false;
    private $_height;
    private $_id;
    private $_loop = false;
    private $_width;

    /**
     * Whether to start playing video automatically.
     * Default is FALSE.
     * @param boolean $enabled TRUE to enable autoplay, FALSE to disable.
     * @return \Catharsis\Web\VimeoVideoWidget
     *         Reference to the current widget.
     */
    public function autoPlay($enabled)
    {
        $this->_autoPlay = (bool) $enabled;
        return $this;
    }

    /**
     * Whether to start playing video automatically.
     * Default is FALSE.
     * @return boolean TRUE to enable autoplay, FALSE to disable.
     */
    public function getAutoPlay()
    {
        return $this->_autoPlay;
    }

    /**
     * Height of video control.
     * This attribute is required.
     * @param string $height Height of video.
     * @return \Catharsis\Web\VimeoVideoWidget
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
     * This attribute is required.
     * @param string $id Identifier of video.
     * @return \Catharsis\Web\VimeoVideoWidget
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
     * Whether to replay video when it finishes.
     * Default is FALSE.
     * @param boolean $enabled TRUE to enable looping, FALSE to disable.
     * @return \Catharsis\Web\VimeoVideoWidget
     *         Reference to the current widget.
     */
    public function loop($enabled)
    {
        $this->_loop = (bool) $enabled;
        return $this;
    }

    /**
     * Whether to replay video when it finishes.
     * Default is FALSE.
     * @return boolean TRUE to enable looping, FALSE to disable.
     */
    public function getLoop()
    {
        return $this->_loop;
    }

    /**
     * Width of video control.
     * This attribute is required.
     * @param string $width Width of video.
     * @return \Catharsis\Web\VimeoVideoWidget
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

        $auto_play = $this->getAutoPlay() ? '&autoplay=1' : '';
        $loop = $this->getLoop() ? '&loop=1' : '';

        return self::htmlTag(
            'iframe',
            array(
                'allowfullscreen' => true,
                'frameborder' => 0,
                'height' => $this->getHeight(),
                'mozallowfullscreen' => true,
                'src' => "https://player.vimeo.com/video/{$this->getId()}?badge=0{$auto_play}{$loop}",
                'webkitallowfullscreen' => true,
                'width' => $this->getWidth()
            )
        );
    }
}

?>
