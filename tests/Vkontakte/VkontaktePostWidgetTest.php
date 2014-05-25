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
 * Tests set for class {@link \Catharsis\Web\VkontaktePostWidget}
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class VkontaktePostWidgetTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of class constructor(s).
     * @link \Catharsis\Web\VkontaktePostWidget::__construct()
     * @return void
     */
    public function testConstructors()
    {
        $widget = new Catharsis\Web\VkontaktePostWidget();
        $this->assertEmpty($widget->getElementId());
        $this->assertEmpty($widget->getHash());
        $this->assertEmpty($widget->getId());
        $this->assertEmpty($widget->getOwner());
        $this->assertEmpty($widget->getWidth());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\VkontaktePostWidget::elementId(string $id)}
     * method.
     * @return void
     */
    public function testElementId()
    {
        $widget = new Catharsis\Web\VkontaktePostWidget();
        $this->assertEmpty($widget->getElementId());
        $this->assertSame($widget, $widget->elementId('elementId'));
        $this->assertEquals('elementId', $widget->getElementId());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\VkontaktePostWidget::hash(string $hash)}
     * method.
     * @return void
     */
    public function testHashMethod()
    {
        $widget = new Catharsis\Web\VkontaktePostWidget();
        $this->assertEmpty($widget->getHash());
        $this->assertSame($widget, $widget->hash('hash'));
        $this->assertEquals('hash', $widget->getHash());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\VkontaktePostWidget::id(string $id)}
     * method.
     * @return void
     */
    public function testId()
    {
        $widget = new Catharsis\Web\VkontaktePostWidget();
        $this->assertEmpty($widget->getId());
        $this->assertSame($widget, $widget->id('id'));
        $this->assertEquals('id', $widget->getId());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\VkontaktePostWidget::owner(string $id)}
     * method.
     * @return void
     */
    public function testOwner()
    {
        $widget = new Catharsis\Web\VkontaktePostWidget();
        $this->assertEmpty($widget->getOwner());
        $this->assertSame($widget, $widget->owner('owner'));
        $this->assertEquals('owner', $widget->getOwner());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\VkontaktePostWidget::width(string $id)}
     * method.
     * @return void
     */
    public function testWidth()
    {
        $widget = new Catharsis\Web\VkontaktePostWidget();
        $this->assertEmpty($widget->getWidth());
        $this->assertSame($widget, $widget->width('width'));
        $this->assertEquals('width', $widget->getWidth());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\FacebookFollowButtonWidget::__toString()}
     * method.
     * @return void
     */
    public function testToStringMethod()
    {
        $widget = new Catharsis\Web\VkontaktePostWidget();
        $this->assertEmpty((string) $widget);

        $widget = new Catharsis\Web\VkontaktePostWidget();
        $this->assertEmpty((string) $widget->owner('owner')->hash('hash'));

        $widget = new Catharsis\Web\VkontaktePostWidget();
        $this->assertEmpty((string) $widget->id('id')->owner('owner'));

        $widget = new Catharsis\Web\VkontaktePostWidget();
        $this->assertEmpty((string) $widget->id('id')->hash('hash'));

        $widget = new Catharsis\Web\VkontaktePostWidget();
        $this->assertEquals(
            '<div id="vk_post_owner_id"></div><script type="text/javascript">'
            .'(function() { window.VK && VK.Widgets && VK.Widgets.Post && VK.Widgets.Post("vk_post_owner_id", owner, id, "hash", {})'
            .' || setTimeout(arguments.callee, 50); }());</script>',
            (string) $widget
                ->id('id')
                ->owner('owner')
                ->hash('hash')
        );

        $widget = new Catharsis\Web\VkontaktePostWidget();
        $this->assertEquals(
            '<div id="elementId"></div><script type="text/javascript">'
            .'(function() { window.VK && VK.Widgets && VK.Widgets.Post && VK.Widgets.Post("elementId", owner, id, "hash", {"width":"width"})'
            .' || setTimeout(arguments.callee, 50); }());</script>',
            (string) $widget
                ->id('id')
                ->owner('owner')
                ->hash('hash')
                ->elementId('elementId')
                ->width('width')
        );
    }
}

?>
