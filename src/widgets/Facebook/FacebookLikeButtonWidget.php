<?php
/**
 * FacebookLikeButtonWidget class.
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
 * Renders Facebook "Like"/"Recommend" button.
 * Requires Facebook JavaScript initialization to be performed first.
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 * @link      https://developers.facebook.com/docs/plugins/like-button
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
     * Color scheme used by the button.
     * Default is "light".
     * @param string $colorScheme The color scheme for the button.
     * @return \Catharsis\Web\FacebookLikeButtonWidget
     *         Reference to the current widget.
     */
    public function colorScheme($colorScheme)
    {
        $this->_colorScheme = (string) $colorScheme;
        return $this;
    }

    /**
     * Color scheme used by the button.
     * Default is "light".
     * @return string The color scheme for the button.
     */
    public function getColorScheme()
    {
        return $this->_colorScheme;
    }

    /**
     * Whether to display profile photos below the button (standard layout only).
     * You must not enable this on child-directed sites.
     * Default is FALSE.
     * @param boolean $show TRUE to display profile photos, FALSE to hide.
     * @return \Catharsis\Web\FacebookLikeButtonWidget
     *         Reference to the current widget.
     */
    public function faces($show)
    {
        $this->_faces = (bool) $show;
        return $this;
    }

    /**
     * Whether to display profile photos below the button (standard layout only).
     * You must not enable this on child-directed sites.
     * Default is FALSE.
     * @return boolean TRUE to display profile photos, FALSE to hide.
     */
    public function getFaces()
    {
        return $this->_faces;
    }

    /**
     * If your web site or online service, or a portion of your service, is directed to children under 13 you must enable this.
     * Default is FALSE.
     * @param boolean $enabled TRUE if site is directed to small children, FALSE otherwise.
     * @return \Catharsis\Web\FacebookLikeButtonWidget
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
     * @return boolean TRUE if site is directed to small children, FALSE otherwise.
     */
    public function getKidsMode()
    {
        return $this->_kidsMode;
    }

    /**
     * One of the different layouts that are available for the button.
     * Default is "standard".
     * @param string $layout Button layout.
     * @return \Catharsis\Web\FacebookLikeButtonWidget
     *         Reference to the current widget.
     */
    public function layout($layout)
    {
        $this->_layout = (string) $layout;
        return $this;
    }

    /**
     * One of the different layouts that are available for the button.
     * Default is "standard".
     * @return string Button layout.
     */
    public function getLayout()
    {
        return $this->_layout;
    }

    /**
     * Label for tracking referrals which must be less than 50 characters and can contain alphanumeric characters and some punctuation (currently +/=-.:_).
     * @param string $label Label to track referrals.
     * @return \Catharsis\Web\FacebookLikeButtonWidget
     *         Reference to the current widget.
     */
    public function trackLabel($label)
    {
        $this->_trackLabel = (string) $label;
        return $this;
    }

    /**
     * Label for tracking referrals which must be less than 50 characters and can contain alphanumeric characters and some punctuation (currently +/=-.:_).
     * @return string Label to track referrals.
     */
    public function getTrackLabel()
    {
        return $this->_trackLabel;
    }

    /**
     * Specifies absolute URL of the page that will be liked.
     * @param string $url URL of the page to "like".
     * @return \Catharsis\Web\FacebookLikeButtonWidget
     *         Reference to the current widget.
     */
    public function url($url)
    {
        $this->_url = (string) $url;
        return $this;
    }

    /**
     * Specifies absolute URL of the page that will be liked.
     * @return string URL of the page to "like".
     */
    public function getUrl()
    {
        return $this->_url;
    }

    /**
     * The verb to display on the button.
     * Default is "like".
     * @param string $verb Verb on the button.
     * @return \Catharsis\Web\FacebookLikeButtonWidget
     *         Reference to the current widget.
     */
    public function verb($verb)
    {
        $this->_verb = (string) $verb;
        return $this;
    }

    /**
     * The verb to display on the button.
     * Default is "like".
     * @return string Verb on the button.
     */
    public function getVerb()
    {
        return $this->_verb;
    }

    /**
     * The width of the button.
     * The layout you choose affects the minimum and default widths you can use.
     * @param string $width Width of button.
     * @return \Catharsis\Web\FacebookLikeButtonWidget
     *         Reference to the current widget.
     */
    public function width($width)
    {
        $this->_width = (string) $width;
        return $this;
    }

    /**
     * The width of the button.
     * The layout you choose affects the minimum and default widths you can use.
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
                'class' => 'fb-like',
                'data-action' => $this->getVerb(),
                'data-colorscheme' => $this->getColorScheme(),
                'data-href' => $this->getUrl(),
                'data-kid-directed-site' => $this->getKidsMode(),
                'data-layout' => $this->getLayout(),
                'data-ref' => $this->getTrackLabel(),
                'data-show-faces' => $this->getFaces(),
                'data-width' => $this->getWidth()
            )
        );
    }
}

?>
