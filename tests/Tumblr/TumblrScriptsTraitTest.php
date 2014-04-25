<?php

/**
 * Tests set for class {@link Catharsis\Web\TumblrScriptsTrait}
 */
final class TumblrScriptsTraitTest extends PHPUnit_Framework_TestCase
{
    use Catharsis\Web\HtmlHelpersTrait,
        Catharsis\Web\TumblrScriptsTrait;

    /**
     * Performs testing of {@link Catharsis\Web\TumblrScriptsTrait::tumblr()} method.
     */
    public function test_tumblr_method()
    {
        $this->assertEquals('<script src="http://platform.tumblr.com/v1/share.js" type="text/javascript"></script>', self::tumblr());
    }
}

?>
