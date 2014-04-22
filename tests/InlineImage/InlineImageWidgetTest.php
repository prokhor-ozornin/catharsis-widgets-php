<?php

/**
 * Tests set for class {@link Catharsis\Web\InlineImageWidget}
 */
final class InlineImageWidgetTest extends PHPUnit_Framework_TestCase
{
  /**
   * Performs testing of class constructor(s).
   * @link Catharsis\Web\InlineImageWidget::__construct()
   */
  public function test_constructors()
  {
    $widget = new Catharsis\Web\InlineImageWidget();
    $this->assertAttributeEmpty("contents", $widget);
    $this->assertAttributeEmpty("format", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\InlineImageWidget::contents(string $contents)} method.
   */
  public function test_contents_method()
  {
    $widget = new Catharsis\Web\InlineImageWidget();
    $this->assertAttributeEmpty("contents", $widget);
    $this->assertSame($widget, $widget->contents("contents"));
    $this->assertAttributeEquals("contents", "contents", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\InlineImageWidget::format(string $format)} method.
   */
  public function test_format_method()
  {
    $widget = new Catharsis\Web\InlineImageWidget();
    $this->assertAttributeEmpty("format", $widget);
    $this->assertSame($widget, $widget->format("format"));
    $this->assertAttributeEquals("format", "format", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\InlineImageWidget::__toString()} method.
   */
  public function test_toString_method()
  {
    $widget = new Catharsis\Web\InlineImageWidget();
    $this->assertEmpty((string) $widget);

    $image_data = "data";
    $base64_image_data = base64_encode($image_data);

    $widget = new Catharsis\Web\InlineImageWidget();
    $this->assertEquals("<img src=\"data:image;base64,{$base64_image_data}\"></img>", (string) $widget->contents($image_data));

    $widget = new Catharsis\Web\InlineImageWidget();
    $this->assertEquals("<img src=\"data:jpg;base64,{$base64_image_data}\"></img>", (string) $widget->contents($image_data)->format("jpg"));
  }
}