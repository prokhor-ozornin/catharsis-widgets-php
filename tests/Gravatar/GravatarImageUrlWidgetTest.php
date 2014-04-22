<?php

/**
 * Tests set for class {@link Catharsis\Web\GravatarImageUrlWidget}
 */
final class GravatarImageUrlWidgetTest extends PHPUnit_Framework_TestCase
{
  /**
   * Performs testing of class constructor(s).
   * @link Catharsis\Web\GravatarImageUrlWidget::__construct()
   */
  public function test_constructors()
  {
    $widget = new Catharsis\Web\GravatarImageUrlWidget();
    $this->assertAttributeEmpty("extension", $widget);
    $this->assertAttributeEmpty("hash", $widget);
    $this->assertAttributeEmpty("parameters", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\GravatarImageUrlWidget::default_image(string $url)} method.
   */
  public function test_default_image_method()
  {
    $widget = new Catharsis\Web\GravatarImageUrlWidget();
    $this->assertAttributeEmpty("parameters", $widget);
    $this->assertSame($widget, $widget->default_image("default_image"));
    $this->assertAttributeEquals(array("default" => "default_image"), "parameters", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\GravatarImageUrlWidget::email(string $email)} method.
   */
  public function test_email_method()
  {
    $widget = new Catharsis\Web\GravatarImageUrlWidget();
    $this->assertAttributeEmpty("hash", $widget);
    $this->assertSame($widget, $widget->email("email"));
    $this->assertAttributeEquals(md5("email"), "hash", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\GravatarImageUrlWidget::extension(string $extension)} method.
   */
  public function test_extension_method()
  {
    $widget = new Catharsis\Web\GravatarImageUrlWidget();
    $this->assertAttributeEmpty("extension", $widget);
    $this->assertSame($widget, $widget->extension("extension"));
    $this->assertAttributeEquals("extension", "extension", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\GravatarImageUrlWidget::force_default()} method.
   */
  public function test_force_default_method()
  {
    $widget = new Catharsis\Web\GravatarImageUrlWidget();
    $this->assertAttributeEmpty("parameters", $widget);
    $this->assertSame($widget, $widget->force_default());
    $this->assertAttributeEquals(array("forcedefault" => "y"), "parameters", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\GravatarImageUrlWidget::hash(string $hash)} method.
   */
  public function test_hash_method()
  {
    $widget = new Catharsis\Web\GravatarImageUrlWidget();
    $this->assertAttributeEmpty("hash", $widget);
    $this->assertSame($widget, $widget->hash("hash"));
    $this->assertAttributeEquals("hash", "hash", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\GravatarImageUrlWidget::parameter(string $name, mixed $value)} method.
   */
  public function test_parameter_method()
  {
    $widget = new Catharsis\Web\GravatarImageUrlWidget();
    $this->assertAttributeEmpty("parameters", $widget);
    $this->assertSame($widget, $widget->parameter("name", "value"));
    $this->assertAttributeEquals(array("name" => "value"), "parameters", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\GravatarImageUrlWidget::rating(string $rating)} method.
   */
  public function test_rating_method()
  {
    $widget = new Catharsis\Web\GravatarImageUrlWidget();
    $this->assertAttributeEmpty("parameters", $widget);
    $this->assertSame($widget, $widget->rating("rating"));
    $this->assertAttributeEquals(array("rating" => "rating"), "parameters", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\GravatarImageUrlWidget::size(string $size)} method.
   */
  public function test_size_method()
  {
    $widget = new Catharsis\Web\GravatarImageUrlWidget();
    $this->assertAttributeEmpty("parameters", $widget);
    $this->assertSame($widget, $widget->size("size"));
    $this->assertAttributeEquals(array("size" => "size"), "parameters", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\GravatarImageUrlWidget::__toString()} method.
   */
  public function test_toString_method()
  {
    $widget = new Catharsis\Web\GravatarImageUrlWidget();
    $this->assertEmpty((string) $widget);

    $widget = new Catharsis\Web\GravatarImageUrlWidget();
    $this->assertEquals("http://www.gravatar.com/avatar/hash", (string) $widget->hash("hash"));

    $widget = new Catharsis\Web\GravatarImageUrlWidget();
    $this->assertEquals("http://www.gravatar.com/avatar/hash?name=value", (string) $widget->hash("hash")->parameter("name", "value"));

    $widget = new Catharsis\Web\GravatarImageUrlWidget();
    $this->assertEquals("http://www.gravatar.com/avatar/hash.extension?first=1&second=2", (string) $widget->hash("hash")->extension("extension")->parameter("first", 1)->parameter("second", 2));
  }
}