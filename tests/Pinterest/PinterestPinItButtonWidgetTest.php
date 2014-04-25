<?php

/**
 * Tests set for class {@link Catharsis\Web\PinterestPinItButtonWidget}
 */
final class PinterestPinItButtonWidgetTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of class constructor(s).
     * @link Catharsis\Web\PinterestPinItButtonWidget::__construct()
     */
    public function test_constructors()
    {
        $widget = new Catharsis\Web\PinterestPinItButtonWidget();
        $this->assertAttributeEquals("gray", "_color", $widget);
        $this->assertAttributeEquals(Catharsis\Web\PinterestPinItButtonPinCountPosition::None, "_counter", $widget);
        $this->assertAttributeEmpty("_description", $widget);
        $this->assertAttributeEmpty("_image", $widget);
        $this->assertAttributeEquals("en", "_language", $widget);
        $this->assertAttributeEquals(Catharsis\Web\PinterestPinItButtonShape::Rectangular, "_shape", $widget);
        $this->assertAttributeEquals(Catharsis\Web\PinterestPinItButtonSize::Small, "_size", $widget);
        $this->assertAttributeEmpty("_url", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\PinterestPinItButtonWidget::color(string $color)} method.
     */
    public function test_color_method()
    {
        $widget = new Catharsis\Web\PinterestPinItButtonWidget();
        $this->assertAttributeEquals("gray", "_color", $widget);
        $this->assertSame($widget, $widget->color("color"));
        $this->assertAttributeEquals("color", "_color", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\PinterestPinItButtonWidget::counter(string $position)} method.
     */
    public function test_counter_method()
    {
        $widget = new Catharsis\Web\PinterestPinItButtonWidget();
        $this->assertAttributeEquals(Catharsis\Web\PinterestPinItButtonPinCountPosition::None, "_counter", $widget);
        $this->assertSame($widget, $widget->counter("counter"));
        $this->assertAttributeEquals("counter", "_counter", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\PinterestPinItButtonWidget::description(string $description)} method.
     */
    public function test_description_method()
    {
        $widget = new Catharsis\Web\PinterestPinItButtonWidget();
        $this->assertAttributeEmpty("_description", $widget);
        $this->assertSame($widget, $widget->description("description"));
        $this->assertAttributeEquals("description", "_description", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\PinterestPinItButtonWidget::gray()} method.
     */
    public function test_gray_method()
    {
        $widget = new Catharsis\Web\PinterestPinItButtonWidget();
        $this->assertSame($widget, $widget->gray());
        $this->assertAttributeEquals("gray", "_color", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\PinterestPinItButtonWidget::image(string $image)} method.
     */
    public function test_image_method()
    {
        $widget = new Catharsis\Web\PinterestPinItButtonWidget();
        $this->assertAttributeEmpty("_image", $widget);
        $this->assertSame($widget, $widget->image("image"));
        $this->assertAttributeEquals("image", "_image", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\PinterestPinItButtonWidget::language(string $language)} method.
     */
    public function test_language_method()
    {
        $widget = new Catharsis\Web\PinterestPinItButtonWidget();
        $this->assertAttributeEquals("en", "_language", $widget);
        $this->assertSame($widget, $widget->language("language"));
        $this->assertAttributeEquals("language", "_language", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\PinterestPinItButtonWidget::red()} method.
     */
    public function test_red_method()
    {
        $widget = new Catharsis\Web\PinterestPinItButtonWidget();
        $this->assertSame($widget, $widget->red());
        $this->assertAttributeEquals("red", "_color", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\PinterestPinItButtonWidget::shape(string $shape)} method.
     */
    public function test_shape_method()
    {
        $widget = new Catharsis\Web\PinterestPinItButtonWidget();
        $this->assertAttributeEquals(Catharsis\Web\PinterestPinItButtonShape::Rectangular, "_shape", $widget);
        $this->assertSame($widget, $widget->shape("shape"));
        $this->assertAttributeEquals("shape", "_shape", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\PinterestPinItButtonWidget::size(string $size)} method.
     */
    public function test_size_method()
    {
        $widget = new Catharsis\Web\PinterestPinItButtonWidget();
        $this->assertAttributeEquals(Catharsis\Web\PinterestPinItButtonSize::Small, "_size", $widget);
        $this->assertSame($widget, $widget->size("size"));
        $this->assertAttributeEquals("size", "_size", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\PinterestPinItButtonWidget::url(string $url)} method.
     */
    public function test_url_method()
    {
        $widget = new Catharsis\Web\PinterestPinItButtonWidget();
        $this->assertAttributeEmpty("_url", $widget);
        $this->assertSame($widget, $widget->url("url"));
        $this->assertAttributeEquals("url", "_url", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\PinterestPinItButtonWidget::white()} method.
     */
    public function test_white_method()
    {
        $widget = new Catharsis\Web\PinterestPinItButtonWidget();
        $this->assertSame($widget, $widget->white());
        $this->assertAttributeEquals("white", "_color", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\PinterestPinItButtonWidget::__toString()} method.
     */
    public function test_toString_method()
    {
        $widget = new Catharsis\Web\PinterestPinItButtonWidget();
        $this->assertEmpty((string) $widget);

        $widget = new Catharsis\Web\PinterestPinItButtonWidget();
        $this->assertEmpty((string) $widget->url("url")->image("image"));

        $widget = new Catharsis\Web\PinterestPinItButtonWidget();
        $this->assertEmpty((string) $widget->url("url")->description("description"));

        $widget = new Catharsis\Web\PinterestPinItButtonWidget();
        $this->assertEmpty((string) $widget->image("image")->description("description"));

        $widget = new Catharsis\Web\PinterestPinItButtonWidget();
        $this->assertEquals('<a data-pin-color="gray" data-pin-config="none" data-pin-do="buttonPin" data-pin-height="20" data-pin-lang="en" data-pin-shape="rect" href="http://www.pinterest.com/pin/create/button/?url=url&amp;media=image&amp;description=description"><img src="http://assets.pinterest.com/images/pidgets/pinit_fg_en_rect_gray_20.png"/></a>',
                            (string) $widget->url("url")->image("image")->description("description"));

        $widget = new Catharsis\Web\PinterestPinItButtonWidget();
        $this->assertEquals('<a data-pin-color="color" data-pin-config="above" data-pin-do="buttonPin" data-pin-height="28" data-pin-lang="language" data-pin-shape="rect" href="http://www.pinterest.com/pin/create/button/?url=url&amp;media=image&amp;description=description"><img src="http://assets.pinterest.com/images/pidgets/pinit_fg_language_rect_color_28.png"/></a>',
                            (string) $widget->url("url")->image("image")->description("description")->color("color")->counter(Catharsis\Web\PinterestPinItButtonPinCountPosition::Above)->language("language")->size(Catharsis\Web\PinterestPinItButtonSize::Large));
    }
}

?>
