<?php
namespace Catharsis\Web;

/**
 * Gravatar widgets helpers trait.
 */
trait GravatarWidgetsTrait
{
  private static $gravatar;

  /**
   * Returns factory class instance for rendering Gravatar widgets.
   * @return \Catharsis\Web\GravatarWidgetsFactory
   */
  public static function gravatar()
  {
    return empty(self::$gravatar) ? (self::$gravatar = new GravatarWidgetsFactory()) : self::$gravatar;
  }
}