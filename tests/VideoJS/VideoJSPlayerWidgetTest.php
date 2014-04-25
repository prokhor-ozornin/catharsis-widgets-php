<?php

/**
 * Tests set for class {@link Catharsis\Web\VideoJSPlayerWidget}
 */
final class VideoJSPlayerWidgetTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of class constructor(s).
     * @link Catharsis\Web\VideoJSPlayerWidget::__construct()
     */
    public function test_constructors()
    {
        $widget = new Catharsis\Web\VideoJSPlayerWidget();
        $this->assertAttributeEmpty("_extra", $widget);
        $this->assertAttributeEmpty("_height", $widget);
        $this->assertAttributeEmpty("_videos", $widget);
        $this->assertAttributeEmpty("_width", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\VideoJSPlayerWidget::extra(string $extra)} method.
     */
    public function test_extra_method()
    {
        $widget = new Catharsis\Web\VideoJSPlayerWidget();
        $this->assertAttributeEmpty("_extra", $widget);
        $this->assertSame($widget, $widget->extra("extra"));
        $this->assertAttributeEquals("extra", "_extra", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\VideoJSPlayerWidget::height(string $height)} method.
     */
    public function test_height_method()
    {
        $widget = new Catharsis\Web\VideoJSPlayerWidget();
        $this->assertAttributeEmpty("_height", $widget);
        $this->assertSame($widget, $widget->height("height"));
        $this->assertAttributeEquals("height", "_height", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\VideoJSPlayerWidget::videos(array $videos)} method.
     */
    public function test_videos_method()
    {
        $widget = new Catharsis\Web\VideoJSPlayerWidget();
        $this->assertAttributeEmpty("_videos", $widget);
        $this->assertSame($widget, $widget->videos(array("video")));
        $this->assertAttributeEquals(array("video"), "_videos", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\VideoJSPlayerWidget::width(string $width)} method.
     */
    public function test_width_method()
    {
        $widget = new Catharsis\Web\VideoJSPlayerWidget();
        $this->assertAttributeEmpty("_width", $widget);
        $this->assertSame($widget, $widget->width("width"));
        $this->assertAttributeEquals("width", "_width", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\VideoJSPlayerWidget::__toString()} method.
     */
    public function test_toString_method()
    {
        $widget = new Catharsis\Web\VideoJSPlayerWidget();
        $this->assertEmpty((string) $widget);

        $widget = new Catharsis\Web\VideoJSPlayerWidget();
        $this->assertEmpty((string) $widget->width("width"));

        $widget = new Catharsis\Web\VideoJSPlayerWidget();
        $this->assertEmpty((string) $widget->height("height"));

        $widget = new Catharsis\Web\VideoJSPlayerWidget();
        $this->assertEmpty((string) $widget->width("width")->height("height"));


        $videos = array("http://vjs.zencdn.net/v/oceans.mp4" => Catharsis\Web\VideoContentTypes::MP4,
                        "http://vjs.zencdn.net/v/oceans.webm" => Catharsis\Web\VideoContentTypes::WebM);

        $widget = new Catharsis\Web\VideoJSPlayerWidget();
        $this->assertEmpty((string) $widget->videos($videos));

        $widget = new Catharsis\Web\VideoJSPlayerWidget();
        $this->assertEmpty((string) $widget->videos($videos)->width("width"));

        $widget = new Catharsis\Web\VideoJSPlayerWidget();
        $this->assertEmpty((string) $widget->videos($videos)->height("height"));

        $widget = new Catharsis\Web\VideoJSPlayerWidget();
        $this->assertEquals('<video class="video-js vjs-default-skin" controls="controls" data-setup="{}" height="height" preload="auto" width="width"><source src="http://vjs.zencdn.net/v/oceans.mp4" type="video/mp4"/><source src="http://vjs.zencdn.net/v/oceans.webm" type="video/webm"/><track kind="captions" src="http://www.videojs.com/vtt/captions.vtt" srclang="en" label="English"></track></video>',
                            (string) $widget->videos($videos)->width("width")->height("height")->extra('<track kind="captions" src="http://www.videojs.com/vtt/captions.vtt" srclang="en" label="English"></track>'));
    }
}

?>
