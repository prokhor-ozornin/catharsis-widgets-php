<?php
namespace Catharsis\Web;

/**
 * Twitter widgets helpers trait.
 */
trait TwitterWidgetsTrait
{
  private static $twitter;

  /**
   * Returns factory class instance for rendering Twitter widgets.
   * @return \Catharsis\Web\TwitterWidgetsFactory
   */
  public static function twitter()
  {
    return empty(self::$twitter) ? (self::$twitter = new TwitterWidgetsFactory()) : self::$twitter;
  }
}