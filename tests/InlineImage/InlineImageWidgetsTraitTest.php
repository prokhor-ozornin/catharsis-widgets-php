<?php

/**
 * Tests set for trait {@link Catharsis\Web\InlineImageWidgetsTrait}
 */
final class InlineImageWidgetsTraitTest extends PHPUnit_Framework_TestCase
{
    use Catharsis\Web\InlineImageWidgetsTrait;

    /**
     * Performs testing of {@link Catharsis\Web\InlineImageWidgetsTrait::inlineImage()} method.
     */
    public function test_inlineImage_method()
    {
        $this->assertNotSame(self::inlineImage(), self::inlineImage());
        $this->assertInstanceOf("Catharsis\Web\InlineImageWidget", self::inlineImage());
    }
}

?>
