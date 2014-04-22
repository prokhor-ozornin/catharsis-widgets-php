<?php

/**
 * Tests set for trait {@link Catharsis\Web\VkontakteWidgetsTrait}
 */
final class VkontakteWidgetsTraitTest extends PHPUnit_Framework_TestCase
{
  use Catharsis\Web\VkontakteWidgetsTrait;

  /**
   ** Performs testing of {@link Catharsis\Web\VkontakteWidgetsTrait::vkontakte()} method.
   */
  public function test_vkontakte_method()
  {
    $this->assertAttributeEmpty("vkontakte", get_class());
    $this->assertSame(self::vkontakte(), self::vkontakte());
    $this->assertInstanceOf("Catharsis\Web\VkontakteWidgetsFactory", self::vkontakte());
  }
}