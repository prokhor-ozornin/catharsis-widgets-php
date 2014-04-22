<?php
namespace Catharsis\Web;

/*
 * Renders Facebook "Send" button.
 * Requires Facebook JavaScript initialization to be performed first.
 * @link https://developers.facebook.com/docs/plugins/send-button
 */
class FacebookSendButtonWidget extends HtmlWidgetBase
{
  private $color_scheme;
  private $height;
  private $kids;
  private $track_label;
  private $url;
  private $width;

  /**
   * The color scheme used by the button. Default is "light".
   * @param string $color_scheme Color scheme of button.
   * @return \Catharsis\Web\FacebookSendButtonWidget Reference to the current widget.
   */
  public function color_scheme($color_scheme)
  {
    $this->color_scheme = (string) $color_scheme;
    return $this;
  }

  /**
   * The height of the button.
   * @param string $height Height of button.
   * @return \Catharsis\Web\FacebookSendButtonWidget Reference to the current widget.
   */
  public function height($height)
  {
    $this->height = (string) $height;
    return $this;
  }

  /**
   * If your web site or online service, or a portion of your service, is directed to children under 13 you must enable this. Default is FALSE.
   * @param boolean $kids TRUE to activate kids-directed mode, FALSE to use default mode.
   * @return \Catharsis\Web\FacebookSendButtonWidget Reference to the current widget.
   */
  public function kids($kids = true)
  {
    $this->kids = (bool) $kids;
    return $this;
  }

  /**
   * A label for tracking referrals which must be less than 50 characters and can contain alphanumeric characters and some punctuation (currently +/=-.:_).
   * @param string $track_label Label to track referrals.
   * @return \Catharsis\Web\FacebookSendButtonWidget Reference to the current widget.
   */
  public function track_label($track_label)
  {
    $this->track_label = (string) $track_label;
    return $this;
  }

  /**
   * The absolute URL of the page that will be sent. Default is current page URL.
   * @param string $url URL of the page to send.
   * @return \Catharsis\Web\FacebookSendButtonWidget Reference to the current widget.
   */
  public function url($url)
  {
    $this->url = (string) $url;
    return $this;
  }

  /**
   * The width of the button.
   * @param string $width Width of button.
   * @return \Catharsis\Web\FacebookSendButtonWidget Reference to the current widget.
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
      "class" => "fb-send",
      "data-colorscheme" => $this->color_scheme,
      "data-height" => $this->height,
      "data-href" => $this->url,
      "data-kid-directed-site" => $this->kids,
      "data-ref" => $this->track_label,
      "data-width" => $this->width));
  }
}