<?php
namespace Catharsis\Web;

/**
 * Renders embedded RuTube video on web page.
 */
class RuTubeVideoWidget extends HtmlWidgetBase
{
  private $height;
  private $id;
  private $width;

  /**
   * Height of video control.
   * This attribute is required.
   * @param string $height Height of video.
   * @return \Catharsis\Web\RuTubeVideoWidget Reference to the current widget.
   */
  public function height($height)
  {
    $this->height = (string) $height;
    return $this;
  }

  /**
   * Identifier of video.
   * This attribute is required.
   * @param string $id Identifier of video.
   * @return \Catharsis\Web\RuTubeVideoWidget Reference to the current widget.
   */
  public function id($id)
  {
    $this->id = (string) $id;
    return $this;
  }

  /**
   * Width of video control.
   * This attribute is required.
   * @param string $width Width of video.
   * @return \Catharsis\Web\RuTubeVideoWidget Reference to the current widget.
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
    if (empty($this->id) || empty($this->height) || empty($this->width))
    {
      return "";
    }

    return self::html_tag("iframe", array(
      "allowfullscreen" => true,
      "frameborder" => 0,
      "height" => $this->height,
      "mozallowfullscreen" => true,
      "scrolling" => "no",
      "src" => "http://rutube.ru/embed/$this->id",
      "webkitallowfullscreen" => true,
      "width" => $this->width));
  }
}