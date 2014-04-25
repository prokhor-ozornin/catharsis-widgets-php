<?php

/**
 * Tests set for trait {@link Catharsis\Web\FacebookWidgetsTrait}
 */
final class FacebookWidgetsTraitTest extends PHPUnit_Framework_TestCase
{
    use Catharsis\Web\FacebookWidgetsTrait;

    /**
     * Performs testing of {@link Catharsis\Web\FacebookWidgetsTrait::facebook()} method.
     */
    public function test_facebook_method()
    {
        $this->assertAttributeEmpty("_facebook", get_class());

        $this->assertSame(self::facebook(), self::facebook());

        $this->assertInstanceOf("Catharsis\Web\FacebookWidgetsFactory", self::facebook());
    }
}

?>
