<?php
namespace Catharsis\Web;

/**
 * Renders Pinterest "Pin It" button widget.
 * Requires {@link WidgetsScripts::pinterest} script to be included.
 * @link http://business.pinterest.com/widget-builder/#do_pin_it_button
 */
class PinterestPinItButtonWidget extends HtmlWidgetBase
{
  private $color = "gray";
  private $counter_position = PinterestPinItButtonPinCountPosition::None;
  private $description;
  private $image;
  private $language = "en";
  private $shape = PinterestPinItButtonShape::Rectangular;
  private $size = PinterestPinItButtonSize::Small;
  private $url;

  /**
   * Background color of the button.
   * @param string $color Button's color.
   * @return \Catharsis\Web\PinterestPinItButtonWidget Reference to the current widget.
   */
  public function color($color)
  {
    $this->color = (string) $color;
    return $this;
  }

  /**
   * Position of button's pin counter.
   * @param string $position Pin counter's position.
   * @return \Catharsis\Web\PinterestPinItButtonWidget Reference to the current widget.
   */
  public function counter_position($position)
  {
    $this->counter_position = (string) $position;
    return $this;
  }

  /**
   * Description of the "pinned" image.
   * @param string $description Pin's description.
   * @return \Catharsis\Web\PinterestPinItButtonWidget Reference to the current widget.
   */
  public function description($description)
  {
    $this->description = (string) $description;
    return $this;
  }

  /**
   * Sets color of the button to gray.
   * @return \Catharsis\Web\PinterestPinItButtonWidget Reference to the current widget.
   */
  public function gray()
  {
    return $this->color("gray");
  }

  /**
   * URL address of the "pinned" image.
   * @param string $image Pin's image URL.
   * @return \Catharsis\Web\PinterestPinItButtonWidget Reference to the current widget.
   */
  public function image($image)
  {
    $this->image = (string) $image;
    return $this;
  }

  /**
   * Language of button's label.
   * @param string $language Button's text language.
   * @return \Catharsis\Web\PinterestPinItButtonWidget Reference to the current widget.
   */
  public function language($language)
  {
    $this->language = (string) $language;
    return $this;
  }

  /**
   * Sets color of the button to red.
   * @return \Catharsis\Web\PinterestPinItButtonWidget Reference to the current widget.
   */
  public function red()
  {
    return $this->color("red");
  }

  /**
   * Shape of the button.
   * @param string $shape Button's shape.
   * @return \Catharsis\Web\PinterestPinItButtonWidget Reference to the current widget.
   */
  public function shape($shape)
  {
    $this->shape = (string) $shape;
    return $this;
  }

  /**
   * Size of the button.
   * @param type $size Button's size.
   */
  public function size($size)
  {
    $this->size = (string) $size;
    return $this;
  }

  /**
   * URL address of target web page for the button.
   * @param string $url Button's target web page.
   * @return \Catharsis\Web\PinterestPinItButtonWidget Reference to the current widget.
   */
  public function url($url)
  {
    $this->url = (string) $url;
    return $this;
  }

  /**
   * Sets color of the button to white.
   * @return \Catharsis\Web\PinterestPinItButtonWidget Reference to the current widget.
   */
  public function white()
  {
    return $this->color("white");
  }

  /**
   * Returns HTML markup text of widget.
   */
  public function __toString()
  {
    if (empty($this->url) || empty($this->image) || empty($this->description))
    {
      return "";
    }

    $height = 0;
    switch ($this->size)
    {
      case PinterestPinItButtonSize::Large :
        switch (this.shape)
        {
          case PinterestPinItButtonShape::Circular :
            $height = 32;
          break;

          default :
            $height = 28;
          break;
        }
      break;

      case PinterestPinItButtonSize::Small :
        switch ($this->shape)
        {
          case PinterestPinItButtonShape::Circular:
            $height = 16;
          break;

          default:
            $height = 20;
          break;
        }
      break;
    }

    $shape = "";
    switch ($this->shape)
    {
      case PinterestPinItButtonShape::Circular :
        $shape = "round";
      break;

      default :
        $shape = "rect";
      break;
    }

    $url = urlencode($this->url);
    $image = urlencode($this->image);
    $description = urlencode($this->description);

    return self::html_tag("a", array(
      "data-pin-color" => $this->shape == PinterestPinItButtonShape::Rectangular ? $this->color : null,
      "data-pin-config" => $this->shape == PinterestPinItButtonShape::Rectangular ? $this->counter_position : null,
      "data-pin-do" => "buttonPin",
      "data-pin-height" => $height,
      "data-pin-lang" => $this->shape == PinterestPinItButtonShape::Rectangular ? $this->language : null,
      "data-pin-shape" => $shape,
      "href" => "http://www.pinterest.com/pin/create/button/?url={$url}&media={$image}&description={$description}"),
      "<img src=\"http://assets.pinterest.com/images/pidgets/pinit_fg_{$this->language}_{$shape}_{$this->color}_{$height}.png\"/>");
  }
}