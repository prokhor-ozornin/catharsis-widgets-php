<?php
/**
 * LiveJournalWidgetsTrait trait.
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
 * LiveJournal widgets helpers trait.
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
trait LiveJournalWidgetsTrait
{
    private static $_livejournal;

    /**
     * Returns factory class instance for rendering LiveJournal widgets.
     * @return \Catharsis\Web\LiveJournalWidgetsFactory
     */
    public static function livejournal()
    {
        return empty(self::$_livejournal)
            ? (self::$_livejournal = new LiveJournalWidgetsFactory())
            : self::$_livejournal;
    }
}

?>
