<?php
namespace Catharsis\Web;

/**
 * Robokassa widgets helpers trait.
 */
trait RobokassaWidgetsTrait
{
  private static $robokassa;

  /**
   * Returns factory class instance for rendering Robokassa widgets.
   * @return \Catharsis\Web\RobokassaWidgetsFactory
   */
  public static function robokassa()
  {
    return empty(self::$robokassa) == null ? (self::$robokassa = new RobokassaWidgetsFactory()) : self::$robokassa;
  }
}