<?php
namespace Catharsis\Web;

/**
 * Renders Facebook Like Box.
 * Requires Facebook JavaScript initialization to be performed first.
 * @link https://developers.facebook.com/docs/plugins/like-box-for-pages
 */
class FacebookLikeBoxWidget extends HtmlWidgetBase
{
  private $border;
  private $color_scheme;
  private $faces;
  private $header;
  private $height;
  private $stream;
  private $url;
  private $wall;
  private $width;

  /**
   * Specifies whether or not to show a border around the plugin. Default is TRUE.
   * @param boolean $border TRUE to show border, FALSE to hide.
   * @return \Catharsis\Web\FacebookLikeBoxWidget Reference to the current widget.
   */
  public function border($border = true)
  {
    $this->border = (bool) $border;
    return $this;
  }

  /**
   * The color scheme used by the widget. Default is "light".
   * @param string $color_scheme Color scheme of widget.
   * @return \Catharsis\Web\FacebookLikeBoxWidget Reference to the current widget.
   */
  public function color_scheme($color_scheme)
  {
    $this->color_scheme = (string) $color_scheme;
    return $this;
  }

  /**
   * Specifies whether to display profile photos of people who like the page. Default is TRUE.
   * @param boolean $faces TRUE to show profile photos, FALSE to hide.
   * @return \Catharsis\Web\FacebookLikeBoxWidget Reference to the current widget.
   */
  public function faces($faces = true)
  {
    $this->faces = (bool) $faces;
    return $this;
  }

  /**
   * Specifies whether to display the Facebook header at the top of the widget. Default is TRUE.
   * @param boolean $header TRUE to show header, FALSE to hide.
   * @return \Catharsis\Web\FacebookLikeBoxWidget Reference to the current widget.
   */
  public function header($header = true)
  {
    $this->header = (bool) $header;
    return $this;
  }

  /**
   * The height of the widget in pixels. The default height varies based on number of faces to display, and whether the stream is displayed. With stream set to true and 10 photos displayed (via showFaces) the default height is 556px. With stream and show_faces both false, the default height is 63px.
   * @param string $height Height of widget.
   * @return \Catharsis\Web\FacebookLikeBoxWidget Reference to the current widget.
   */
  public function height($height)
  {
    $this->height = (string) $height;
    return $this;
  }

  /**
   * Specifies whether to display a stream of the latest posts by the Page. Default is TRUE.
   * @param boolean $stream TRUE to show stream of posts, FALSE to hide.
   * @return \Catharsis\Web\FacebookLikeBoxWidget Reference to the current widget.
   */
  public function stream($stream = true)
  {
    $this->stream = (bool) $stream;
    return $this;
  }

  /**
   * The absolute URL of the Facebook Page that will be liked.
   * This attribute is required.
   * @param string $url URL of target web page.
   * @return \Catharsis\Web\FacebookLikeBoxWidget Reference to the current widget.
   */
  public function url($url)
  {
    $this->url = (string) $url;
    return $this;
  }

  /**
   * For "place" Pages (Pages that have a physical location that can be used with check-ins), this specifies whether the stream contains posts by the Page or just check-ins from friends. Default is FALSE.
   * @param boolean $wall TRUE to include page's posts in the stream, FALSE to exclude.
   * @return \Catharsis\Web\FacebookLikeBoxWidget Reference to the current widget.
   */
  public function wall($wall = true)
  {
    $this->wall = (bool) $wall;
    return $this;
  }

  /**
   * The width of the widget in pixels. Minimum is 292. Default is 300.
   * @param string $width Width of button.
   * @return \Catharsis\Web\FacebookLikeBoxWidget Reference to the current widget.
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
      "class" => "fb-like-box",
      "data-colorscheme" => $this->color_scheme,
      "data-force-wall" => $this->wall,
      "data-header" => $this->header,
      "data-height" => $this->height,
      "data-href" => $this->url,
      "data-show-border" => $this->border,
      "data-show-faces" => $this->faces,
      "data-stream" => $this->stream,
      "data-width" => $this->width));
  }
}