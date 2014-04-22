<?php
namespace Catharsis\Web;

/**
 * RuTube widgets helpers trait.
 */
trait RuTubeWidgetsTrait
{
  private static $rutube;

  /**
   * Returns factory class instance for rendering RuTube widgets.
   * @return \Catharsis\Web\RuTubeWidgetsFactory
   */
  public static function rutube()
  {
    return empty(self::$rutube) ? (self::$rutube = new RuTubeWidgetsFactory()) : self::$rutube;
  }
}