<?php
namespace Catharsis\Web;

/**
 * YouTube widgets helpers trait.
 */
trait YouTubeWidgetsTrait
{
  private static $youtube;

  /**
   * Returns factory class instance for rendering YouTube widgets.
   * @return \Catharsis\Web\YouTubeWidgetsFactory
   */
  public static function youtube()
  {
    return empty(self::$youtube) ? (self::$youtube = new YouTubeWidgetsFactory()) : self::$youtube;
  }
}