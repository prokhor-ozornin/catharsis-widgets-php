<?php

/**
 * Tests set for trait {@link Catharsis\Web\SurfingbirdWidgetsTrait}
 */
final class SurfingbirdWidgetsTraitTest extends PHPUnit_Framework_TestCase
{
    use Catharsis\Web\SurfingbirdWidgetsTrait;

    /**
     * * Performs testing of {@link Catharsis\Web\SurfingbirdWidgetsTrait::surfingbird()} method.
     */
    public function test_surfingbird_method()
    {
        $this->assertAttributeEmpty("_surfingbird", get_class());
        $this->assertSame(self::surfingbird(), self::surfingbird());
        $this->assertInstanceOf("Catharsis\Web\SurfingbirdWidgetsFactory", self::surfingbird());
    }
}

?>
