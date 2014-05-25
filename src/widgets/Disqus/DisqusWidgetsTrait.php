<?php
/**
 * DisqusWidgetsTrait trait.
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
 * Disqus widgets helpers trait.
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
trait DisqusWidgetsTrait
{
    private static $_disqus;

    /**
     * Returns factory class instance for rendering Disqus widgets.
     * @return \Catharsis\Web\DisqusWidgetsFactory
     */
    public static function disqus()
    {
        return empty(self::$_disqus)
            ? (self::$_disqus = new DisqusWidgetsFactory())
            : self::$_disqus;
    }
}

?>
