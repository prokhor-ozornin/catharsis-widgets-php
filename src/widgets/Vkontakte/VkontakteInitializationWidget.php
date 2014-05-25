<?php
/**
 * VkontakteInitializationWidget class.
 *
 * PHP version 5
 *
 * @category HTML
 * @package  WebWidgets
 * @author   Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @license  LGPL https://www.gnu.org/licenses/lgpl.html
 * @link     http://pear.php.net/package/HTML_WebWidgets
 */
namespace Catharsis\Web;

/**
 * Performs initialization of VKontakte JavaScript API.
 * Initialization must be performed before render any VKontakte widgets on web pages.
 * Requires {@link WidgetsScripts::vkontakte} script to be included.
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 * @link      http://vk.com/dev/sites
 */
class VkontakteInitializationWidget extends HtmlWidget
{
    private $_apiId;

    /**
     * API identifier of registered VKontakte application.
     * This attribute is required.
     * @param string $apiId Application API ID.
     * @return \Catharsis\Web\VkontakteInitializationWidget
     *         Reference to the current widget.
     */
    public function apiId($apiId)
    {
        $this->_apiId = (string) $apiId;
        return $this;
    }

    /**
     * API identifier of registered VKontakte application.
     * @return string Application API ID.
     */
    public function getApiId()
    {
        return $this->_apiId;
    }

    /**
     * Returns HTML markup text of widget.
     * @return string Widget's HTML markup.
     */
    public function __toString()
    {
        if (empty($this->getApiId())) {
            return '';
        }

        return self::javascriptInline("VK.init({apiId:{$this->getApiId()}, onlyWidgets:true});");
    }
}

?>
