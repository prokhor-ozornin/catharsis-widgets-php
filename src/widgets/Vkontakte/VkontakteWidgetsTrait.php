<?php
/**
 * VkontakteWidgetsTrait trait.
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
 * Vkontakte widgets helpers trait.
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
trait VkontakteWidgetsTrait
{
    private static $_vkontakte;

    /**
     * Returns factory class instance for rendering Vkontakte widgets.
     * @return \Catharsis\Web\VkontakteWidgetsFactory
     */
    public static function vkontakte()
    {
        return empty(self::$_vkontakte)
            ? (self::$_vkontakte = new VkontakteWidgetsFactory())
            : self::$_vkontakte;
    }
}

?>
