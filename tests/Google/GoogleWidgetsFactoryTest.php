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
 * Tests set for class {@link \Catharsis\Web\GoogleWidgetsFactory}
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class GoogleWidgetsFactoryTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of
     * {@link \Catharsis\Web\GoogleWidgetsFactory::analytics()}
     * method.
     * @return void
     */
    public function testAnalyticsMethod()
    {
        $factory = new Catharsis\Web\GoogleWidgetsFactory();
        $this->assertNotSame($factory->analytics(), $factory->analytics());
        $this->assertInstanceOf('Catharsis\Web\GoogleAnalyticsWidget', $factory->analytics());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\GoogleWidgetsFactory::map()}
     * method.
     * @return void
     */
    /* public function test_map_method()
      {
      $factory = new Catharsis\Web\GoogleWidgetsFactory();
      $this->assertNotSame($factory->map(), $factory->map());
      $this->assertInstanceOf('Catharsis\Web\GoogleMapWidget', $factory->map());
      } */

    /**
     * Performs testing of
     * {@link \Catharsis\Web\GoogleWidgetsFactory::plusOneButton()}
     * method.
     * @return void
     */
    public function testPlusOneButtonMethod()
    {
        $factory = new Catharsis\Web\GoogleWidgetsFactory();
        $this->assertNotSame($factory->plusOneButton(), $factory->plusOneButton());
        $this->assertInstanceOf('Catharsis\Web\GooglePlusOneButtonWidget', $factory->plusOneButton());
    }
}

?>
