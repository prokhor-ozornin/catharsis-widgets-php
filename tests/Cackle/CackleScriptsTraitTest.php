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
 * Tests set for class {@link \Catharsis\Web\CackleScriptsTrait}
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class CackleScriptsTraitTest extends PHPUnit_Framework_TestCase
{
    use Catharsis\Web\HtmlHelpersTrait,
        Catharsis\Web\CackleScriptsTrait;

    /**
     * Performs testing of
     * {@link \Catharsis\Web\CackleScriptsTrait::cackle()}
     * method.
     * @return void
     */
    public function testCackleMethod()
    {
        $scripts_path = Catharsis\Web\Widgets::scripts_path();
        $this->assertEquals(
            "<script src=\"{$scripts_path}/cackle.js\" type=\"text/javascript\"></script>",
            self::cackle()
        );
    }
}

?>
