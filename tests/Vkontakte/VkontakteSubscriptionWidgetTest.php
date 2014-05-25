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
 * Tests set for class {@link \Catharsis\Web\VkontakteSubscriptionWidget}
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class VkontakteSubscriptionWidgetTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of class constructor(s).
     * @link \Catharsis\Web\VkontakteSubscriptionWidget::__construct()
     * @return void
     */
    public function testConstructors()
    {
        $widget = new Catharsis\Web\VkontakteSubscriptionWidget();
        $this->assertEmpty($widget->getAccount());
        $this->assertEmpty($widget->getElementId());
        $this->assertEquals(Catharsis\Web\VkontakteSubscriptionButtonLayout::BUTTON, $widget->getLayout());
        $this->assertFalse($widget->getOnlyButton());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\VkontakteSubscriptionWidget::account(string $account)}
     * method.
     * @return void
     */
    public function testAccountMethod()
    {
        $widget = new Catharsis\Web\VkontakteSubscriptionWidget();
        $this->assertEmpty($widget->getAccount());
        $this->assertSame($widget, $widget->account('account'));
        $this->assertEquals('account', $widget->getAccount());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\VkontakteSubscriptionWidget::elementId(string $id)}
     * method.
     * @return void
     */
    public function testElementId()
    {
        $widget = new Catharsis\Web\VkontakteSubscriptionWidget();
        $this->assertEmpty($widget->getElementId());
        $this->assertSame($widget, $widget->elementId('elementId'));
        $this->assertEquals('elementId', $widget->getElementId());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\VkontakteSubscriptionWidget::layout(integer $layout)}
     * method.
     * @return void
     */
    public function testLayoutMethod()
    {
        $widget = new Catharsis\Web\VkontakteSubscriptionWidget();
        $this->assertEquals(Catharsis\Web\VkontakteSubscriptionButtonLayout::BUTTON, $widget->getLayout());
        $this->assertSame($widget, $widget->layout(0));
        $this->assertEquals(0, $widget->getLayout());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\VkontakteSubscriptionWidget::onlyButton(boolean $only_button)}
     * method.
     * @return void
     */
    public function testOnlyButtonMethod()
    {
        $widget = new Catharsis\Web\VkontakteSubscriptionWidget();
        $this->assertFalse($widget->getOnlyButton());
        $this->assertSame($widget, $widget->onlyButton(true));
        $this->assertTrue($widget->getOnlyButton());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\VkontakteSubscriptionWidget::__toString()}
     * method.
     * @return void
     */
    public function testToStringMethod()
    {
        $widget = new Catharsis\Web\VkontakteSubscriptionWidget();
        $this->assertEmpty((string) $widget);

        $widget = new Catharsis\Web\VkontakteSubscriptionWidget();
        $html = (string) $widget->account('account');
        $this->assertContains('<div id="vk_subscribe_account"></div>', $html);
        $this->assertContains(
            'VK.Widgets.Subscribe("vk_subscribe_account", {"mode":0}, "account"',
            $html
        );

        $widget = new Catharsis\Web\VkontakteSubscriptionWidget();
        $html = (string) $widget
            ->account('account')
            ->layout(Catharsis\Web\VkontakteSubscriptionButtonLayout::LIGHT_BUTTON)
            ->onlyButton(true)
            ->elementId('elementId');
        $this->assertContains('<div id="elementId"></div>', $html);
        $this->assertContains(
            'VK.Widgets.Subscribe("elementId", {"mode":1,"soft":1}, "account")',
            $html
        );
    }
}

?>
