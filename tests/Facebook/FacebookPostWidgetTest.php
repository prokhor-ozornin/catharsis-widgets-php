<?php

/**
 * Tests set for class {@link Catharsis\Web\FacebookPostWidget}
 */
final class FacebookPostWidgetTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of class constructor(s).
     * @link Catharsis\Web\FacebookPostWidget::__construct()
     */
    public function test_constructors()
    {
        $widget = new Catharsis\Web\FacebookPostWidget();
        $this->assertAttributeEmpty("_url", $widget);
        $this->assertAttributeEmpty("_width", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\FacebookPostWidget::url(string $url)} method.
     */
    public function test_url_method()
    {
        $widget = new Catharsis\Web\FacebookPostWidget();
        $this->assertAttributeEmpty("_url", $widget);
        $this->assertSame($widget, $widget->url("url"));
        $this->assertAttributeEquals("url", "_url", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\FacebookPostWidget::width(string $width)} method.
     */
    public function test_width_method()
    {
        $widget = new Catharsis\Web\FacebookPostWidget();
        $this->assertAttributeEmpty("_width", $widget);
        $this->assertSame($widget, $widget->width("width"));
        $this->assertAttributeEquals("width", "_width", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\FacebookPostWidget::__toString()} method.
     */
    public function test_toString_method()
    {
        $widget = new Catharsis\Web\FacebookPostWidget();
        $this->assertEmpty((string) $widget);

        $widget = new Catharsis\Web\FacebookPostWidget();
        $this->assertEquals('<div class="fb-post" data-href="url" data-width="width"></div>',
                            (string) $widget->url("url")->width("width"));
    }
}

?>
