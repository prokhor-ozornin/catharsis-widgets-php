<?php
namespace Catharsis\Web;

/**
 * Performs initialization of VKontakte JavaScript API. Initialization must be performed before render any VKontakte widgets on web pages.
 * Requires {@link WidgetsScripts::vkontakte} script to be included.
 * @link http://vk.com/dev/sites
 */
class VkontakteInitializationWidget extends HtmlWidget
{
    private $_apiId;

    /**
     * API identifier of registered VKontakte application.
     * This attribute is required.
     * @param string $apiId Application API ID.
     * @return \Catharsis\Web\VkontakteInitializationWidget Reference to the current widget.
     */
    public function apiId($apiId)
    {
        $this->_apiId = (string) $apiId;
        return $this;
    }

    /**
     * Returns HTML markup text of widget.
     */
    public function __toString()
    {
        if (empty($this->_apiId)) {
            return "";
        }

        return self::javascriptInline("VK.init({apiId:{$this->_apiId}, onlyWidgets:true});");
    }
}

?>
