<?php

/**
 * Tests set for trait {@link Catharsis\Web\DisqusWidgetsTrait}
 */
final class DisqusWidgetsTraitTest extends PHPUnit_Framework_TestCase
{
  use Catharsis\Web\DisqusWidgetsTrait;

  /**
   * Performs testing of {@link Catharsis\Web\DisqusWidgetsTrait::disqus()} method.
   */
  public function test_disqus_method()
  {
    $this->assertAttributeEmpty("disqus", get_class());
    $this->assertSame(self::disqus(), self::disqus());
    $this->assertInstanceOf("Catharsis\Web\DisqusWidgetsFactory", self::disqus());
  }
}