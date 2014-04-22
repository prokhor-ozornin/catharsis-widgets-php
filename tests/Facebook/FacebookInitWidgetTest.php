<?php

/**
 * Tests set for class {@link Catharsis\Web\FacebookInitWidget}
 */
final class FacebookInitWidgetTest extends PHPUnit_Framework_TestCase
{
  /**
   * Performs testing of class constructor(s).
   * @link Catharsis\Web\FacebookInitWidget::__construct()
   */
  public function test_constructors()
  {
    $widget = new Catharsis\Web\FacebookInitWidget();
    $this->assertAttributeEmpty("app_id", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\FacebookInitWidget::app_id(string $app_id)} method.
   */
  public function test_app_id_method()
  {
    $widget = new Catharsis\Web\FacebookInitWidget();
    $this->assertAttributeEmpty("app_id", $widget);
    $this->assertSame($widget, $widget->app_id("app_id"));
    $this->assertAttributeEquals("app_id", "app_id", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\FacebookInitWidget::__toString()} method.
   */
  public function test_toString_method()
  {
    $widget = new Catharsis\Web\FacebookInitWidget();
    $this->assertEmpty((string) $widget);

    $widget = new Catharsis\Web\FacebookInitWidget();
    $html = (string) $widget->app_id("app_id");
    $this->assertContains('<div id="fb-root"></div>', $html);
    $this->assertContains('//connect.facebook.net/en_US/all.js#xfbml=1&appId=app_id', $html);
  }
}