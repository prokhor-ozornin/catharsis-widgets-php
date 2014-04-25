<?php
namespace Catharsis\Web;

/**
 * Renders embedded YouTube video on web page.
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
     * Whether to keep track of user cookies or not (default is <c>false)</c>.
     * @param boolean $enabled TRUE to set cookies, FALSE to not.
     * @return \Catharsis\Web\YouTubeVideoWidget Reference to the current widget.
     */
    public function privateMode($enabled = true)
    {
        $this->_privateMode = (bool) $enabled;
        return $this;
    }

    /**
     * Whether to access video through secure HTTPS protocol or unsecure HTTP (default is FALSE).
     * @param boolean $enabled TRUE to use HTTPS protocol, FALSE to use HTTP.
     * @return \Catharsis\Web\YouTubeVideoWidget Reference to the current widget.
     */
    public function secureMode($enabled = true)
    {
        $this->_secureMode = (bool) $enabled;
        return $this;
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
     * Returns HTML markup text of widget.
     */
    public function __toString()
    {
        if (empty($this->_id) || empty($this->_width) || empty($this->_height)) {
            return "";
        }

        $private = $this->_privateMode ? "www.youtube-nocookie.com" : "www.youtube.com";
        $secure = $this->_secureMode ? "https" : "http";

        return self::htmlTag("iframe", array(
            "allowfullscreen" => true,
            "frameborder" => 0,
            "height" => $this->_height,
            "mozallowfullscreen" => true,
            "src" => "{$secure}://{$private}/embed/{$this->_id}",
            "webkitallowfullscreen" => true,
            "width" => $this->_width));
    }
}

?>
