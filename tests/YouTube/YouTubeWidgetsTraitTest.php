<?php

/**
 * Tests set for trait {@link Catharsis\Web\YouTubeWidgetsTrait}
 */
final class YouTubeWidgetsTraitTest extends PHPUnit_Framework_TestCase
{
  use Catharsis\Web\YouTubeWidgetsTrait;

  /**
   ** Performs testing of {@link Catharsis\Web\YouTubeWidgetsTrait::youtube()} method.
   */
  public function test_youtube_method()
  {
    $this->assertAttributeEmpty("youtube", get_class());
    $this->assertSame(self::youtube(), self::youtube());
    $this->assertInstanceOf("Catharsis\Web\YouTubeWidgetsFactory", self::youtube());
  }
}