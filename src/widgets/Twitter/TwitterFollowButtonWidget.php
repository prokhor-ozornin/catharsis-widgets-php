<?php
namespace Catharsis\Web;

/**
 * Renders Twitter "Follow" button.
 * Requires {@link WidgetsScriptsBundles::twitter()} scripts bundle to be included.
 * @link https://dev.twitter.com/docs/follow-button
 */
class TwitterFollowButtonWidget extends HtmlWidgetBase
{
  private $account;
  private $alignment;
  private $count;
  private $language;
  private $opt_out;
  private $screen_name;
  private $size;
  private $width;

  /**
   * Twitter account name.
   * This attribute is required.
   * @param string $account Account name.
   * @return \Catharsis\Web\TwitterFollowButtonWidget Reference to the current widget.
   */
  public function account($account)
  {
    $this->account = (string) $account;
    return $this;
  }

  /**
   * Horizontal alignment of the button.
   * @param string $alignment Horizontal alignment of button.
   * @return \Catharsis\Web\TwitterFollowButtonWidget Reference to the current widget.
   */
  public function alignment($alignment)
  {
    $this->alignment = (string) $alignment;
    return $this;
  }

  /**
   * Whether to display user's followers count. Default is FALSE.
   * @param boolean $count TRUE to show followers count, FALSE to hide.
   * @return \Catharsis\Web\TwitterFollowButtonWidget Reference to the current widget.
   */
  public function count($count = true)
  {
    $this->count = (bool) $count;
    return $this;
  }

  /**
   * Language for the "Follow" button. Default is either request locale's language or language of the current thread.
   * @param string $language Interface language for button.
   * @return \Catharsis\Web\TwitterFollowButtonWidget Reference to the current widget.
   */
  public function language($language)
  {
    $this->language = (string) $language;
    return $this;
  }

  /**
   * Whether to opt-out of twitter suggestions. Default is FALSE.
   * @param boolean $opt_out TRUE to opt-out, FALSE to opt-in.
   * @return \Catharsis\Web\TwitterFollowButtonWidget Reference to the current widget.
   */
  public function opt_out($opt_out = true)
  {
    $this->opt_out = (bool) $opt_out;
    return $this;
  }

  /**
   * Whether to show user's screen name. Default is TRUE.
   * @param boolean $screen_name TRUE to show screen name, FALSE to hide.
   * @return \Catharsis\Web\TwitterFollowButtonWidget Reference to the current widget.
   */
  public function screen_name($screen_name = true)
  {
    $this->screen_name = (bool) $screen_name;
    return $this;
  }

  /**
   * The size of the rendered button. Default is "medium".
   * @param string $size Size of button.
   * @return \Catharsis\Web\TwitterFollowButtonWidget Reference to the current widget.
   */
  public function size($size)
  {
    $this->size = (string) $size;
    return $this;
  }

  /**
   * Width of the button.
   * @param string $width Width of button.
   * @return \Catharsis\Web\TwitterFollowButtonWidget Reference to the current widget.
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
    if (empty($this->account))
    {
      return "";
    }

    return self::html_tag("a", array(
      "class" => "twitter-follow-button",
      "data-align" => $this->alignment,
      "data-dnt" => $this->opt_out,
      "data-lang" => empty($this->language) ? $this->user_language() : $this->language,
      "data-show-count" => $this->count,
      "data-show-screen-name" => $this->screen_name,
      "data-size" => $this->size,
      "data-width" => $this->width,
      "href" => "https://twitter.com/{$this->account}"));
  }
}