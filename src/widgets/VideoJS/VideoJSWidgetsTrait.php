<?php
namespace Catharsis\Web;

/**
 * VideoJS widgets helpers trait.
 */
trait VideoJSWidgetsTrait
{
  private static $videojs;

  /**
   * Returns factory class instance for rendering VideoJS widgets.
   * @return \Catharsis\Web\VideoJSWidgetsFactory
   */
  public static function videojs()
  {
    return empty(self::$videojs) ? (self::$videojs = new VideoJSWidgetsFactory()) : self::$videojs;
  }
}