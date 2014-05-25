<?php
/**
 * FacebookWidgetsTrait trait.
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
 * Facebook widgets helpers trait.
 * 
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
trait FacebookWidgetsTrait
{
    private static $_facebook;

    /**
     * Returns factory class instance for rendering Facebook widgets.
     * @return \Catharsis\Web\FacebookWidgetsFactory
     */
    public static function facebook()
    {
        return empty(self::$_facebook)
            ? (self::$_facebook = new FacebookWidgetsFactory())
            : self::$_facebook;
    }
}

?>
