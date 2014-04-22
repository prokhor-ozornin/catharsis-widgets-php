<?php
namespace Catharsis\Web;

/**
 * Google widgets helpers trait.
 */
trait GoogleWidgetsTrait
{
  private static $google;

  /**
   * Returns factory class instance for rendering Google widgets.
   * @return \Catharsis\Web\GoogleWidgetsFactory
   */
  public static function google()
  {
    return empty(self::$google) ? (self::$google = new GoogleWidgetsFactory()) : self::$google;
  }
}