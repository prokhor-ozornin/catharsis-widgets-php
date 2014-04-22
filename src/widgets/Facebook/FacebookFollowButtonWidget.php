<?php
namespace Catharsis\Web;

/**
 * Renders Facebook "Follow" button.
 * Requires Facebook JavaScript initialization to be performed first.
 * @link https://developers.facebook.com/docs/plugins/follow-button
 */
class FacebookFollowButtonWidget extends HtmlWidgetBase
{
  private $color_scheme;
  private $faces;
  private $height;
  private $kids;
  private $layout;
  private $url;
  private $width;

  /**
   * The color scheme used by the button. Default is "light".
   * @param string $color_scheme Color scheme of button.
   * @return \Catharsis\Web\FacebookFollowButtonWidget Reference to the current widget.
   */
  public function color_scheme($color_scheme)
  {
    $this->color_scheme = (string) $color_scheme;
    return $this;
  }

  /**
   * Specifies whether to display profile photos below the button (standard layout only). You must not enable this on child-directed sites.
   * @param boolean $faces TRUE to show profiles photos, FALSE to hide.
   * @return \Catharsis\Web\FacebookFollowButtonWidget Reference to the current widget.
   */
  public function faces($faces = true)
  {
    $this->faces = (bool) $faces;
    return $this;
  }

  /**
   * The height of the button.
   * @param string $height Height of button.
   * @return \Catharsis\Web\FacebookFollowButtonWidget Reference to the current widget.
   */
  public function height($height)
  {
    $this->height = (string) $height;
    return $this;
  }

  /**
   * If your web site or online service, or a portion of your service, is directed to children under 13 you must enable this. Default is FALSE.
   * @param boolean $kids TRUE to activate kids-directed mode, FALSE to use default mode.
   * @return \Catharsis\Web\FacebookFollowButtonWidget Reference to the current widget.
   */
  public function kids($kids = true)
  {
    $this->kids = (bool) $kids;
    return $this;
  }

  /**
   * Selects one of the different layouts that are available for the button. Default is "standard".
   * @param string $layout Layout of button.
   * @return \Catharsis\Web\FacebookFollowButtonWidget Reference to the current widget.
   */
  public function layout($layout)
  {
    $this->layout = (string) $layout;
    return $this;
  }

  /**
   * The Facebook.com profile URL of the user to follow.
   * This attribute is required.
   * @param string $url Profile URL.
   * @return \Catharsis\Web\FacebookFollowButtonWidget Reference to the current widget.
   */
  public function url($url)
  {
    $this->url = (string) $url;
    return $this;
  }

  /**
   * The width of the button. The layout you choose affects the minimum and default widths you can use.
   * @param string $width Width of button.
   * @return \Catharsis\Web\FacebookFollowButtonWidget Reference to the current widget.
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
    if (empty($this->url))
    {
      return "";
    }

    return self::html_tag("div", array(
      "class" => "fb-follow",
      "data-colorscheme" => $this->color_scheme,
      "data-height" => $this->height,
      "data-href" => $this->url,
      "data-kid-directed-site" => $this->kids,
      "data-layout" => $this->layout,
      "data-show-faces" => $this->faces,
      "data-width" => $this->width));
  }
}