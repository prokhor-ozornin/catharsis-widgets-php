<?php
namespace Catharsis\Web;

/**
 * Yandex widgets helpers trait.
 */
trait YandexWidgetsTrait
{
  private static $yandex;

  /**
   * Returns factory class instance for rendering Yandex widgets.
   * @return \Catharsis\Web\YandexWidgetsFactory
   */
  public static function yandex()
  {
    return empty(self::$yandex) ? (self::$yandex = new YandexWidgetsFactory()) : self::$yandex;
  }
}