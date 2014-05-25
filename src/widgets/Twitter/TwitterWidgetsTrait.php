<?php
/**
 * TwitterWidgetsTrait trait.
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
 * Twitter widgets helpers trait.
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
trait TwitterWidgetsTrait
{
    private static $_twitter;

    /**
     * Returns factory class instance for rendering Twitter widgets.
     * @return \Catharsis\Web\TwitterWidgetsFactory
     */
    public static function twitter()
    {
        return empty(self::$_twitter)
            ? (self::$_twitter = new TwitterWidgetsFactory())
            : self::$_twitter;
    }
}

?>
