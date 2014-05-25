<?php
/**
 * VimeoWidgetsTrait trait.
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
 * Vimeo widgets helpers trait.
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
trait VimeoWidgetsTrait
{
    private static $_vimeo;

    /**
     * Returns factory class instance for rendering Vimeo widgets.
     * @return \Catharsis\Web\VimeoWidgetsFactory
     */
    public static function vimeo()
    {
        return empty(self::$_vimeo)
            ? (self::$_vimeo = new VimeoWidgetsFactory())
            : self::$_vimeo;
    }
}

?>
