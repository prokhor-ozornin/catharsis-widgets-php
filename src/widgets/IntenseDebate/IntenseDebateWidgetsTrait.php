<?php
/**
 * IntenseDebateWidgetsTrait trait.
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
 * IntenseDebate widgets helpers trait.
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
trait IntenseDebateWidgetsTrait
{
    private static $_intensedebate;

    /**
     * Returns factory class instance for rendering IntenseDebate widgets.
     * @return \Catharsis\Web\IntensedebateWidgetsFactory
     */
    public static function intensedebate()
    {
        return empty(self::$_intensedebate)
            ? (self::$_intensedebate = new IntenseDebateWidgetsFactory())
            : self::$_intensedebate;
    }
}

?>
