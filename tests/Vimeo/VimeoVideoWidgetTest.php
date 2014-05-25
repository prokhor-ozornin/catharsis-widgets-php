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
 * Tests set for class {@link \Catharsis\Web\VimeoVideoWidget}
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class VimeoVideoWidgetTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of class constructor(s).
     * @link \Catharsis\Web\VimeoVideoWidget::__construct()
     * @return void
     */
    public function testConstructors()
    {
        $widget = new Catharsis\Web\VimeoVideoWidget();
        $this->assertFalse($widget->getAutoPlay());
        $this->assertEmpty($widget->getHeight());
        $this->assertEmpty($widget->getId());
        $this->assertFalse($widget->getLoop());
        $this->assertEmpty($widget->getWidth());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\VimeoVideoWidget::auto_play(boolean $enabled)}
     * method.
     * @return void
     */
    public function testAutoPlayMethod()
    {
        $widget = new Catharsis\Web\VimeoVideoWidget();
        $this->assertFalse($widget->getAutoPlay());
        $this->assertSame($widget, $widget->autoPlay(true));
        $this->assertTrue($widget->getAutoPlay());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\VimeoVideoWidget::height(string $height)}
     * method.
     * @return void
     */
    public function testHeightMethod()
    {
        $widget = new Catharsis\Web\VimeoVideoWidget();
        $this->assertEmpty($widget->getHeight());
        $this->assertSame($widget, $widget->height('height'));
        $this->assertEquals('height', $widget->getHeight());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\VimeoVideoWidget::id(string $id)}
     * method.
     * @return void
     */
    public function testIdMethod()
    {
        $widget = new Catharsis\Web\VimeoVideoWidget();
        $this->assertEmpty($widget->getId());
        $this->assertSame($widget, $widget->id('id'));
        $this->assertEquals('id', $widget->getId());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\VimeoVideoWidget::loop(boolean $enabled)}
     * method.
     * @return void
     */
    public function testLoopMethod()
    {
        $widget = new Catharsis\Web\VimeoVideoWidget();
        $this->assertFalse($widget->getLoop());
        $this->assertSame($widget, $widget->loop(true));
        $this->assertTrue($widget->getLoop());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\VimeoVideoWidget::width(string $width)}
     * method.
     * @return void
     */
    public function testWidthMethod()
    {
        $widget = new Catharsis\Web\VimeoVideoWidget();
        $this->assertEmpty($widget->getWidth());
        $this->assertSame($widget, $widget->width('width'));
        $this->assertEquals('width', $widget->getWidth());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\VimeoVideoWidget::__toString()}
     * method.
     * @return void
     */
    public function testToStringMethod()
    {
        $widget = new Catharsis\Web\VimeoVideoWidget();
        $this->assertEmpty((string) $widget);

        $widget = new Catharsis\Web\VimeoVideoWidget();
        $this->assertEmpty((string) $widget->id('id')->height('height'));

        $widget = new Catharsis\Web\VimeoVideoWidget();
        $this->assertEmpty((string) $widget->id('id')->width('width'));

        $widget = new Catharsis\Web\VimeoVideoWidget();
        $this->assertEmpty((string) $widget->height('height')->width('width'));

        $widget = new Catharsis\Web\VimeoVideoWidget();
        $this->assertEquals(
            '<iframe allowfullscreen="true" frameborder="0" height="height"'
            .' mozallowfullscreen="true" src="https://player.vimeo.com/video/id?badge=0"'
            .' webkitallowfullscreen="true" width="width"></iframe>',
            (string) $widget->id('id')->height('height')->width('width')
        );

        $widget = new Catharsis\Web\VimeoVideoWidget();
        $this->assertEquals(
            '<iframe allowfullscreen="true" frameborder="0" height="height" mozallowfullscreen="true"'
            .' src="https://player.vimeo.com/video/id?badge=0&amp;autoplay=1&amp;loop=1"'
            .' webkitallowfullscreen="true" width="width"></iframe>',
            (string) $widget
                ->id('id')
                ->height('height')
                ->width('width')
                ->autoPlay(true)
                ->loop(true)
        );
    }
}

?>
