<?php

/**
 * Tests set for trait {@link Catharsis\Web\IntenseDebateWidgetsTrait}
 */
final class IntenseDebateWidgetsTraitTest extends PHPUnit_Framework_TestCase
{
    use Catharsis\Web\IntenseDebateWidgetsTrait;

    /**
     * Performs testing of {@link Catharsis\Web\IntenseDebateWidgetsTrait::intensedebate()} method.
     */
    public function test_intensedebate_method()
    {
        $this->assertAttributeEmpty("_intensedebate", get_class());
        $this->assertSame(self::intensedebate(), self::intensedebate());
        $this->assertInstanceOf("Catharsis\Web\IntenseDebateWidgetsFactory", self::intensedebate());
    }
}

?>
