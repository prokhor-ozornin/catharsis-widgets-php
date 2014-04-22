<?php

/**
 * Tests set for class {@link Catharsis\Web\PinterestProfileWidget}
 */
final class PinterestProfileWidgetTest extends PHPUnit_Framework_TestCase
{
  /**
   * Performs testing of class constructor(s).
   * @link Catharsis\Web\PinterestProfileWidget::__construct()
   */
  public function test_constructors()
  {
    $widget = new Catharsis\Web\PinterestProfileWidget();
    $this->assertAttributeEmpty("account", $widget);
    $this->assertAttributeEmpty("height", $widget);
    $this->assertAttributeEmpty("image_width", $widget);
    $this->assertAttributeEmpty("width", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\PinterestProfileWidget::account(string $account)} method.
   */
  public function test_account_method()
  {
    $widget = new Catharsis\Web\PinterestProfileWidget();
    $this->assertAttributeEmpty("account", $widget);
    $this->assertSame($widget, $widget->account("account"));
    $this->assertAttributeEquals("account", "account", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\PinterestProfileWidget::height(string $height)} method.
   */
  public function test_height_method()
  {
    $widget = new Catharsis\Web\PinterestProfileWidget();
    $this->assertAttributeEmpty("height", $widget);
    $this->assertSame($widget, $widget->height("height"));
    $this->assertAttributeEquals("height", "height", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\PinterestProfileWidget::header()} method.
   */
  public function test_header_method()
  {
    $widget = new Catharsis\Web\PinterestProfileWidget();
    $this->assertSame($widget, $widget->header());
    $this->assertAttributeEquals("115", "image_width", $widget);
    $this->assertAttributeEquals("120", "height", $widget);
    $this->assertAttributeEquals("900", "width", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\PinterestProfileWidget::image_width(string $width)} method.
   */
  public function test_image_width_method()
  {
    $widget = new Catharsis\Web\PinterestProfileWidget();
    $this->assertAttributeEmpty("image_width", $widget);
    $this->assertSame($widget, $widget->image_width("image_width"));
    $this->assertAttributeEquals("image_width", "image_width", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\PinterestProfileWidget::sidebar()} method.
   */
  public function test_sidebar_method()
  {
    $widget = new Catharsis\Web\PinterestProfileWidget();
    $this->assertSame($widget, $widget->sidebar());
    $this->assertAttributeEquals("60", "image_width", $widget);
    $this->assertAttributeEquals("800", "height", $widget);
    $this->assertAttributeEquals("150", "width", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\PinterestProfileWidget::square()} method.
   */
  public function test_square_method()
  {
    $widget = new Catharsis\Web\PinterestProfileWidget();
    $this->assertSame($widget, $widget->square());
    $this->assertAttributeEquals("80", "image_width", $widget);
    $this->assertAttributeEquals("320", "height", $widget);
    $this->assertAttributeEquals("400", "width", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\PinterestProfileWidget::width(string $width)} method.
   */
  public function test_width_method()
  {
    $widget = new Catharsis\Web\PinterestProfileWidget();
    $this->assertAttributeEmpty("width", $widget);
    $this->assertSame($widget, $widget->width("width"));
    $this->assertAttributeEquals("width", "width", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\PinterestProfileWidget::__toString()} method.
   */
  public function test_toString_method()
  {
    $widget = new Catharsis\Web\PinterestProfileWidget();
    $this->assertEmpty((string) $widget);

    $widget = new Catharsis\Web\PinterestProfileWidget();
    $this->assertEquals('<a data-pin-do="embedUser" href="http://www.pinterest.com/account"></a>', (string) $widget->account("account"));

    $widget = new Catharsis\Web\PinterestProfileWidget();
    $this->assertEquals('<a data-pin-board-width="width" data-pin-do="embedUser" data-pin-scale-height="height" data-pin-scale-width="image_width" href="http://www.pinterest.com/account"></a>', (string) $widget->account("account")->width("width")->height("height")->image_width("image_width"));
  }
}