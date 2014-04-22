<?php
namespace Catharsis\Web;

/**
 * Renders VKontakte page subscription widget.
 * Requires {@link WidgetsScripts::vkontakte} script to be included.
 * @link http://vk.com/dev/Subscribe
 */
class VkontakteSubscriptionWidget extends HtmlWidgetBase
{
  private $account;
  private $layout = VkontakteSubscribeButtonLayout::First;
  private $only_button = false;

  /**
   * Identifier of user/group to subscribe to.
   * This attribute is required.
   * @param string $account Account to subscribe to.
   * @return \Catharsis\Web\VkontakteSubscriptionWidget Reference to the current widget.
   */
  public function account($account)
  {
    $this->account = (string) $account;
    return $this;
  }

  /**
   * Visual layout/appearance of the button.
   * @param integer $layout Layout of button.
   * @return \Catharsis\Web\VkontakteSubscriptionWidget Reference to the current widget.
   */
  public function layout($layout)
  {
    $this->layout = (int) $layout;
    return $this;
  }

  /**
   * Whether to display both author and button or button only.
   * @param boolean $only_button FALSE to display both author/button, TRUE to display only button.
   * @return \Catharsis\Web\VkontakteSubscriptionWidget Reference to the current widget.
   */
  public function only_button($only_button = true)
  {
    $this->only_button = (bool) $only_button;
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

    $config = array("mode" => $this->layout);
    if ($this->only_button)
    {
      $config["soft"] = 1;
    }

    $config_json = json_encode($config, JSON_FORCE_OBJECT);

    return self::html_tag("div", array("id" => "vk_subscribe")).self::javascript_inline("VK.Widgets.Subscribe(\"vk_subscribe\", $config_json, \"{$this->account}\");");
  }
}