<?php
/**
 * CackleWidgetsTrait trait.
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
 * Cackle widgets helpers trait.
 * 
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
trait CackleWidgetsTrait
{
    private static $_cackle;

    /**
     * Returns factory class instance for rendering Cackle widgets.
     * @return \Catharsis\Web\CackleWidgetsFactory
     */
    public static function cackle()
    {
        return empty(self::$_cackle)
            ? (self::$_cackle = new CackleWidgetsFactory())
            : self::$_cackle;
    }
}

?>
