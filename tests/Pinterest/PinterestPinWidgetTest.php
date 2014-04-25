<?php

/**
 * Tests set for class {@link Catharsis\Web\PinterestPinWidget}
 */
final class PinterestPinWidgetTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of class constructor(s).
     * @link Catharsis\Web\PinterestPinWidget::__construct()
     */
    public function test_constructors()
    {
        $widget = new Catharsis\Web\PinterestPinWidget();
        $this->assertAttributeEmpty("_id", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\PinterestPinWidget::id(string $id)} method.
     */
    public function test_id_method()
    {
        $widget = new Catharsis\Web\PinterestPinWidget();
        $this->assertAttributeEmpty("_id", $widget);
        $this->assertSame($widget, $widget->id("id"));
        $this->assertAttributeEquals("id", "_id", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\PinterestPinWidget::__toString()} method.
     */
    public function test_toString_method()
    {
        $widget = new Catharsis\Web\PinterestPinWidget();
        $this->assertEmpty((string) $widget);

        $widget = new Catharsis\Web\PinterestPinWidget();
        $this->assertEquals('<a data-pin-do="embedPin" href="http://www.pinterest.com/pin/id"></a>',
                            (string) $widget->id("id"));
    }
}

?>
