<?php

/**
 * Tests set for class {@link Catharsis\Web\FacebookVideoWidget}
 */
final class FacebookVideoWidgetTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of class constructor(s).
     * @link Catharsis\Web\FacebookVideoWidget::__construct()
     */
    public function test_constructors()
    {
        $widget = new Catharsis\Web\FacebookVideoWidget();
        $this->assertAttributeEmpty("_height", $widget);
        $this->assertAttributeEmpty("_id", $widget);
        $this->assertAttributeEmpty("_width", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\FacebookVideoWidget::height(string $height)} method.
     */
    public function test_height_method()
    {
        $widget = new Catharsis\Web\FacebookVideoWidget();
        $this->assertAttributeEmpty("_height", $widget);
        $this->assertSame($widget, $widget->height("height"));
        $this->assertAttributeEquals("height", "_height", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\FacebookVideoWidget::id(string $id)} method.
     */
    public function test_id_method()
    {
        $widget = new Catharsis\Web\FacebookVideoWidget();
        $this->assertAttributeEmpty("_id", $widget);
        $this->assertSame($widget, $widget->id("id"));
        $this->assertAttributeEquals("id", "_id", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\FacebookVideoWidget::width(string $width)} method.
     */
    public function test_width_method()
    {
        $widget = new Catharsis\Web\FacebookVideoWidget();
        $this->assertAttributeEmpty("_width", $widget);
        $this->assertSame($widget, $widget->width("width"));
        $this->assertAttributeEquals("width", "_width", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\FacebookVideoWidget::__toString()} method.
     */
    public function test_toString_method()
    {
        $widget = new Catharsis\Web\FacebookVideoWidget();
        $this->assertEmpty((string) $widget);

        $widget = new Catharsis\Web\FacebookVideoWidget();
        $this->assertEmpty((string) $widget->id("id")->width("width"));

        $widget = new Catharsis\Web\FacebookVideoWidget();
        $this->assertEmpty((string) $widget->id("id")->height("height"));

        $widget = new Catharsis\Web\FacebookVideoWidget();
        $this->assertEmpty((string) $widget->width("width")->height("height"));

        $widget = new Catharsis\Web\FacebookVideoWidget();
        $this->assertEquals('<iframe allowfullscreen="true" frameborder="0" height="height" mozallowfullscreen="true" src="http://www.facebook.com/video/embed?video_id=id" webkitallowfullscreen="true" width="width"></iframe>',
                            (string) $widget->id("id")->width("width")->height("height"));
    }
}

?>
