<?php

/**
 * Tests set for class {@link Catharsis\Web\TumblrShareButtonWidget}
 */
final class TumblrShareButtonWidgetTest extends PHPUnit_Framework_TestCase
{
  /**
   * Performs testing of class constructor(s).
   * @link Catharsis\Web\TumblrShareButtonWidget::__construct()
   */
  public function test_constructors()
  {
    $widget = new Catharsis\Web\TumblrShareButtonWidget();
    $this->assertAttributeEmpty("color_scheme", $widget);
    $this->assertAttributeEquals(Catharsis\Web\TumblrShareButtonType::First, "type", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\TumblrShareButtonWidget::color_scheme(string $color_scheme)} method.
   */
  public function test_color_scheme_method()
  {
    $widget = new Catharsis\Web\TumblrShareButtonWidget();
    $this->assertAttributeEmpty("color_scheme", $widget);
    $this->assertSame($widget, $widget->color_scheme("color_scheme"));
    $this->assertAttributeEquals("color_scheme", "color_scheme", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\TumblrShareButtonWidget::type(integer $type)} method.
   */
  public function test_type_method()
  {
    $widget = new Catharsis\Web\TumblrShareButtonWidget();
    $this->assertAttributeEquals(Catharsis\Web\TumblrShareButtonType::First, "type", $widget);
    $this->assertSame($widget, $widget->type(0));
    $this->assertAttributeEquals(0, "type", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\TumblrShareButtonWidget::__toString()} method.
   */
  public function test_toString_method()
  {
    $widget = new Catharsis\Web\TumblrShareButtonWidget();
    $this->assertEquals('<a href="http://www.tumblr.com/share" style="display:inline-block; text-indent:-9999px; overflow:hidden; width:80px; height:20px; background:url(&#039;http://platform.tumblr.com/v1/share_1.png&#039;) top left no-repeat transparent;" title="Share on Tumblr">Share on Tumblr</a>', (string) $widget);

    $widget = new Catharsis\Web\TumblrShareButtonWidget();
    $this->assertEquals('<a href="http://www.tumblr.com/share" style="display:inline-block; text-indent:-9999px; overflow:hidden; width:70px; height:20px; background:url(&#039;http://platform.tumblr.com/v1/share_2T.png&#039;) top left no-repeat transparent;" title="Share on Tumblr">Share on Tumblr</a>', (string) $widget->type(Catharsis\Web\TumblrShareButtonType::Second)->color_scheme(Catharsis\Web\TumblrShareButtonColorScheme::Gray));
  }
}