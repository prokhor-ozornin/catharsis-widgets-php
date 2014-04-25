<?php
namespace Catharsis\Web;

/**
 * Renders Facebook "Follow" button.
 * Requires Facebook JavaScript initialization to be performed first.
 * @link https://developers.facebook.com/docs/plugins/follow-button
 */
class FacebookFollowButtonWidget extends HtmlWidget
{
    private $_colorScheme;
    private $_faces;
    private $_height;
    private $_kidsMode;
    private $_layout;
    private $_url;
    private $_width;

    /**
     * The color scheme used by the button. Default is "light".
     * @param string $colorScheme Color scheme of button.
     * @return \Catharsis\Web\FacebookFollowButtonWidget Reference to the current widget.
     */
    public function colorScheme($colorScheme)
    {
        $this->_colorScheme = (string) $colorScheme;
        return $this;
    }

    /**
     * Specifies whether to display profile photos below the button (standard layout only). You must not enable this on child-directed sites.
     * @param boolean $show TRUE to show profiles photos, FALSE to hide.
     * @return \Catharsis\Web\FacebookFollowButtonWidget Reference to the current widget.
     */
    public function faces($show = true)
    {
        $this->_faces = (bool) $show;
        return $this;
    }

    /**
     * The height of the button.
     * @param string $height Height of button.
     * @return \Catharsis\Web\FacebookFollowButtonWidget Reference to the current widget.
     */
    public function height($height)
    {
        $this->_height = (string) $height;
        return $this;
    }

    /**
     * If your web site or online service, or a portion of your service, is directed to children under 13 you must enable this. Default is FALSE.
     * @param boolean $enabled TRUE to activate kids-directed mode, FALSE to use default mode.
     * @return \Catharsis\Web\FacebookFollowButtonWidget Reference to the current widget.
     */
    public function kidsMode($enabled = true)
    {
        $this->_kidsMode = (bool) $enabled;
        return $this;
    }

    /**
     * Selects one of the different layouts that are available for the button. Default is "standard".
     * @param string $layout Layout of button.
     * @return \Catharsis\Web\FacebookFollowButtonWidget Reference to the current widget.
     */
    public function layout($layout)
    {
        $this->_layout = (string) $layout;
        return $this;
    }

    /**
     * The Facebook.com profile URL of the user to follow.
     * This attribute is required.
     * @param string $url Profile URL.
     * @return \Catharsis\Web\FacebookFollowButtonWidget Reference to the current widget.
     */
    public function url($url)
    {
        $this->_url = (string) $url;
        return $this;
    }

    /**
     * The width of the button. The layout you choose affects the minimum and default widths you can use.
     * @param string $width Width of button.
     * @return \Catharsis\Web\FacebookFollowButtonWidget Reference to the current widget.
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
        if (empty($this->_url)) {
            return "";
        }

        return self::htmlTag("div", array(
            "class" => "fb-follow",
            "data-colorscheme" => $this->_colorScheme,
            "data-height" => $this->_height,
            "data-href" => $this->_url,
            "data-kid-directed-site" => $this->_kidsMode,
            "data-layout" => $this->_layout,
            "data-show-faces" => $this->_faces,
            "data-width" => $this->_width
        ));
    }
}

?>
