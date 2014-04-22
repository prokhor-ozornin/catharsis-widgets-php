<?php

/**
 * Tests set for class {@link Catharsis\Web\DisqusCommentsWidget}
 */
final class DisqusCommentsWidgetTest extends PHPUnit_Framework_TestCase
{
  /**
   * Performs testing of class constructor(s).
   * @link Catharsis\Web\DisqusCommentsWidget::__construct()
   */
  public function test_constructors()
  {
    $widget = new Catharsis\Web\DisqusCommentsWidget();
    $this->assertAttributeEmpty("account", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\DisqusCommentsWidget::account(string $account)} method.
   */
  public function test_account_method()
  {
    $widget = new Catharsis\Web\DisqusCommentsWidget();
    $this->assertAttributeEmpty("account", $widget);
    $this->assertSame($widget, $widget->account("account"));
    $this->assertAttributeEquals("account", "account", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\DisqusCommentsWidget::__toString()} method.
   */
  public function test_toString_method()
  {
    $widget = new Catharsis\Web\DisqusCommentsWidget();
    $this->assertEmpty((string) $widget);

    $widget = new Catharsis\Web\DisqusCommentsWidget();
    $html = (string) $widget->account("account");
    $this->assertContains('<div id="disqus_thread"></div>', $html);
    $this->assertContains('var disqus_shortname = "account"', $html);
  }
}