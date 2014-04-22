<?php

/**
 * Tests set for class {@link Catharsis\Web\FacebookFollowButtonWidget}
 */
final class FacebookFollowButtonWidgetTest extends PHPUnit_Framework_TestCase
{
  /**
   * Performs testing of class constructor(s).
   * @link Catharsis\Web\FacebookFollowButtonWidget::__construct()
   */
  public function test_constructors()
  {
    $widget = new Catharsis\Web\FacebookFollowButtonWidget();
    $this->assertAttributeEmpty("color_scheme", $widget);
    $this->assertAttributeEmpty("faces", $widget);
    $this->assertAttributeEmpty("height", $widget);
    $this->assertAttributeEmpty("kids", $widget);
    $this->assertAttributeEmpty("layout", $widget);
    $this->assertAttributeEmpty("url", $widget);
    $this->assertAttributeEmpty("width", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\FacebookFollowButtonWidget::color_scheme(string $color_scheme)} method.
   */
  public function test_color_scheme_method()
  {
    $widget = new Catharsis\Web\FacebookFollowButtonWidget();
    $this->assertAttributeEmpty("color_scheme", $widget);
    $this->assertSame($widget, $widget->color_scheme("color_scheme"));
    $this->assertAttributeEquals("color_scheme", "color_scheme", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\FacebookFollowButtonWidget::faces(boolean $faces)} method.
   */
  public function test_faces_method()
  {
    $widget = new Catharsis\Web\FacebookFollowButtonWidget();
    $this->assertAttributeEmpty("faces", $widget);
    $this->assertSame($widget, $widget->faces());
    $this->assertAttributeEquals(true, "faces", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\FacebookFollowButtonWidget::height(string $height)} method.
   */
  public function test_height_method()
  {
    $widget = new Catharsis\Web\FacebookFollowButtonWidget();
    $this->assertAttributeEmpty("height", $widget);
    $this->assertSame($widget, $widget->height("height"));
    $this->assertAttributeEquals("height", "height", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\FacebookFollowButtonWidget::kids(boolean $kids)} method.
   */
  public function test_kids_method()
  {
    $widget = new Catharsis\Web\FacebookFollowButtonWidget();
    $this->assertAttributeEmpty("kids", $widget);
    $this->assertSame($widget, $widget->kids());
    $this->assertAttributeEquals(true, "kids", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\FacebookFollowButtonWidget::layout(string $layout)} method.
   */
  public function test_layout_method()
  {
    $widget = new Catharsis\Web\FacebookFollowButtonWidget();
    $this->assertAttributeEmpty("layout", $widget);
    $this->assertSame($widget, $widget->layout("layout"));
    $this->assertAttributeEquals("layout", "layout", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\FacebookFollowButtonWidget::url(string $url)} method.
   */
  public function test_url_method()
  {
    $widget = new Catharsis\Web\FacebookFollowButtonWidget();
    $this->assertAttributeEmpty("url", $widget);
    $this->assertSame($widget, $widget->url("url"));
    $this->assertAttributeEquals("url", "url", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\FacebookFollowButtonWidget::width(string $width)} method.
   */
  public function test_width_method()
  {
    $widget = new Catharsis\Web\FacebookFollowButtonWidget();
    $this->assertAttributeEmpty("width", $widget);
    $this->assertSame($widget, $widget->width("width"));
    $this->assertAttributeEquals("width", "width", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\FacebookFollowButtonWidget::__toString()} method.
   */
  public function test_toString_method()
  {
    $widget = new Catharsis\Web\FacebookFollowButtonWidget();
    $this->assertEmpty((string) $widget);

    $widget = new Catharsis\Web\FacebookFollowButtonWidget();
    $this->assertEquals('<div class="fb-follow" data-href="url"></div>', (string) $widget->url("url"));

    $widget = new Catharsis\Web\FacebookFollowButtonWidget();
    $this->assertEquals('<div class="fb-follow" data-colorscheme="dark" data-height="height" data-href="url" data-kid-directed-site="true" data-layout="box_count" data-show-faces="true" data-width="width"></div>', (string) $widget->url("url")->color_scheme(Catharsis\Web\FacebookColorScheme::Dark)->kids()->layout(Catharsis\Web\FacebookButtonLayout::BoxCount)->faces()->width("width")->height("height"));
  }
}