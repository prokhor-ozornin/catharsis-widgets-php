<?php
/**
 * SoundCloudWidgetsTrait trait.
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
 * SoundCloud widgets helpers trait.
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
trait SoundCloudWidgetsTrait
{
    private static $_soundcloud;

    /**
     * Returns factory class instance for rendering SoundCloud widgets.
     * @return \Catharsis\Web\SoundCloudWidgetsFactory
     */
    public static function soundcloud()
    {
        return empty(self::$_soundcloud)
            ? (self::$_soundcloud = new SoundCloudWidgetsFactory())
            : self::$_soundcloud;
    }
}

?>
