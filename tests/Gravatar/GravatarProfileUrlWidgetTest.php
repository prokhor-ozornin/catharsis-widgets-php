<?php

/**
 * Tests set for class {@link Catharsis\Web\GravatarProfileUrlWidget}
 */
final class GravatarProfileUrlWidgetTest extends PHPUnit_Framework_TestCase
{
  /**
   * Performs testing of class constructor(s).
   * @link Catharsis\Web\GravatarProfileUrlWidget::__construct()
   */
  public function test_constructors()
  {
    $widget = new Catharsis\Web\GravatarProfileUrlWidget();
    $this->assertAttributeEmpty("format", $widget);
    $this->assertAttributeEmpty("hash", $widget);
    $this->assertAttributeEmpty("parameters", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\GravatarProfileUrlWidget::email(string $email)} method.
   */
  public function test_email_method()
  {
    $widget = new Catharsis\Web\GravatarProfileUrlWidget();
    $this->assertAttributeEmpty("hash", $widget);
    $this->assertSame($widget, $widget->email("email"));
    $this->assertAttributeEquals(md5("email"), "hash", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\GravatarProfileUrlWidget::format(string $format)} method.
   */
  public function test_format_method()
  {
    $widget = new Catharsis\Web\GravatarProfileUrlWidget();
    $this->assertAttributeEmpty("format", $widget);
    $this->assertSame($widget, $widget->format("format"));
    $this->assertAttributeEquals("format", "format", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\GravatarProfileUrlWidget::hash(string $hash)} method.
   */
  public function test_hash_method()
  {
    $widget = new Catharsis\Web\GravatarProfileUrlWidget();
    $this->assertAttributeEmpty("hash", $widget);
    $this->assertSame($widget, $widget->hash("hash"));
    $this->assertAttributeEquals("hash", "hash", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\GravatarProfileUrlWidget::json(string $callback)} method.
   */
  public function test_json_method()
  {
    $widget = new Catharsis\Web\GravatarProfileUrlWidget();
    $this->assertAttributeEmpty("format", $widget);

    $widget = new Catharsis\Web\GravatarProfileUrlWidget();
    $this->assertSame($widget, $widget->json());
    $this->assertAttributeEquals("json", "format", $widget);
    $this->assertAttributeEmpty("parameters", $widget);

    $widget = new Catharsis\Web\GravatarProfileUrlWidget();
    $this->assertSame($widget, $widget->json("callback"));
    $this->assertAttributeEquals("json", "format", $widget);
    $this->assertAttributeEquals(array("callback" => "callback"), "parameters", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\GravatarProfileUrlWidget::parameter(string $name, mixed $value)} method.
   */
  public function test_parameter_method()
  {
    $widget = new Catharsis\Web\GravatarProfileUrlWidget();
    $this->assertAttributeEmpty("parameters", $widget);
    $this->assertSame($widget, $widget->parameter("name", "value"));
    $this->assertAttributeEquals(array("name" => "value"), "parameters", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\GravatarProfileUrlWidget::php()} method.
   */
  public function test_php_method()
  {
    $widget = new Catharsis\Web\GravatarProfileUrlWidget();
    $this->assertAttributeEmpty("format", $widget);
    $this->assertSame($widget, $widget->php());
    $this->assertAttributeEquals("php", "format", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\GravatarProfileUrlWidget::qr()} method.
   */
  public function test_qr_method()
  {
    $widget = new Catharsis\Web\GravatarProfileUrlWidget();
    $this->assertAttributeEmpty("format", $widget);

    $widget = new Catharsis\Web\GravatarProfileUrlWidget();
    $this->assertSame($widget, $widget->qr());
    $this->assertAttributeEquals("qr", "format", $widget);
    $this->assertAttributeEmpty("parameters", $widget);

    $widget = new Catharsis\Web\GravatarProfileUrlWidget();
    $this->assertSame($widget, $widget->qr(1));
    $this->assertAttributeEquals("qr", "format", $widget);
    $this->assertAttributeEquals(array("size" => 1), "parameters", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\GravatarProfileUrlWidget::vcf()} method.
   */
  public function test_vcf_method()
  {
    $widget = new Catharsis\Web\GravatarProfileUrlWidget();
    $this->assertAttributeEmpty("format", $widget);
    $this->assertSame($widget, $widget->vcf());
    $this->assertAttributeEquals("vcf", "format", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\GravatarProfileUrlWidget::xml()} method.
   */
  public function test_xml_method()
  {
    $widget = new Catharsis\Web\GravatarProfileUrlWidget();
    $this->assertAttributeEmpty("format", $widget);
    $this->assertSame($widget, $widget->xml());
    $this->assertAttributeEquals("xml", "format", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\GravatarProfileUrlWidget::__toString()} method.
   */
  public function test_toString_method()
  {
    $widget = new Catharsis\Web\GravatarProfileUrlWidget();
    $this->assertEmpty((string) $widget);

    $widget = new Catharsis\Web\GravatarProfileUrlWidget();
    $this->assertEquals("http://www.gravatar.com/hash", (string) $widget->hash("hash"));

    $widget = new Catharsis\Web\GravatarProfileUrlWidget();
    $this->assertEquals("http://www.gravatar.com/hash?name=value", (string) $widget->hash("hash")->parameter("name", "value"));

    $widget = new Catharsis\Web\GravatarProfileUrlWidget();
    $this->assertEquals("http://www.gravatar.com/hash.format?first=1&second=2", (string) $widget->hash("hash")->format("format")->parameter("first", 1)->parameter("second", 2));
  }
}