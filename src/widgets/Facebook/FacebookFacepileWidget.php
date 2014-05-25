<?php
/**
 * FacebookFacepileWidget class.
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
 * Renders Facebook Facepile widget.
 * Requires Facebook JavaScript initialization to be performed first.
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 * @link      https://developers.facebook.com/docs/plugins/facepile
 */
class FacebookFacepileWidget extends HtmlWidget
{
    private $_actions = array();
    private $_colorScheme;
    private $_height;
    private $_maxRows;
    private $_photoSize;
    private $_url;
    private $_width;

    /**
     * Collection of Open Graph action types.
     * @param array $actions Collection of Facebook action types.
     * @return \Catharsis\Web\FacebookFacepileWidget
     *         Reference to the current widget.
     */
    public function actions($actions)
    {
        $this->_actions = (array) $actions;
        return $this;
    }

    /**
     * Collection of Open Graph action types.
     * @return array Collection of Facebook action types.
     */
    public function getActions()
    {
        return $this->_actions;
    }

    /**
     * The color scheme used by the widget.
     * Default is "light".
     * @param string $colorScheme Color scheme of widget.
     * @return \Catharsis\Web\FacebookFacepileWidget
     *         Reference to the current widget.
     */
    public function colorScheme($colorScheme)
    {
        $this->_colorScheme = (string) $colorScheme;
        return $this;
    }

    /**
     * The color scheme used by the widget.
     * Default is "light".
     * @return string Color scheme of widget.
     */
    public function getColorScheme()
    {
        return $this->_colorScheme;
    }

    /**
     * The height of the widget in pixels.
     * @param string $height Height of widget.
     * @return \Catharsis\Web\FacebookFacepileWidget
     *         Reference to the current widget.
     */
    public function height($height)
    {
        $this->_height = (string) $height;
        return $this;
    }

    /**
     * The height of the widget in pixels.
     * @return string Height of widget.
     */
    public function getHeight()
    {
        return $this->_height;
    }

    /**
     * The maximum number of rows of faces to display.
     * Default is 1.
     * @param integer $maxRows Number of rows of faces to display.
     * @return \Catharsis\Web\FacebookFacepileWidget
     *         Reference to the current widget.
     */
    public function maxRows($maxRows)
    {
        $this->_maxRows = (int) $maxRows;
        return $this;
    }

    /**
     * The maximum number of rows of faces to display.
     * Default is 1.
     * @return integer Number of rows of faces to display.
     */
    public function getMaxRows()
    {
        return $this->_maxRows;
    }

    /**
     * Controls the size of the photos shown in the widget.
     * Default is "medium".
     * @param string $size Size of photos.
     * @return \Catharsis\Web\FacebookFacepileWidget
     *         Reference to the current widget.
     */
    public function photoSize($size)
    {
        $this->_photoSize = (string) $size;
        return $this;
    }

    /**
     * Controls the size of the photos shown in the widget.
     * Default is "medium".
     * @return string Size of photos.
     */
    public function getPhotoSize()
    {
        return $this->_photoSize;
    }

    /**
     * Display photos of the people who have liked this absolute URL.
     * Default is current page URL.
     * @param string $url Target "liked" URL.
     * @return \Catharsis\Web\FacebookFacepileWidget
     *         Reference to the current widget.
     */
    public function url($url)
    {
        $this->_url = (string) $url;
        return $this;
    }

    /**
     * Display photos of the people who have liked this absolute URL.
     * Default is current page URL.
     * @return string Target "liked" URL.
     */
    public function getUrl()
    {
        return $this->_url;
    }

    /**
     * The width of the widget in pixels.
     * Minimum is 200. Default is 300.
     * @param string $width Width of widget.
     * @return \Catharsis\Web\FacebookFacepileWidget
     *         Reference to the current widget.
     */
    public function width($width)
    {
        $this->_width = (string) $width;
        return $this;
    }

    /**
     * The width of the widget in pixels.
     * Minimum is 200. Default is 300.
     * @return string Width of widget.
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
                'class' => 'fb-facepile',
                'data-action' => implode(',', $this->getActions()),
                'data-colorscheme' => $this->getColorScheme(),
                'data-height' => $this->getHeight(),
                'data-href' => empty($this->getUrl())
                    ? $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']
                    : $this->getUrl(),
                'data-max-rows' => $this->getMaxRows(),
                'data-size' => $this->getPhotoSize(),
                'data-width' => $this->getWidth()
            )
        );
    }
}

?>
