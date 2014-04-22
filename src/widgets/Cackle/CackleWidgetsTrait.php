<?php
namespace Catharsis\Web;

/**
 * Cackle widgets helpers trait.
 */
trait CackleWidgetsTrait
{
  private static $cackle;

  /**
   * Returns factory class instance for rendering Cackle widgets.
   * @return \Catharsis\Web\CackleWidgetsFactory
   */
  public static function cackle()
  {
    return empty(self::$cackle) ? (self::$cackle = new CackleWidgetsFactory()) : self::$cackle;
  }
}