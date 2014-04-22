<?php

/**
 * Tests set for class {@link Catharsis\Web\SurfingbirdWidgetsFactory}
 */
final class SurfingbirdWidgetsFactoryTest extends PHPUnit_Framework_TestCase
{
  /**
   ** Performs testing of {@link Catharsis\Web\SurfingbirdWidgetsFactory::surf()} method.
   */
  public function test_surf_method()
  {
    $factory = new Catharsis\Web\SurfingbirdWidgetsFactory();
    $this->assertNotSame($factory->surf(), $factory->surf());
    $this->assertInstanceOf("Catharsis\Web\SurfingbirdSurfButtonWidget", $factory->surf());
  }
}