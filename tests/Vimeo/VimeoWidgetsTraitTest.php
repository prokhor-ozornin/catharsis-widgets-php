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
 * Tests set for trait {@link \Catharsis\Web\VimeoWidgetsTrait}
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class VimeoWidgetsTraitTest extends PHPUnit_Framework_TestCase
{
    use Catharsis\Web\VimeoWidgetsTrait;

    /**
     * Performs testing of
     * {@link \Catharsis\Web\VimeoWidgetsTrait::vimeo()}
     * method.
     * @return void
     */
    public function testVimeoMethod()
    {
        $this->assertAttributeEmpty('_vimeo', get_class());
        $this->assertSame(self::vimeo(), self::vimeo());
        $this->assertInstanceOf('Catharsis\Web\VimeoWidgetsFactory', self::vimeo());
    }
}

?>
