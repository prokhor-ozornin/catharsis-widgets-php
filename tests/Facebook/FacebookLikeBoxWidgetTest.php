<?php

/**
 * Tests set for class {@link Catharsis\Web\FacebookLikeBoxWidget}
 */
final class FacebookLikeBoxWidgetTest extends PHPUnit_Framework_TestCase
{
  /**
   * Performs testing of class constructor(s).
   * @link Catharsis\Web\FacebookLikeBoxWidget::__construct()
   */
  public function test_constructors()
  {
    $widget = new Catharsis\Web\FacebookLikeBoxWidget();
    $this->assertAttributeEmpty("border", $widget);
    $this->assertAttributeEmpty("color_scheme", $widget);
    $this->assertAttributeEmpty("faces", $widget);
    $this->assertAttributeEmpty("header", $widget);
    $this->assertAttributeEmpty("height", $widget);
    $this->assertAttributeEmpty("stream", $widget);
    $this->assertAttributeEmpty("url", $widget);
    $this->assertAttributeEmpty("wall", $widget);
    $this->assertAttributeEmpty("width", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\FacebookLikeBoxWidget::border(boolean $border)} method.
   */
  public function test_border_method()
  {
    $widget = new Catharsis\Web\FacebookLikeBoxWidget();
    $this->assertAttributeEmpty("border", $widget);
    $this->assertSame($widget, $widget->border());
    $this->assertAttributeEquals(true, "border", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\FacebookLikeBoxWidget::color_scheme(string $color_scheme)} method.
   */
  public function test_color_scheme_method()
  {
    $widget = new Catharsis\Web\FacebookLikeBoxWidget();
    $this->assertAttributeEmpty("color_scheme", $widget);
    $this->assertSame($widget, $widget->color_scheme("color_scheme"));
    $this->assertAttributeEquals("color_scheme", "color_scheme", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\FacebookLikeBoxWidget::faces(boolean $faces)} method.
   */
  public function test_faces_method()
  {
    $widget = new Catharsis\Web\FacebookLikeBoxWidget();
    $this->assertAttributeEmpty("faces", $widget);
    $this->assertSame($widget, $widget->faces());
    $this->assertAttributeEquals(true, "faces", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\FacebookLikeBoxWidget::header(boolean $header)} method.
   */
  public function test_header_method()
  {
    $widget = new Catharsis\Web\FacebookLikeBoxWidget();
    $this->assertAttributeEmpty("header", $widget);
    $this->assertSame($widget, $widget->header());
    $this->assertAttributeEquals(true, "header", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\FacebookLikeBoxWidget::height(string $height)} method.
   */
  public function test_height_method()
  {
    $widget = new Catharsis\Web\FacebookLikeBoxWidget();
    $this->assertAttributeEmpty("height", $widget);
    $this->assertSame($widget, $widget->height("height"));
    $this->assertAttributeEquals("height", "height", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\FacebookLikeBoxWidget::stream(boolean $stream)} method.
   */
  public function test_stream_method()
  {
    $widget = new Catharsis\Web\FacebookLikeBoxWidget();
    $this->assertAttributeEmpty("stream", $widget);
    $this->assertSame($widget, $widget->stream());
    $this->assertAttributeEquals(true, "stream", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\FacebookLikeBoxWidget::url(string $url)} method.
   */
  public function test_url_method()
  {
    $widget = new Catharsis\Web\FacebookLikeBoxWidget();
    $this->assertAttributeEmpty("url", $widget);
    $this->assertSame($widget, $widget->url("url"));
    $this->assertAttributeEquals("url", "url", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\FacebookLikeBoxWidget::wall(boolean $wall)} method.
   */
  public function test_wall_method()
  {
    $widget = new Catharsis\Web\FacebookLikeBoxWidget();
    $this->assertAttributeEmpty("wall", $widget);
    $this->assertSame($widget, $widget->wall());
    $this->assertAttributeEquals(true, "wall", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\FacebookLikeBoxWidget::width(string $width)} method.
   */
  public function test_width_method()
  {
    $widget = new Catharsis\Web\FacebookLikeBoxWidget();
    $this->assertAttributeEmpty("width", $widget);
    $this->assertSame($widget, $widget->width("width"));
    $this->assertAttributeEquals("width", "width", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\FacebookLikeBoxWidget::__toString()} method.
   */
  public function test_toString_method()
  {
    $widget = new Catharsis\Web\FacebookLikeBoxWidget();
    $this->assertEmpty((string) $widget);

    $widget = new Catharsis\Web\FacebookLikeBoxWidget();
    $this->assertEquals('<div class="fb-like-box" data-href="https://www.facebook.com/pages/Clear-Words/515749945120070"></div>', (string) $widget->url("https://www.facebook.com/pages/Clear-Words/515749945120070"));

    $widget = new Catharsis\Web\FacebookLikeBoxWidget();
    $this->assertEquals('<div class="fb-like-box" data-colorscheme="dark" data-force-wall="true" data-header="true" data-height="height" data-href="https://www.facebook.com/pages/Clear-Words/515749945120070" data-show-border="true" data-show-faces="true" data-stream="true" data-width="width"></div>', (string) $widget->url("https://www.facebook.com/pages/Clear-Words/515749945120070")->width("width")->height("height")->color_scheme(Catharsis\Web\FacebookColorScheme::Dark)->wall()->header()->border()->faces()->stream());
  }
}