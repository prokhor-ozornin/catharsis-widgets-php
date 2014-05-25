<?php
/**
 * GoogleWidgetsTrait trait.
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
 * Google widgets helpers trait.
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
trait GoogleWidgetsTrait
{
    private static $_google;

    /**
     * Returns factory class instance for rendering Google widgets.
     * @return \Catharsis\Web\GoogleWidgetsFactory
     */
    public static function google()
    {
        return empty(self::$_google)
            ? (self::$_google = new GoogleWidgetsFactory())
            : self::$_google;
    }
}

?>
