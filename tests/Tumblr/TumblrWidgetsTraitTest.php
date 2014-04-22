<?php

/**
 * Tests set for trait {@link Catharsis\Web\TumblrWidgetsTrait}
 */
final class TumblrWidgetsTraitTest extends PHPUnit_Framework_TestCase
{
  use Catharsis\Web\TumblrWidgetsTrait;

  /**
   ** Performs testing of {@link Catharsis\Web\TumblrWidgetsTrait::tumblr()} method.
   */
  public function test_tumblr_method()
  {
    $this->assertAttributeEmpty("tumblr", get_class());
    $this->assertSame(self::tumblr(), self::tumblr());
    $this->assertInstanceOf("Catharsis\Web\TumblrWidgetsFactory", self::tumblr());
  }
}