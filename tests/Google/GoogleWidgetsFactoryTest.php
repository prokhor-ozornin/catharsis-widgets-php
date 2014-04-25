<?php

/**
 * Tests set for class {@link Catharsis\Web\GoogleWidgetsFactory}
 */
final class GoogleWidgetsFactoryTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of {@link Catharsis\Web\GoogleWidgetsFactory::analytics()} method.
     */
    public function test_analytics_method()
    {
        $factory = new Catharsis\Web\GoogleWidgetsFactory();
        $this->assertNotSame($factory->analytics(), $factory->analytics());
        $this->assertInstanceOf("Catharsis\Web\GoogleAnalyticsWidget",
                                $factory->analytics());
    }

    /**
     * Performs testing of {@link Catharsis\Web\GoogleWidgetsFactory::map()} method.
     */
    /* public function test_map_method()
      {
      $factory = new Catharsis\Web\GoogleWidgetsFactory();
      $this->assertNotSame($factory->map(), $factory->map());
      $this->assertInstanceOf("Catharsis\Web\GoogleMapWidget", $factory->map());
      } */

    /**
     * Performs testing of {@link Catharsis\Web\GoogleWidgetsFactory::plusOneButton()} method.
     */
    public function test_plusOneButton_method()
    {
        $factory = new Catharsis\Web\GoogleWidgetsFactory();

        $this->assertNotSame($factory->plusOneButton(),
                             $factory->plusOneButton());

        $this->assertInstanceOf("Catharsis\Web\GooglePlusOneButtonWidget",
                                $factory->plusOneButton());
    }
}

?>
