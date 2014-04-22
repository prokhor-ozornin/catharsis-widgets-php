<?php

/**
 * Tests set for class {@link Catharsis\Web\YouTubeVideoWidget}
 */
final class YouTubeVideoWidgetTest extends PHPUnit_Framework_TestCase
{
  /**
   * Performs testing of class constructor(s).
   * @link Catharsis\Web\YouTubeVideoWidget::__construct()
   */
  public function test_constructors()
  {
    $widget = new Catharsis\Web\YouTubeVideoWidget();
    $this->assertAttributeEmpty("height", $widget);
    $this->assertAttributeEmpty("id", $widget);
    $this->assertAttributeEquals(false, "is_private", $widget);
    $this->assertAttributeEquals(false, "is_secure", $widget);
    $this->assertAttributeEmpty("width", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\YouTubeVideoWidget::height(string $height)} method.
   */
  public function test_height_method()
  {
    $widget = new Catharsis\Web\YouTubeVideoWidget();
    $this->assertAttributeEmpty("height", $widget);
    $this->assertSame($widget, $widget->height("height"));
    $this->assertAttributeEquals("height", "height", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\YouTubeVideoWidget::id(string $id)} method.
   */
  public function test_id_method()
  {
    $widget = new Catharsis\Web\YouTubeVideoWidget();
    $this->assertAttributeEmpty("id", $widget);
    $this->assertSame($widget, $widget->id("id"));
    $this->assertAttributeEquals("id", "id", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\YouTubeVideoWidget::is_private(boolean $private)} method.
   */
  public function test_is_private_method()
  {
    $widget = new Catharsis\Web\YouTubeVideoWidget();
    $this->assertAttributeEquals(false, "is_private", $widget);
    $this->assertSame($widget, $widget->is_private());
    $this->assertAttributeEquals(true, "is_private", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\YouTubeVideoWidget::is_secure(boolean $secure)} method.
   */
  public function test_is_secure_method()
  {
    $widget = new Catharsis\Web\YouTubeVideoWidget();
    $this->assertAttributeEquals(false, "is_secure", $widget);
    $this->assertSame($widget, $widget->is_secure());
    $this->assertAttributeEquals(true, "is_secure", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\YouTubeVideoWidget::width(string $width)} method.
   */
  public function test_width_method()
  {
    $widget = new Catharsis\Web\YouTubeVideoWidget();
    $this->assertAttributeEmpty("width", $widget);
    $this->assertSame($widget, $widget->width("width"));
    $this->assertAttributeEquals("width", "width", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\YouTubeVideoWidget::__toString()} method.
   */
  public function test_toString_method()
  {
    $widget = new Catharsis\Web\YouTubeVideoWidget();
    $this->assertEmpty((string) $widget);

    $widget = new Catharsis\Web\YouTubeVideoWidget();
    $this->assertEmpty((string) $widget->id("id")->height("height"));

    $widget = new Catharsis\Web\YouTubeVideoWidget();
    $this->assertEmpty((string) $widget->id("id")->width("width"));

    $widget = new Catharsis\Web\YouTubeVideoWidget();
    $this->assertEmpty((string) $widget->height("height")->width("width"));

    $widget = new Catharsis\Web\YouTubeVideoWidget();
    $this->assertEquals('<iframe allowfullscreen="true" frameborder="0" height="height" mozallowfullscreen="true" src="http://www.youtube.com/embed/id" webkitallowfullscreen="true" width="width"></iframe>', (string) $widget->id("id")->height("height")->width("width"));

    $widget = new Catharsis\Web\YouTubeVideoWidget();
    $this->assertEquals('<iframe allowfullscreen="true" frameborder="0" height="height" mozallowfullscreen="true" src="https://www.youtube-nocookie.com/embed/id" webkitallowfullscreen="true" width="width"></iframe>', (string) $widget->id("id")->height("height")->width("width")->is_private()->is_secure());
  }
}