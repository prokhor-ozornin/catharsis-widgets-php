<?php
/**
 * RuTubeWidgetsTrait trait.
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
 * RuTube widgets helpers trait.
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
trait RuTubeWidgetsTrait
{
    private static $_rutube;

    /**
     * Returns factory class instance for rendering RuTube widgets.
     * @return \Catharsis\Web\RuTubeWidgetsFactory
     */
    public static function rutube()
    {
        return empty(self::$_rutube)
            ? (self::$_rutube = new RuTubeWidgetsFactory())
            : self::$_rutube;
    }
}

?>
