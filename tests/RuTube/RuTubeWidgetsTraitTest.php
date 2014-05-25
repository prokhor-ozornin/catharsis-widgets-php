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
 * Tests set for trait {@link \Catharsis\Web\RuTubeWidgetsTrait}
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class RuTubeWidgetsTraitTest extends PHPUnit_Framework_TestCase
{
    use Catharsis\Web\RuTubeWidgetsTrait;

    /**
     * Performs testing of
     * {@link \Catharsis\Web\RuTubeWidgetsTrait::rutube()}
     * method.
     * @return void
     */
    public function testRuTubeMethod()
    {
        $this->assertAttributeEmpty('_rutube', get_class());
        $this->assertSame(self::rutube(), self::rutube());
        $this->assertInstanceOf('Catharsis\Web\RuTubeWidgetsFactory', self::rutube());
    }
}

?>
