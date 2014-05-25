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
 * Tests set for class {@link \Catharsis\Web\DisqusWidgetsFactory}
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class DisqusWidgetsFactoryTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of
     * {@link \Catharsis\Web\DisqusWidgetsFactory::comments()}
     * method.
     * @return void
     */
    public function testCommentsMethod()
    {
        $factory = new Catharsis\Web\DisqusWidgetsFactory();
        $this->assertNotSame($factory->comments(), $factory->comments());
        $this->assertInstanceOf('Catharsis\Web\DisqusCommentsWidget', $factory->comments());
    }
}

?>
