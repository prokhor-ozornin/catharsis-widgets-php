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
 * Tests set for trait {@link \Catharsis\Web\GoogleWidgetsTrait}
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class GoogleWidgetsTraitTest extends PHPUnit_Framework_TestCase
{
    use Catharsis\Web\GoogleWidgetsTrait;

    /**
     * Performs testing of
     * {@link \Catharsis\Web\GoogleWidgetsTrait::google()}
     * method.
     * @return void
     */
    public function testGoogleMethod()
    {
        $this->assertAttributeEmpty('_google', get_class());
        $this->assertSame(self::google(), self::google());
        $this->assertInstanceOf('Catharsis\Web\GoogleWidgetsFactory', self::google());
    }
}

?>
