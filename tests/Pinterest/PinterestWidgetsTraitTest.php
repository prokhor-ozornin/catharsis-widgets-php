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
 * Tests set for trait {@link \Catharsis\Web\PinterestWidgetsTrait}
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class PinterestWidgetsTraitTest extends PHPUnit_Framework_TestCase
{
    use Catharsis\Web\PinterestWidgetsTrait;

    /**
     * Performs testing of
     * {@link \Catharsis\Web\PinterestWidgetsTrait::pinterest()}
     * method.
     * @return void
     */
    public function testPinterestMethod()
    {
        $this->assertAttributeEmpty('_pinterest', get_class());
        $this->assertSame(self::pinterest(), self::pinterest());
        $this->assertInstanceOf('Catharsis\Web\PinterestWidgetsFactory', self::pinterest());
    }
}

?>
