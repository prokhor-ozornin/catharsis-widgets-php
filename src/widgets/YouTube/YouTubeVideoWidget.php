<?php
namespace Catharsis\Web;

/**
 * Renders embedded YouTube video on web page.
 */
class YouTubeVideoWidget extends HtmlWidgetBase
{
  private $height;
  private $id;
  private $is_private = false;
  private $is_secure = false;
  private $width;

  /**
   * Height of video control.
   * This attribute is required.
   * @param string $height Height of video.
   * @return \Catharsis\Web\YouTubeVideoWidget Reference to the current widget.
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
   * @return \Catharsis\Web\YouTubeVideoWidget Reference to the current widget.
   */
  public function id($id)
  {
    $this->id = (string) $id;
    return $this;
  }

  /**
   * Whether to keep track of user cookies or not (default is <c>false)</c>.
   * @param boolean $private TRUE to set cookies, FALSE to not.
   * @return \Catharsis\Web\YouTubeVideoWidget Reference to the current widget.
   */
  public function is_private($private = true)
  {
    $this->is_private = (bool) $private;
    return $this;
  }

  /**
   * Whether to access video through secure HTTPS protocol or unsecure HTTP (default is FALSE).
   * @param boolean $secure TRUE to use HTTPS protocol, FALSE to use HTTP.
   * @return \Catharsis\Web\YouTubeVideoWidget Reference to the current widget.
   */
  public function is_secure($secure = true)
  {
    $this->is_secure = (bool) $secure;
    return $this;
  }

  /**
   * Width of video control.
   * This attribute is required.
   * @param string $width Width of video.
   * @return \Catharsis\Web\YouTubeVideoWidget Reference to the current widget.
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

    $private = $this->is_private ? "www.youtube-nocookie.com" : "www.youtube.com";
    $secure = $this->is_secure ? "https" : "http";

    return self::html_tag("iframe", array(
      "allowfullscreen" => true,
      "frameborder" => 0,
      "height" => $this->height,
      "mozallowfullscreen" => true,
      "src" => "{$secure}://{$private}/embed/{$this->id}",
      "webkitallowfullscreen" => true,
      "width" => $this->width));
  }
}