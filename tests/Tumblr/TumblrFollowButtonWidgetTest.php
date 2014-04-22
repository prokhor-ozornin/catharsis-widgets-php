<?php

/**
 * Tests set for class {@link Catharsis\Web\TumblrFollowButtonWidget}
 */
final class TumblrFollowButtonWidgetTest extends PHPUnit_Framework_TestCase
{
  /**
   * Performs testing of class constructor(s).
   * @link Catharsis\Web\TumblrFollowButtonWidget::__construct()
   */
  public function test_constructors()
  {
    $widget = new Catharsis\Web\TumblrFollowButtonWidget();
    $this->assertAttributeEmpty("account", $widget);
    $this->assertAttributeEquals(Catharsis\Web\TumblrFollowButtonColorScheme::Light, "color_scheme", $widget);
    $this->assertAttributeEquals(Catharsis\Web\TumblrFollowButtonType::First, "type", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\TumblrFollowButtonWidget::account(string $account)} method.
   */
  public function test_account_method()
  {
    $widget = new Catharsis\Web\TumblrFollowButtonWidget();
    $this->assertAttributeEmpty("account", $widget);
    $this->assertSame($widget, $widget->account("account"));
    $this->assertAttributeEquals("account", "account", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\TumblrFollowButtonWidget::color_scheme(string $color_scheme)} method.
   */
  public function test_color_scheme_method()
  {
    $widget = new Catharsis\Web\TumblrFollowButtonWidget();
    $this->assertAttributeEquals(Catharsis\Web\TumblrFollowButtonColorScheme::Light, "color_scheme", $widget);
    $this->assertSame($widget, $widget->color_scheme("color_scheme"));
    $this->assertAttributeEquals("color_scheme", "color_scheme", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\TumblrFollowButtonWidget::type(string $type)} method.
   */
  public function test_type_method()
  {
    $widget = new Catharsis\Web\TumblrFollowButtonWidget();
    $this->assertAttributeEquals(Catharsis\Web\TumblrFollowButtonType::First, "type", $widget);
    $this->assertSame($widget, $widget->type("type"));
    $this->assertAttributeEquals("type", "type", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\TumblrFollowButtonWidget::__toString()} method.
   */
  public function test_toString_method()
  {
    $widget = new Catharsis\Web\TumblrFollowButtonWidget();
    $this->assertEmpty((string) $widget);

    $widget = new Catharsis\Web\TumblrFollowButtonWidget();
    $this->assertEquals('<iframe allowtransparency="true" border="0" class="btn" frameborder="0" height="25" scrolling="no" src="http://platform.tumblr.com/v1/follow_button.html?button_type=1&amp;tumblelog=account&amp;color_scheme=light" width="189"></iframe>', (string) $widget->account("account"));

    $widget = new Catharsis\Web\TumblrFollowButtonWidget();
    $this->assertEquals('<iframe allowtransparency="true" border="0" class="btn" frameborder="0" height="25" scrolling="no" src="http://platform.tumblr.com/v1/follow_button.html?button_type=2&amp;tumblelog=account&amp;color_scheme=dark" width="113"></iframe>', (string) $widget->account("account")->type(Catharsis\Web\TumblrFollowButtonType::Second)->color_scheme(Catharsis\Web\TumblrFollowButtonColorScheme::Dark));
  }
}