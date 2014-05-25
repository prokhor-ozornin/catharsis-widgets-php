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
 * Tests set for trait {@link \Catharsis\Web\SurfingbirdWidgetsTrait}
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class SurfingbirdWidgetsTraitTest extends PHPUnit_Framework_TestCase
{
    use Catharsis\Web\SurfingbirdWidgetsTrait;

    /**
     * Performs testing of
     * {@link \Catharsis\Web\SurfingbirdWidgetsTrait::surfingbird()}
     * method.
     * @return void
     */
    public function testSurfingbirdMethod()
    {
        $this->assertAttributeEmpty('_surfingbird', get_class());
        $this->assertSame(self::surfingbird(), self::surfingbird());
        $this->assertInstanceOf('Catharsis\Web\SurfingbirdWidgetsFactory', self::surfingbird());
    }
}

?>
