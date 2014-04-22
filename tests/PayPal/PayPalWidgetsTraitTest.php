<?php

/**
 * Tests set for trait {@link Catharsis\Web\PayPalWidgetsTrait}
 */
final class PayPalWidgetsTraitTest extends PHPUnit_Framework_TestCase
{
  use Catharsis\Web\PayPalWidgetsTrait;

  /**
   ** Performs testing of {@link Catharsis\Web\PayPalWidgetsTrait::paypal()} method.
   */
  public function test_paypal_method()
  {
    $this->assertAttributeEmpty("paypal", get_class());
    $this->assertSame(self::paypal(), self::paypal());
    $this->assertInstanceOf("Catharsis\Web\PayPalWidgetsFactory", self::paypal());
  }
}