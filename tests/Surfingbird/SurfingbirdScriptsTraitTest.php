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
 * Tests set for class {@link \Catharsis\Web\SurfingbirdScriptsTrait}
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class SurfingbirdScriptsTraitTest extends PHPUnit_Framework_TestCase
{
    use Catharsis\Web\HtmlHelpersTrait,
        Catharsis\Web\SurfingbirdScriptsTrait;

    /**
     * Performs testing of
     * {@link \Catharsis\Web\SurfingbirdScriptsTrait::surfingbird()}
     * method.
     * @return void
     */
    public function testSurfingbirdMethod()
    {
        $this->assertEquals(
            '<script src="http://surfingbird.ru/share/share.min.js" type="text/javascript"></script>',
            self::surfingbird()
        );
    }
}

?>
