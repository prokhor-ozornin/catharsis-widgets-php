<?php

/**
 * Tests set for class {@link Catharsis\Web\CackleCommentsWidget}
 */
final class CackleCommentsWidgetTest extends PHPUnit_Framework_TestCase
{
  /**
   * Performs testing of class constructor(s).
   * @link Catharsis\Web\CackleCommentsWidget::__construct()
   */
  public function test_constructors()
  {
    $widget = new Catharsis\Web\CackleCommentsWidget();
    $this->assertAttributeEmpty("account", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\CackleCommentsWidget::account(string $account)} method.
   */
  public function test_account_method()
  {
    $widget = new Catharsis\Web\CackleCommentsWidget();
    $this->assertAttributeEmpty("account", $widget);
    $this->assertSame($widget, $widget->account("account"));
    $this->assertAttributeEquals("account", "account", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\CackleCommentsWidget::__toString()} method.
   */
  public function test_toString_method()
  {
    $widget = new Catharsis\Web\CackleCommentsWidget();
    $this->assertEmpty((string) $widget);

    $widget = new Catharsis\Web\CackleCommentsWidget();
    $html = (string) $widget->account("account");
    $this->assertContains('<div id="mc-container"></div>', $html);
    $this->assertContains('{"widget":"Comment","id":"account"}', $html);
  }
}