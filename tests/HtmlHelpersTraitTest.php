<?php
/**
 * PHP version 5
 *
 * @category HTML
 * @package  WebWidgets
 * @author   Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @license  LGPL https://www.gnu.org/licenses/lgpl.html
 * @link     http://pear.php.net/package/HTML_WebWidgets
 */

/**
 * Tests set for class {@link \Catharsis\Web\HtmlHelpersTrait}
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class HtmlHelpersTraitTest extends PHPUnit_Framework_TestCase
{
    use Catharsis\Web\HtmlHelpersTrait;

    /**
     * Performs testing of
     * {@link HtmlHelpersTrait::cssInline(string $code)}
     * method.
     * @return void
     */
    public function testCssInlineMethod()
    {
        $this->assertEquals('<style type="text/css"></style>', self::cssInline(null));
        $this->assertEquals('<style type="text/css"></style>', self::cssInline(""));
        $this->assertEquals('<style type="text/css">code</style>', self::cssInline("code"));
    }

    /**
     * Performs testing of
     * {@link HtmlHelpersTrait::cssLink(string $url)}
     * method.
     * @return void
     */
    public function testCssLinkMethod()
    {
        $this->assertEmpty(self::cssLink(null));
        $this->assertEmpty(self::cssLink(""));
        $this->assertEquals(
            '<link href="url" rel="stylesheet" type="text/css"></link>',
            self::cssLink("url")
        );
    }

    /**
     * Performs testing of
     * {@link HtmlHelpersTrait::htmlTag(string $tag, array $attributes, string $body)}
     * method.
     * @return void
     */
    public function testHtmlTagMethod()
    {
        $this->assertEmpty(self::htmlTag(null));
        $this->assertEmpty(self::htmlTag(""));
        $this->assertEquals('<tag></tag>', self::htmlTag("tag"));
        $this->assertEquals('<tag/>', self::htmlTag("tag", null, null));
        $this->assertEquals('<tag first="1"></tag>', self::htmlTag("tag", array("first" => 1)));
        $this->assertEquals(
            '<tag first="1" second="true">body</tag>',
            self::htmlTag("tag", array("first" => 1, "second" => true), "body")
        );
    }

    /**
     * Performs testing of
     * {@link HtmlHelpersTrait::javascriptInline(string $code)}
     * method.
     * @return void
     */
    public function testJavascriptInlineMethod()
    {
        $this->assertEquals('<script type="text/javascript"></script>', self::javascriptInline(null));
        $this->assertEquals('<script type="text/javascript"></script>', self::javascriptInline(""));
        $this->assertEquals('<script type="text/javascript">code</script>', self::javascriptInline("code"));
    }

    /**
     * Performs testing of
     * {@link HtmlHelpersTrait::javascriptLink(string $url)}
     * method.
     * @return void
     */
    public function testJavascriptLinkMethod()
    {
        $this->assertEmpty(self::javascriptLink(null));
        $this->assertEmpty(self::javascriptLink(""));
        $this->assertEquals('<script src="url" type="text/javascript"></script>', self::javascriptLink("url"));
    }

    /**
     * Performs testing of
     * {@link HtmlHelpersTrait::urlQuery(array $parameters)}
     * method.
     * @return void
     */
    public function testUrlQueryMethod()
    {
        $this->assertEmpty(self::urlQuery(null));
        $this->assertEmpty(self::urlQuery(array()));
        $this->assertEquals('first=1', self::urlQuery(array('first' => 1)));
        $this->assertEquals('first=1&second=true', self::urlQuery(array('first' => 1, 'second' => true)));
        $this->assertEquals(
            'first=1&second=true&third=spaced+value',
            self::urlQuery(array('first' => 1, 'second' => true, 'third' => 'spaced value'))
        );
    }

    /**
     * Performs testing of
     * {@link HtmlHelpersTrait::userLanguage()}
     * method.
     * @return void
     */
    public function testUserLanguageMethod()
    {
        $_REQUEST['lang'] = 'ru';
        $this->assertEquals('ru', self::userLanguage());
        unset($_REQUEST['lang']);

        $_REQUEST['language'] = 'ru';
        $this->assertEquals('ru', self::userLanguage());
        unset($_REQUEST['language']);

        $_SERVER['HTTP_ACCEPT_LANGUAGE'] = 'ru';
        $this->assertEquals('ru', self::userLanguage());
        unset($_SERVER['HTTP_ACCEPT_LANGUAGE']);

        $_SERVER["HTTP_ACCEPT_LANGUAGE"] = 'ru,en';
        $this->assertEquals('ru', self::userLanguage());
        unset($_SERVER['HTTP_ACCEPT_LANGUAGE']);

        $this->assertEquals('en', self::userLanguage());
    }
}