<?php

/**
 * Tests set for class {@link Catharsis\Web\FacebookLikeBoxWidget}
 */
final class FacebookLikeBoxWidgetTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of class constructor(s).
     * @link Catharsis\Web\FacebookLikeBoxWidget::__construct()
     */
    public function test_constructors()
    {
        $widget = new Catharsis\Web\FacebookLikeBoxWidget();
        $this->assertAttributeEmpty("_border", $widget);
        $this->assertAttributeEmpty("_colorScheme", $widget);
        $this->assertAttributeEmpty("_faces", $widget);
        $this->assertAttributeEmpty("_header", $widget);
        $this->assertAttributeEmpty("_height", $widget);
        $this->assertAttributeEmpty("_stream", $widget);
        $this->assertAttributeEmpty("_url", $widget);
        $this->assertAttributeEmpty("_wall", $widget);
        $this->assertAttributeEmpty("_width", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\FacebookLikeBoxWidget::border(boolean $border)} method.
     */
    public function test_border_method()
    {
        $widget = new Catharsis\Web\FacebookLikeBoxWidget();
        $this->assertAttributeEmpty("_border", $widget);
        $this->assertSame($widget, $widget->border());
        $this->assertAttributeEquals(true, "_border", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\FacebookLikeBoxWidget::colorScheme(string $colorScheme)} method.
     */
    public function test_colorScheme_method()
    {
        $widget = new Catharsis\Web\FacebookLikeBoxWidget();
        $this->assertAttributeEmpty("_colorScheme", $widget);
        $this->assertSame($widget, $widget->colorScheme("colorScheme"));
        $this->assertAttributeEquals("colorScheme", "_colorScheme", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\FacebookLikeBoxWidget::faces(boolean $show)} method.
     */
    public function test_faces_method()
    {
        $widget = new Catharsis\Web\FacebookLikeBoxWidget();
        $this->assertAttributeEmpty("_faces", $widget);
        $this->assertSame($widget, $widget->faces());
        $this->assertAttributeEquals(true, "_faces", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\FacebookLikeBoxWidget::header(boolean $header)} method.
     */
    public function test_header_method()
    {
        $widget = new Catharsis\Web\FacebookLikeBoxWidget();
        $this->assertAttributeEmpty("_header", $widget);
        $this->assertSame($widget, $widget->header());
        $this->assertAttributeEquals(true, "_header", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\FacebookLikeBoxWidget::height(string $height)} method.
     */
    public function test_height_method()
    {
        $widget = new Catharsis\Web\FacebookLikeBoxWidget();
        $this->assertAttributeEmpty("_height", $widget);
        $this->assertSame($widget, $widget->height("height"));
        $this->assertAttributeEquals("height", "_height", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\FacebookLikeBoxWidget::stream(boolean $show)} method.
     */
    public function test_stream_method()
    {
        $widget = new Catharsis\Web\FacebookLikeBoxWidget();
        $this->assertAttributeEmpty("_stream", $widget);
        $this->assertSame($widget, $widget->stream());
        $this->assertAttributeEquals(true, "_stream", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\FacebookLikeBoxWidget::url(string $url)} method.
     */
    public function test_url_method()
    {
        $widget = new Catharsis\Web\FacebookLikeBoxWidget();
        $this->assertAttributeEmpty("_url", $widget);
        $this->assertSame($widget, $widget->url("url"));
        $this->assertAttributeEquals("url", "_url", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\FacebookLikeBoxWidget::wall(boolean $include)} method.
     */
    public function test_wall_method()
    {
        $widget = new Catharsis\Web\FacebookLikeBoxWidget();
        $this->assertAttributeEmpty("_wall", $widget);
        $this->assertSame($widget, $widget->wall());
        $this->assertAttributeEquals(true, "_wall", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\FacebookLikeBoxWidget::width(string $width)} method.
     */
    public function test_width_method()
    {
        $widget = new Catharsis\Web\FacebookLikeBoxWidget();
        $this->assertAttributeEmpty("_width", $widget);
        $this->assertSame($widget, $widget->width("width"));
        $this->assertAttributeEquals("width", "_width", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\FacebookLikeBoxWidget::__toString()} method.
     */
    public function test_toString_method()
    {
        $widget = new Catharsis\Web\FacebookLikeBoxWidget();
        $this->assertEmpty((string) $widget);

        $widget = new Catharsis\Web\FacebookLikeBoxWidget();
        $this->assertEquals('<div class="fb-like-box" data-href="https://www.facebook.com/pages/Clear-Words/515749945120070"></div>',
                            (string) $widget->url("https://www.facebook.com/pages/Clear-Words/515749945120070"));

        $widget = new Catharsis\Web\FacebookLikeBoxWidget();
        $this->assertEquals('<div class="fb-like-box" data-colorscheme="dark" data-force-wall="true" data-header="true" data-height="height" data-href="https://www.facebook.com/pages/Clear-Words/515749945120070" data-show-border="true" data-show-faces="true" data-stream="true" data-width="width"></div>',
                            (string) $widget->url("https://www.facebook.com/pages/Clear-Words/515749945120070")->width("width")->height("height")->colorScheme(Catharsis\Web\FacebookColorScheme::Dark)->wall()->header()->border()->faces()->stream());
    }
}

?>
