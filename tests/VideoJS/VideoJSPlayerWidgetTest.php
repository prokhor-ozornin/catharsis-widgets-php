<?php
/**
 * PHP version 5
 *
 * @category HTML
 * @package  WebWidgets
 * @author   Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @license  LGPL https://www.gnu.org/licenses/lgpl.html
 * @link     http://pear.php.net/package/HTML_WebWidgets
 */

/**
 * Tests set for class {@link \Catharsis\Web\VideoJSPlayerWidget}
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class VideoJSPlayerWidgetTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of class constructor(s).
     * @link \Catharsis\Web\VideoJSPlayerWidget::__construct()
     * @return void
     */
    public function testConstructors()
    {
        $widget = new Catharsis\Web\VideoJSPlayerWidget();
        $this->assertEmpty($widget->getExtra());
        $this->assertEmpty($widget->getHeight());
        $this->assertEmpty($widget->getVideos());
        $this->assertEmpty($widget->getWidth());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\VideoJSPlayerWidget::extra(string $extra)}
     * method.
     * @return void
     */
    public function testExtraMethod()
    {
        $widget = new Catharsis\Web\VideoJSPlayerWidget();
        $this->assertEmpty($widget->getExtra());
        $this->assertSame($widget, $widget->extra('extra'));
        $this->assertEquals('extra', $widget->getExtra());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\VideoJSPlayerWidget::height(string $height)}
     * method.
     * @return void
     */
    public function testHeightMethod()
    {
        $widget = new Catharsis\Web\VideoJSPlayerWidget();
        $this->assertEmpty($widget->getHeight());
        $this->assertSame($widget, $widget->height('height'));
        $this->assertEquals('height', $widget->getHeight());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\VideoJSPlayerWidget::videos(array $videos)}
     * method.
     * @return void
     */
    public function testVideosMethod()
    {
        $widget = new Catharsis\Web\VideoJSPlayerWidget();
        $this->assertEmpty($widget->getVideos());
        $this->assertSame($widget, $widget->videos(array('video')));
        $this->assertEquals(array('video'), $widget->getVideos());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\VideoJSPlayerWidget::width(string $width)}
     * method.
     * @return void
     */
    public function testWidthMethod()
    {
        $widget = new Catharsis\Web\VideoJSPlayerWidget();
        $this->assertEmpty($widget->getWidth());
        $this->assertSame($widget, $widget->width('width'));
        $this->assertEquals('width', $widget->getWidth());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\VideoJSPlayerWidget::__toString()}
     * method.
     * @return void
     */
    public function testToStringMethod()
    {
        $widget = new Catharsis\Web\VideoJSPlayerWidget();
        $this->assertEmpty((string) $widget);

        $widget = new Catharsis\Web\VideoJSPlayerWidget();
        $this->assertEmpty((string) $widget->width('width'));

        $widget = new Catharsis\Web\VideoJSPlayerWidget();
        $this->assertEmpty((string) $widget->height('height'));

        $widget = new Catharsis\Web\VideoJSPlayerWidget();
        $this->assertEmpty((string) $widget->width('width')->height('height'));


        $videos = array('http://vjs.zencdn.net/v/oceans.mp4' => Catharsis\Web\VideoContentTypes::MP4,
                        'http://vjs.zencdn.net/v/oceans.webm' => Catharsis\Web\VideoContentTypes::WEBM);

        $widget = new Catharsis\Web\VideoJSPlayerWidget();
        $this->assertEmpty((string) $widget->videos($videos));

        $widget = new Catharsis\Web\VideoJSPlayerWidget();
        $this->assertEmpty((string) $widget->videos($videos)->width('width'));

        $widget = new Catharsis\Web\VideoJSPlayerWidget();
        $this->assertEmpty((string) $widget->videos($videos)->height('height'));

        $widget = new Catharsis\Web\VideoJSPlayerWidget();
        $this->assertEquals(
            '<video class="video-js vjs-default-skin" controls="controls" data-setup="{}"'
            .' height="height" preload="auto" width="width"><source src="http://vjs.zencdn.net/v/oceans.mp4"'
            .' type="video/mp4"/><source src="http://vjs.zencdn.net/v/oceans.webm" type="video/webm"/>'
            .'<track kind="captions" src="http://www.videojs.com/vtt/captions.vtt" srclang="en"'
            .' label="English"></track></video>',
            (string) $widget
                ->videos($videos)
                ->width('width')
                ->height('height')
                ->extra('<track kind="captions" src="http://www.videojs.com/vtt/captions.vtt" srclang="en" label="English"></track>')
        );
    }
}

?>
