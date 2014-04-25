<?php

/**
 * Tests set for class {@link Catharsis\Web\VkontakteSubscriptionWidget}
 */
final class VkontakteSubscriptionWidgetTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of class constructor(s).
     * @link Catharsis\Web\VkontakteSubscriptionWidget::__construct()
     */
    public function test_constructors()
    {
        $widget = new Catharsis\Web\VkontakteSubscriptionWidget();
        $this->assertAttributeEmpty("_account", $widget);
        $this->assertAttributeEquals(Catharsis\Web\VkontakteSubscriptionButtonLayout::First, "_layout", $widget);
        $this->assertAttributeEquals(false, "_onlyButton", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\VkontakteSubscriptionWidget::account(string $account)} method.
     */
    public function test_account_method()
    {
        $widget = new Catharsis\Web\VkontakteSubscriptionWidget();
        $this->assertAttributeEmpty("_account", $widget);
        $this->assertSame($widget, $widget->account("account"));
        $this->assertAttributeEquals("account", "_account", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\VkontakteSubscriptionWidget::layout(integer $layout)} method.
     */
    public function test_layout_method()
    {
        $widget = new Catharsis\Web\VkontakteSubscriptionWidget();
        $this->assertAttributeEquals(Catharsis\Web\VkontakteSubscriptionButtonLayout::First, "_layout", $widget);
        $this->assertSame($widget, $widget->layout(0));
        $this->assertAttributeEquals(0, "_layout", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\VkontakteSubscriptionWidget::onlyButton(boolean $only_button)} method.
     */
    public function test_onlyButton_method()
    {
        $widget = new Catharsis\Web\VkontakteSubscriptionWidget();
        $this->assertAttributeEquals(false, "_onlyButton", $widget);
        $this->assertSame($widget, $widget->onlyButton());
        $this->assertAttributeEquals(true, "_onlyButton", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\VkontakteSubscriptionWidget::__toString()} method.
     */
    public function test_toString_method()
    {
        $widget = new Catharsis\Web\VkontakteSubscriptionWidget();
        $this->assertEmpty((string) $widget);

        $widget = new Catharsis\Web\VkontakteSubscriptionWidget();
        $html = (string) $widget->account("account");
        $this->assertContains('<div id="vk_subscribe"></div>', $html);
        $this->assertContains('VK.Widgets.Subscribe("vk_subscribe", {"mode":1}, "account"', $html);

        $widget = new Catharsis\Web\VkontakteSubscriptionWidget();
        $html = (string) $widget->account("account")->layout(Catharsis\Web\VkontakteSubscriptionButtonLayout::Second)->onlyButton();
        $this->assertContains('<div id="vk_subscribe"></div>', $html);
        $this->assertContains('VK.Widgets.Subscribe("vk_subscribe", {"mode":2,"soft":1}, "account")', $html);
    }
}

?>
