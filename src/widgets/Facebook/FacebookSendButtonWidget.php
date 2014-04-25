<?php
namespace Catharsis\Web;

/*
 * Renders Facebook "Send" button.
 * Requires Facebook JavaScript initialization to be performed first.
 * @link https://developers.facebook.com/docs/plugins/send-button
 */

class FacebookSendButtonWidget extends HtmlWidget
{
    private $_colorScheme;
    private $_height;
    private $_kidsMode;
    private $_trackLabel;
    private $_url;
    private $_width;

    /**
     * The color scheme used by the button. Default is "light".
     * @param string $colorScheme Color scheme of button.
     * @return \Catharsis\Web\FacebookSendButtonWidget Reference to the current widget.
     */
    public function colorScheme($colorScheme)
    {
        $this->_colorScheme = (string) $colorScheme;
        return $this;
    }

    /**
     * The height of the button.
     * @param string $height Height of button.
     * @return \Catharsis\Web\FacebookSendButtonWidget Reference to the current widget.
     */
    public function height($height)
    {
        $this->_height = (string) $height;
        return $this;
    }

    /**
     * If your web site or online service, or a portion of your service, is directed to children under 13 you must enable this. Default is FALSE.
     * @param boolean $enabled TRUE to activate kids-directed mode, FALSE to use default mode.
     * @return \Catharsis\Web\FacebookSendButtonWidget Reference to the current widget.
     */
    public function kidsMode($enabled = true)
    {
        $this->_kidsMode = (bool) $enabled;
        return $this;
    }

    /**
     * A label for tracking referrals which must be less than 50 characters and can contain alphanumeric characters and some punctuation (currently +/=-.:_).
     * @param string $label Label to track referrals.
     * @return \Catharsis\Web\FacebookSendButtonWidget Reference to the current widget.
     */
    public function trackLabel($label)
    {
        $this->_trackLabel = (string) $label;
        return $this;
    }

    /**
     * The absolute URL of the page that will be sent. Default is current page URL.
     * @param string $url URL of the page to send.
     * @return \Catharsis\Web\FacebookSendButtonWidget Reference to the current widget.
     */
    public function url($url)
    {
        $this->_url = (string) $url;
        return $this;
    }

    /**
     * The width of the button.
     * @param string $width Width of button.
     * @return \Catharsis\Web\FacebookSendButtonWidget Reference to the current widget.
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
            "class" => "fb-send",
            "data-colorscheme" => $this->_colorScheme,
            "data-height" => $this->_height,
            "data-href" => $this->_url,
            "data-kid-directed-site" => $this->_kidsMode,
            "data-ref" => $this->_trackLabel,
            "data-width" => $this->_width));
    }
}

?>
