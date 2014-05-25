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
 * Tests set for trait {@link \Catharsis\Web\CackleWidgetsTrait}
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class CackleWidgetsTraitTest extends PHPUnit_Framework_TestCase
{
    use Catharsis\Web\CackleWidgetsTrait;

    /**
     * Performs testing of
     * {@link \Catharsis\Web\CackleWidgetsTrait::cackle()}
     * method.
     * @return void
     */
    public function testCackleMethod()
    {
        $this->assertAttributeEmpty('_cackle', get_class());
        $this->assertSame(self::cackle(), self::cackle());
        $this->assertInstanceOf('Catharsis\Web\CackleWidgetsFactory', self::cackle());
    }
}

?>
