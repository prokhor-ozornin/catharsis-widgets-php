<?php

/**
 * Tests set for class {@link Catharsis\Web\GooglePlusOneButtonWidget}
 */
final class GooglePlusOneButtonWidgetTest extends PHPUnit_Framework_TestCase
{
  /**
   * Performs testing of class constructor(s).
   * @link Catharsis\Web\GooglePlusOneButtonWidget::__construct()
   */
  public function test_constructors()
  {
    $widget = new Catharsis\Web\GooglePlusOneButtonWidget();
    $this->assertAttributeEmpty("alignment", $widget);
    $this->assertAttributeEmpty("annotation", $widget);
    $this->assertAttributeEmpty("callback", $widget);
    $this->assertAttributeEmpty("recommendations", $widget);
    $this->assertAttributeEmpty("size", $widget);
    $this->assertAttributeEmpty("url", $widget);
    $this->assertAttributeEmpty("width", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\GooglePlusOneButtonWidget::alignment(string $alignment)} method.
   */
  public function test_alignment_method()
  {
    $widget = new Catharsis\Web\GooglePlusOneButtonWidget();
    $this->assertAttributeEmpty("alignment", $widget);
    $this->assertSame($widget, $widget->alignment("alignment"));
    $this->assertAttributeEquals("alignment", "alignment", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\GooglePlusOneButtonWidget::annotation(string $annotation)} method.
   */
  public function test_annotation_method()
  {
    $widget = new Catharsis\Web\GooglePlusOneButtonWidget();
    $this->assertAttributeEmpty("annotation", $widget);
    $this->assertSame($widget, $widget->annotation("annotation"));
    $this->assertAttributeEquals("annotation", "annotation", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\GooglePlusOneButtonWidget::callback(string $callback)} method.
   */
  public function test_callback_method()
  {
    $widget = new Catharsis\Web\GooglePlusOneButtonWidget();
    $this->assertAttributeEmpty("callback", $widget);
    $this->assertSame($widget, $widget->callback("callback"));
    $this->assertAttributeEquals("callback", "callback", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\GooglePlusOneButtonWidget::recommendations(boolean $recommendations)} method.
   */
  public function test_recommendations_method()
  {
    $widget = new Catharsis\Web\GooglePlusOneButtonWidget();
    $this->assertAttributeEmpty("recommendations", $widget);
    $this->assertSame($widget, $widget->recommendations());
    $this->assertAttributeEquals(true, "recommendations", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\GooglePlusOneButtonWidget::size(string $size)} method.
   */
  public function test_size_method()
  {
    $widget = new Catharsis\Web\GooglePlusOneButtonWidget();
    $this->assertAttributeEmpty("size", $widget);
    $this->assertSame($widget, $widget->size("size"));
    $this->assertAttributeEquals("size", "size", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\GooglePlusOneButtonWidget::url(string $url)} method.
   */
  public function test_url_method()
  {
    $widget = new Catharsis\Web\GooglePlusOneButtonWidget();
    $this->assertAttributeEmpty("url", $widget);
    $this->assertSame($widget, $widget->url("url"));
    $this->assertAttributeEquals("url", "url", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\GooglePlusOneButtonWidget::width(string $width)} method.
   */
  public function test_width_method()
  {
    $widget = new Catharsis\Web\GooglePlusOneButtonWidget();
    $this->assertAttributeEmpty("width", $widget);
    $this->assertSame($widget, $widget->width("width"));
    $this->assertAttributeEquals("width", "width", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\GooglePlusOneButtonWidget::__toString()} method.
   */
  public function test_toString_method()
  {
    $widget = new Catharsis\Web\GooglePlusOneButtonWidget();
    $this->assertEquals('<g:plusone></g:plusone>', (string) $widget);

    $widget = new Catharsis\Web\GooglePlusOneButtonWidget();
    $this->assertEquals('<g:plusone align="left" annotation="none" data-callback="callback" data-recommendations="true" href="url" size="small" width="width"></g:plusone>', (string) $widget->url("url")->size(Catharsis\Web\GooglePlusOneButtonSize::Small)->annotation(Catharsis\Web\GooglePlusOneButtonAnnotation::None)->width("width")->alignment(Catharsis\Web\GooglePlusOneButtonAlignment::Left)->callback("callback")->recommendations());
  }
}