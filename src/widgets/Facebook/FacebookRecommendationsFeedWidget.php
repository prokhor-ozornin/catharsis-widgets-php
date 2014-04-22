<?php
namespace Catharsis\Web;

/**
 * Renders Facebook Recommendations Feed.
 * Requires Facebook JavaScript initialization to be performed first.
 * @link https://developers.facebook.com/docs/plugins/recommendations
 */
class FacebookRecommendationsFeedWidget extends HtmlWidgetBase
{
  private $actions = array();
  private $app_id;
  private $color_scheme;
  private $domain;
  private $header;
  private $height;
  private $link_target;
  private $max_age;
  private $track_label;
  private $width;

  /**
   * Collection of Open Graph action types to show in the feed.
   * @param array $actions Collection of Facebook action types.
   * @return \Catharsis\Web\FacebookRecommendationsFeedWidget Reference to the current widget.
   */
  public function actions($actions)
  {
    $this->actions = (array) $actions;
    return $this;
  }

  /**
   * Display all actions associated with this app ID. This is usually inferred from the app ID you use to initiate the JavaScript SDK.
   * @param string $app_id Facebook Application ID.
   * @return \Catharsis\Web\FacebookRecommendationsFeedWidget Reference to the current widget.
   */
  public function app_id($app_id)
  {
    $this->app_id = (string) $app_id;
    return $this;
  }

  /**
   * The color scheme used by the widget.
   * @param string $color_scheme Color scheme of widget.
   * @return \Catharsis\Web\FacebookRecommendationsFeedWidget Reference to the current widget.
   */
  public function color_scheme($color_scheme)
  {
    $this->color_scheme = (string) $color_scheme;
    return $this;
  }

  /**
   * The domain for which to show activity. Default is current domain.
   * @param string $domain Site domain.
   * @return \Catharsis\Web\FacebookRecommendationsFeedWidget Reference to the current widget.
   */
  public function domain($domain)
  {
    $this->domain = (string) $domain;
    return $this;
  }

  /**
   * Whether to show the "Recent Activity" header above the feed or not. Default is TRUE.
   * @param boolean $header TRUE to show header, FALSE to hide.
   * @return \Catharsis\Web\FacebookRecommendationsFeedWidget Reference to the current widget.
   */
  public function header($header = true)
  {
    $this->header = (bool) $header;
    return $this;
  }

  /**
   * The height of the widget in pixels. Default is 300.
   * @param string $height Height of widget.
   * @return \Catharsis\Web\FacebookRecommendationsFeedWidget Reference to the current widget.
   */
  public function height($height)
  {
    $this->height = (string) $height;
    return $this;
  }

  /**
   * Determines what happens when people click on the links in the feed. Can be any of the standard HTML target values. Default is "_blank".
   * @param string $link_target Hyperlinks HTML target attribute.
   * @return \Catharsis\Web\FacebookRecommendationsFeedWidget Reference to the current widget.
   */
  public function link_target($link_target)
  {
    $this->link_target = (string) $link_target;
    return $this;
  }

  /**
   * Limit the created time of articles that are shown in the feed. Valid values are 1-180, which represents the age in days to limit to. Default is 0 (no limit).
   * @param integer $max_age Days age limit.
   * @return \Catharsis\Web\FacebookRecommendationsFeedWidget Reference to the current widget.
   */
  public function max_age($max_age)
  {
    $this->max_age = (int) $max_age;
    return $this;
  }

  /**
   * A label for tracking referrals which must be less than 50 characters and can contain alphanumeric characters and some punctuation (currently +/=-.:_).
   * @param string $track_label Label for tracking referrals.
   * @return \Catharsis\Web\FacebookRecommendationsFeedWidget Reference to the current widget.
   */
  public function track_label($track_label)
  {
    $this->track_label = (string) $track_label;
    return $this;
  }

  /**
   * The width of the widget in pixels. Default is 300.
   * @param string $width Width of widget.
   * @return \Catharsis\Web\FacebookRecommendationsFeedWidget Reference to the current widget.
   */
  public function width($width)
  {
    $this->width = (string) $width;
    return $this;
  }

  /**
   * Returns HTML markup text of widget.
   */
  public function __toString()
  {
    return self::html_tag("div", array(
      "class" => "fb-recommendations",
      "data-action" => implode(",", $this->actions),
      "data-app-id" => $this->app_id,
      "data-colorscheme" => $this->color_scheme,
      "data-header" => $this->header,
      "data-height" => $this->height,
      "data-linktarget" => $this->link_target,
      "data-max-age" => $this->max_age,
      "data-ref" => $this->track_label,
      "data-site" => $this->domain,
      "data-width" => $this->width));
  }
}