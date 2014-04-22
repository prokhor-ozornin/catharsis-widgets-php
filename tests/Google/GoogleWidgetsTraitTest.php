<?php

/**
 * Tests set for trait {@link Catharsis\Web\GoogleWidgetsTrait}
 */
final class GoogleWidgetsTraitTest extends PHPUnit_Framework_TestCase
{
  use Catharsis\Web\GoogleWidgetsTrait;

  /**
   * Performs testing of {@link Catharsis\Web\GoogleWidgetsTrait::google()} method.
   */
  public function test_google_method()
  {
    $this->assertAttributeEmpty("google", get_class());
    $this->assertSame(self::google(), self::google());
    $this->assertInstanceOf("Catharsis\Web\GoogleWidgetsFactory", self::google());
  }
}