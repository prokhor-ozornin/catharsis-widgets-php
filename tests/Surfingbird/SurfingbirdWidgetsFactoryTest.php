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
 * Tests set for class {@link \Catharsis\Web\SurfingbirdWidgetsFactory}
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class SurfingbirdWidgetsFactoryTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of
     * {@link \Catharsis\Web\SurfingbirdWidgetsFactory::surfButton()}
     * method.
     * @return void
     */
    public function testSurfButtonMethod()
    {
        $factory = new Catharsis\Web\SurfingbirdWidgetsFactory();
        $this->assertNotSame($factory->surfButton(), $factory->surfButton());
        $this->assertInstanceOf('Catharsis\Web\SurfingbirdSurfButtonWidget', $factory->surfButton());
    }
}

?>
