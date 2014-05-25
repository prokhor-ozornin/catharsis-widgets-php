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
 * Tests set for class {@link \Catharsis\Web\TumblrScriptsTrait}
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class TumblrScriptsTraitTest extends PHPUnit_Framework_TestCase
{
    use Catharsis\Web\HtmlHelpersTrait,
        Catharsis\Web\TumblrScriptsTrait;

    /**
     * Performs testing of
     * {@link \Catharsis\Web\TumblrScriptsTrait::tumblr()}
     * method.
     * @return void
     */
    public function testTumblrMethod()
    {
        $this->assertEquals(
            '<script src="http://platform.tumblr.com/v1/share.js" type="text/javascript"></script>',
            self::tumblr()
        );
    }
}

?>
