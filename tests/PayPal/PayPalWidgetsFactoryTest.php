<?php

/**
 * Tests set for class {@link Catharsis\Web\PayPalWidgetsFactory}
 */
final class PayPalWidgetsFactoryTest extends PHPUnit_Framework_TestCase
{
  /**
   ** Performs testing of {@link Catharsis\Web\PayPalWidgetsFactory::buy_gift_certificate()} method.
   */
  public function test_buy_gift_certificate_method()
  {
    $factory = new Catharsis\Web\PayPalWidgetsFactory();
    $this->assertNotSame($factory->buy_gift_certificate(), $factory->buy_gift_certificate());
    $this->assertInstanceOf("Catharsis\Web\PayPalBuyGiftCertificateWidget", $factory->buy_gift_certificate());
  }

  /**
   ** Performs testing of {@link Catharsis\Web\PayPalWidgetsFactory::buy_now()} method.
   */
  public function test_buy_now_method()
  {
    $factory = new Catharsis\Web\PayPalWidgetsFactory();
    $this->assertNotSame($factory->buy_now(), $factory->buy_now());
    $this->assertInstanceOf("Catharsis\Web\PayPalBuyNowWidget", $factory->buy_now());
  }

  /**
   ** Performs testing of {@link Catharsis\Web\PayPalWidgetsFactory::donate()} method.
   */
  public function test_donate_method()
  {
    $factory = new Catharsis\Web\PayPalWidgetsFactory();
    $this->assertNotSame($factory->donate(), $factory->donate());
    $this->assertInstanceOf("Catharsis\Web\PayPalDonateWidget", $factory->donate());
  }

  /**
   ** Performs testing of {@link Catharsis\Web\PayPalWidgetsFactory::subscribe()} method.
   */
  public function test_subscribe_method()
  {
    $factory = new Catharsis\Web\PayPalWidgetsFactory();
    $this->assertNotSame($factory->subscribe(), $factory->subscribe());
    $this->assertInstanceOf("Catharsis\Web\PayPalSubscribeWidget", $factory->subscribe());
  }
}