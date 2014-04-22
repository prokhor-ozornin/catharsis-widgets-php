<?php

/**
 * Tests set for class {@link Catharsis\Web\GoogleAnalyticsWidget}
 */
final class GoogleAnalyticsWidgetTest extends PHPUnit_Framework_TestCase
{
  /**
   * Performs testing of class constructor(s).
   * @link Catharsis\Web\GoogleAnalyticsWidget::__construct()
   */
  public function test_constructors()
  {
    $widget = new Catharsis\Web\GoogleAnalyticsWidget();
    $this->assertAttributeEmpty("account", $widget);
    $this->assertAttributeEmpty("domain", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\GoogleAnalyticsWidget::account(string $account)} method.
   */
  public function test_account_method()
  {
    $widget = new Catharsis\Web\GoogleAnalyticsWidget();
    $this->assertAttributeEmpty("account", $widget);
    $this->assertSame($widget, $widget->account("account"));
    $this->assertAttributeEquals("account", "account", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\GoogleAnalyticsWidget::domain(string $domain)} method.
   */
  public function test_domain_method()
  {
    $widget = new Catharsis\Web\GoogleAnalyticsWidget();
    $this->assertAttributeEmpty("domain", $widget);
    $this->assertSame($widget, $widget->domain("domain"));
    $this->assertAttributeEquals("domain", "domain", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\GoogleAnalyticsWidget::__toString()} method.
   */
  public function test_toString_method()
  {
    $widget = new Catharsis\Web\GoogleAnalyticsWidget();
    $this->assertEmpty((string) $widget);

    $widget = new Catharsis\Web\GoogleAnalyticsWidget();
    $this->assertEmpty((string) $widget->account("account"));

    $widget = new Catharsis\Web\GoogleAnalyticsWidget();
    $this->assertEmpty((string) $widget->domain("domain"));

    $widget = new Catharsis\Web\GoogleAnalyticsWidget();
    $html = (string) $widget->account("account")->domain("domain");
    $this->assertContains('//www.google-analytics.com/analytics.js', $html);
    $this->assertContains('ga("create", "account", "domain");', $html);
  }
}