<?php

/**
 * Tests set for trait {@link Catharsis\Web\TwitterWidgetsTrait}
 */
final class TwitterWidgetsTraitTest extends PHPUnit_Framework_TestCase
{
  use Catharsis\Web\TwitterWidgetsTrait;

  /**
   ** Performs testing of {@link Catharsis\Web\TwitterWidgetsTrait::twitter()} method.
   */
  public function test_twitter_method()
  {
    $this->assertAttributeEmpty("twitter", get_class());
    $this->assertSame(self::twitter(), self::twitter());
    $this->assertInstanceOf("Catharsis\Web\TwitterWidgetsFactory", self::twitter());
  }
}