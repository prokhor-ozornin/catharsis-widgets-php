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
 * Tests set for trait {@link \Catharsis\Web\IntenseDebateWidgetsTrait}
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class IntenseDebateWidgetsTraitTest extends PHPUnit_Framework_TestCase
{
    use Catharsis\Web\IntenseDebateWidgetsTrait;

    /**
     * Performs testing of
     * {@link \Catharsis\Web\IntenseDebateWidgetsTrait::intensedebate()}
     * method.
     * @return void
     */
    public function testIntensedebateMethod()
    {
        $this->assertAttributeEmpty('_intensedebate', get_class());
        $this->assertSame(self::intensedebate(), self::intensedebate());
        $this->assertInstanceOf('Catharsis\Web\IntenseDebateWidgetsFactory', self::intensedebate());
    }
}

?>
