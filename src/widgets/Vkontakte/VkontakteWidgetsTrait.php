<?php
namespace Catharsis\Web;

/**
 * Vkontakte widgets helpers trait.
 */
trait VkontakteWidgetsTrait
{
  private static $vkontakte;

  /**
   * Returns factory class instance for rendering Vkontakte widgets.
   * @return \Catharsis\Web\VkontakteWidgetsFactory
   */
  public static function vkontakte()
  {
    return empty(self::$vkontakte) ? (self::$vkontakte = new VkontakteWidgetsFactory()) : self::$vkontakte;
  }
}