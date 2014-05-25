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
 * Tests set for class {@link \Catharsis\Web\GoogleScriptsTrait}
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class GoogleScriptsTraitTest extends PHPUnit_Framework_TestCase
{
    use Catharsis\Web\HtmlHelpersTrait,
        Catharsis\Web\GoogleScriptsTrait;

    /**
     * Performs testing of
     * {@link \Catharsis\Web\GoogleScriptsTrait::google()}
     * method.
     * @return void
     */
    public function testGoogleMethod()
    {
        $scripts_path = Catharsis\Web\Widgets::scripts_path();
        $this->assertEquals(
            "<script src=\"{$scripts_path}/google_analytics.js\" type=\"text/javascript\"></script>"
            ."<script src=\"{$scripts_path}/google_plusone.js\" type=\"text/javascript\"></script>",
            self::google()
        );
    }
}

?>
