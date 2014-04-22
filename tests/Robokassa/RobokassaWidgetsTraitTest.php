<?php

/**
 * Tests set for trait {@link Catharsis\Web\RobokassaWidgetsTrait}
 */
final class RobokassaWidgetsTraitTest extends PHPUnit_Framework_TestCase
{
  use Catharsis\Web\RobokassaWidgetsTrait;

  /**
   ** Performs testing of {@link Catharsis\Web\RobokassaWidgetsTrait::robokassa()} method.
   */
  public function test_robokassa_method()
  {
    $this->assertAttributeEmpty("robokassa", get_class());
    $this->assertSame(self::robokassa(), self::robokassa());
    $this->assertInstanceOf("Catharsis\Web\RobokassaWidgetsFactory", self::robokassa());
  }
}