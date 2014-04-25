<?php
namespace Catharsis\Web;

/**
 * Renders Tumblr "Share" button.
 * Requires {@link WidgetsScripts::tumblr_share} scripts bundle to be included.
 * @link http://www.tumblr.com/buttons
 */
class TumblrShareButtonWidget extends HtmlWidget
{
    private $_colorScheme;
    private $_type = TumblrShareButtonType::First;

    /**
     * Visual color scheme of button.
     * @param string $colorScheme Color scheme for button.
     * @return \Catharsis\Web\TumblrShareButtonWidget Reference to the current widget.
     */
    public function colorScheme($colorScheme)
    {
        $this->_colorScheme = (string) $colorScheme;
        return $this;
    }

    /**
     * Visual layout/appearance of button.
     * @param integer $type Layout of button.
     * @return \Catharsis\Web\TumblrShareButtonWidget Reference to the current widget.
     */
    public function type($type)
    {
        $this->_type = (int) $type;
        return $this;
    }

    /**
     * Returns HTML markup text of widget.
     */
    public function __toString()
    {
        $width = 0;
        switch ($this->_type) {
            case TumblrShareButtonType::First :
                $width = 80;
                break;

            case TumblrShareButtonType::Second :
                $width = 70;
                break;

            case TumblrShareButtonType::Third :
                $width = 130;
                break;

            case TumblrShareButtonType::Forth :
                $width = 20;
                break;

            default:
                $width = 80;
                break;
        }

        $color_scheme = !empty($this->_colorScheme) && strtolower($this->_colorScheme)
            == TumblrShareButtonColorScheme::Gray ? "T" : "";

        return self::htmlTag("a", array(
            "href" => "http://www.tumblr.com/share",
            "style" => "display:inline-block; text-indent:-9999px; overflow:hidden; width:{$width}px; height:20px; background:url('http://platform.tumblr.com/v1/share_{$this->_type}{$color_scheme}.png') top left no-repeat transparent;",
            "title" => "Share on Tumblr"), "Share on Tumblr");
    }
}

?>
