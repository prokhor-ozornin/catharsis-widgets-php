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
 * Tests set for trait {@link \Catharsis\Web\VideoJSWidgetsTrait}
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class VideoJSWidgetsTraitTest extends PHPUnit_Framework_TestCase
{
    use Catharsis\Web\VideoJSWidgetsTrait;

    /**
     * Performs testing of
     * {@link \Catharsis\Web\VideoJSWidgetsTrait::videojs()}
     * method.
     * @return void
     */
    public function testVideoJSMethod()
    {
        $this->assertAttributeEmpty('_videojs', get_class());
        $this->assertSame(self::videojs(), self::videojs());
        $this->assertInstanceOf('Catharsis\Web\VideoJSWidgetsFactory', self::videojs());
    }
}

?>
