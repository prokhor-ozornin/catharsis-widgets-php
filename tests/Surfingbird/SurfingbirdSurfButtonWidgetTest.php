<?php

/**
 * Tests set for class {@link Catharsis\Web\SurfingbirdSurfButtonWidget}
 */
final class SurfingbirdSurfButtonWidgetTest extends PHPUnit_Framework_TestCase
{
  /**
   * Performs testing of class constructor(s).
   * @link Catharsis\Web\SurfingbirdSurfButtonWidget::__construct()
   */
  public function test_constructors()
  {
    $widget = new Catharsis\Web\SurfingbirdSurfButtonWidget();
    $this->assertAttributeEmpty("color", $widget);
    $this->assertAttributeEquals(false, "counter", $widget);
    $this->assertAttributeEmpty("height", $widget);
    $this->assertAttributeEquals("Surf", "label", $widget);
    $this->assertAttributeEquals(Catharsis\Web\SurfingbirdSurfButtonLayout::Common, "layout", $widget);
    $this->assertAttributeEmpty("url", $widget);
    $this->assertAttributeEmpty("width", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\SurfingbirdSurfButtonWidget::color(string $color)} method.
   */
  public function test_color_method()
  {
    $widget = new Catharsis\Web\SurfingbirdSurfButtonWidget();
    $this->assertAttributeEmpty("color", $widget);
    $this->assertSame($widget, $widget->color("color"));
    $this->assertAttributeEquals("color", "color", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\SurfingbirdSurfButtonWidget::counter(boolean $counter)} method.
   */
  public function test_counter_method()
  {
    $widget = new Catharsis\Web\SurfingbirdSurfButtonWidget();
    $this->assertAttributeEquals(false, "counter", $widget);
    $this->assertSame($widget, $widget->counter());
    $this->assertAttributeEquals(true, "counter", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\SurfingbirdSurfButtonWidget::height(string $height)} method.
   */
  public function test_height_method()
  {
    $widget = new Catharsis\Web\SurfingbirdSurfButtonWidget();
    $this->assertAttributeEmpty("height", $widget);
    $this->assertSame($widget, $widget->height("height"));
    $this->assertAttributeEquals("height", "height", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\SurfingbirdSurfButtonWidget::label(string $label)} method.
   */
  public function test_label_method()
  {
    $widget = new Catharsis\Web\SurfingbirdSurfButtonWidget();
    $this->assertAttributeEquals("Surf", "label", $widget);
    $this->assertSame($widget, $widget->label("label"));
    $this->assertAttributeEquals("label", "label", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\SurfingbirdSurfButtonWidget::layout(string $layout)} method.
   */
  public function test_layout_method()
  {
    $widget = new Catharsis\Web\SurfingbirdSurfButtonWidget();
    $this->assertAttributeEquals(Catharsis\Web\SurfingbirdSurfButtonLayout::Common, "layout", $widget);
    $this->assertSame($widget, $widget->layout("layout"));
    $this->assertAttributeEquals("layout", "layout", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\SurfingbirdSurfButtonWidget::url(string $url)} method.
   */
  public function test_url_method()
  {
    $widget = new Catharsis\Web\SurfingbirdSurfButtonWidget();
    $this->assertAttributeEmpty("url", $widget);
    $this->assertSame($widget, $widget->url("url"));
    $this->assertAttributeEquals("url", "url", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\SurfingbirdSurfButtonWidget::width(string $width)} method.
   */
  public function test_width_method()
  {
    $widget = new Catharsis\Web\SurfingbirdSurfButtonWidget();
    $this->assertAttributeEmpty("width", $widget);
    $this->assertSame($widget, $widget->width("width"));
    $this->assertAttributeEquals("width", "width", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\SurfingbirdSurfButtonWidget::__toString()} method.
   */
  public function test_toString_method()
  {
    $widget = new Catharsis\Web\SurfingbirdSurfButtonWidget();
    $this->assertEquals('<a class="surfinbird__like_button" data-surf-config="{&quot;layout&quot;:&quot;common-nocount&quot;}" href="http://surfingbird.ru/share" target="_blank">Surf</a>', (string) $widget);

    $widget = new Catharsis\Web\SurfingbirdSurfButtonWidget();
    $this->assertEquals('<a class="surfinbird__like_button" data-surf-config="{&quot;layout&quot;:&quot;common-blue&quot;,&quot;url&quot;:&quot;url&quot;,&quot;width&quot;:&quot;width&quot;,&quot;height&quot;:&quot;height&quot;}" href="http://surfingbird.ru/share" target="_blank">Share</a>', (string) $widget->color(Catharsis\Web\SurfingbirdSurfButtonColor::Blue)->counter()->label("Share")->url("url")->layout(Catharsis\Web\SurfingbirdSurfButtonLayout::Common)->width("width")->height("height"));
  }
}