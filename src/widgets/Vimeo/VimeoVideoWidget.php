<?php
namespace Catharsis\Web;

/**
 * Renders embedded Vimeo video on web page.
 */
class VimeoVideoWidget extends HtmlWidget
{
    private $_autoPlay = false;
    private $_height;
    private $_id;
    private $_loop = false;
    private $_width;

    /**
     * Whether to start playing video automatically. Default is FALSE.
     * @param boolean $enabled TRUE to enable autoplay, FALSE to disable.
     * @return \Catharsis\Web\VimeoVideoWidget Reference to the current widget.
     */
    public function autoPlay($enabled = true)
    {
        $this->_autoPlay = (bool) $enabled;
        return $this;
    }

    /**
     * Height of video control.
     * This attribute is required.
     * @param string $height Height of video.
     * @return \Catharsis\Web\VimeoVideoWidget Reference to the current widget.
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
     * @return \Catharsis\Web\VimeoVideoWidget Reference to the current widget.
     */
    public function id($id)
    {
        $this->_id = (string) $id;
        return $this;
    }

    /**
     * Whether to replay video when it finishes. Default is FALSE.
     * @param boolean $enabled TRUE to enable looping, FALSE to disable.
     * @return \Catharsis\Web\VimeoVideoWidget Reference to the current widget.
     */
    public function loop($enabled = true)
    {
        $this->_loop = (bool) $enabled;
        return $this;
    }

    /**
     * Width of video control.
     * This attribute is required.
     * @param string $width Width of video.
     * @return \Catharsis\Web\VimeoVideoWidget Reference to the current widget.
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

        $auto_play = $this->_autoPlay ? "&autoplay=1" : "";
        $loop = $this->_loop ? "&loop=1" : "";

        return self::htmlTag("iframe", array(
            "allowfullscreen" => true,
            "frameborder" => 0,
            "height" => $this->_height,
            "mozallowfullscreen" => true,
            "src" => "https://player.vimeo.com/video/{$this->_id}?badge=0{$auto_play}{$loop}",
            "webkitallowfullscreen" => true,
            "width" => $this->_width
        ));
    }
}

?>
