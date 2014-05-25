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
 * Tests set for class {@link \Catharsis\Web\PinterestScriptsTrait}
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class PinterestScriptsTraitTest extends PHPUnit_Framework_TestCase
{
    use Catharsis\Web\HtmlHelpersTrait,
        Catharsis\Web\PinterestScriptsTrait;

    /**
     * Performs testing of
     * {@link \Catharsis\Web\PinterestScriptsTrait::pinterest()}
     * method.
     * @return void
     */
    public function testPinterestMethod()
    {
        $this->assertEquals(
            '<script src="http://assets.pinterest.com/js/pinit.js" type="text/javascript"></script>',
            self::pinterest()
        );
    }
}

?>
