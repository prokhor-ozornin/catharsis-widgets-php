<?php
/**
 * VideoJSWidgetsTrait class.
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
 * VideoJS widgets helpers trait.
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
trait VideoJSWidgetsTrait
{
    private static $_videojs;

    /**
     * Returns factory class instance for rendering VideoJS widgets.
     * @return \Catharsis\Web\VideoJSWidgetsFactory
     */
    public static function videojs()
    {
        return empty(self::$_videojs)
            ? (self::$_videojs = new VideoJSWidgetsFactory())
            : self::$_videojs;
    }
}

?>
