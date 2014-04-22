<?php
namespace Catharsis\Web;

/**
 * Renders VKontakte community widget.
 * Requires {@link WidgetsScripts::vkontakte} script to be included.
 * @link http://vk.com/dev/Community
 */
class VkontakteCommunityWidget extends HtmlWidgetBase
{
  private $account;
  private $height;
  private $mode = VkontakteCommunityMode::Participants;
  private $width;

  /**
   * Identifier or VKontakte public group/community.
   * This attribute is required.
   * @param string $account Group identifier.
   * @return \Catharsis\Web\VkontakteCommunityWidget Reference to the current widget.
   */
  public function account($account)
  {
    $this->account = (string) $account;
    return $this;
  }

  /**
   * Vertical height of widget.
   * @param string $height Height of widget.
   * @return \Catharsis\Web\VkontakteCommunityWidget Reference to the current widget.
   */
  public function height($height)
  {
    $this->height = (string) $height;
    return $this;
  }

  /**
   * Type of information to be displayed about given community.
   * @param integer $mode Community's info type.
   * @return \Catharsis\Web\VkontakteCommunityWidget Reference to the current widget.
   */
  public function mode($mode)
  {
    $this->mode = (int) $mode;
    return $this;
  }

  /**
   * Horizontal width of widget.
   * @param string $width Width of widget.
   * @return \Catharsis\Web\VkontakteCommunityWidget Reference to the current widget.
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

    $config = array("mode" => $this->mode);
    if ($this->mode == VkontakteCommunityMode::News)
    {
      $config["wide"] = 1;
    }
    if (!empty($this->width))
    {
      $config["width"] = $this->width;
    }
    if (!empty($this->height))
    {
      $config["height"] = $this->height;
    }

    $config_json = json_encode($config, JSON_FORCE_OBJECT);
    return self::html_tag("div", array("id" => "vk_groups")).self::javascript_inline("VK.Widgets.Group(\"vk_groups\", $config_json, \"$this->account\");");
  }
}