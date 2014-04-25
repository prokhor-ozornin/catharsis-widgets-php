<?php

/**
 * Tests set for class {@link Catharsis\Web\VkontakteScriptsTrait}
 */
final class VkontakteScriptsTraitTest extends PHPUnit_Framework_TestCase
{
    use Catharsis\Web\HtmlHelpersTrait,
        Catharsis\Web\VkontakteScriptsTrait;

    /**
     * Performs testing of {@link Catharsis\Web\VkontakteScriptsTrait::vkontakte()} method.
     */
    public function test_vkontakte_method()
    {
        $this->assertEquals('<script src="http://vk.com/js/api/openapi.js" type="text/javascript"></script>', self::vkontakte());
    }
}

?>
