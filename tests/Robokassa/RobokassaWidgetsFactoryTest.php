<?php

/**
 * Tests set for class {@link Catharsis\Web\RobokassaWidgetsFactory}
 */
final class RobokassaWidgetsFactoryTest extends PHPUnit_Framework_TestCase
{
  /**
   ** Performs testing of {@link Catharsis\Web\RobokassaWidgetsFactory::payment_form()} method.
   */
  public function test_payment_form_method()
  {
    $factory = new Catharsis\Web\PinterestWidgetsFactory();
    $this->assertNotSame($factory->payment_form(), $factory->payment_form());
    $this->assertInstanceOf("Catharsis\Web\RobokassaPaymentFormWidget", $factory->payment_form());
  }
}