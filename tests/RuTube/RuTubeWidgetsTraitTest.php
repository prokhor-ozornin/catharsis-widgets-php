<?php

/**
 * Tests set for trait {@link Catharsis\Web\RuTubeWidgetsTrait}
 */
final class RuTubeWidgetsTraitTest extends PHPUnit_Framework_TestCase
{
  use Catharsis\Web\RuTubeWidgetsTrait;

  /**
   * Performs testing of {@link Catharsis\Web\RuTubeWidgetsTrait::rutube()} method.
   */
  public function test_rutube_method()
  {
    $this->assertAttributeEmpty("rutube", get_class());
    $this->assertSame(self::rutube(), self::rutube());
    $this->assertInstanceOf("Catharsis\Web\RuTubeWidgetsFactory", self::rutube());
  }
}