<?php

/**
 * Tests set for class {@link Catharsis\Web\GoogleScriptsTrait}
 */
final class GoogleScriptsTraitTest extends PHPUnit_Framework_TestCase
{
    use Catharsis\Web\HtmlHelpersTrait,
        Catharsis\Web\GoogleScriptsTrait;

    /**
     * Performs testing of {@link Catharsis\Web\GoogleScriptsTrait::google()} method.
     */
    public function test_google_method()
    {
        $scripts_path = Catharsis\Web\Widgets::scripts_path();
        $this->assertEquals("<script src=\"{$scripts_path}/google_analytics.js\" type=\"text/javascript\"></script><script src=\"{$scripts_path}/google_plusone.js\" type=\"text/javascript\"></script>",
                            self::google());
    }
}

?>
