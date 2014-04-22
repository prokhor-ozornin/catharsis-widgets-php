<?php

/**
 * Tests set for class {@link Catharsis\Web\FacebookCommentsWidget}
 */
final class FacebookCommentsWidgetTest extends PHPUnit_Framework_TestCase
{
  /**
   * Performs testing of class constructor(s).
   * @link Catharsis\Web\FacebookCommentsWidget::__construct()
   */
  public function test_constructors()
  {
    $widget = new Catharsis\Web\FacebookCommentsWidget();
    $this->assertAttributeEmpty("color_scheme", $widget);
    $this->assertAttributeEmpty("mobile", $widget);
    $this->assertAttributeEmpty("order", $widget);
    $this->assertAttributeEmpty("posts", $widget);
    $this->assertAttributeEmpty("url", $widget);
    $this->assertAttributeEmpty("width", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\FacebookCommentsWidget::color_scheme(string $color_scheme)} method.
   */
  public function test_color_scheme_method()
  {
    $widget = new Catharsis\Web\FacebookCommentsWidget();
    $this->assertAttributeEmpty("color_scheme", $widget);
    $this->assertSame($widget, $widget->color_scheme("color_scheme"));
    $this->assertAttributeEquals("color_scheme", "color_scheme", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\FacebookCommentsWidget::mobile(boolean $mobile)} method.
   */
  public function test_mobile_method()
  {
    $widget = new Catharsis\Web\FacebookCommentsWidget();
    $this->assertAttributeEmpty("mobile", $widget);
    $this->assertSame($widget, $widget->mobile());
    $this->assertAttributeEquals(true, "mobile", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\FacebookCommentsWidget::order(string $order)} method.
   */
  public function test_order_method()
  {
    $widget = new Catharsis\Web\FacebookCommentsWidget();
    $this->assertAttributeEmpty("order", $widget);
    $this->assertSame($widget, $widget->order("order"));
    $this->assertAttributeEquals("order", "order", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\FacebookCommentsWidget::posts(integer $posts)} method.
   */
  public function test_posts_method()
  {
    $widget = new Catharsis\Web\FacebookCommentsWidget();
    $this->assertAttributeEmpty("posts", $widget);
    $this->assertSame($widget, $widget->posts(1));
    $this->assertAttributeEquals(1, "posts", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\FacebookCommentsWidget::url(string $url)} method.
   */
  public function test_url_method()
  {
    $widget = new Catharsis\Web\FacebookCommentsWidget();
    $this->assertAttributeEmpty("url", $widget);
    $this->assertSame($widget, $widget->url("url"));
    $this->assertAttributeEquals("url", "url", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\FacebookCommentsWidget::width(string $width)} method.
   */
  public function test_width_method()
  {
    $widget = new Catharsis\Web\FacebookCommentsWidget();
    $this->assertAttributeEmpty("width", $widget);
    $this->assertSame($widget, $widget->width("width"));
    $this->assertAttributeEquals("width", "width", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\FacebookCommentsWidget::__toString()} method.
   */
  public function test_toString_method()
  {
    $widget = new Catharsis\Web\FacebookCommentsWidget();
    $this->assertEquals('<div class="fb-comments"></div>', (string) $widget);

    $widget = new Catharsis\Web\FacebookCommentsWidget();
    $this->assertEquals('<div class="fb-comments" data-colorscheme="dark" data-href="url" data-mobile="true" data-num-posts="1" data-order-by="reverse_time" data-width="width"></div>', (string) $widget->url("url")->posts(1)->width("width")->color_scheme(Catharsis\Web\FacebookColorScheme::Dark)->mobile()->order(Catharsis\Web\FacebookCommentsOrder::ReverseTime));
  }
}