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
    $this->assertAttributeEmpty("account", $widget);
    $this->assertAttributeEquals(Catharsis\Web\VkontakteSubscribeButtonLayout::First, "layout", $widget);
    $this->assertAttributeEquals(false, "only_button", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\VkontakteSubscriptionWidget::account(string $account)} method.
   */
  public function test_account_method()
  {
    $widget = new Catharsis\Web\VkontakteSubscriptionWidget();
    $this->assertAttributeEmpty("account", $widget);
    $this->assertSame($widget, $widget->account("account"));
    $this->assertAttributeEquals("account", "account", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\VkontakteSubscriptionWidget::layout(integer $layout)} method.
   */
  public function test_layout_method()
  {
    $widget = new Catharsis\Web\VkontakteSubscriptionWidget();
    $this->assertAttributeEquals(Catharsis\Web\VkontakteSubscribeButtonLayout::First, "layout", $widget);
    $this->assertSame($widget, $widget->layout(0));
    $this->assertAttributeEquals(0, "layout", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\VkontakteSubscriptionWidget::only_button(boolean $only_button)} method.
   */
  public function test_only_button_method()
  {
    $widget = new Catharsis\Web\VkontakteSubscriptionWidget();
    $this->assertAttributeEquals(false, "only_button", $widget);
    $this->assertSame($widget, $widget->only_button());
    $this->assertAttributeEquals(true, "only_button", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\VkontakteSubscriptionWidget::__toString()} method.
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
    $html = (string) $widget->account("account")->layout(Catharsis\Web\VkontakteSubscribeButtonLayout::Second)->only_button();
    $this->assertContains('<div id="vk_subscribe"></div>', $html);
    $this->assertContains('VK.Widgets.Subscribe("vk_subscribe", {"mode":2,"soft":1}, "account")', $html);
  }
}