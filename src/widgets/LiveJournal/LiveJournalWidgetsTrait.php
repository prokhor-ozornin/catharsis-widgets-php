<?php
namespace Catharsis\Web;

/**
 * LiveJournal widgets helpers trait.
 */
trait LiveJournalWidgetsTrait
{
  private static $livejournal;

  /**
   * Returns factory class instance for rendering LiveJournal widgets.
   * @return \Catharsis\Web\LiveJournalWidgetsFactory
   */
  public static function livejournal()
  {
    return empty(self::$livejournal) ? (self::$livejournal = new LiveJournalWidgetsFactory()) : self::$livejournal;
  }
}