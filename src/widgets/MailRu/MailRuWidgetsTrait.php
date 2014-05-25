<?php
/**
 * MailRuWidgetsTrait trait.
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
 * Mail.ru widgets helpers trait.
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
trait MailRuWidgetsTrait
{
    private static $_mailru;

    /**
     * Returns factory class instance for rendering Mail.ru widgets.
     * @return \Catharsis\Web\MailRuWidgetsFactory
     */
    public static function mailru()
    {
        return empty(self::$_mailru)
            ? (self::$_mailru = new MailRuWidgetsFactory())
            : self::$_mailru;
    }
}

?>
