<?php
namespace Catharsis\Web;

/**
 * Renders SoundCloud user's profile icon.
 * @link https://soundcloud.com/pages/embed
 */
class SoundCloudProfileIconWidget extends HtmlWidget
{
    private $_account;
    private $_color = "orange_white";
    private $_size = SoundCloudProfileIconSize::Size32;

    /**
     * SoundCloud user's account name.
     * @param string $account Account name.
     * @return \Catharsis\Web\SoundCloudProfileIconWidget Reference to the current widget.
     */
    public function account($account)
    {
        $this->_account = (string) $account;
        return $this;
    }

    /**
     * Sets color of profile icon to black-and-white pattern.
     * @return \Catharsis\Web\SoundCloudProfileIconWidget Reference to the current widget.
     */
    public function blackWhite()
    {
        return $this->color("black_white");
    }

    /**
     * Color of profile icon.
     * @param string $color Icon's color.
     * @return \Catharsis\Web\SoundCloudProfileIconWidget Reference to the current widget.
     */
    public function color($color)
    {
        $this->_color = (string) $color;
        return $this;
    }

    /**
     * Sets color of profile icon to transparent-orange pattern.
     * @return \Catharsis\Web\SoundCloudProfileIconWidget Reference to the current widget.
     */
    public function orangeTransparent()
    {
        return $this->color("orange_transparent");
    }

    /**
     * Sets color of profile icon to orange-and-white pattern.
     * @return \Catharsis\Web\SoundCloudProfileIconWidget Reference to the current widget.
     */
    public function orangeWhite()
    {
        return $this->color("orange_white");
    }

    /**
     * Edge size of profile icon in pixels.
     * @param integer $size Icon's size.
     * @return \Catharsis\Web\SoundCloudProfileIconWidget Reference to the current widget.
     */
    public function size($size)
    {
        $this->_size = (int) $size;
        return $this;
    }

    /**
     * Sets color of profile icon to white-and-orange pattern.
     * @return \Catharsis\Web\SoundCloudProfileIconWidget Reference to the current widget.
     */
    public function whiteOrange()
    {
        return $this->color("white_orange");
    }

    /**
     * Sets color of profile icon to transparent-white pattern.
     * @return \Catharsis\Web\SoundCloudProfileIconWidget Reference to the current widget.
     */
    public function whiteTransparent()
    {
        return $this->color("white_transparent");
    }

    /**
     * Returns HTML markup text of widget.
     */
    public function __toString()
    {
        if (empty($this->_account)) {
            return "";
        }

        $url = "http://soundcloud.com/{$this->_account}&color={$this->_color}&size={$this->_size}";

        return self::htmlTag("iframe", array(
            "allowtransparency" => true,
            "frameborder" => 0,
            "scrolling" => "no",
            "src" => "https://w.soundcloud.com/icon/?url={$url}",
            "style" => "width: {$this->_size}px; height: {$this->_size}px;"
        ));
    }
}

?>
