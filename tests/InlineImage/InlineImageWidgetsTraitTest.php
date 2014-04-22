<?php

/**
 * Tests set for trait {@link Catharsis\Web\InlineImageWidgetsTrait}
 */
final class InlineImageWidgetsTraitTest extends PHPUnit_Framework_TestCase
{
  use Catharsis\Web\InlineImageWidgetsTrait;

  /**
   * Performs testing of {@link Catharsis\Web\InlineImageWidgetsTrait::inline_image()} method.
   */
  public function test_inline_image_method()
  {
    $this->assertNotSame(self::inline_image(), self::inline_image());
    $this->assertInstanceOf("Catharsis\Web\InlineImageWidget", self::inline_image());
  }
}