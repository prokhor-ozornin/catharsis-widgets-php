<?php
namespace Catharsis\Web;

/**
 * Renders Facebook comments widget.
 * Requires Facebook JavaScript initialization to be performed first.
 * @link https://developers.facebook.com/docs/plugins/comments
 */
class FacebookCommentsWidget extends HtmlWidgetBase
{
  private $color_scheme;
  private $mobile;
  private $order;
  private $posts;
  private $url;
  private $width;

  /**
   * The color scheme used by the widget.
   * @param string $color_scheme Color scheme of widget.
   * @return \Catharsis\Web\FacebookCommentsWidget Reference to the current widget.
   */
  public function color_scheme($color_scheme)
  {
    $this->color_scheme = (string) $color_scheme;
    return $this;
  }

  /**
   * A boolean value that specifies whether to show the mobile-optimized version or not. If not specified, auto-detection is used.
   * @param boolean $mobile TRUE to use mobile-optimized version, FALSE otherwise.
   * @return \Catharsis\Web\FacebookCommentsWidget Reference to the current widget.
   */
  public function mobile($mobile = true)
  {
    $this->mobile = (bool) $mobile;
    return $this;
  }

  /**
   * The order to use when displaying comments.
   * @param string $order Order of comments.
   * @return \Catharsis\Web\FacebookCommentsWidget Reference to the current widget.
   */
  public function order($order)
  {
    $this->order = (string) $order;
    return $this;
  }

  /**
   * The number of comments to show by default. The minimum value is 1. Default is 10.
   * @param integer $posts Number of comments to show.
   * @return \Catharsis\Web\FacebookCommentsWidget Reference to the current widget.
   */
  public function posts($posts)
  {
    $this->posts = (int) $posts;
    return $this;
  }

  /**
   * The absolute URL that comments posted in the widget will be permanently associated with. Stories on Facebook about comments posted in the plugin will link to this URL. Default is current page URL.
   * @param string $url URL of the page for comments.
   * @return \Catharsis\Web\FacebookCommentsWidget Reference to the current widget.
   */
  public function url($url)
  {
    $this->url = (string) $url;
    return $this;
  }

  /**
   * The width of the widget. The mobile version of the Comments widget ignores the width parameter, and instead has a fluid width of 100%.
   * @param string $width Width of widget.
   * @return \Catharsis\Web\FacebookCommentsWidget Reference to the current widget.
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
      "class" => "fb-comments",
      "data-colorscheme" => $this->color_scheme,
      "data-href" => $this->url,
      "data-mobile" => $this->mobile,
      "data-num-posts" => $this->posts,
      "data-order-by" => $this->order,
      "data-width" => $this->width));
  }
}