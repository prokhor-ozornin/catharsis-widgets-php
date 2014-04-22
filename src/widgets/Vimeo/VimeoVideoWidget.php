<?php
namespace Catharsis\Web;

/**
 * Renders embedded Vimeo video on web page.
 */
class VimeoVideoWidget extends HtmlWidgetBase
{
  private $auto_play = false;
  private $height;
  private $id;
  private $loop = false;
  private $width;

  /**
   * Whether to start playing video automatically. Default is FALSE.
   * @param boolean $auto_play TRUE to enable autoplay, FALSE to disable.
   * @return \Catharsis\Web\VimeoVideoWidget Reference to the current widget.
   */
  public function auto_play($auto_play = true)
  {
    $this->auto_play = (bool) $auto_play;
    return $this;
  }

  /**
   * Height of video control.
   * This attribute is required.
   * @param string $height Height of video.
   * @return \Catharsis\Web\VimeoVideoWidget Reference to the current widget.
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
   * @return \Catharsis\Web\VimeoVideoWidget Reference to the current widget.
   */
  public function id($id)
  {
    $this->id = (string) $id;
    return $this;
  }

  /**
   * Whether to replay video when it finishes. Default is FALSE.
   * @param boolean $loop TRUE to enable looping, FALSE to disable.
   * @return \Catharsis\Web\VimeoVideoWidget Reference to the current widget.
   */
  public function loop($loop = true)
  {
    $this->loop = (bool) $loop;
    return $this;
  }

  /**
   * Width of video control.
   * This attribute is required.
   * @param string $width Width of video.
   * @return \Catharsis\Web\VimeoVideoWidget Reference to the current widget.
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

    $auto_play = $this->auto_play ? "&autoplay=1" : "";
    $loop = $this->loop ? "&loop=1" : "";

    return self::html_tag("iframe", array(
      "allowfullscreen" => true,
      "frameborder" => 0,
      "height" => $this->height,
      "mozallowfullscreen" => true,
      "src" => "https://player.vimeo.com/video/{$this->id}?badge=0{$auto_play}{$loop}",
      "webkitallowfullscreen" => true,
      "width" => $this->width));
  }
}