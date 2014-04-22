<?php
namespace Catharsis\Web;

/**
 * SoundCloud widgets helpers trait.
 */
trait SoundCloudWidgetsTrait
{
  private static $soundcloud;

  /**
   * Returns factory class instance for rendering SoundCloud widgets.
   * @return \Catharsis\Web\SoundCloudWidgetsFactory
   */
  public static function soundcloud()
  {
    return empty(self::$soundcloud) ? (self::$soundcloud = new SoundCloudWidgetsFactory()) : self::$soundcloud;
  }
}