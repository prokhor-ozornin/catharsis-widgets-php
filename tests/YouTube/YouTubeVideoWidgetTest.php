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
 * Tests set for class {@link \Catharsis\Web\YouTubeVideoWidget}
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class YouTubeVideoWidgetTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of class constructor(s).
     * @link \Catharsis\Web\YouTubeVideoWidget::__construct()
     * @return void
     */
    public function testConstructors()
    {
        $widget = new Catharsis\Web\YouTubeVideoWidget();
        $this->assertEmpty($widget->getHeight());
        $this->assertEmpty($widget->getId());
        $this->assertFalse($widget->getPrivateMode());
        $this->assertFalse($widget->getSecureMode());
        $this->assertEmpty($widget->getWidth());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\YouTubeVideoWidget::height(string $height)}
     * method.
     * @return void
     */
    public function testHeightMethod()
    {
        $widget = new Catharsis\Web\YouTubeVideoWidget();
        $this->assertEmpty($widget->getHeight());
        $this->assertSame($widget, $widget->height('height'));
        $this->assertEquals('height', $widget->getHeight());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\YouTubeVideoWidget::id(string $id)}
     * method.
     * @return void
     */
    public function testIdMethod()
    {
        $widget = new Catharsis\Web\YouTubeVideoWidget();
        $this->assertEmpty($widget->getId());
        $this->assertSame($widget, $widget->id('id'));
        $this->assertEquals('id', $widget->getId());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\YouTubeVideoWidget::privateMode(boolean $enabled)}
     * method.
     * @return void
     */
    public function testPrivateModeMethod()
    {
        $widget = new Catharsis\Web\YouTubeVideoWidget();
        $this->assertFalse($widget->getPrivateMode());
        $this->assertSame($widget, $widget->privateMode(true));
        $this->assertTrue($widget->getPrivateMode());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\YouTubeVideoWidget::secureMode(boolean $enabled)}
     * method.
     * @return void
     */
    public function testSecureModeMethod()
    {
        $widget = new Catharsis\Web\YouTubeVideoWidget();
        $this->assertFalse($widget->getSecureMode());
        $this->assertSame($widget, $widget->secureMode(true));
        $this->assertTrue(true, $widget->getSecureMode());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\YouTubeVideoWidget::width(string $width)}
     * method.
     * @return void
     */
    public function testWidthMethod()
    {
        $widget = new Catharsis\Web\YouTubeVideoWidget();
        $this->assertEmpty($widget->getWidth());
        $this->assertSame($widget, $widget->width('width'));
        $this->assertEquals('width', $widget->getWidth());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\YouTubeVideoWidget::__toString()}
     * method.
     * @return void
     */
    public function testToStringMethod()
    {
        $widget = new Catharsis\Web\YouTubeVideoWidget();
        $this->assertEmpty((string) $widget);

        $widget = new Catharsis\Web\YouTubeVideoWidget();
        $this->assertEmpty((string) $widget->id('id')->height('height'));

        $widget = new Catharsis\Web\YouTubeVideoWidget();
        $this->assertEmpty((string) $widget->id('id')->width('width'));

        $widget = new Catharsis\Web\YouTubeVideoWidget();
        $this->assertEmpty((string) $widget->height('height')->width('width'));

        $widget = new Catharsis\Web\YouTubeVideoWidget();
        $this->assertEquals(
            '<iframe allowfullscreen="true" frameborder="0" height="height" mozallowfullscreen="true"'
            .' src="http://www.youtube.com/embed/id" webkitallowfullscreen="true" width="width"></iframe>',
            (string) $widget
                ->id('id')
                ->height('height')
                ->width('width')
        );

        $widget = new Catharsis\Web\YouTubeVideoWidget();
        $this->assertEquals(
            '<iframe allowfullscreen="true" frameborder="0" height="height" mozallowfullscreen="true"'
            .' src="https://www.youtube-nocookie.com/embed/id" webkitallowfullscreen="true" width="width"></iframe>',
            (string) $widget
                ->id('id')
                ->height('height')
                ->width('width')
                ->privateMode(true)
                ->secureMode(true)
        );
    }
}

?>
