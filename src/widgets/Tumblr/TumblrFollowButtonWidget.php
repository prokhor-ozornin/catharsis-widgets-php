<?php
namespace Catharsis\Web;

/**
 * Renders Tumblr "Follow" button.
 * Requires {@link WidgetsScripts::tumblr_share} script to be included.
 * @link http://www.tumblr.com/buttons
 */
class TumblrFollowButtonWidget extends HtmlWidget
{
    private $_account;
    private $_colorScheme = TumblrFollowButtonColorScheme::Light;
    private $_type = TumblrFollowButtonType::First;

    /**
     * Name of Tumblr account (blog).
     * This attribute is required.
     * @param string $account Name of blog.
     * @return \Catharsis\Web\TumblrFollowButtonWidget Reference to the current widget.
     */
    public function account($account)
    {
        $this->_account = (string) $account;
        return $this;
    }

    /**
     * Visual color scheme of button.
     * @param string $colorScheme Color scheme for button.
     * @return \Catharsis\Web\TumblrFollowButtonWidget Reference to the current widget.
     */
    public function colorScheme($colorScheme)
    {
        $this->_colorScheme = (string) $colorScheme;
        return $this;
    }

    /**
     * Visual layout/appearance of button.
     * @param string $type Layout of button.
     * @return \Catharsis\Web\TumblrFollowButtonWidget Reference to the current widget.
     */
    public function type($type)
    {
        $this->_type = (string) $type;
        return $this;
    }

    /**
     * Returns HTML markup text of widget.
     */
    public function __toString()
    {
        if (empty($this->_account)) {
            return "";
        }

        $width = 189;
        switch ($this->_type) {
            case TumblrFollowButtonType::Second :
                $width = 113;
                break;

            case TumblrFollowButtonType::Third :
                $width = 18;
                break;
        }

        return self::htmlTag("iframe", array(
            "allowtransparency" => true,
            "border" => 0,
            "class" => "btn",
            "frameborder" => 0,
            "height" => 25,
            "scrolling" => "no",
            "src" => "http://platform.tumblr.com/v1/follow_button.html?button_type={$this->_type}&tumblelog={$this->_account}&color_scheme={$this->_colorScheme}",
            "width" => $width
        ));
    }
}

?>
