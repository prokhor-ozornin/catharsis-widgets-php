<?php
namespace Catharsis\Web;

/**
 * PayPal widgets helpers trait.
 */
trait PayPalWidgetsTrait
{
  private static $paypal;

  /**
   * Returns factory class instance for rendering PayPal widgets.
   * @return \Catharsis\Web\PayPalWidgetsFactory
   */
  public static function paypal()
  {
    return empty(self::$paypal) ? (self::$paypal = new PayPalWidgetsFactory()) : self::$paypal;
  }
}