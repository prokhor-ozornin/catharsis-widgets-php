<?php

/**
 * Tests set for class {@link Catharsis\Web\CackleScriptsTrait}
 */
final class CackleScriptsTraitTest extends PHPUnit_Framework_TestCase
{
    use Catharsis\Web\HtmlHelpersTrait,
        Catharsis\Web\CackleScriptsTrait;

    /**
     * Performs testing of {@link Catharsis\Web\CackleScriptsTrait::cackle()} method.
     */
    public function test_cackle_method()
    {
        $scripts_path = Catharsis\Web\Widgets::scripts_path();
        $this->assertEquals("<script src=\"{$scripts_path}/cackle.js\" type=\"text/javascript\"></script>", self::cackle());
    }
}

?>
