<?php
namespace Catharsis\Web;

/**
 * Renders Pinterest "Follow Me" button.
 * Requires {@link WidgetsScripts::pinterest} script to be included.
 * @link http://business.pinterest.com/widget-builder/#do_follow_me_button
 */
class PinterestFollowButtonWidget extends HtmlWidgetBase
{
  private $account;
  private $label = "Follow";

  /**
   * Pinterest user account.
   * @param string $account Account name.
   * @return \Catharsis\Web\PinterestFollowButtonWidget Reference to the current widget.
   */
  public function account($account)
  {
    $this->account = (string) $account;
    return $this;
  }

  /**
   * Text label on the button.
   * @param string $label Button's label.
   * @return \Catharsis\Web\PinterestFollowButtonWidget Reference to the current widget.
   */
  public function label($label)
  {
    $this->label = (string) $label;
    return $this;
  }

  /**
   * Returns HTML markup text of widget.
   */
  public function __toString()
  {
    if (empty($this->account) || empty($this->label))
    {
      return "";
    }

    return self::html_tag("a", array(
      "data-pin-do" => "buttonFollow",
      "href" => "http://www.pinterest.com/{$this->account}"),
      $this->label);
  }
}