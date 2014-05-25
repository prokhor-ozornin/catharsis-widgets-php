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
 * Tests set for class {@link \Catharsis\Web\RuTubeWidgetsFactory}
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class RuTubeWidgetsFactoryTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of
     * {@link \Catharsis\Web\RuTubeWidgetsFactory::video()}
     * method.
     * @return void
     */
    public function testVideoMethod()
    {
        $factory = new Catharsis\Web\RuTubeWidgetsFactory();
        $this->assertNotSame($factory->video(), $factory->video());
        $this->assertInstanceOf('Catharsis\Web\RuTubeVideoWidget', $factory->video());
    }
}

?>
