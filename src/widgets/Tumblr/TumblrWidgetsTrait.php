<?php
namespace Catharsis\Web;

/**
 * Tumblr widgets helpers trait.
 */
trait TumblrWidgetsTrait
{
  private static $tumblr;

  /**
   * Returns factory class instance for rendering Tumblr widgets.
   * @return \Catharsis\Web\TumblrWidgetsFactory
   */
  public static function tumblr()
  {
    return empty(self::$tumblr) ? (self::$tumblr = new TumblrWidgetsFactory()) : self::$tumblr;
  }
}