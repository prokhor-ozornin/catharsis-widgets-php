<?php

/**
 * Tests set for class {@link Catharsis\Web\PinterestBoardWidget}
 */
final class PinterestBoardWidgetTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of class constructor(s).
     * @link Catharsis\Web\PinterestBoardWidget::__construct()
     */
    public function test_constructors()
    {
        $widget = new Catharsis\Web\PinterestBoardWidget();
        $this->assertAttributeEmpty("_account", $widget);
        $this->assertAttributeEmpty("_height", $widget);
        $this->assertAttributeEmpty("_id", $widget);
        $this->assertAttributeEmpty("_image", $widget);
        $this->assertAttributeEmpty("_width", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\PinterestBoardWidget::account(string $account)} method.
     */
    public function test_account_method()
    {
        $widget = new Catharsis\Web\PinterestBoardWidget();
        $this->assertAttributeEmpty("_account", $widget);
        $this->assertSame($widget, $widget->account("account"));
        $this->assertAttributeEquals("account", "_account", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\PinterestBoardWidget::height(string $height)} method.
     */
    public function test_height_method()
    {
        $widget = new Catharsis\Web\PinterestBoardWidget();
        $this->assertAttributeEmpty("_height", $widget);
        $this->assertSame($widget, $widget->height("height"));
        $this->assertAttributeEquals("height", "_height", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\PinterestBoardWidget::header()} method.
     */
    public function test_header_method()
    {
        $widget = new Catharsis\Web\PinterestBoardWidget();
        $this->assertSame($widget, $widget->header());
        $this->assertAttributeEquals("115", "_image", $widget);
        $this->assertAttributeEquals("120", "_height", $widget);
        $this->assertAttributeEquals("900", "_width", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\PinterestBoardWidget::id()} method.
     */
    public function test_id_method()
    {
        $widget = new Catharsis\Web\PinterestBoardWidget();
        $this->assertAttributeEmpty("_id", $widget);
        $this->assertSame($widget, $widget->id("id"));
        $this->assertAttributeEquals("id", "_id", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\PinterestBoardWidget::image(string $width)} method.
     */
    public function test_image_method()
    {
        $widget = new Catharsis\Web\PinterestBoardWidget();
        $this->assertAttributeEmpty("_image", $widget);
        $this->assertSame($widget, $widget->image("image"));
        $this->assertAttributeEquals("image", "_image", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\PinterestBoardWidget::sidebar()} method.
     */
    public function test_sidebar_method()
    {
        $widget = new Catharsis\Web\PinterestBoardWidget();
        $this->assertSame($widget, $widget->sidebar());
        $this->assertAttributeEquals("60", "_image", $widget);
        $this->assertAttributeEquals("800", "_height", $widget);
        $this->assertAttributeEquals("150", "_width", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\PinterestBoardWidget::square()} method.
     */
    public function test_square_method()
    {
        $widget = new Catharsis\Web\PinterestBoardWidget();
        $this->assertSame($widget, $widget->square());
        $this->assertAttributeEquals("80", "_image", $widget);
        $this->assertAttributeEquals("320", "_height", $widget);
        $this->assertAttributeEquals("400", "_width", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\PinterestBoardWidget::width(string $width)} method.
     */
    public function test_width_method()
    {
        $widget = new Catharsis\Web\PinterestBoardWidget();
        $this->assertAttributeEmpty("_width", $widget);
        $this->assertSame($widget, $widget->width("width"));
        $this->assertAttributeEquals("width", "_width", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\PinterestBoardWidget::__toString()} method.
     */
    public function test_toString_method()
    {
        $widget = new Catharsis\Web\PinterestBoardWidget();
        $this->assertEmpty((string) $widget);

        $widget = new Catharsis\Web\PinterestBoardWidget();
        $this->assertEquals('<a data-pin-do="embedBoard" href="http://www.pinterest.com/account/id"></a>',
                            (string) $widget->account("account")->id("id"));

        $widget = new Catharsis\Web\PinterestBoardWidget();
        $this->assertEquals('<a data-pin-board-width="width" data-pin-do="embedBoard" data-pin-scale-height="height" data-pin-scale-width="image" href="http://www.pinterest.com/account/id"></a>',
                            (string) $widget->account("account")->id("id")->width("width")->height("height")->image("image"));
    }
}

?>
