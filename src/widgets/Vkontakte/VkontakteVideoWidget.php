<?php
namespace Catharsis\Web;

/**
 * Renders embedded VKontakte video on web page.
 */
class VkontakteVideoWidget extends HtmlWidgetBase
{
  private $hash;
  private $hd;
  private $height;
  private $id;
  private $user;
  private $width;

  /**
   * Hash code of video.
   * This attribute is required.
   * @param string $hash Video's hash code.
   * @return \Catharsis\Web\VkontakteVideoWidget Reference to the current widget.
   */
  public function hash($hash)
  {
    $this->hash = (string) $hash;
    return $this;
  }

  /**
   * Whether to play video in High Definition format. Default is FALSE.
   * @param boolean $hd TRUE to use HD quality format, FALSE to use standard quality.
   * @return \Catharsis\Web\VkontakteVideoWidget Reference to the current widget.
   */
  public function hd_quality($hd = true)
  {
    $this->hd = (bool) $hd;
    return $this;
  }

  /**
   * Height of video control.
   * This attribute is required.
   * @param string $height Height of video.
   * @return \Catharsis\Web\VkontakteVideoWidget Reference to the current widget.
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
   * @return \Catharsis\Web\VkontakteVideoWidget Reference to the current widget.
   */
  public function id($id)
  {
    $this->id = (string) $id;
    return $this;
  }

  /**
   * Account identifier of video's uploader.
   * This attribute is required.
   * @param string $user User's account.
   * @return \Catharsis\Web\VkontakteVideoWidget Reference to the current widget.
   */
  public function user($user)
  {
    $this->user = (string) $user;
    return $this;
  }

  /**
   * Width of video control.
   * This attribute is required.
   * @param string $width Width of video.
   * @return \Catharsis\Web\VkontakteVideoWidget Reference to the current widget.
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
    if (empty($this->id) || empty($this->user) || empty($this->hash) || empty($this->width) || empty($this->height))
    {
      return "";
    }

    $hd = $this->hd ? 1 : 0;

    return self::html_tag("iframe", array(
      "allowfullscreen" => true,
      "frameborder" => 0,
      "height" => $this->height,
      "mozallowfullscreen" => true,
      "src" => "http://vk.com/video_ext.php?oid={$this->user}&id={$this->id}&hash={$this->hash}&hd={$hd}",
      "webkitallowfullscreen" => true,
      "width" => $this->width));
  }
}