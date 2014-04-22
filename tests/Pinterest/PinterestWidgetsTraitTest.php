<?php

/**
 * Tests set for trait {@link Catharsis\Web\PinterestWidgetsTrait}
 */
final class PinterestWidgetsTraitTest extends PHPUnit_Framework_TestCase
{
  use Catharsis\Web\PinterestWidgetsTrait;

  /**
   ** Performs testing of {@link Catharsis\Web\PinterestWidgetsTrait::pinterest()} method.
   */
  public function test_pinterest_method()
  {
    $this->assertAttributeEmpty("pinterest", get_class());
    $this->assertSame(self::pinterest(), self::pinterest());
    $this->assertInstanceOf("Catharsis\Web\PinterestWidgetsFactory", self::pinterest());
  }
}