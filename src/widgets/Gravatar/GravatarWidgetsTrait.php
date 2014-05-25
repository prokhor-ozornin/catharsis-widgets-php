<?php
/**
 * GravatarWidgetsTrait trait.
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
 * Gravatar widgets helpers trait.
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
trait GravatarWidgetsTrait
{
    private static $_gravatar;

    /**
     * Returns factory class instance for rendering Gravatar widgets.
     * @return \Catharsis\Web\GravatarWidgetsFactory
     */
    public static function gravatar()
    {
        return empty(self::$_gravatar)
            ? (self::$_gravatar = new GravatarWidgetsFactory())
            : self::$_gravatar;
    }
}

?>
