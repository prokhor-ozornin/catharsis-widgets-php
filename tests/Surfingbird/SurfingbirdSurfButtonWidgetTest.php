<?php

/**
 * Tests set for class {@link Catharsis\Web\SurfingbirdSurfButtonWidget}
 */
final class SurfingbirdSurfButtonWidgetTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of class constructor(s).
     * @link Catharsis\Web\SurfingbirdSurfButtonWidget::__construct()
     */
    public function test_constructors()
    {
        $widget = new Catharsis\Web\SurfingbirdSurfButtonWidget();
        $this->assertAttributeEmpty("_color", $widget);
        $this->assertAttributeEquals(false, "_counter", $widget);
        $this->assertAttributeEmpty("_height", $widget);
        $this->assertAttributeEquals("Surf", "_label", $widget);
        $this->assertAttributeEquals(Catharsis\Web\SurfingbirdSurfButtonLayout::Common, "_layout", $widget);
        $this->assertAttributeEmpty("_url", $widget);
        $this->assertAttributeEmpty("_width", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\SurfingbirdSurfButtonWidget::color(string $color)} method.
     */
    public function test_color_method()
    {
        $widget = new Catharsis\Web\SurfingbirdSurfButtonWidget();
        $this->assertAttributeEmpty("_color", $widget);
        $this->assertSame($widget, $widget->color("color"));
        $this->assertAttributeEquals("color", "_color", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\SurfingbirdSurfButtonWidget::counter(boolean $show)} method.
     */
    public function test_counter_method()
    {
        $widget = new Catharsis\Web\SurfingbirdSurfButtonWidget();
        $this->assertAttributeEquals(false, "_counter", $widget);
        $this->assertSame($widget, $widget->counter());
        $this->assertAttributeEquals(true, "_counter", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\SurfingbirdSurfButtonWidget::height(string $height)} method.
     */
    public function test_height_method()
    {
        $widget = new Catharsis\Web\SurfingbirdSurfButtonWidget();
        $this->assertAttributeEmpty("_height", $widget);
        $this->assertSame($widget, $widget->height("height"));
        $this->assertAttributeEquals("height", "_height", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\SurfingbirdSurfButtonWidget::label(string $label)} method.
     */
    public function test_label_method()
    {
        $widget = new Catharsis\Web\SurfingbirdSurfButtonWidget();
        $this->assertAttributeEquals("Surf", "_label", $widget);
        $this->assertSame($widget, $widget->label("label"));
        $this->assertAttributeEquals("label", "_label", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\SurfingbirdSurfButtonWidget::layout(string $layout)} method.
     */
    public function test_layout_method()
    {
        $widget = new Catharsis\Web\SurfingbirdSurfButtonWidget();
        $this->assertAttributeEquals(Catharsis\Web\SurfingbirdSurfButtonLayout::Common, "_layout", $widget);
        $this->assertSame($widget, $widget->layout("layout"));
        $this->assertAttributeEquals("layout", "_layout", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\SurfingbirdSurfButtonWidget::url(string $url)} method.
     */
    public function test_url_method()
    {
        $widget = new Catharsis\Web\SurfingbirdSurfButtonWidget();
        $this->assertAttributeEmpty("_url", $widget);
        $this->assertSame($widget, $widget->url("url"));
        $this->assertAttributeEquals("url", "_url", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\SurfingbirdSurfButtonWidget::width(string $width)} method.
     */
    public function test_width_method()
    {
        $widget = new Catharsis\Web\SurfingbirdSurfButtonWidget();
        $this->assertAttributeEmpty("_width", $widget);
        $this->assertSame($widget, $widget->width("width"));
        $this->assertAttributeEquals("width", "_width", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\SurfingbirdSurfButtonWidget::__toString()} method.
     */
    public function test_toString_method()
    {
        $widget = new Catharsis\Web\SurfingbirdSurfButtonWidget();
        $this->assertEquals('<a class="surfinbird__like_button" data-surf-config="{&quot;layout&quot;:&quot;common-nocount&quot;}" href="http://surfingbird.ru/share" target="_blank">Surf</a>',
                            (string) $widget);

        $widget = new Catharsis\Web\SurfingbirdSurfButtonWidget();
        $this->assertEquals('<a class="surfinbird__like_button" data-surf-config="{&quot;layout&quot;:&quot;common-blue&quot;,&quot;url&quot;:&quot;url&quot;,&quot;width&quot;:&quot;width&quot;,&quot;height&quot;:&quot;height&quot;}" href="http://surfingbird.ru/share" target="_blank">Share</a>',
                            (string) $widget->color(Catharsis\Web\SurfingbirdSurfButtonColor::Blue)->counter()->label("Share")->url("url")->layout(Catharsis\Web\SurfingbirdSurfButtonLayout::Common)->width("width")->height("height"));
    }
}

?>
