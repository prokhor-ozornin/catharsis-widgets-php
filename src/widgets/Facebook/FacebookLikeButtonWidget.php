<?php
namespace Catharsis\Web;

/**
 * Renders Facebook "Like"/"Recommend" button.
 * Requires Facebook JavaScript initialization to be performed first.
 * @link https://developers.facebook.com/docs/plugins/like-button
 */
class FacebookLikeButtonWidget extends HtmlWidget
{
    private $_colorScheme;
    private $_faces;
    private $_kidsMode;
    private $_layout;
    private $_trackLabel;
    private $_url;
    private $_verb;
    private $_width;

    /**
     * Color scheme used by the button. Default is "light".
     * @param string $colorScheme The color scheme for the button.
     * @return \Catharsis\Web\FacebookLikeButtonWidget Reference to the current widget.
     */
    public function colorScheme($colorScheme)
    {
        $this->_colorScheme = (string) $colorScheme;
        return $this;
    }

    /**
     * Whether to display profile photos below the button (standard layout only). You must not enable this on child-directed sites. Default is FALSE.
     * @param boolean $show TRUE to display profile photos, FALSE to hide.
     * @return \Catharsis\Web\FacebookLikeButtonWidget Reference to the current widget.
     */
    public function faces($show = true)
    {
        $this->_faces = (bool) $show;
        return $this;
    }

    /**
     * If your web site or online service, or a portion of your service, is directed to children under 13 you must enable this. Default is FALSE.
     * @param boolean $enabled TRUE if site is directed to small children, FALSE otherwise.
     * @return \Catharsis\Web\FacebookLikeButtonWidget Reference to the current widget.
     */
    public function kidsMode($enabled = true)
    {
        $this->_kidsMode = (bool) $enabled;
        return $this;
    }

    /**
     * One of the different layouts that are available for the button. Default is "standard".
     * @param string $layout Button layout.
     * @return \Catharsis\Web\FacebookLikeButtonWidget Reference to the current widget.
     */
    public function layout($layout)
    {
        $this->_layout = (string) $layout;
        return $this;
    }

    /**
     * Label for tracking referrals which must be less than 50 characters and can contain alphanumeric characters and some punctuation (currently +/=-.:_).
     * @param string $label Label to track referrals.
     * @return \Catharsis\Web\FacebookLikeButtonWidget Reference to the current widget.
     */
    public function trackLabel($label)
    {
        $this->_trackLabel = (string) $label;
        return $this;
    }

    /**
     * Specifies absolute URL of the page that will be liked.
     * @param string $url URL of the page to "like".
     * @return \Catharsis\Web\FacebookLikeButtonWidget Reference to the current widget.
     */
    public function url($url)
    {
        $this->_url = (string) $url;
        return $this;
    }

    /**
     * The verb to display on the button. Default is "like".
     * @param string $verb Verb on the button.
     * @return \Catharsis\Web\FacebookLikeButtonWidget Reference to the current widget.
     */
    public function verb($verb)
    {
        $this->_verb = (string) $verb;
        return $this;
    }

    /**
     * The width of the button. The layout you choose affects the minimum and default widths you can use.
     * @param string $width Width of button.
     * @return \Catharsis\Web\FacebookLikeButtonWidget Reference to the current widget.
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
        return self::htmlTag("div", array(
            "class" => "fb-like",
            "data-action" => $this->_verb,
            "data-colorscheme" => $this->_colorScheme,
            "data-href" => $this->_url,
            "data-kid-directed-site" => $this->_kidsMode,
            "data-layout" => $this->_layout,
            "data-ref" => $this->_trackLabel,
            "data-show-faces" => $this->_faces,
            "data-width" => $this->_width
        ));
    }
}

?>
