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
 * Tests set for class {@link \Catharsis\Web\VideoJSScriptsTrait}
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class VideoJSScriptsTraitTest extends PHPUnit_Framework_TestCase
{
    use Catharsis\Web\HtmlHelpersTrait,
        Catharsis\Web\VideoJSScriptsTrait;

    /**
     * Performs testing of
     * {@link \Catharsis\Web\VideoJSScriptsTrait::videojs()}
     * method.
     * @return void
     */
    public function testVideoJSMethod()
    {
        $this->assertEquals(
            '<script src="http://vjs.zencdn.net/4.3/video.js" type="text/javascript"></script>',
            self::videojs()
        );
    }
}

?>
