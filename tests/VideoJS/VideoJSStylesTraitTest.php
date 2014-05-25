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
 * Tests set for class {@link \Catharsis\Web\VideoJSStylesTrait}
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class VideoJSStylesTraitTest extends PHPUnit_Framework_TestCase
{
    use Catharsis\Web\HtmlHelpersTrait,
        Catharsis\Web\VideoJSStylesTrait;

    /**
     * Performs testing of
     * {@link \Catharsis\Web\VideoJSStylesTrait::videojs()}
     * method.
     * @return void
     */
    public function testVideoJSMethod()
    {
        $this->assertEquals(
            '<link href="http://vjs.zencdn.net/4.3/video-js.css" rel="stylesheet" type="text/css"></link>',
            self::videojs()
        );
    }
}

?>
