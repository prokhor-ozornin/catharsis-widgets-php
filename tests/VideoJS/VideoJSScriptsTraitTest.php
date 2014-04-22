<?php

/**
 * Tests set for class {@link Catharsis\Web\VideoJSScriptsTrait}
 */
final class VideoJSScriptsTraitTest extends PHPUnit_Framework_TestCase
{
  use
  Catharsis\Web\HtmlHelpersTrait,
  Catharsis\Web\VideoJSScriptsTrait;

  /**
   * Performs testing of {@link Catharsis\Web\VideoJSScriptsTrait::videojs()} method.
   */
  public function test_videojs_method()
  {
    $this->assertEquals('<script src="http://vjs.zencdn.net/4.3/video.js" type="text/javascript"></script>', self::videojs());
  }
}