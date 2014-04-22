<?php

/**
 * Tests set for class {@link Catharsis\Web\PinterestFollowButtonWidget}
 */
final class PinterestFollowButtonWidgetTest extends PHPUnit_Framework_TestCase
{
  /**
   * Performs testing of class constructor(s).
   * @link Catharsis\Web\PinterestFollowButtonWidget::__construct()
   */
  public function test_constructors()
  {
    $widget = new Catharsis\Web\PinterestFollowButtonWidget();
    $this->assertAttributeEmpty("account", $widget);
    $this->assertAttributeEquals("Follow", "label", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\PinterestFollowButtonWidget::account(string $account)} method.
   */
  public function test_account_method()
  {
    $widget = new Catharsis\Web\PinterestFollowButtonWidget();
    $this->assertAttributeEmpty("account", $widget);
    $this->assertSame($widget, $widget->account("account"));
    $this->assertAttributeEquals("account", "account", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\PinterestFollowButtonWidget::label(string $label)} method.
   */
  public function test_label_method()
  {
    $widget = new Catharsis\Web\PinterestFollowButtonWidget();
    $this->assertAttributeEquals("Follow", "label", $widget);
    $this->assertSame($widget, $widget->label("label"));
    $this->assertAttributeEquals("label", "label", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\PinterestFollowButtonWidget::__toString()} method.
   */
  public function test_toString_method()
  {
    $widget = new Catharsis\Web\PinterestFollowButtonWidget();
    $this->assertEmpty((string) $widget);

    $widget = new Catharsis\Web\PinterestFollowButtonWidget();
    $this->assertEquals('<a data-pin-do="buttonFollow" href="http://www.pinterest.com/account">Follow</a>', (string) $widget->account("account"));

    $widget = new Catharsis\Web\PinterestFollowButtonWidget();
    $this->assertEquals('<a data-pin-do="buttonFollow" href="http://www.pinterest.com/account">label</a>', (string) $widget->account("account")->label("label"));
  }
}