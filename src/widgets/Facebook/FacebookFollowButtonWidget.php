<?php
/**
 * FacebookFollowButtonWidget class.
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
 * Renders Facebook "Follow" button.
 * Requires Facebook JavaScript initialization to be performed first.
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 * @link      https://developers.facebook.com/docs/plugins/follow-button
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
     * The color scheme used by the button.
     * Default is "light".
     * @param string $colorScheme Color scheme of button.
     * @return \Catharsis\Web\FacebookFollowButtonWidget
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
     * Specifies whether to display profile photos below the button (standard layout only).
     * You must not enable this on child-directed sites.
     * @param boolean $show TRUE to show profiles photos, FALSE to hide.
     * @return \Catharsis\Web\FacebookFollowButtonWidget
     *         Reference to the current widget.
     */
    public function faces($show)
    {
        $this->_faces = (bool) $show;
        return $this;
    }

    /**
     * Specifies whether to display profile photos below the button (standard layout only).
     * You must not enable this on child-directed sites.
     * @return boolean TRUE to show profiles photos, FALSE to hide.
     */
    public function getFaces()
    {
        return $this->_faces;
    }

    /**
     * The height of the button.
     * @param string $height Height of button.
     * @return \Catharsis\Web\FacebookFollowButtonWidget
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
     * @param boolean $enabled TRUE to activate kids-directed mode, FALSE to use default mode.
     * @return \Catharsis\Web\FacebookFollowButtonWidget
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
     * @return boolean TRUE to activate kids-directed mode, FALSE to use default mode.
     */
    public function getKidsMode()
    {
        return $this->_kidsMode;
    }

    /**
     * Selects one of the different layouts that are available for the button.
     * Default is "standard".
     * @param string $layout Layout of button.
     * @return \Catharsis\Web\FacebookFollowButtonWidget
     *         Reference to the current widget.
     */
    public function layout($layout)
    {
        $this->_layout = (string) $layout;
        return $this;
    }

    /**
     * Selects one of the different layouts that are available for the button.
     * Default is "standard".
     * @return string Layout of button.
     */
    public function getLayout()
    {
        return $this->_layout;
    }

    /**
     * The Facebook.com profile URL of the user to follow.
     * This attribute is required.
     * @param string $url Profile URL.
     * @return \Catharsis\Web\FacebookFollowButtonWidget
     *         Reference to the current widget.
     */
    public function url($url)
    {
        $this->_url = (string) $url;
        return $this;
    }

    /**
     * The Facebook.com profile URL of the user to follow.
     * @return string Profile URL.
     */
    public function getUrl()
    {
        return $this->_url;
    }

    /**
     * The width of the button.
     * The layout you choose affects the minimum and default widths you can use.
     * @param string $width Width of button.
     * @return \Catharsis\Web\FacebookFollowButtonWidget
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
        if (empty($this->getUrl())) {
            return '';
        }

        return self::htmlTag(
            'div',
            array(
                'class' => 'fb-follow',
                'data-colorscheme' => $this->getColorScheme(),
                'data-height' => $this->getHeight(),
                'data-href' => $this->getUrl(),
                'data-kid-directed-site' => $this->getKidsMode(),
                'data-layout' => $this->getLayout(),
                'data-show-faces' => $this->getFaces(),
                'data-width' => $this->getWidth()
            )
        );
    }
}

?>
