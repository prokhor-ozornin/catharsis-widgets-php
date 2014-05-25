<?php
/**
 * TumblrWidgetsTrait trait.
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
 * Tumblr widgets helpers trait.
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
trait TumblrWidgetsTrait
{
    private static $_tumblr;

    /**
     * Returns factory class instance for rendering Tumblr widgets.
     * @return \Catharsis\Web\TumblrWidgetsFactory
     */
    public static function tumblr()
    {
        return empty(self::$_tumblr)
            ? (self::$_tumblr = new TumblrWidgetsFactory())
            : self::$_tumblr;
    }
}

?>
