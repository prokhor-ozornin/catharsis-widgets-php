<?php

/**
 * Tests set for class {@link Catharsis\Web\CackleLoginWidget}
 */
final class CackleLoginWidgetTest extends PHPUnit_Framework_TestCase
{
  /**
   * Performs testing of class constructor(s).
   * @link Catharsis\Web\CackleLoginWidget::__construct()
   */
  public function test_constructors()
  {
    $widget = new Catharsis\Web\CackleLoginWidget();
    $this->assertAttributeEmpty("account", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\CackleLoginWidget::account(string $account)} method.
   */
  public function test_account_method()
  {
    $widget = new Catharsis\Web\CackleLoginWidget();
    $this->assertAttributeEmpty("account", $widget);
    $this->assertSame($widget, $widget->account("account"));
    $this->assertAttributeEquals("account", "account", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\CackleLoginWidget::__toString()} method.
   */
  public function test_toString_method()
  {
    $widget = new Catharsis\Web\CackleLoginWidget();
    $this->assertEmpty((string) $widget);

    $widget = new Catharsis\Web\CackleLoginWidget();
    $html = (string) $widget->account("account");
    $this->assertContains('<div id="mc-login"></div>', $html);
    $this->assertContains('{"widget":"Login","id":"account"}', $html);
  }
}