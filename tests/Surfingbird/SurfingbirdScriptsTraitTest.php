<?php

/**
 * Tests set for class {@link Catharsis\Web\SurfingbirdScriptsTrait}
 */
final class SurfingbirdScriptsTraitTest extends PHPUnit_Framework_TestCase
{
    use Catharsis\Web\HtmlHelpersTrait,
        Catharsis\Web\SurfingbirdScriptsTrait;

    /**
     * Performs testing of {@link Catharsis\Web\SurfingbirdScriptsTrait::surfingbird()} method.
     */
    public function test_surfingbird_method()
    {
        $this->assertEquals('<script src="http://surfingbird.ru/share/share.min.js" type="text/javascript"></script>', self::surfingbird());
    }
}

?>
