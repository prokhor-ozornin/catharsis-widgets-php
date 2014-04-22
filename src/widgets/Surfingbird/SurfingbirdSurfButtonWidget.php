<?php
namespace Catharsis\Web;

/**
 * Renders Surfingbird "Surf" button.
 * Requires {@link WidgetsScripts::surfingbird_surf} script to be included.
 * @link http://surfingbird.ru/publishers/surfbutton
 */
class SurfingbirdSurfButtonWidget extends HtmlWidgetBase
{
  private $color;
  private $counter = false;
  private $height;
  private $label = "Surf";
  private $layout = SurfingbirdSurfButtonLayout::Common;
  private $url;
  private $width;

  /**
   * Text label's color. If not specified, default color combination is used.
   * @param string $color Label's color.
   * @return \Catharsis\Web\SurfingbirdSurfButtonWidget Reference to the current widget.
   */
  public function color($color)
  {
    $this->color = (string) $color;
    return $this;
  }

  /**
   * Whether to render share counter next to a button. Default is FALSE.
   * @param boolean $counter TRUE to show counter, FALSE to hide.
   * @return \Catharsis\Web\SurfingbirdSurfButtonWidget Reference to the current widget.
   */
  public function counter($counter = true)
  {
    $this->counter = (bool) $counter;
    return $this;
  }

  /**
   * Vertical height of the button. Default is 25px.
   * @param string $height Height of button.
   * @return \Catharsis\Web\SurfingbirdSurfButtonWidget Reference to the current widget.
   */
  public function height($height)
  {
    $this->height = (string) $height;
    return $this;
  }

  /**
   * Text label to show on button. Default is "Surf".
   * @param string $label Text label on button.
   * @return \Catharsis\Web\SurfingbirdSurfButtonWidget Reference to the current widget.
   */
  public function label($label)
  {
    $this->label = (string) $label;
    return $this;
  }

  /**
   * Layout/appearance of the button.
   * @param string $layout Layout of button.
   * @return \Catharsis\Web\SurfingbirdSurfButtonWidget Reference to the current widget.
   */
  public function layout($layout)
  {
    $this->layout = (string) $layout;
    return $this;
  }

  /**
   * Specifies URL address of web page to "like". Default is current web page.
   * @param string $url URL of web page.
   * @return \Catharsis\Web\SurfingbirdSurfButtonWidget Reference to the current widget.
   */
  public function url($url)
  {
    $this->url = (string) $url;
    return $this;
  }

  /**
   * Horizontal width of the button. Default is 500px.
   * @param string $width Width of button.
   * @return \Catharsis\Web\SurfingbirdSurfButtonWidget Reference to the current widget.
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
    $counter = $this->counter ? "" : "-nocount";
    $color = empty($this->color) ? "" : "-".$this->color;

    $config = array("layout" => "{$this->layout}{$counter}{$color}");
    if (!empty($this->url))
    {
      $config["url"] = $this->url;
    }
    if (!empty($this->width))
    {
      $config["width"] = $this->width;
    }
    if (!empty($this->height))
    {
      $config["height"] = $this->height;
    }

    return self::html_tag("a", array(
      "class" => "surfinbird__like_button",
      "data-surf-config" => json_encode($config, JSON_FORCE_OBJECT),
      "href" => "http://surfingbird.ru/share",
      "target" => "_blank"),
      $this->label);
  }
}