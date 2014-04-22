<?php
namespace Catharsis\Web;

/**
 * Renders SoundCloud user's profile icon.
 * @link https://soundcloud.com/pages/embed
 */
class SoundCloudProfileIconWidget extends HtmlWidgetBase
{
  private $account;
  private $color = "orange_white";
  private $size = SoundCloudProfileIconSize::Size32;

  /**
   * SoundCloud user's account name.
   * @param string $account Account name.
   * @return \Catharsis\Web\SoundCloudProfileIconWidget Reference to the current widget.
   */
  public function account($account)
  {
    $this->account = (string) $account;
    return $this;
  }

  /**
   * Sets color of profile icon to black-and-white pattern.
   * @return \Catharsis\Web\SoundCloudProfileIconWidget Reference to the current widget.
   */
  public function black_white()
  {
    return $this->color("black_white");
  }

  /**
   * Color of profile icon.
   * @param string $color Icon's color.
   * @return \Catharsis\Web\SoundCloudProfileIconWidget Reference to the current widget.
   */
  public function color($color)
  {
    $this->color = (string) $color;
    return $this;
  }

  /**
   * Sets color of profile icon to transparent-orange pattern.
   * @return \Catharsis\Web\SoundCloudProfileIconWidget Reference to the current widget.
   */
  public function orange_transparent()
  {
    return $this->color("orange_transparent");
  }

  /**
   * Sets color of profile icon to orange-and-white pattern.
   * @return \Catharsis\Web\SoundCloudProfileIconWidget Reference to the current widget.
   */
  public function orange_white()
  {
    return $this->color("orange_white");
  }

  /**
   * Edge size of profile icon in pixels.
   * @param integer $size Icon's size.
   * @return \Catharsis\Web\SoundCloudProfileIconWidget Reference to the current widget.
   */
  public function size($size)
  {
    $this->size = (int) $size;
    return $this;
  }

  /**
   * Sets color of profile icon to white-and-orange pattern.
   * @return \Catharsis\Web\SoundCloudProfileIconWidget Reference to the current widget.
   */
  public function white_orange()
  {
    return $this->color("white_orange");
  }

  /**
   * Sets color of profile icon to transparent-white pattern.
   * @return \Catharsis\Web\SoundCloudProfileIconWidget Reference to the current widget.
   */
  public function white_transparent()
  {
    return $this->color("white_transparent");
  }

  /**
   * Returns HTML markup text of widget.
   */
  public function __toString()
  {
    if (empty($this->account))
    {
      return "";
    }

    $url = "http://soundcloud.com/{$this->account}&color={$this->color}&size={$this->size}";

    return self::html_tag("iframe", array(
      "allowtransparency" => true,
      "frameborder" => 0,
      "scrolling" => "no",
      "src" => "https://w.soundcloud.com/icon/?url={$url}",
      "style" => "width: {$this->size}px; height: {$this->size}px;"));
  }
}