<?php
/**
 * FacebookRecommendationsFeedWidget class.
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
 * Renders Facebook Recommendations Feed.
 * Requires Facebook JavaScript initialization to be performed first.
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 * @link      https://developers.facebook.com/docs/plugins/recommendations
 */
class FacebookRecommendationsFeedWidget extends HtmlWidget
{
    private $_actions = array();
    private $_appId;
    private $_colorScheme;
    private $_domain;
    private $_header;
    private $_height;
    private $_linkTarget;
    private $_maxAge;
    private $_trackLabel;
    private $_width;

    /**
     * Collection of Open Graph action types to show in the feed.
     * @param array $actions Collection of Facebook action types.
     * @return \Catharsis\Web\FacebookRecommendationsFeedWidget
     *         Reference to the current widget.
     */
    public function actions($actions)
    {
        $this->_actions = (array) $actions;
        return $this;
    }

    /**
     * Collection of Open Graph action types to show in the feed.
     * @return array Collection of Facebook action types.
     */
    public function getActions()
    {
        return $this->_actions;
    }

    /**
     * Display all actions associated with this app ID.
     * This is usually inferred from the app ID you use to initiate the JavaScript SDK.
     * @param string $appId Facebook Application ID.
     * @return \Catharsis\Web\FacebookRecommendationsFeedWidget
     *         Reference to the current widget.
     */
    public function appId($appId)
    {
        $this->_appId = (string) $appId;
        return $this;
    }

    /**
     * Display all actions associated with this app ID.
     * This is usually inferred from the app ID you use to initiate the JavaScript SDK.
     * @return string Facebook Application ID.
     */
    public function getAppId()
    {
        return $this->_appId;
    }

    /**
     * The color scheme used by the widget.
     * @param string $colorScheme Color scheme of widget.
     * @return \Catharsis\Web\FacebookRecommendationsFeedWidget
     *         Reference to the current widget.
     */
    public function colorScheme($colorScheme)
    {
        $this->_colorScheme = (string) $colorScheme;
        return $this;
    }

    /**
     * The color scheme used by the widget.
     * @return string Color scheme of widget.
     */
    public function getColorScheme()
    {
        return $this->_colorScheme;
    }

    /**
     * The domain for which to show activity.
     * Default is current domain.
     * @param string $domain Site domain.
     * @return \Catharsis\Web\FacebookRecommendationsFeedWidget
     *         Reference to the current widget.
     */
    public function domain($domain)
    {
        $this->_domain = (string) $domain;
        return $this;
    }

    /**
     * The domain for which to show activity.
     * Default is current domain.
     * @return string Site domain.
     */
    public function getDomain()
    {
        return $this->_domain;
    }

    /**
     * Whether to show the "Recent Activity" header above the feed or not.
     * Default is TRUE.
     * @param boolean $show TRUE to show header, FALSE to hide.
     * @return \Catharsis\Web\FacebookRecommendationsFeedWidget
     *         Reference to the current widget.
     */
    public function header($show)
    {
        $this->_header = (bool) $show;
        return $this;
    }

    /**
     * Whether to show the "Recent Activity" header above the feed or not.
     * Default is TRUE.
     * @return boolean TRUE to show header, FALSE to hide.
     */
    public function getHeader()
    {
        return $this->_header;
    }

    /**
     * The height of the widget in pixels.
     * Default is 300.
     * @param string $height Height of widget.
     * @return \Catharsis\Web\FacebookRecommendationsFeedWidget
     *         Reference to the current widget.
     */
    public function height($height)
    {
        $this->_height = (string) $height;
        return $this;
    }

    /**
     * The height of the widget in pixels.
     * Default is 300.
     * @return string Height of widget.
     */
    public function getHeight()
    {
        return $this->_height;
    }

    /**
     * Determines what happens when people click on the links in the feed.
     * Can be any of the standard HTML target values.
     * Default is "_blank".
     * @param string $target Hyperlinks HTML target attribute.
     * @return \Catharsis\Web\FacebookRecommendationsFeedWidget
     *         Reference to the current widget.
     */
    public function linkTarget($target)
    {
        $this->_linkTarget = (string) $target;
        return $this;
    }

    /**
     * Determines what happens when people click on the links in the feed.
     * Can be any of the standard HTML target values.
     * Default is "_blank".
     * @return string Hyperlinks HTML target attribute.
     */
    public function getLinkTarget()
    {
        return $this->_linkTarget;
    }

    /**
     * Limit the created time of articles that are shown in the feed.
     * Valid values are 1-180, which represents the age in days to limit to.
     * Default is 0 (no limit).
     * @param integer $maxAge Days age limit.
     * @return \Catharsis\Web\FacebookRecommendationsFeedWidget
     *         Reference to the current widget.
     */
    public function maxAge($maxAge)
    {
        $this->_maxAge = (int) $maxAge;
        return $this;
    }

    /**
     * Limit the created time of articles that are shown in the feed.
     * Valid values are 1-180, which represents the age in days to limit to.
     * Default is 0 (no limit).
     * @return integer Days age limit.
     */
    public function getMaxAge()
    {
        return $this->_maxAge;
    }

    /**
     * A label for tracking referrals which must be less than 50 characters and can contain alphanumeric characters and some punctuation (currently +/=-.:_).
     * @param string $label Label for tracking referrals.
     * @return \Catharsis\Web\FacebookRecommendationsFeedWidget
     *         Reference to the current widget.
     */
    public function trackLabel($label)
    {
        $this->_trackLabel = (string) $label;
        return $this;
    }

    /**
     * A label for tracking referrals which must be less than 50 characters and can contain alphanumeric characters and some punctuation (currently +/=-.:_).
     * @return string Label for tracking referrals.
     */
    public function getTrackLabel()
    {
        return $this->_trackLabel;
    }

    /**
     * The width of the widget in pixels.
     * Default is 300.
     * @param string $width Width of widget.
     * @return \Catharsis\Web\FacebookRecommendationsFeedWidget
     *         Reference to the current widget.
     */
    public function width($width)
    {
        $this->_width = (string) $width;
        return $this;
    }

    /**
     * The width of the widget in pixels.
     * Default is 300.
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
                'class' => 'fb-recommendations',
                'data-action' => implode(',', $this->getActions()),
                'data-app-id' => $this->getAppId(),
                'data-colorscheme' => $this->getColorScheme(),
                'data-header' => $this->getHeader(),
                'data-height' => $this->getHeight(),
                'data-linktarget' => $this->getLinkTarget(),
                'data-max-age' => $this->getMaxAge(),
                'data-ref' => $this->getTrackLabel(),
                'data-site' => $this->getDomain(),
                'data-width' => $this->getWidth()
            )
        );
    }
}

?>
