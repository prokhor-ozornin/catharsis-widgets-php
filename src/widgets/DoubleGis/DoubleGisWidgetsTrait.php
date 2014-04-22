<?php
namespace Catharsis\Web;

/**
 * DoubleGis widgets helpers trait.
 */
trait DoubleGisWidgetsTrait
{
  private static $doublegis;

  /**
   * Returns factory class instance for rendering DoubleGis widgets.
   * @return \Catharsis\Web\DoubleGisWidgetsFactory
   */
  public static function doublegis()
  {
    return empty(self::$doublegis) ? (self::$doublegis = new DoubleGisWidgetsFactory()) : self::$doublegis;
  }
}