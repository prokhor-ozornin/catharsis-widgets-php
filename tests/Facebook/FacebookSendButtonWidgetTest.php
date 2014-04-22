<?php

/**
 * Tests set for class {@link Catharsis\Web\FacebookSendButtonWidget}
 */
final class FacebookSendButtonWidgetTest extends PHPUnit_Framework_TestCase
{
  /**
   * Performs testing of class constructor(s).
   * @link Catharsis\Web\FacebookSendButtonWidget::__construct()
   */
  public function test_constructors()
  {
    $widget = new Catharsis\Web\FacebookSendButtonWidget();
    $this->assertAttributeEmpty("color_scheme", $widget);
    $this->assertAttributeEmpty("height", $widget);
    $this->assertAttributeEmpty("kids", $widget);
    $this->assertAttributeEmpty("track_label", $widget);
    $this->assertAttributeEmpty("url", $widget);
    $this->assertAttributeEmpty("width", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\FacebookSendButtonWidget::color_scheme(string $color_scheme)} method.
   */
  public function test_color_scheme_method()
  {
    $widget = new Catharsis\Web\FacebookSendButtonWidget();
    $this->assertAttributeEmpty("color_scheme", $widget);
    $this->assertSame($widget, $widget->color_scheme("color_scheme"));
    $this->assertAttributeEquals("color_scheme", "color_scheme", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\FacebookSendButtonWidget::height(string $height)} method.
   */
  public function test_height_method()
  {
    $widget = new Catharsis\Web\FacebookSendButtonWidget();
    $this->assertAttributeEmpty("height", $widget);
    $this->assertSame($widget, $widget->height("height"));
    $this->assertAttributeEquals("height", "height", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\FacebookSendButtonWidget::kids(boolean $kids)} method.
   */
  public function test_kids_method()
  {
    $widget = new Catharsis\Web\FacebookSendButtonWidget();
    $this->assertAttributeEmpty("kids", $widget);
    $this->assertSame($widget, $widget->kids());
    $this->assertAttributeEquals(true, "kids", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\FacebookSendButtonWidget::track_label(string $track_label)} method.
   */
  public function test_track_label_method()
  {
    $widget = new Catharsis\Web\FacebookSendButtonWidget();
    $this->assertAttributeEmpty("track_label", $widget);
    $this->assertSame($widget, $widget->track_label("track_label"));
    $this->assertAttributeEquals("track_label", "track_label", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\FacebookSendButtonWidget::url(string $url)} method.
   */
  public function test_url_method()
  {
    $widget = new Catharsis\Web\FacebookSendButtonWidget();
    $this->assertAttributeEmpty("url", $widget);
    $this->assertSame($widget, $widget->url("url"));
    $this->assertAttributeEquals("url", "url", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\FacebookSendButtonWidget::width(string $width)} method.
   */
  public function test_width_method()
  {
    $widget = new Catharsis\Web\FacebookSendButtonWidget();
    $this->assertAttributeEmpty("width", $widget);
    $this->assertSame($widget, $widget->width("width"));
    $this->assertAttributeEquals("width", "width", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\FacebookSendButtonWidget::__toString()} method.
   */
  public function test_toString_method()
  {
    $widget = new Catharsis\Web\FacebookSendButtonWidget();
    $this->assertEquals('<div class="fb-send"></div>', (string) $widget);

    $widget = new Catharsis\Web\FacebookSendButtonWidget();
    $this->assertEquals('<div class="fb-send" data-colorscheme="dark" data-height="height" data-href="url" data-kid-directed-site="true" data-ref="track_label" data-width="width"></div>', (string) $widget->url("url")->color_scheme(Catharsis\Web\FacebookColorScheme::Dark)->kids()->width("width")->height("height")->track_label("track_label"));
  }
}