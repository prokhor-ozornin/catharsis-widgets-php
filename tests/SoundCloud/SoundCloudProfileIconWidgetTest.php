<?php

/**
 * Tests set for class {@link Catharsis\Web\SoundCloudProfileIconWidget}
 */
final class SoundCloudProfileIconWidgetTest extends PHPUnit_Framework_TestCase
{
  /**
   * Performs testing of class constructor(s).
   * @link Catharsis\Web\SoundCloudProfileIconWidget::__construct()
   */
  public function test_constructors()
  {
    $widget = new Catharsis\Web\SoundCloudProfileIconWidget();
    $this->assertAttributeEmpty("account", $widget);
    $this->assertAttributeEquals("orange_white", "color", $widget);
    $this->assertAttributeEquals(Catharsis\Web\SoundCloudProfileIconSize::Size32, "size", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\SoundcloudProfileIconWidget::account(string $account)} method.
   */
  public function test_account_method()
  {
    $widget = new Catharsis\Web\SoundCloudProfileIconWidget();
    $this->assertAttributeEmpty("account", $widget);
    $this->assertSame($widget, $widget->account("account"));
    $this->assertAttributeEquals("account", "account", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\SoundcloudProfileIconWidget::black_white()} method.
   */
  public function test_black_white_method()
  {
    $widget = new Catharsis\Web\SoundCloudProfileIconWidget();
    $this->assertAttributeEquals("orange_white", "color", $widget);
    $this->assertSame($widget, $widget->black_white());
    $this->assertAttributeEquals("black_white", "color", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\SoundcloudProfileIconWidget::color(string $color)} method.
   */
  public function test_color_method()
  {
    $widget = new Catharsis\Web\SoundCloudProfileIconWidget();
    $this->assertAttributeEquals("orange_white", "color", $widget);
    $this->assertSame($widget, $widget->color("color"));
    $this->assertAttributeEquals("color", "color", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\SoundcloudProfileIconWidget::orange_transparent()} method.
   */
  public function test_orange_transparent_method()
  {
    $widget = new Catharsis\Web\SoundCloudProfileIconWidget();
    $this->assertAttributeEquals("orange_white", "color", $widget);
    $this->assertSame($widget, $widget->orange_transparent());
    $this->assertAttributeEquals("orange_transparent", "color", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\SoundcloudProfileIconWidget::orange_white()} method.
   */
  public function test_orange_white_method()
  {
    $widget = new Catharsis\Web\SoundCloudProfileIconWidget();
    $this->assertAttributeEquals("orange_white", "color", $widget);
    $this->assertSame($widget, $widget->orange_white());
    $this->assertAttributeEquals("orange_white", "color", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\SoundcloudProfileIconWidget::size(integer $size)} method.
   */
  public function test_size_method()
  {
    $widget = new Catharsis\Web\SoundCloudProfileIconWidget();
    $this->assertAttributeEquals(Catharsis\Web\SoundCloudProfileIconSize::Size32, "size", $widget);
    $this->assertSame($widget, $widget->size(0));
    $this->assertAttributeEquals(0, "size", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\SoundcloudProfileIconWidget::white_orange()} method.
   */
  public function test_white_orange_method()
  {
    $widget = new Catharsis\Web\SoundCloudProfileIconWidget();
    $this->assertAttributeEquals("orange_white", "color", $widget);
    $this->assertSame($widget, $widget->white_orange());
    $this->assertAttributeEquals("white_orange", "color", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\SoundcloudProfileIconWidget::white_transparent()} method.
   */
  public function test_white_transparent_method()
  {
    $widget = new Catharsis\Web\SoundCloudProfileIconWidget();
    $this->assertAttributeEquals("orange_white", "color", $widget);
    $this->assertSame($widget, $widget->white_transparent());
    $this->assertAttributeEquals("white_transparent", "color", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\SoundcloudProfileIconWidget::__toString()} method.
   */
  public function test_toString_method()
  {
    $widget = new Catharsis\Web\SoundCloudProfileIconWidget();
    $this->assertEmpty((string) $widget);

    $widget = new Catharsis\Web\SoundCloudProfileIconWidget();
    $this->assertEquals("<iframe allowtransparency=\"true\" frameborder=\"0\" scrolling=\"no\" src=\"https://w.soundcloud.com/icon/?url=http://soundcloud.com/account&amp;color=orange_white&amp;size=32\" style=\"width: 32px; height: 32px;\"></iframe>", (string) $widget->account("account"));

    $widget = new Catharsis\Web\SoundCloudProfileIconWidget();
    $this->assertEquals("<iframe allowtransparency=\"true\" frameborder=\"0\" scrolling=\"no\" src=\"https://w.soundcloud.com/icon/?url=http://soundcloud.com/account&amp;color=color&amp;size=1\" style=\"width: 1px; height: 1px;\"></iframe>", (string) $widget->account("account")->color("color")->size(1));
  }
}