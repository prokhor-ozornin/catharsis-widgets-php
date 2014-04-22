<?php

/**
 * Tests set for class {@link Catharsis\Web\TwitterFollowButtonWidget}
 */
final class TwitterFollowButtonWidgetTest extends PHPUnit_Framework_TestCase
{
  /**
   * Performs testing of class constructor(s).
   * @link Catharsis\Web\TwitterFollowButtonWidget::__construct()
   */
  public function test_constructors()
  {
    $widget = new Catharsis\Web\TwitterFollowButtonWidget();
    $this->assertAttributeEmpty("account", $widget);
    $this->assertAttributeEmpty("alignment", $widget);
    $this->assertAttributeEmpty("count", $widget);
    $this->assertAttributeEmpty("language", $widget);
    $this->assertAttributeEmpty("opt_out", $widget);
    $this->assertAttributeEmpty("screen_name", $widget);
    $this->assertAttributeEmpty("size", $widget);
    $this->assertAttributeEmpty("width", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\TwitterFollowButtonWidget::account(string $account)} method.
   */
  public function test_account_method()
  {
    $widget = new Catharsis\Web\TwitterFollowButtonWidget();
    $this->assertAttributeEmpty("account", $widget);
    $this->assertSame($widget, $widget->account("account"));
    $this->assertAttributeEquals("account", "account", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\TwitterFollowButtonWidget::alignment(string $alignment)} method.
   */
  public function test_alignment_method()
  {
    $widget = new Catharsis\Web\TwitterFollowButtonWidget();
    $this->assertAttributeEmpty("alignment", $widget);
    $this->assertSame($widget, $widget->alignment("alignment"));
    $this->assertAttributeEquals("alignment", "alignment", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\TwitterFollowButtonWidget::count(boolean $count)} method.
   */
  public function test_count_method()
  {
    $widget = new Catharsis\Web\TwitterFollowButtonWidget();
    $this->assertAttributeEmpty("count", $widget);
    $this->assertSame($widget, $widget->count());
    $this->assertAttributeEquals(true, "count", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\TwitterFollowButtonWidget::language(string $language)} method.
   */
  public function test_language_method()
  {
    $widget = new Catharsis\Web\TwitterFollowButtonWidget();
    $this->assertAttributeEmpty("language", $widget);
    $this->assertSame($widget, $widget->language("language"));
    $this->assertAttributeEquals("language", "language", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\TwitterFollowButtonWidget::opt_out(boolean $opt_out)} method.
   */
  public function test_opt_out_method()
  {
    $widget = new Catharsis\Web\TwitterFollowButtonWidget();
    $this->assertAttributeEmpty("opt_out", $widget);
    $this->assertSame($widget, $widget->opt_out());
    $this->assertAttributeEquals(true, "opt_out", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\TwitterFollowButtonWidget::screen_name(boolean $screen_name)} method.
   */
  public function test_screen_name_method()
  {
    $widget = new Catharsis\Web\TwitterFollowButtonWidget();
    $this->assertAttributeEmpty("screen_name", $widget);
    $this->assertSame($widget, $widget->screen_name());
    $this->assertAttributeEquals(true, "screen_name", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\TwitterFollowButtonWidget::size(string $size)} method.
   */
  public function test_size_method()
  {
    $widget = new Catharsis\Web\TwitterFollowButtonWidget();
    $this->assertAttributeEmpty("size", $widget);
    $this->assertSame($widget, $widget->size("size"));
    $this->assertAttributeEquals("size", "size", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\TwitterFollowButtonWidget::width(string $width)} method.
   */
  public function test_width_method()
  {
    $widget = new Catharsis\Web\TwitterFollowButtonWidget();
    $this->assertAttributeEmpty("width", $widget);
    $this->assertSame($widget, $widget->width("width"));
    $this->assertAttributeEquals("width", "width", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\TwitterFollowButtonWidget::__toString()} method.
   */
  public function test_toString_method()
  {
    $widget = new Catharsis\Web\TwitterFollowButtonWidget();
    $this->assertEquals("<a class=\"twitter-follow-button\" data-lang=\"{$widget->user_language()}\" href=\"https://twitter.com/account\"></a>", (string) $widget->account("account"));

    $widget = new Catharsis\Web\TwitterFollowButtonWidget();
    $this->assertEquals('<a class="twitter-follow-button" data-align="align" data-dnt="true" data-lang="en" data-show-count="true" data-show-screen-name="true" data-size="size" data-width="width" href="https://twitter.com/account"></a>', (string) $widget->account("account")->language("en")->count()->size("size")->width("width")->alignment("align")->screen_name()->opt_out());
  }
}