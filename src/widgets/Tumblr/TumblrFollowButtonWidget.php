<?php
namespace Catharsis\Web;

/**
 * Renders Tumblr "Follow" button.
 * Requires {@link WidgetsScripts::tumblr_share} script to be included.
 * @link http://www.tumblr.com/buttons
 */
class TumblrFollowButtonWidget extends HtmlWidgetBase
{
  private $account;
  private $color_scheme = TumblrFollowButtonColorScheme::Light;
  private $type = TumblrFollowButtonType::First;

  /**
   * Name of Tumblr account (blog).
   * This attribute is required.
   * @param string $account Name of blog.
   * @return \Catharsis\Web\TumblrFollowButtonWidget Reference to the current widget.
   */
  public function account($account)
  {
    $this->account = (string) $account;
    return $this;
  }

  /**
   * Visual color scheme of button.
   * @param string $color_scheme Color scheme for button.
   * @return \Catharsis\Web\TumblrFollowButtonWidget Reference to the current widget.
   */
  public function color_scheme($color_scheme)
  {
    $this->color_scheme = (string) $color_scheme;
    return $this;
  }

  /**
   * Visual layout/appearance of button.
   * @param string $type Layout of button.
   * @return \Catharsis\Web\TumblrFollowButtonWidget Reference to the current widget.
   */
  public function type($type)
  {
    $this->type = (string) $type;
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

    $width = 189;
    switch ($this->type)
    {
      case TumblrFollowButtonType::Second :
        $width = 113;
      break;

      case TumblrFollowButtonType::Third :
        $width = 18;
      break;
    }

    return self::html_tag("iframe", array(
      "allowtransparency" => true,
      "border" => 0,
      "class" => "btn",
      "frameborder" => 0,
      "height" => 25,
      "scrolling" => "no",
      "src" => "http://platform.tumblr.com/v1/follow_button.html?button_type={$this->type}&tumblelog={$this->account}&color_scheme={$this->color_scheme}",
      "width" => $width));
  }
}