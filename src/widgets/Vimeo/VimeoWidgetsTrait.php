<?php
namespace Catharsis\Web;

/**
 * Vimeo widgets helpers trait.
 */
trait VimeoWidgetsTrait
{
  private static $vimeo;

  /**
   *
   * @return \Catharsis\Web\VimeoWidgetsFactory
   */
  public static function vimeo()
  {
    return empty(self::$vimeo) ? (self::$vimeo = new VimeoWidgetsFactory()) : self::$vimeo;
  }
}