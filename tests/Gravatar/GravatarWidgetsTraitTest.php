<?php

/**
 * Tests set for trait {@link Catharsis\Web\GravatarWidgetsTrait}
 */
final class GravatarWidgetsTraitTest extends PHPUnit_Framework_TestCase
{
  use Catharsis\Web\GravatarWidgetsTrait;

  /**
   * Performs testing of {@link Catharsis\Web\GravatarWidgetsTrait::gravatar()} method.
   */
  public function test_gravatar_method()
  {
    $this->assertAttributeEmpty("gravatar", get_class());
    $this->assertSame(self::gravatar(), self::gravatar());
    $this->assertInstanceOf("Catharsis\Web\GravatarWidgetsFactory", self::gravatar());
  }
}