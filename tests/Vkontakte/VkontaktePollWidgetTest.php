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
 * Tests set for class {@link \Catharsis\Web\VkontaktePollWidget}
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class VkontaktePollWidgetTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of class constructor(s).
     * @link \Catharsis\Web\VkontaktePollWidget::__construct()
     * @return void
     */
    public function testConstructors()
    {
        $widget = new Catharsis\Web\VkontaktePollWidget();
        $this->assertEmpty($widget->getElementId());
        $this->assertEmpty($widget->getId());
        $this->assertEmpty($widget->getUrl());
        $this->assertEmpty($widget->getWidth());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\VkontaktePollWidget::elementId(string $id)}
     * method.
     * @return void
     */
    public function testElementIdMethod()
    {
        $widget = new Catharsis\Web\VkontaktePollWidget();
        $this->assertEmpty($widget->getElementId());
        $this->assertSame($widget, $widget->elementId('elementId'));
        $this->assertEquals('elementId', $widget->getElementId());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\VkontaktePollWidget::id(string $id)}
     * method.
     * @return void
     */
    public function testIdMethod()
    {
        $widget = new Catharsis\Web\VkontaktePollWidget();
        $this->assertEmpty($widget->getId());
        $this->assertSame($widget, $widget->id('id'));
        $this->assertEquals('id', $widget->getId());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\VkontaktePollWidget::url(string $url)}
     * method.
     * @return void
     */
    public function testUrlMethod()
    {
        $widget = new Catharsis\Web\VkontaktePollWidget();
        $this->assertEmpty($widget->getUrl());
        $this->assertSame($widget, $widget->url('url'));
        $this->assertEquals('url', $widget->getUrl());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\VkontaktePollWidget::width(string $width)}
     * method.
     * @return void
     */
    public function testWidthMethod()
    {
        $widget = new Catharsis\Web\VkontaktePollWidget();
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
        $widget = new Catharsis\Web\VkontaktePollWidget();
        $this->assertEmpty((string) $widget);

        $widget = new Catharsis\Web\VkontaktePollWidget();
        $this->assertEquals(
            '<div id="vk_poll_id"></div><script type="text/javascript">VK.Widgets.Poll("vk_poll_id", {}, "id");</script>',
            (string) $widget->id('id')
        );

        $widget = new Catharsis\Web\VkontaktePollWidget();
        $this->assertEquals(
            '<div id="elementId"></div><script type="text/javascript">VK.Widgets.Poll("elementId", {"pageUrl":"url","width":"width"}, "id");</script>',
            (string) $widget
                ->id('id')
                ->url('url')
                ->width('width')
                ->elementId('elementId')
        );
    }
}

?>
