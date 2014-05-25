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
 * Tests set for trait {@link \Catharsis\Web\YouTubeWidgetsTrait}
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class YouTubeWidgetsTraitTest extends PHPUnit_Framework_TestCase
{
    use Catharsis\Web\YouTubeWidgetsTrait;

    /**
     * Performs testing of
     * {@link \Catharsis\Web\YouTubeWidgetsTrait::youtube()}
     * method.
     * @return void
     */
    public function testYouTubeMethod()
    {
        $this->assertAttributeEmpty('_youtube', get_class());
        $this->assertSame(self::youtube(), self::youtube());
        $this->assertInstanceOf('Catharsis\Web\YouTubeWidgetsFactory', self::youtube());
    }
}

?>
