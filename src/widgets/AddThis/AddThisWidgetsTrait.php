<?php
namespace Catharsis\Web;

/**
 * AddThis widgets helpers trait.
 */
trait AddThisWidgetsTrait
{
  private static $addthis;

  /**
   * Returns factory class instance for rendering AddThis widgets.
   * @return \Catharsis\Web\AddThisWidgetsFactory
   */
  public static function addthis()
  {
    return empty(self::$addthis) ? (self::$addthis = new AddThisWidgetsFactory()) : self::$addthis;
  }
}