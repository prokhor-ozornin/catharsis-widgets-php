<?php
/**
 * SurfingbirdWidgetsTrait class.
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
 * Surfingbird widgets helpers trait.
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
trait SurfingbirdWidgetsTrait
{
    private static $_surfingbird;

    /**
     * Returns factory class instance for rendering Surfingbird widgets.
     * @return \Catharsis\Web\SurfingbirdWidgetsFactory
     */
    public static function surfingbird()
    {
        return empty(self::$_surfingbird)
            ? (self::$_surfingbird = new SurfingbirdWidgetsFactory())
            : self::$_surfingbird;
    }
}

?>
