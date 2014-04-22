<?php

/**
 * Tests set for class {@link Catharsis\Web\FacebookFacepileWidget}
 */
final class FacebookFacepileWidgetTest extends PHPUnit_Framework_TestCase
{
  /**
   * Performs testing of class constructor(s).
   * @link Catharsis\Web\FacebookFacepileWidget::__construct()
   */
  public function test_constructors()
  {
    $widget = new Catharsis\Web\FacebookFacepileWidget();
    $this->assertAttributeEmpty("actions", $widget);
    $this->assertAttributeEmpty("color_scheme", $widget);
    $this->assertAttributeEmpty("height", $widget);
    $this->assertAttributeEmpty("max_rows", $widget);
    $this->assertAttributeEmpty("size", $widget);
    $this->assertAttributeEmpty("url", $widget);
    $this->assertAttributeEmpty("width", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\FacebookFacepileWidget::actions(array $actions)} method.
   */
  public function test_actions_method()
  {
    $widget = new Catharsis\Web\FacebookFacepileWidget();
    $this->assertAttributeEmpty("actions", $widget);
    $this->assertSame($widget, $widget->actions(array("action")));
    $this->assertAttributeEquals(array("action"), "actions", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\FacebookFacepileWidget::color_scheme(string $color_scheme)} method.
   */
  public function test_color_scheme_method()
  {
    $widget = new Catharsis\Web\FacebookFacepileWidget();
    $this->assertAttributeEmpty("color_scheme", $widget);
    $this->assertSame($widget, $widget->color_scheme("color_scheme"));
    $this->assertAttributeEquals("color_scheme", "color_scheme", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\FacebookFacepileWidget::height(string $height)} method.
   */
  public function test_height_method()
  {
    $widget = new Catharsis\Web\FacebookFacepileWidget();
    $this->assertAttributeEmpty("height", $widget);
    $this->assertSame($widget, $widget->height("height"));
    $this->assertAttributeEquals("height", "height", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\FacebookFacepileWidget::max_rows(integer $max_rows)} method.
   */
  public function test_max_rows_method()
  {
    $widget = new Catharsis\Web\FacebookFacepileWidget();
    $this->assertAttributeEmpty("max_rows", $widget);
    $this->assertSame($widget, $widget->max_rows(1));
    $this->assertAttributeEquals(1, "max_rows", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\FacebookFacepileWidget::size(string $size)} method.
   */
  public function test_size_method()
  {
    $widget = new Catharsis\Web\FacebookFacepileWidget();
    $this->assertAttributeEmpty("size", $widget);
    $this->assertSame($widget, $widget->size("size"));
    $this->assertAttributeEquals("size", "size", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\FacebookFacepileWidget::url(string $url)} method.
   */
  public function test_url_method()
  {
    $widget = new Catharsis\Web\FacebookFacepileWidget();
    $this->assertAttributeEmpty("url", $widget);
    $this->assertSame($widget, $widget->url("url"));
    $this->assertAttributeEquals("url", "url", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\FacebookFacepileWidget::width(string $width)} method.
   */
  public function test_width_method()
  {
    $widget = new Catharsis\Web\FacebookFacepileWidget();
    $this->assertAttributeEmpty("width", $widget);
    $this->assertSame($widget, $widget->width("width"));
    $this->assertAttributeEquals("width", "width", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\FacebookFacepileWidget::__toString()} method.
   */
  public function test_toString_method()
  {
    $widget = new Catharsis\Web\FacebookFacepileWidget();
    $this->assertEquals('<div class="fb-facepile"></div>', (string) $widget);

    $widget = new Catharsis\Web\FacebookFacepileWidget();
    $this->assertEquals('<div class="fb-facepile" data-action="actions" data-colorscheme="dark" data-height="height" data-href="url" data-max-rows="10" data-size="large" data-width="width"></div>', (string) $widget->url("url")->actions("actions")->size(Catharsis\Web\FacebookFacepileSize::Large)->width("width")->height("height")->max_rows(10)->color_scheme(Catharsis\Web\FacebookColorScheme::Dark));
  }
}