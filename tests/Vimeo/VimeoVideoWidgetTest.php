<?php

/**
 * Tests set for class {@link Catharsis\Web\VimeoVideoWidget}
 */
final class VimeoVideoWidgetTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of class constructor(s).
     * @link Catharsis\Web\VimeoVideoWidget::__construct()
     */
    public function test_constructors()
    {
        $widget = new Catharsis\Web\VimeoVideoWidget();
        $this->assertAttributeEquals(false, "_autoPlay", $widget);
        $this->assertAttributeEmpty("_height", $widget);
        $this->assertAttributeEmpty("_id", $widget);
        $this->assertAttributeEquals(false, "_loop", $widget);
        $this->assertAttributeEmpty("_width", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\VimeoVideoWidget::auto_play(boolean $enabled)} method.
     */
    public function test_auto_play_method()
    {
        $widget = new Catharsis\Web\VimeoVideoWidget();
        $this->assertAttributeEquals(false, "_autoPlay", $widget);
        $this->assertSame($widget, $widget->autoPlay());
        $this->assertAttributeEquals(true, "_autoPlay", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\VimeoVideoWidget::height(string $height)} method.
     */
    public function test_height_method()
    {
        $widget = new Catharsis\Web\VimeoVideoWidget();
        $this->assertAttributeEmpty("_height", $widget);
        $this->assertSame($widget, $widget->height("height"));
        $this->assertAttributeEquals("height", "_height", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\VimeoVideoWidget::id(string $id)} method.
     */
    public function test_id_method()
    {
        $widget = new Catharsis\Web\VimeoVideoWidget();
        $this->assertAttributeEmpty("_id", $widget);
        $this->assertSame($widget, $widget->id("id"));
        $this->assertAttributeEquals("id", "_id", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\VimeoVideoWidget::loop(boolean $enabled)} method.
     */
    public function test_loop_method()
    {
        $widget = new Catharsis\Web\VimeoVideoWidget();
        $this->assertAttributeEquals(false, "_loop", $widget);
        $this->assertSame($widget, $widget->loop());
        $this->assertAttributeEquals(true, "_loop", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\VimeoVideoWidget::width(string $width)} method.
     */
    public function test_width_method()
    {
        $widget = new Catharsis\Web\VimeoVideoWidget();
        $this->assertAttributeEmpty("_width", $widget);
        $this->assertSame($widget, $widget->width("width"));
        $this->assertAttributeEquals("width", "_width", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\VimeoVideoWidget::__toString()} method.
     */
    public function test_toString_method()
    {
        $widget = new Catharsis\Web\VimeoVideoWidget();
        $this->assertEmpty((string) $widget);

        $widget = new Catharsis\Web\VimeoVideoWidget();
        $this->assertEmpty((string) $widget->id("id")->height("height"));

        $widget = new Catharsis\Web\VimeoVideoWidget();
        $this->assertEmpty((string) $widget->id("id")->width("width"));

        $widget = new Catharsis\Web\VimeoVideoWidget();
        $this->assertEmpty((string) $widget->height("height")->width("width"));

        $widget = new Catharsis\Web\VimeoVideoWidget();
        $this->assertEquals('<iframe allowfullscreen="true" frameborder="0" height="height" mozallowfullscreen="true" src="https://player.vimeo.com/video/id?badge=0" webkitallowfullscreen="true" width="width"></iframe>',
                            (string) $widget->id("id")->height("height")->width("width"));

        $widget = new Catharsis\Web\VimeoVideoWidget();
        $this->assertEquals('<iframe allowfullscreen="true" frameborder="0" height="height" mozallowfullscreen="true" src="https://player.vimeo.com/video/id?badge=0&amp;autoplay=1&amp;loop=1" webkitallowfullscreen="true" width="width"></iframe>',
                            (string) $widget->id("id")->height("height")->width("width")->autoPlay()->loop());
    }
}

?>
