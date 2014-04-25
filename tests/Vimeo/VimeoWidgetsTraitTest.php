<?php

/**
 * Tests set for trait {@link Catharsis\Web\VimeoWidgetsTrait}
 */
final class VimeoWidgetsTraitTest extends PHPUnit_Framework_TestCase
{
    use Catharsis\Web\VimeoWidgetsTrait;

    /**
     * * Performs testing of {@link Catharsis\Web\VimeoWidgetsTrait::vimeo()} method.
     */
    public function test_vimeo_method()
    {
        $this->assertAttributeEmpty("_vimeo", get_class());
        $this->assertSame(self::vimeo(), self::vimeo());
        $this->assertInstanceOf("Catharsis\Web\VimeoWidgetsFactory", self::vimeo());
    }
}

?>
