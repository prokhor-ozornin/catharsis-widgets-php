<?php
namespace Catharsis\Web;

/**
 * Performs initialization of VKontakte JavaScript API. Initialization must be performed before render any VKontakte widgets on web pages.
 * Requires {@link WidgetsScripts::vkontakte} script to be included.
 * @link http://vk.com/dev/sites
 */
class VkontakteInitWidget extends HtmlWidgetBase
{
  private $api_id;

  /**
   * API identifier of registered VKontakte application.
   * This attribute is required.
   * @param string $api_id Application API ID.
   * @return \Catharsis\Web\VkontakteInitWidget Reference to the current widget.
   */
  public function api_id($api_id)
  {
    $this->api_id = (string) $api_id;
    return $this;
  }

  /**
   * Returns HTML markup text of widget.
   */
  public function __toString()
  {
    if (empty($this->api_id))
    {
      return "";
    }

    return self::javascript_inline("VK.init({apiId:{$this->api_id}, onlyWidgets:true});");
  }
}