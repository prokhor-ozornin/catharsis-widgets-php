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
 * Tests set for class {@link \Catharsis\Web\VkontakteVideoWidget}
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class VkontakteVideoWidgetTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of class constructor(s).
     * @link \Catharsis\Web\VkontakteVideoWidget::__construct()
     * @return void
     */
    public function testConstructors()
    {
        $widget = new Catharsis\Web\VkontakteVideoWidget();
        $this->assertEmpty($widget->getHash());
        $this->assertEmpty($widget->getHd());
        $this->assertEmpty($widget->getHeight());
        $this->assertEmpty($widget->getId());
        $this->assertEmpty($widget->getUser());
        $this->assertEmpty($widget->getWidth());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\VkontakteVideoWidget::hash(string $hash)}
     * method.
     * @return void
     */
    public function testHashMethod()
    {
        $widget = new Catharsis\Web\VkontakteVideoWidget();
        $this->assertEmpty($widget->getHash());
        $this->assertSame($widget, $widget->hash('hash'));
        $this->assertEquals('hash', $widget->getHash());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\VkontakteVideoWidget::hdQuality(boolean $enabled)}
     * method.
     * @return void
     */
    public function testHdMethod()
    {
        $widget = new Catharsis\Web\VkontakteVideoWidget();
        $this->assertEmpty($widget->getHd());
        $this->assertSame($widget, $widget->hd(true));
        $this->assertTrue($widget->getHd());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\VkontakteVideoWidget::height(string $height)}
     * method.
     * @return void
     */
    public function testHeightMethod()
    {
        $widget = new Catharsis\Web\VkontakteVideoWidget();
        $this->assertEmpty($widget->getHeight());
        $this->assertSame($widget, $widget->height('height'));
        $this->assertEquals('height', $widget->getHeight());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\VkontakteVideoWidget::id(string $id)}
     * method.
     * @return void
     */
    public function testIdMethod()
    {
        $widget = new Catharsis\Web\VkontakteVideoWidget();
        $this->assertEmpty($widget->getId());
        $this->assertSame($widget, $widget->id('id'));
        $this->assertEquals('id', $widget->getId());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\VkontakteVideoWidget::user(string $user)}
     * method.
     * @return void
     */
    public function testUserMethod()
    {
        $widget = new Catharsis\Web\VkontakteVideoWidget();
        $this->assertEmpty($widget->getUser());
        $this->assertSame($widget, $widget->user('user'));
        $this->assertEquals('user', $widget->getUser());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\VkontakteVideoWidget::width(string $width)}
     * method.
     * @return void
     */
    public function testWidthMethod()
    {
        $widget = new Catharsis\Web\VkontakteVideoWidget();
        $this->assertEmpty($widget->getWidth());
        $this->assertSame($widget, $widget->width('width'));
        $this->assertEquals('width', $widget->getWidth());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\VkontakteVideoWidget::__toString()}
     * method.
     * @return void
     */
    public function testToStringMethod()
    {
        $widget = new Catharsis\Web\VkontakteVideoWidget();
        $this->assertEmpty((string) $widget);

        $widget = new Catharsis\Web\VkontakteVideoWidget();
        $this->assertEmpty(
            (string) $widget
                ->user('oid')
                ->hash('hash')
                ->width('width')
                ->height('height')
        );

        $widget = new Catharsis\Web\VkontakteVideoWidget();
        $this->assertEmpty(
            (string) $widget
                ->id('id')
                ->hash('hash')
                ->width('width')
                ->height('height')
        );

        $widget = new Catharsis\Web\VkontakteVideoWidget();
        $this->assertEmpty(
            (string) $widget
                ->id('id')
                ->user('user')
                ->width('width')
                ->height('height')
        );

        $widget = new Catharsis\Web\VkontakteVideoWidget();
        $this->assertEmpty(
            (string) $widget
                ->id('id')
                ->user('user')
                ->hash('hash')
                ->height('height')
        );

        $widget = new Catharsis\Web\VkontakteVideoWidget();
        $this->assertEmpty(
            (string) $widget
                ->id('id')
                ->user('user')
                ->hash('hash')
                ->width('width')
        );

        $widget = new Catharsis\Web\VkontakteVideoWidget();
        $this->assertEquals(
            '<iframe allowfullscreen="true" frameborder="0" height="height" mozallowfullscreen="true"'
            .' src="http://vk.com/video_ext.php?oid=user&amp;id=id&amp;hash=hash&amp;hd=0"'
            .' webkitallowfullscreen="true" width="width"></iframe>',
            (string) $widget
                ->id('id')
                ->user('user')
                ->hash('hash')
                ->width('width')
                ->height('height')
        );

        $widget = new Catharsis\Web\VkontakteVideoWidget();
        $this->assertEquals(
            '<iframe allowfullscreen="true" frameborder="0" height="height" mozallowfullscreen="true"'
            .' src="http://vk.com/video_ext.php?oid=user&amp;id=id&amp;hash=hash&amp;hd=1"'
            .' webkitallowfullscreen="true" width="width"></iframe>',
            (string) $widget
                ->id('id')
                ->user('user')
                ->hash('hash')
                ->width('width')
                ->height('height')
                ->hd(true)
        );
    }
}

?>
