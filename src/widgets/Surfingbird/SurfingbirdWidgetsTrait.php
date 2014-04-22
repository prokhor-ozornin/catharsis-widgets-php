<?php
namespace Catharsis\Web;

/**
 * Surfingbird widgets helpers trait.
 */
trait SurfingbirdWidgetsTrait
{
  private static $surfingbird;

  /**
   * Returns factory class instance for rendering Surfingbird widgets.
   * @return \Catharsis\Web\SurfingbirdWidgetsFactory
   */
  public static function surfingbird()
  {
    return empty(self::$surfingbird) ? (self::$surfingbird = new SurfingbirdWidgetsFactory()) : self::$surfingbird;
  }
}