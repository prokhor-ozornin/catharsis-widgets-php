<?php
namespace Catharsis\Web;

/**
 * LiveJournal widgets helpers trait.
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
