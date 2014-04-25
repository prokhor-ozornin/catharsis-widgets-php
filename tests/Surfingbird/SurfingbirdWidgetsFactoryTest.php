<?php

/**
 * Tests set for class {@link Catharsis\Web\SurfingbirdWidgetsFactory}
 */
final class SurfingbirdWidgetsFactoryTest extends PHPUnit_Framework_TestCase
{
    /**
     * * Performs testing of {@link Catharsis\Web\SurfingbirdWidgetsFactory::surfButton()} method.
     */
    public function test_surfButton_method()
    {
        $factory = new Catharsis\Web\SurfingbirdWidgetsFactory();
        $this->assertNotSame($factory->surfButton(), $factory->surfButton());
        $this->assertInstanceOf("Catharsis\Web\SurfingbirdSurfButtonWidget", $factory->surfButton());
    }
}

?>
