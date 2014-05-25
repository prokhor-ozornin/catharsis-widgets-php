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
 * Tests set for class {@link \Catharsis\Web\VkontakteAuthButtonWidget}
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class VkontakteAuthButtonWidgetTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of class constructor(s).
     * @link \Catharsis\Web\VkontakteAuthButtonWidget::__construct()
     * @return void
     */
    public function testConstructors()
    {
        $widget = new Catharsis\Web\VkontakteAuthButtonWidget();
        $this->assertEmpty($widget->getCallback());
        $this->assertEmpty($widget->getElementId());
        $this->assertEquals(Catharsis\Web\VkontakteAuthButtonType::STANDARD, $widget->getType());
        $this->assertEmpty($widget->getUrl());
        $this->assertEmpty($widget->getWidth());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\VkontakteAuthButtonWidget::callback(string $callback)}
     * method.
     * @return void
     */
    public function testCallbackMethod()
    {
        $widget = new Catharsis\Web\VkontakteAuthButtonWidget();
        $this->assertEmpty($widget->getCallback());
        $this->assertSame($widget, $widget->callback('callback'));
        $this->assertEquals('callback', $widget->getCallback());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\VkontakteAuthButtonWidget::dynamic(string $callback)}
     * method.
     * @return void
     */
    public function testDynamicMethod()
    {
        $widget = new Catharsis\Web\VkontakteAuthButtonWidget();
        $this->assertEmpty($widget->getCallback());
        $this->assertEquals(Catharsis\Web\VkontakteAuthButtonType::STANDARD, $widget->getType());
        $this->assertSame($widget, $widget->dynamic('callback'));
        $this->assertEquals('callback', $widget->getCallback());
        $this->assertEquals(Catharsis\Web\VkontakteAuthButtonType::DYNAMIC, $widget->getType());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\VkontakteAuthButtonWidget::elementId(string $id)}
     * method.
     * @return void
     */
    public function testElementIdMethod()
    {
        $widget = new Catharsis\Web\VkontakteAuthButtonWidget();
        $this->assertEmpty($widget->getElementId());
        $this->assertSame($widget, $widget->elementId('elementId'));
        $this->assertEquals('elementId', $widget->getElementId());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\VkontakteAuthButtonWidget::standard(string $url)}
     * method.
     * @return void
     */
    public function testStandardMethod()
    {
        $widget = new Catharsis\Web\VkontakteAuthButtonWidget();
        $this->assertEmpty($widget->getUrl());
        $this->assertEquals(Catharsis\Web\VkontakteAuthButtonType::STANDARD, $widget->getType());
        $this->assertSame($widget, $widget->standard('url'));
        $this->assertEquals('url', $widget->getUrl());
        $this->assertEquals(Catharsis\Web\VkontakteAuthButtonType::STANDARD, $widget->getType());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\VkontakteAuthButtonWidget::type(integer $type)}
     * method.
     * @return void
     */
    public function testTypeMethod()
    {
        $widget = new Catharsis\Web\VkontakteAuthButtonWidget();
        $this->assertEquals(Catharsis\Web\VkontakteAuthButtonType::STANDARD, $widget->getType());
        $this->assertSame($widget, $widget->type('type'));
        $this->assertEquals('type', $widget->getType());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\VkontakteAuthButtonWidget::url(string $url)}
     * method.
     * @return void
     */
    public function testUrlMethod()
    {
        $widget = new Catharsis\Web\VkontakteAuthButtonWidget();
        $this->assertEmpty($widget->getUrl());
        $this->assertSame($widget, $widget->url('url'));
        $this->assertEquals('url', $widget->getUrl());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\VkontakteAuthButtonWidget::width(string $width)}
     * method.
     * @return void
     */
    public function testWidthMethod()
    {
        $widget = new Catharsis\Web\VkontakteAuthButtonWidget();
        $this->assertEmpty($widget->getWidth());
        $this->assertSame($widget, $widget->width('width'));
        $this->assertEquals('width', $widget->getWidth());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\VkontakteAuthButtonWidget::__toString()}
     * method.
     * @return void
     */
    public function testToStringMethod()
    {
        $widget = new Catharsis\Web\VkontakteAuthButtonWidget();
        $this->assertEmpty((string) $widget);

        $widget = new Catharsis\Web\VkontakteAuthButtonWidget();
        $this->assertEmpty((string) $widget->type(Catharsis\Web\VkontakteAuthButtonType::STANDARD));

        $widget = new Catharsis\Web\VkontakteAuthButtonWidget();
        $this->assertEmpty((string) $widget->type(Catharsis\Web\VkontakteAuthButtonType::DYNAMIC));

        $widget = new Catharsis\Web\VkontakteAuthButtonWidget();
        $this->assertEquals(
            '<div id="vk_auth"></div><script type="text/javascript">VK.Widgets.Auth("vk_auth", {"authUrl":"url"});</script>',
            (string) $widget->standard('url')
        );

        $widget = new Catharsis\Web\VkontakteAuthButtonWidget();
        $this->assertEquals(
            '<div id="vk_auth"></div><script type="text/javascript">VK.Widgets.Auth("vk_auth", {"onAuth":"callback"});</script>',
            (string) $widget->dynamic('callback')
        );

        $widget = new Catharsis\Web\VkontakteAuthButtonWidget();
        $this->assertEquals(
            '<div id="elementId"></div><script type="text/javascript">VK.Widgets.Auth("elementId", {"authUrl":"url","width":"width"});</script>',
            (string) $widget->standard('url')->elementId('elementId')->width('width')
        );
    }
}

?>
