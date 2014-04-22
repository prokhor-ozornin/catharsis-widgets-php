<?php
namespace Catharsis\Web;

/**
 * Renders Facebook "Like"/"Recommend" button.
 * Requires Facebook JavaScript initialization to be performed first.
 * @link https://developers.facebook.com/docs/plugins/like-button
 */
class FacebookLikeButtonWidget extends HtmlWidgetBase
{
  private $color_scheme;
  private $faces;
  private $kids;
  private $layout;
  private $track_label;
  private $url;
  private $verb;
  private $width;

  /**
   * Color scheme used by the button. Default is "light".
   * @param string $color_scheme The color scheme for the button.
   * @return \Catharsis\Web\FacebookLikeButtonWidget Reference to the current widget.
   */
  public function color_scheme($color_scheme)
  {
    $this->color_scheme = (string) $color_scheme;
    return $this;
  }

  /**
   * Whether to display profile photos below the button (standard layout only). You must not enable this on child-directed sites. Default is FALSE.
   * @param boolean $faces TRUE to display profile photos, FALSE to hide.
   * @return \Catharsis\Web\FacebookLikeButtonWidget Reference to the current widget.
   */
  public function faces($faces = true)
  {
    $this->faces = (bool) $faces;
    return $this;
  }

  /**
   * If your web site or online service, or a portion of your service, is directed to children under 13 you must enable this. Default is FALSE.
   * @param boolean $kids TRUE if site is directed to small children, FALSE otherwise.
   * @return \Catharsis\Web\FacebookLikeButtonWidget Reference to the current widget.
   */
  public function kids($kids = true)
  {
    $this->kids = (bool) $kids;
    return $this;
  }

  /**
   * One of the different layouts that are available for the button. Default is "standard".
   * @param string $layout Button layout.
   * @return \Catharsis\Web\FacebookLikeButtonWidget Reference to the current widget.
   */
  public function layout($layout)
  {
    $this->layout = (string) $layout;
    return $this;
  }

  /**
   * Label for tracking referrals which must be less than 50 characters and can contain alphanumeric characters and some punctuation (currently +/=-.:_).
   * @param string $track_label Label to track referrals.
   * @return \Catharsis\Web\FacebookLikeButtonWidget Reference to the current widget.
   */
  public function track_label($track_label)
  {
    $this->track_label = (string) $track_label;
    return $this;
  }

  /**
   * Specifies absolute URL of the page that will be liked.
   * @param string $url URL of the page to "like".
   * @return \Catharsis\Web\FacebookLikeButtonWidget Reference to the current widget.
   */
  public function url($url)
  {
    $this->url = (string) $url;
    return $this;
  }

  /**
   * The verb to display on the button. Default is "like".
   * @param string $verb Verb on the button.
   * @return \Catharsis\Web\FacebookLikeButtonWidget Reference to the current widget.
   */
  public function verb($verb)
  {
    $this->verb = (string) $verb;
    return $this;
  }

  /**
   * The width of the button. The layout you choose affects the minimum and default widths you can use.
   * @param string $width Width of button.
   * @return \Catharsis\Web\FacebookLikeButtonWidget Reference to the current widget.
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
      "class" => "fb-like",
      "data-action" => $this->verb,
      "data-colorscheme" => $this->color_scheme,
      "data-href" => $this->url,
      "data-kid-directed-site" => $this->kids,
      "data-layout" => $this->layout,
      "data-ref" => $this->track_label,
      "data-show-faces" => $this->faces,
      "data-width" => $this->width));
  }
}