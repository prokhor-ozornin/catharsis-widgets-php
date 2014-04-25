<?php

/**
 * Tests set for class {@link Catharsis\Web\YouTubeVideoWidget}
 */
final class YouTubeVideoWidgetTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of class constructor(s).
     * @link Catharsis\Web\YouTubeVideoWidget::__construct()
     */
    public function test_constructors()
    {
        $widget = new Catharsis\Web\YouTubeVideoWidget();
        $this->assertAttributeEmpty("_height", $widget);
        $this->assertAttributeEmpty("_id", $widget);
        $this->assertAttributeEquals(false, "_privateMode", $widget);
        $this->assertAttributeEquals(false, "_secureMode", $widget);
        $this->assertAttributeEmpty("_width", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\YouTubeVideoWidget::height(string $height)} method.
     */
    public function test_height_method()
    {
        $widget = new Catharsis\Web\YouTubeVideoWidget();
        $this->assertAttributeEmpty("_height", $widget);
        $this->assertSame($widget, $widget->height("height"));
        $this->assertAttributeEquals("height", "_height", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\YouTubeVideoWidget::id(string $id)} method.
     */
    public function test_id_method()
    {
        $widget = new Catharsis\Web\YouTubeVideoWidget();
        $this->assertAttributeEmpty("_id", $widget);
        $this->assertSame($widget, $widget->id("id"));
        $this->assertAttributeEquals("id", "_id", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\YouTubeVideoWidget::privateMode(boolean $enabled)} method.
     */
    public function test_privateMode_method()
    {
        $widget = new Catharsis\Web\YouTubeVideoWidget();
        $this->assertAttributeEquals(false, "_privateMode", $widget);
        $this->assertSame($widget, $widget->privateMode());
        $this->assertAttributeEquals(true, "_privateMode", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\YouTubeVideoWidget::secureMode(boolean $enabled)} method.
     */
    public function test_secureMode_method()
    {
        $widget = new Catharsis\Web\YouTubeVideoWidget();
        $this->assertAttributeEquals(false, "_secureMode", $widget);
        $this->assertSame($widget, $widget->secureMode());
        $this->assertAttributeEquals(true, "_secureMode", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\YouTubeVideoWidget::width(string $width)} method.
     */
    public function test_width_method()
    {
        $widget = new Catharsis\Web\YouTubeVideoWidget();
        $this->assertAttributeEmpty("_width", $widget);
        $this->assertSame($widget, $widget->width("width"));
        $this->assertAttributeEquals("width", "_width", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\YouTubeVideoWidget::__toString()} method.
     */
    public function test_toString_method()
    {
        $widget = new Catharsis\Web\YouTubeVideoWidget();
        $this->assertEmpty((string) $widget);

        $widget = new Catharsis\Web\YouTubeVideoWidget();
        $this->assertEmpty((string) $widget->id("id")->height("height"));

        $widget = new Catharsis\Web\YouTubeVideoWidget();
        $this->assertEmpty((string) $widget->id("id")->width("width"));

        $widget = new Catharsis\Web\YouTubeVideoWidget();
        $this->assertEmpty((string) $widget->height("height")->width("width"));

        $widget = new Catharsis\Web\YouTubeVideoWidget();
        $this->assertEquals('<iframe allowfullscreen="true" frameborder="0" height="height" mozallowfullscreen="true" src="http://www.youtube.com/embed/id" webkitallowfullscreen="true" width="width"></iframe>',
                            (string) $widget->id("id")->height("height")->width("width"));

        $widget = new Catharsis\Web\YouTubeVideoWidget();
        $this->assertEquals('<iframe allowfullscreen="true" frameborder="0" height="height" mozallowfullscreen="true" src="https://www.youtube-nocookie.com/embed/id" webkitallowfullscreen="true" width="width"></iframe>',
                            (string) $widget->id("id")->height("height")->width("width")->privateMode()->secureMode());
    }
}

?>
