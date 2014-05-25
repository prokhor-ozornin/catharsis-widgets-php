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
 * Tests set for class {@link \Catharsis\Web\VkontakteCommentsWidget}
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class VkontakteCommentsWidgetTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of class constructor(s).
     * @link \Catharsis\Web\VkontakteCommentsWidget::__construct()
     * @return void
     */
    public function testConstructors()
    {
        $widget = new Catharsis\Web\VkontakteCommentsWidget();
        $this->assertEmpty($widget->getAttach());
        $this->assertEmpty($widget->getAutoPublish());
        $this->assertEmpty($widget->getAutoUpdate());
        $this->assertEmpty($widget->getElementId());
        $this->assertEquals(Catharsis\Web\VkontakteCommentsLimit::LIMIT_5, $widget->getLimit());
        $this->assertEmpty($widget->getMini());
        $this->assertEmpty($widget->getWidth());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\VkontakteCommentsWidget::attach(array $types)}
     * method.
     * @return void
     */
    public function testAttachMethod()
    {
        $widget = new Catharsis\Web\VkontakteCommentsWidget();
        $this->assertEmpty($widget->getAttach());
        $this->assertSame($widget, $widget->attach(array('attach')));
        $this->assertEquals(array('attach'), $widget->getAttach());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\VkontakteCommentsWidget::autoPublish(boolean $enabled)}
     * method.
     * @return void
     */
    public function testAutoPublishMethod()
    {
        $widget = new Catharsis\Web\VkontakteCommentsWidget();
        $this->assertEmpty($widget->getAutoPublish());
        $this->assertSame($widget, $widget->autoPublish(true));
        $this->assertTrue($widget->getAutoPublish());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\VkontakteCommentsWidget::autoUpdate(boolean $enabled)}
     * method.
     * @return void
     */
    public function testAutoUpdateMethod()
    {
        $widget = new Catharsis\Web\VkontakteCommentsWidget();
        $this->assertEmpty($widget->getAutoPublish());
        $this->assertSame($widget, $widget->autoUpdate(true));
        $this->assertTrue($widget->getAutoUpdate());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\VkontakteCommentsWidget::elementId(string $id)}
     * method.
     * @return void
     */
    public function testElementIdMethod()
    {
        $widget = new Catharsis\Web\VkontakteCommentsWidget();
        $this->assertEmpty($widget->getElementId());
        $this->assertSame($widget, $widget->elementId('elementId'));
        $this->assertEquals('elementId', $widget->getElementId());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\VkontakteCommentsWidget::limit(integer $limit)}
     * method.
     * @return void
     */
    public function testLimitMethod()
    {
        $widget = new Catharsis\Web\VkontakteCommentsWidget();
        $this->assertEquals(Catharsis\Web\VkontakteCommentsLimit::LIMIT_5, $widget->getLimit());
        $this->assertSame($widget, $widget->limit(0));
        $this->assertEquals(0, $widget->getLimit());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\VkontakteCommentsWidget::mini(boolean $enabled)}
     * method.
     * @return void
     */
    public function testMiniMethod()
    {
        $widget = new Catharsis\Web\VkontakteCommentsWidget();
        $this->assertEmpty($widget->getMini());
        $this->assertSame($widget, $widget->mini(true));
        $this->assertTrue($widget->getMini());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\VkontakteCommentsWidget::width(string $width)}
     * method.
     * @return void
     */
    public function testWidthMethod()
    {
        $widget = new Catharsis\Web\VkontakteCommentsWidget();
        $this->assertEmpty($widget->getWidth());
        $this->assertSame($widget, $widget->width('width'));
        $this->assertEquals('width', $widget->getWidth());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\VkontakteCommentsWidget::__toString()}
     * method.
     * @return void
     */
    public function testToStringMethod()
    {
        $widget = new Catharsis\Web\VkontakteCommentsWidget();
        $html = (string) $widget;
        $this->assertContains('<div id="vk_comments"></div>', $html);
        $this->assertContains('<script type="text/javascript">', $html);
        $this->assertContains(
            'VK.Widgets.Comments("vk_comments", {"limit":5,"attach":false});',
            $html
        );

        $widget = new Catharsis\Web\VkontakteCommentsWidget();
        $html = (string) $widget->limit(10)->attach(Catharsis\Web\VkontakteCommentsAttach::ALL)->width('width')->autoPublish(true)->autoUpdate(true)->mini(true)->elementId('elementId');
        $this->assertContains('<div id="elementId"></div>', $html);
        $this->assertContains('<script type="text/javascript">', $html);
        $this->assertContains(
            'VK.Widgets.Comments("elementId", {"limit":10,"attach":"*","width":"width","autoPublish":1,"norealtime":0,"mini":1});',
            $html
        );
    }
}

?>
