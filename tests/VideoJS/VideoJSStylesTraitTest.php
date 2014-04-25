<?php

/**
 * Tests set for class {@link Catharsis\Web\VideoJSStylesTrait}
 */
final class VideoJSStylesTraitTest extends PHPUnit_Framework_TestCase
{
    use Catharsis\Web\HtmlHelpersTrait,
        Catharsis\Web\VideoJSStylesTrait;

    /**
     * Performs testing of {@link Catharsis\Web\VideoJSStylesTrait::videojs()} method.
     */
    public function test_videojs_method()
    {
        $this->assertEquals('<link href="http://vjs.zencdn.net/4.3/video-js.css" rel="stylesheet" type="text/css"></link>', self::videojs());
    }
}

?>
