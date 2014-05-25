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
 * Tests set for class {@link \Catharsis\Web\YandexVideoWidget}
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class YandexVideoWidgetTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of class constructor(s).
     * @link \Catharsis\Web\YandexVideoWidget::__construct()
     * @return void
     */
    public function testConstructors()
    {
        $widget = new Catharsis\Web\YandexVideoWidget();
        $this->assertEmpty($widget->getHeight());
        $this->assertEmpty($widget->getId());
        $this->assertEmpty($widget->getUser());
        $this->assertEmpty($widget->getWidth());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\YandexVideoWidget::height(string $height)}
     * method.
     * @return void
     */
    public function testHeightMethod()
    {
        $widget = new Catharsis\Web\YandexVideoWidget();
        $this->assertEmpty($widget->getHeight());
        $this->assertSame($widget, $widget->height('height'));
        $this->assertEquals('height', $widget->getHeight());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\YandexVideoWidget::id(string id)}
     * method.
     * @return void
     */
    public function testIdMethod()
    {
        $widget = new Catharsis\Web\YandexVideoWidget();
        $this->assertEmpty($widget->getId());
        $this->assertSame($widget, $widget->id('id'));
        $this->assertEquals('id', $widget->getId());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\YandexVideoWidget::user(string $user)}
     * method.
     * @return void
     */
    public function testUserMethod()
    {
        $widget = new Catharsis\Web\YandexVideoWidget();
        $this->assertEmpty($widget->getUser());
        $this->assertSame($widget, $widget->user('user'));
        $this->assertEquals('user', $widget->getUser());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\YandexVideoWidget::width(string $width)}
     * method.
     * @return void
     */
    public function testWidthMethod()
    {
        $widget = new Catharsis\Web\YandexVideoWidget();
        $this->assertEmpty($widget->getWidth());
        $this->assertSame($widget, $widget->width('width'));
        $this->assertEquals('width', $widget->getWidth());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\YandexVideoWidget::__toString()}
     * method.
     * @return void
     */
    public function testToStringMethod()
    {
        $widget = new Catharsis\Web\YandexVideoWidget();
        $this->assertEmpty((string) $widget);

        $widget = new Catharsis\Web\YandexVideoWidget();
        $this->assertEmpty((string) $widget->id('id')->user('user')->width('width'));

        $widget = new Catharsis\Web\YandexVideoWidget();
        $this->assertEmpty((string) $widget->id('id')->user('user')->height('height'));

        $widget = new Catharsis\Web\YandexVideoWidget();
        $this->assertEmpty((string) $widget->id('id')->width('width')->height('height'));

        $widget = new Catharsis\Web\YandexVideoWidget();
        $this->assertEmpty((string) $widget->user('user')->width('width')->height('height'));

        $widget = new Catharsis\Web\YandexVideoWidget();
        $this->assertEquals(
            '<iframe allowfullscreen="true" frameborder="0" height="height" mozallowfullscreen="true"'
            .' src="http://video.yandex.ru/iframe/user/id" webkitallowfullscreen="true" width="width"></iframe>',
            (string) $widget
                ->id('id')
                ->height('height')
                ->width('width')
                ->user('user')
        );
    }
}

?>
