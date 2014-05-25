<?php
/**
 * YandexWidgetsTrait trait.
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
 * Yandex widgets helpers trait.
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
trait YandexWidgetsTrait
{
    private static $_yandex;

    /**
     * Returns factory class instance for rendering Yandex widgets.
     * @return \Catharsis\Web\YandexWidgetsFactory
     */
    public static function yandex()
    {
        return empty(self::$_yandex)
            ? (self::$_yandex = new YandexWidgetsFactory())
            : self::$_yandex;
    }
}

?>
