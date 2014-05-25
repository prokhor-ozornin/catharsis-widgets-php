<?php
/**
 * FacebookSendButtonWidget class.
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
 * Renders Facebook "Send" button.
 * Requires Facebook JavaScript initialization to be performed first.
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 * @link      https://developers.facebook.com/docs/plugins/send-button
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
     * The color scheme used by the button.
     * Default is "light".
     * @param string $colorScheme Color scheme of button.
     * @return \Catharsis\Web\FacebookSendButtonWidget
     *         Reference to the current widget.
     */
    public function colorScheme($colorScheme)
    {
        $this->_colorScheme = (string) $colorScheme;
        return $this;
    }

    /**
     * The color scheme used by the button.
     * Default is "light".
     * @return string Color scheme of button.
     */
    public function getColorScheme()
    {
        return $this->_colorScheme;
    }

    /**
     * The height of the button.
     * @param string $height Height of button.
     * @return \Catharsis\Web\FacebookSendButtonWidget
     *         Reference to the current widget.
     */
    public function height($height)
    {
        $this->_height = (string) $height;
        return $this;
    }

    /**
     * The height of the button.
     * @return string Height of button.
     */
    public function getHeight()
    {
        return $this->_height;
    }

    /**
     * If your web site or online service, or a portion of your service, is directed to children under 13 you must enable this.
     * Default is FALSE.
     * @param boolean $enabled TRUE to activate kids-directed mode,
     *                         FALSE to use default mode.
     * @return \Catharsis\Web\FacebookSendButtonWidget
     *         Reference to the current widget.
     */
    public function kidsMode($enabled)
    {
        $this->_kidsMode = (bool) $enabled;
        return $this;
    }

    /**
     * If your web site or online service, or a portion of your service, is directed to children under 13 you must enable this.
     * Default is FALSE.
     * @return boolean TRUE to activate kids-directed mode,
     *                 FALSE to use default mode.
     */
    public function getKidsMode()
    {
        return $this->_kidsMode;
    }

    /**
     * A label for tracking referrals which must be less than 50 characters and can contain alphanumeric characters and some punctuation (currently +/=-.:_).
     * @param string $label Label to track referrals.
     * @return \Catharsis\Web\FacebookSendButtonWidget
     *         Reference to the current widget.
     */
    public function trackLabel($label)
    {
        $this->_trackLabel = (string) $label;
        return $this;
    }

    /**
     * A label for tracking referrals which must be less than 50 characters and can contain alphanumeric characters and some punctuation (currently +/=-.:_).
     * @return string Label to track referrals.
     */
    public function getTrackLabel()
    {
        return $this->_trackLabel;
    }

    /**
     * The absolute URL of the page that will be sent.
     * Default is current page URL.
     * @param string $url URL of the page to send.
     * @return \Catharsis\Web\FacebookSendButtonWidget
     *         Reference to the current widget.
     */
    public function url($url)
    {
        $this->_url = (string) $url;
        return $this;
    }

    /**
     * The absolute URL of the page that will be sent.
     * Default is current page URL.
     * @return string URL of the page to send.
     */
    public function getUrl()
    {
        return $this->_url;
    }

    /**
     * The width of the button.
     * @param string $width Width of button.
     * @return \Catharsis\Web\FacebookSendButtonWidget
     *         Reference to the current widget.
     */
    public function width($width)
    {
        $this->_width = (string) $width;
        return $this;
    }

    /**
     * The width of the button.
     * @return string Width of button.
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
        return self::htmlTag(
            'div',
            array(
                'class' => 'fb-send',
                'data-colorscheme' => $this->getColorScheme(),
                'data-height' => $this->getHeight(),
                'data-href' => $this->getUrl(),
                'data-kid-directed-site' => $this->getKidsMode(),
                'data-ref' => $this->getTrackLabel(),
                'data-width' => $this->getWidth()
            )
        );
    }
}

?>
