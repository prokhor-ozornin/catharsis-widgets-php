<?php

/**
 * Tests set for class {@link Catharsis\Web\GooglePlusOneButtonWidget}
 */
final class GooglePlusOneButtonWidgetTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of class constructor(s).
     * @link Catharsis\Web\GooglePlusOneButtonWidget::__construct()
     */
    public function test_constructors()
    {
        $widget = new Catharsis\Web\GooglePlusOneButtonWidget();
        $this->assertAttributeEmpty("_alignment", $widget);
        $this->assertAttributeEmpty("_annotation", $widget);
        $this->assertAttributeEmpty("_callback", $widget);
        $this->assertAttributeEmpty("_recommendations", $widget);
        $this->assertAttributeEmpty("_size", $widget);
        $this->assertAttributeEmpty("_url", $widget);
        $this->assertAttributeEmpty("_width", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\GooglePlusOneButtonWidget::alignment(string $alignment)} method.
     */
    public function test_alignment_method()
    {
        $widget = new Catharsis\Web\GooglePlusOneButtonWidget();
        $this->assertAttributeEmpty("_alignment", $widget);
        $this->assertSame($widget, $widget->alignment("alignment"));
        $this->assertAttributeEquals("alignment", "_alignment", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\GooglePlusOneButtonWidget::annotation(string $annotation)} method.
     */
    public function test_annotation_method()
    {
        $widget = new Catharsis\Web\GooglePlusOneButtonWidget();
        $this->assertAttributeEmpty("_annotation", $widget);
        $this->assertSame($widget, $widget->annotation("annotation"));
        $this->assertAttributeEquals("annotation", "_annotation", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\GooglePlusOneButtonWidget::callback(string $callback)} method.
     */
    public function test_callback_method()
    {
        $widget = new Catharsis\Web\GooglePlusOneButtonWidget();
        $this->assertAttributeEmpty("_callback", $widget);
        $this->assertSame($widget, $widget->callback("callback"));
        $this->assertAttributeEquals("callback", "_callback", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\GooglePlusOneButtonWidget::recommendations(boolean $show)} method.
     */
    public function test_recommendations_method()
    {
        $widget = new Catharsis\Web\GooglePlusOneButtonWidget();
        $this->assertAttributeEmpty("_recommendations", $widget);
        $this->assertSame($widget, $widget->recommendations());
        $this->assertAttributeEquals(true, "_recommendations", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\GooglePlusOneButtonWidget::size(string $size)} method.
     */
    public function test_size_method()
    {
        $widget = new Catharsis\Web\GooglePlusOneButtonWidget();
        $this->assertAttributeEmpty("_size", $widget);
        $this->assertSame($widget, $widget->size("size"));
        $this->assertAttributeEquals("size", "_size", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\GooglePlusOneButtonWidget::url(string $url)} method.
     */
    public function test_url_method()
    {
        $widget = new Catharsis\Web\GooglePlusOneButtonWidget();
        $this->assertAttributeEmpty("_url", $widget);
        $this->assertSame($widget, $widget->url("url"));
        $this->assertAttributeEquals("url", "_url", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\GooglePlusOneButtonWidget::width(string $width)} method.
     */
    public function test_width_method()
    {
        $widget = new Catharsis\Web\GooglePlusOneButtonWidget();
        $this->assertAttributeEmpty("_width", $widget);
        $this->assertSame($widget, $widget->width("width"));
        $this->assertAttributeEquals("width", "_width", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\GooglePlusOneButtonWidget::__toString()} method.
     */
    public function test_toString_method()
    {
        $widget = new Catharsis\Web\GooglePlusOneButtonWidget();
        $this->assertEquals('<g:plusone></g:plusone>', (string) $widget);

        $widget = new Catharsis\Web\GooglePlusOneButtonWidget();
        $this->assertEquals('<g:plusone align="left" annotation="none" data-callback="callback" data-recommendations="true" href="url" size="small" width="width"></g:plusone>',
                            (string) $widget->url("url")->size(Catharsis\Web\GooglePlusOneButtonSize::Small)->annotation(Catharsis\Web\GooglePlusOneButtonAnnotation::None)->width("width")->alignment(Catharsis\Web\GooglePlusOneButtonAlignment::Left)->callback("callback")->recommendations());
    }
}

?>
