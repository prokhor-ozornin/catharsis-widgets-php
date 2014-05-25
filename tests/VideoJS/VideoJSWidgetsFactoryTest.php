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
 * Tests set for class {@link \Catharsis\Web\VideoJSWidgetsFactory}
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class VideoJSWidgetsFactoryTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of
     * {@link \Catharsis\Web\VideoJSWidgetsFactory::player()}
     * method.
     * @return void
     */
    public function testPlayerMethod()
    {
        $factory = new Catharsis\Web\VideoJSWidgetsFactory();
        $this->assertNotSame($factory->player(), $factory->player());
        $this->assertInstanceOf('Catharsis\Web\VideoJSPlayerWidget', $factory->player());
    }
}

?>
