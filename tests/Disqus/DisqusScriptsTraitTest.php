<?php

/**
 * Tests set for class {@link Catharsis\Web\CackleScriptsTrait}
 */
final class DisqusScriptsTraitTest extends PHPUnit_Framework_TestCase
{
    use Catharsis\Web\HtmlHelpersTrait,
        Catharsis\Web\DisqusScriptsTrait;

    /**
     * Performs testing of {@link Catharsis\Web\DisqusScriptsTrait::disqus()} method.
     */
    public function test_disqus_method()
    {
        $scripts_path = Catharsis\Web\Widgets::scripts_path();
        $this->assertEquals("<script src=\"{$scripts_path}/disqus.js\" type=\"text/javascript\"></script>", self::disqus());
    }
}

?>
