<?php
namespace Catharsis\Web;

/**
 * Mail.ru widgets helpers trait.
 */
trait MailRuWidgetsTrait
{
  private static $mailru;

  /**
   * Returns factory class instance for rendering Mail.ru widgets.
   * @return \Catharsis\Web\MailRuWidgetsFactory
   */
  public static function mailru()
  {
    return empty(self::$mailru) ? (self::$mailru = new MailRuWidgetsFactory()) : self::$mailru;
  }
}