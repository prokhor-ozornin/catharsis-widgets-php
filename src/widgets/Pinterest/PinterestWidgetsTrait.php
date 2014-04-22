<?php
namespace Catharsis\Web;

/**
 * Pinterest widgets helpers trait.
 */
trait PinterestWidgetsTrait
{
  private static $pinterest;

  /**
   * Returns factory class instance for rendering Pinterest widgets.
   * @return \Catharsis\Web\PinterestWidgetsFactory
   */
  public static function pinterest()
  {
    return empty(self::$pinterest) ? (self::$pinterest = new PinterestWidgetsFactory()) : self::$pinterest;
  }
}