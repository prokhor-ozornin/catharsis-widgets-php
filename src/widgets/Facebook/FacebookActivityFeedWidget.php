<?php
namespace Catharsis\Web;

/**
 * Renders Facebook Activity Feed.
 * Requires Facebook JavaScript initialization to be performed first.
 * @link https://developers.facebook.com/docs/plugins/activity
 */
class FacebookActivityFeedWidget extends HtmlWidget
{
    private $_actions = array();
    private $_appId;
    private $_colorScheme;
    private $_domain;
    private $_header;
    private $_height;
    private $_linkTarget;
    private $_maxAge;
    private $_recommendations;
    private $_trackLabel;
    private $_width;

    /**
     * Collection of Open Graph action types to show in the feed.
     * @param array $actions Collection of Facebook action types.
     * @return \Catharsis\Web\FacebookActivityFeedWidget Reference to the current widget.
     */
    public function actions($actions)
    {
        $this->_actions = (array) $actions;
        return $this;
    }

    /**
     * Display all actions associated with this app ID. This is usually inferred from the app ID you use to initiate the JavaScript SDK.
     * @param string $appId Facebook Application ID.
     * @return \Catharsis\Web\FacebookActivityFeedWidget Reference to the current widget.
     */
    public function appId($appId)
    {
        $this->_appId = (string) $appId;
        return $this;
    }

    /**
     * The color scheme used by the widget.
     * @param string $colorScheme Color scheme of widget.
     * @return \Catharsis\Web\FacebookActivityFeedWidget Reference to the current widget.
     */
    public function colorScheme($colorScheme)
    {
        $this->_colorScheme = (string) $colorScheme;
        return $this;
    }

    /**
     * The domain for which to show activity. Default is current domain.
     * @param string $domain Site domain.
     * @return \Catharsis\Web\FacebookActivityFeedWidget Reference to the current widget.
     */
    public function domain($domain)
    {
        $this->_domain = (string) $domain;
        return $this;
    }

    /**
     * Whether to show the "Recent Activity" header above the feed or not. Default is TRUE.
     * @param boolean $show TRUE to show header, FALSE to hide.
     * @return \Catharsis\Web\FacebookActivityFeedWidget Reference to the current widget.
     */
    public function header($show = true)
    {
        $this->_header = (bool) $show;
        return $this;
    }

    /**
     * The height of the widget in pixels. Default is 300.
     * @param string $height Height of widget.
     * @return \Catharsis\Web\FacebookActivityFeedWidget Reference to the current widget.
     */
    public function height($height)
    {
        $this->_height = (string) $height;
        return $this;
    }

    /**
     * Determines what happens when people click on the links in the feed. Can be any of the standard HTML target values. Default is "_blank".
     * @param string $target Hyperlinks HTML target attribute.
     * @return \Catharsis\Web\FacebookActivityFeedWidget Reference to the current widget.
     */
    public function linkTarget($target)
    {
        $this->_linkTarget = (string) $target;
        return $this;
    }

    /**
     * Limit the created time of articles that are shown in the feed. Valid values are 1-180, which represents the age in days to limit to. Default is 0 (no limit).
     * @param integer $maxAge Days age limit.
     * @return \Catharsis\Web\FacebookActivityFeedWidget Reference to the current widget.
     */
    public function maxAge($maxAge)
    {
        $this->_maxAge = (int) $maxAge;
        return $this;
    }

    /**
     * Specifies whether to always show recommendations (Articles liked by a high amount of people) in the bottom half of the feed. Default is FALSE.
     * @param boolean $show TRUE to show recommendations, FALSE to hide.
     * @return \Catharsis\Web\FacebookActivityFeedWidget Reference to the current widget.
     */
    public function recommendations($show = true)
    {
        $this->_recommendations = (bool) $show;
        return $this;
    }

    /**
     * A label for tracking referrals which must be less than 50 characters and can contain alphanumeric characters and some punctuation (currently +/=-.:_).
     * @param string $label Label for tracking referrals.
     * @return \Catharsis\Web\FacebookActivityFeedWidget Reference to the current widget.
     */
    public function trackLabel($label)
    {
        $this->_trackLabel = (string) $label;
        return $this;
    }

    /**
     * The width of the widget in pixels. Default is 300.
     * @param string $width Width of widget.
     * @return \Catharsis\Web\FacebookActivityFeedWidget Reference to the current widget.
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
            "class" => "fb-activity",
            "data-action" => implode(",", $this->_actions),
            "data-app-id" => $this->_appId,
            "data-colorscheme" => $this->_colorScheme,
            "data-header" => $this->_header,
            "data-height" => $this->_height,
            "data-linktarget" => $this->_linkTarget,
            "data-max-age" => $this->_maxAge,
            "data-recommendations" => $this->_recommendations,
            "data-ref" => $this->_trackLabel,
            "data-site" => $this->_domain,
            "data-width" => $this->_width
        ));
    }
}

?>
