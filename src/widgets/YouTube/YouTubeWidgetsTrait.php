<?php
/**
 * YouTubeWidgetsTrait trait.
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
 * YouTube widgets helpers trait.
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
trait YouTubeWidgetsTrait
{
    private static $_youtube;

    /**
     * Returns factory class instance for rendering YouTube widgets.
     * @return \Catharsis\Web\YouTubeWidgetsFactory
     */
    public static function youtube()
    {
        return empty(self::$_youtube)
            ? (self::$_youtube = new YouTubeWidgetsFactory())
            : self::$_youtube;
    }
}

?>
