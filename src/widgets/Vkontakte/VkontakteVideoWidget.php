<?php
/**
 * VkontakteVideoWidget class.
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
 * Renders embedded VKontakte video on web page.
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
class VkontakteVideoWidget extends HtmlWidget
{
    private $_hash;
    private $_hd;
    private $_height;
    private $_id;
    private $_user;
    private $_width;

    /**
     * Hash code of video.
     * This attribute is required.
     * @param string $hash Video's hash code.
     * @return \Catharsis\Web\VkontakteVideoWidget
     *         Reference to the current widget.
     */
    public function hash($hash)
    {
        $this->_hash = (string) $hash;
        return $this;
    }

    /**
     * Hash code of video.
     * @return string Video's hash code.
     */
    public function getHash()
    {
        return $this->_hash;
    }

    /**
     * Whether to play video in High Definition format.
     * Default is FALSE.
     * @param boolean $enabled TRUE to use HD quality format,
     *                         FALSE to use standard quality.
     * @return \Catharsis\Web\VkontakteVideoWidget
     *         Reference to the current widget.
     */
    public function hd($enabled)
    {
        $this->_hd = (bool) $enabled;
        return $this;
    }

    /**
     * Whether to play video in High Definition format.
     * Default is FALSE.
     * @return boolean TRUE to use HD quality format,
     *                 FALSE to use standard quality.
     */
    public function getHd()
    {
        return $this->_hd;
    }

    /**
     * Height of video control.
     * This attribute is required.
     * @param string $height Height of video.
     * @return \Catharsis\Web\VkontakteVideoWidget
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
     * @return \Catharsis\Web\VkontakteVideoWidget
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
     * Account identifier of video's uploader.
     * This attribute is required.
     * @param string $user User's account.
     * @return \Catharsis\Web\VkontakteVideoWidget
     *         Reference to the current widget.
     */
    public function user($user)
    {
        $this->_user = (string) $user;
        return $this;
    }

    /**
     * Account identifier of video's uploader.
     * @return string User's account.
     */
    public function getUser()
    {
        return $this->_user;
    }

    /**
     * Width of video control.
     * This attribute is required.
     * @param string $width Width of video.
     * @return \Catharsis\Web\VkontakteVideoWidget
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
            || empty($this->getUser())
            || empty($this->getHash())
            || empty($this->getWidth())
            || empty($this->getHeight())
        ) {
            return '';
        }

        $hd = $this->getHd() ? 1 : 0;

        return self::htmlTag(
            'iframe',
            array(
                'allowfullscreen' => true,
                'frameborder' => 0,
                'height' => $this->getHeight(),
                'mozallowfullscreen' => true,
                'src' => "http://vk.com/video_ext.php?oid={$this->getUser()}&id={$this->getId()}&hash={$this->getHash()}&hd={$hd}",
                'webkitallowfullscreen' => true,
                'width' => $this->getWidth()
            )
        );
    }
}

?>
