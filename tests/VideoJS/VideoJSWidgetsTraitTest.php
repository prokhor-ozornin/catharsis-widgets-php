<?php

/**
 * Tests set for trait {@link Catharsis\Web\VideoJSWidgetsTrait}
 */
final class VideoJSWidgetsTraitTest extends PHPUnit_Framework_TestCase
{
  use Catharsis\Web\VideoJSWidgetsTrait;

  /**
   ** Performs testing of {@link Catharsis\Web\VideoJSWidgetsTrait::videojs()} method.
   */
  public function test_videojs_method()
  {
    $this->assertAttributeEmpty("videojs", get_class());
    $this->assertSame(self::videojs(), self::videojs());
    $this->assertInstanceOf("Catharsis\Web\VideoJSWidgetsFactory", self::videojs());
  }
}