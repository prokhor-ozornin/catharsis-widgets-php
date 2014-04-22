<?php

/**
 * Tests set for trait {@link Catharsis\Web\AddThisWidgetsTrait}
 */
final class AddThisWidgetsTraitTest extends PHPUnit_Framework_TestCase
{
  use Catharsis\Web\AddThisWidgetsTrait;

  /**
   * Performs testing of {@link Catharsis\Web\AddThisWidgetsTrait::addthis()} method.
   */
  public function test_addthis_method()
  {
    $this->assertAttributeEmpty("addthis", get_class());
    $this->assertSame(self::addthis(), self::addthis());
    $this->assertInstanceOf("Catharsis\Web\AddThisWidgetsFactory", self::addthis());
  }
}