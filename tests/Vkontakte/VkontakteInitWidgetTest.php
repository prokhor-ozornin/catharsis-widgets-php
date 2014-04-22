<?php

/**
 * Tests set for class {@link Catharsis\Web\VkontakteInitWidget}
 */
final class VkontakteInitWidgetTest extends PHPUnit_Framework_TestCase
{
  /**
   * Performs testing of class constructor(s).
   * @link Catharsis\Web\VkontakteInitWidget::__construct()
   */
  public function test_constructors()
  {
    $widget = new Catharsis\Web\VkontakteInitWidget();
    $this->assertAttributeEmpty("api_id", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\VkontakteInitWidget::api_id(string $api_id)} method.
   */
  public function test_api_id_method()
  {
    $widget = new Catharsis\Web\VkontakteInitWidget();
    $this->assertAttributeEmpty("api_id", $widget);
    $this->assertSame($widget, $widget->api_id("api_id"));
    $this->assertAttributeEquals("api_id", "api_id", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\VkontakteInitWidget::__toString()} method.
   */
  public function test_toString_method()
  {
    $widget = new Catharsis\Web\VkontakteInitWidget();
    $this->assertEmpty((string) $widget);

    $widget = new Catharsis\Web\VkontakteInitWidget();
    $html = (string) $widget->api_id("id");
    $this->assertContains('<script type="text/javascript">', $html);
    $this->assertContains('VK.init({apiId:id, onlyWidgets:true});', $html);
  }
}