<?php
namespace Catharsis\Web;

/**
 * Facebook widgets helpers trait.
 */
trait FacebookWidgetsTrait
{
  private static $facebook;

  /**
   * Returns factory class instance for rendering Facebook widgets.
   * @return \Catharsis\Web\FacebookWidgetsFactory
   */
  public static function facebook()
  {
    return empty(self::$facebook) ? (self::$facebook = new FacebookWidgetsFactory()) : self::$facebook;
  }
}