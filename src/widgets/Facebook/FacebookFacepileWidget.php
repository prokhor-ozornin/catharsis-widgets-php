<?php
namespace Catharsis\Web;

/**
 * Renders Facebook Facepile widget.
 * Requires Facebook JavaScript initialization to be performed first.
 * @link https://developers.facebook.com/docs/plugins/facepile
 */
class FacebookFacepileWidget extends HtmlWidgetBase
{
  private $actions = array();
  private $color_scheme;
  private $height;
  private $max_rows;
  private $size;
  private $url;
  private $width;

  /**
   * Collection of Open Graph action types.
   * @param array $actions Collection of Facebook action types.
   * @return \Catharsis\Web\FacebookFacepileWidget Reference to the current widget.
   */
  public function actions($actions)
  {
    $this->actions = (array) $actions;
    return $this;
  }

  /**
   * The color scheme used by the widget. Default is "light".
   * @param string $color_scheme Color scheme of widget.
   * @return \Catharsis\Web\FacebookFacepileWidget Reference to the current widget.
   */
  public function color_scheme($color_scheme)
  {
    $this->color_scheme = (string) $color_scheme;
    return $this;
  }

  /**
   * The height of the widget in pixels.
   * @param string $height Height of widget.
   * @return \Catharsis\Web\FacebookFacepileWidget Reference to the current widget.
   */
  public function height($height)
  {
    $this->height = (string) $height;
    return $this;
  }

  /**
   * The maximum number of rows of faces to display. Default is 1.
   * @param integer $max_rows Number of rows of faces to display.
   * @return \Catharsis\Web\FacebookFacepileWidget Reference to the current widget.
   */
  public function max_rows($max_rows)
  {
    $this->max_rows = (int) $max_rows;
    return $this;
  }

  /**
   * Controls the size of the photos shown in the widget. Default is "medium".
   * @param string $size Size of photos.
   * @return \Catharsis\Web\FacebookFacepileWidget Reference to the current widget.
   */
  public function size($size)
  {
    $this->size = (string) $size;
    return $this;
  }

  /**
   * Display photos of the people who have liked this absolute URL. Default is current page URL.
   * @param string $url Target "liked" URL.
   * @return \Catharsis\Web\FacebookFacepileWidget Reference to the current widget.
   */
  public function url($url)
  {
    $this->url = (string) $url;
    return $this;
  }

  /**
   * The width of the widget in pixels. Minimum is 200. Default is 300.
   * @param string $width Width of widget.
   * @return \Catharsis\Web\FacebookFacepileWidget Reference to the current widget.
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
      "class" => "fb-facepile",
      "data-action" => implode(",", $this->actions),
      "data-colorscheme" => $this->color_scheme,
      "data-height" => $this->height,
      "data-href" => empty($this->url) ? $_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"] : $this->url,
      "data-max-rows" => $this->max_rows,
      "data-size" => $this->size,
      "data-width" => $this->width));
  }
}