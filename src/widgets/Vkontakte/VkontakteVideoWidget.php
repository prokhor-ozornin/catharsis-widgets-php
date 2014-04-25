<?php
namespace Catharsis\Web;

/**
 * Renders embedded VKontakte video on web page.
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
     * @return \Catharsis\Web\VkontakteVideoWidget Reference to the current widget.
     */
    public function hash($hash)
    {
        $this->_hash = (string) $hash;
        return $this;
    }

    /**
     * Whether to play video in High Definition format. Default is FALSE.
     * @param boolean $enabled TRUE to use HD quality format, FALSE to use standard quality.
     * @return \Catharsis\Web\VkontakteVideoWidget Reference to the current widget.
     */
    public function hd($enabled = true)
    {
        $this->_hd = (bool) $enabled;
        return $this;
    }

    /**
     * Height of video control.
     * This attribute is required.
     * @param string $height Height of video.
     * @return \Catharsis\Web\VkontakteVideoWidget Reference to the current widget.
     */
    public function height($height)
    {
        $this->_height = (string) $height;
        return $this;
    }

    /**
     * Identifier of video.
     * This attribute is required.
     * @param string $id Identifier of video.
     * @return \Catharsis\Web\VkontakteVideoWidget Reference to the current widget.
     */
    public function id($id)
    {
        $this->_id = (string) $id;
        return $this;
    }

    /**
     * Account identifier of video's uploader.
     * This attribute is required.
     * @param string $user User's account.
     * @return \Catharsis\Web\VkontakteVideoWidget Reference to the current widget.
     */
    public function user($user)
    {
        $this->_user = (string) $user;
        return $this;
    }

    /**
     * Width of video control.
     * This attribute is required.
     * @param string $width Width of video.
     * @return \Catharsis\Web\VkontakteVideoWidget Reference to the current widget.
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
        if (empty($this->_id) || empty($this->_user) || empty($this->_hash) || empty($this->_width)
            || empty($this->_height)) {
            return "";
        }

        $hd = $this->_hd ? 1 : 0;

        return self::htmlTag("iframe", array(
            "allowfullscreen" => true,
            "frameborder" => 0,
            "height" => $this->_height,
            "mozallowfullscreen" => true,
            "src" => "http://vk.com/video_ext.php?oid={$this->_user}&id={$this->_id}&hash={$this->_hash}&hd={$hd}",
            "webkitallowfullscreen" => true,
            "width" => $this->_width));
    }
}

?>
