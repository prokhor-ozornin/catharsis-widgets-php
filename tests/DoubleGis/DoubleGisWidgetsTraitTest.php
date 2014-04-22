<?php

/**
 * Tests set for trait {@link Catharsis\Web\DoubleGisWidgetsTrait}
 */
final class DoubleGisWidgetsTraitTest extends PHPUnit_Framework_TestCase
{
  use Catharsis\Web\DoubleGisWidgetsTrait;

  /**
   * Performs testing of {@link Catharsis\Web\DoubleGisWidgetsTrait::doublegis()} method.
   */
  public function test_doublegis_method()
  {
    $this->assertAttributeEmpty("doublegis", get_class());
    $this->assertSame(self::doublegis(), self::doublegis());
    $this->assertInstanceOf("Catharsis\Web\DoubleGisWidgetsFactory", self::doublegis());
  }
}