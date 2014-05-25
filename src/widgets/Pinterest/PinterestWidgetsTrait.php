<?php
/**
 * PinterestWidgetsTrait trait.
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
 * Pinterest widgets helpers trait.
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
trait PinterestWidgetsTrait
{
    private static $_pinterest;

    /**
     * Returns factory class instance for rendering Pinterest widgets.
     * @return \Catharsis\Web\PinterestWidgetsFactory
     */
    public static function pinterest()
    {
        return empty(self::$_pinterest)
            ? (self::$_pinterest = new PinterestWidgetsFactory())
            : self::$_pinterest;
    }
}

?>
