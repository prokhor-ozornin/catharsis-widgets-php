<?php

/**
 * Tests set for trait {@link Catharsis\Web\LiveJournalWidgetsTrait}
 */
final class LiveJournalWidgetsTraitTest extends PHPUnit_Framework_TestCase
{
    use Catharsis\Web\LiveJournalWidgetsTrait;

    /**
     * Performs testing of {@link Catharsis\Web\LiveJournalWidgetsTrait::livejournal()} method.
     */
    public function test_livejournal_method()
    {
        $this->assertAttributeEmpty("_livejournal", get_class());
        $this->assertSame(self::livejournal(), self::livejournal());
        $this->assertInstanceOf("Catharsis\Web\LiveJournalWidgetsFactory", self::livejournal());
    }
}

?>
