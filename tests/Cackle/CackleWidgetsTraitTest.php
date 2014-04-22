<?php

/**
 * Tests set for trait {@link Catharsis\Web\CackleWidgetsTrait}
 */
final class CackleWidgetsTraitTest extends PHPUnit_Framework_TestCase
{
  use Catharsis\Web\CackleWidgetsTrait;

  /**
   * Performs testing of {@link Catharsis\Web\CackleWidgetsTrait::cackle()} method.
   */
  public function test_cackle_method()
  {
    $this->assertAttributeEmpty("cackle", get_class());
    $this->assertSame(self::cackle(), self::cackle());
    $this->assertInstanceOf("Catharsis\Web\CackleWidgetsFactory", self::cackle());
  }
}