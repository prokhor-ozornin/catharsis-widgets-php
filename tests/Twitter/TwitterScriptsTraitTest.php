<?php

/**
 * Tests set for class {@link Catharsis\Web\TwitterScriptsTrait}
 */
final class TwitterScriptsTraitTest extends PHPUnit_Framework_TestCase
{
    use Catharsis\Web\HtmlHelpersTrait,
        Catharsis\Web\TwitterScriptsTrait;

    /**
     * Performs testing of {@link Catharsis\Web\TwitterScriptsTrait::twitter()} method.
     */
    public function test_twitter_method()
    {
        $scripts_path = Catharsis\Web\Widgets::scripts_path();
        $this->assertEquals("<script src=\"{$scripts_path}/twitter_initialize.js\" type=\"text/javascript\"></script>", self::twitter());
    }
}

?>
