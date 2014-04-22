<?php
namespace Catharsis\Web;

/**
 * Renders Google "+1" button.
 * Requires {@link WidgetsScriptsBundles::google()} scripts bundle to be included.
 * @link https://developers.google.com/+/web/+1button
 */
class GooglePlusOneButtonWidget extends HtmlWidgetBase
{
  private $alignment;
  private $annotation;
  private $callback;
  private $recommendations;
  private $size;
  private $url;
  private $width;

  /**
   * Horizontal alignment of the button assets within its frame.
   * @param string $alignment Horizontal alignment of the button.
   * @return \Catharsis\Web\GooglePlusOneButtonWidget Reference to the current widget.
   */
  public function alignment($alignment)
  {
    $this->alignment = (string) $alignment;
    return $this;
  }

  /**
   * Annotation to display next to the button.
   * @param string $annotation Annotation for the button.
   * @return \Catharsis\Web\GooglePlusOneButtonWidget Reference to the current widget.
   */
  public function annotation($annotation)
  {
    $this->annotation = (string) $annotation;
    return $this;
  }

  /**
   * Callback JavaScript function that is called after the user clicks the +1 button.
   * @param string $callback Callback JavaScript function.
   * @return \Catharsis\Web\GooglePlusOneButtonWidget Reference to the current widget.
   */
  public function callback($callback)
  {
    $this->callback = (string) $callback;
    return $this;
  }

  /**
   * Whether to show recommendations within the +1 hover bubble. Default is TRUE.
   * @param boolean $recommendations TRUE to show recommendations, FALSE to hide.
   * @return \Catharsis\Web\GooglePlusOneButtonWidget Reference to the current widget.
   */
  public function recommendations($recommendations = true)
  {
    $this->recommendations = (bool) $recommendations;
    return $this;
  }

  /**
   * Size of the button.
   * @param string $size Size of the button.
   * @return \Catharsis\Web\GooglePlusOneButtonWidget Reference to the current widget.
   */
  public function size($size)
  {
    $this->size = (string) $size;
    return $this;
  }

  /**
   * URL for the button. Default is current page's URL.
   * @param string $url URL for the button.
   * @return \Catharsis\Web\GooglePlusOneButtonWidget Reference to the current widget.
   */
  public function url($url)
  {
    $this->url = (string) $url;
    return $this;
  }

  /**
   * If annotation is set to "inline", this parameter sets the width in pixels to use for the button and its inline annotation. If the width is omitted, a button and its inline annotation use 450px.
   * @param string $width Width of the button.
   * @return \Catharsis\Web\GooglePlusOneButtonWidget Reference to the current widget.
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
    return self::html_tag("g:plusone", array(
      "align" => $this->alignment,
      "annotation" => $this->annotation,
      "data-callback" => $this->callback,
      "data-recommendations" => $this->recommendations,
      "href" => $this->url,
      "size" => $this->size,
      "width" => $this->width));
  }
}