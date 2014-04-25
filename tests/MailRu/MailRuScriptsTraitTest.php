<?php

/**
 * Tests set for class {@link Catharsis\Web\MailRuScriptsTrait}
 */
final class MailRuScriptsTraitTest extends PHPUnit_Framework_TestCase
{
    use Catharsis\Web\HtmlHelpersTrait,
        Catharsis\Web\MailRuScriptsTrait;

    /**
     * Performs testing of {@link Catharsis\Web\MailRuScriptsTrait::mailru()} method.
     */
    public function test_mailru_method()
    {
        $this->assertEquals('<script src="http://cdn.connect.mail.ru/js/loader.js" type="text/javascript"></script>',
                            self::mailru());
    }
}

?>
