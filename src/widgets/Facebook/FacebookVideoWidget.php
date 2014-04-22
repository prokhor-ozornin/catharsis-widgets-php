<?php
namespace Catharsis\Web;

/**
 * Renders embedded Facebook video on web page.
 */
class FacebookVideoWidget extends HtmlWidgetBase
{
  private $height;
  private $id;
  private $width;

  /**
   * Height of video control.
   * @param string $height Height of video.
   * @return \Catharsis\Web\FacebookVideoWidget Reference to the current widget.
   */
  public function height($height)
  {
    $this->height = (string) $height;
    return $this;
  }

  /**
   * Identifier of video.
   * @param string $id Identifier of video.
   * @return \Catharsis\Web\FacebookVideoWidget Reference to the current widget.
   */
  public function id($id)
  {
    $this->id = (string) $id;
    return $this;
  }

  /**
   * Width of video control.
   * @param string $width Width of video.
   * @return \Catharsis\Web\FacebookVideoWidget Reference to the current widget.
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
    if (empty($this->id) || empty($this->width) || empty($this->height))
    {
      return "";
    }

    return self::html_tag("iframe", array(
      "allowfullscreen" => true,
      "frameborder" => 0,
      "height" => $this->height,
      "mozallowfullscreen" => true,
      "src" => "http://www.facebook.com/video/embed?video_id={$this->id}",
      "webkitallowfullscreen" => true,
      "width" => $this->width));
  }
}