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
 * Tests set for class {@link \Catharsis\Web\IntenseDebateWidgetsFactory}
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class IntenseDebateWidgetsFactoryTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of
     * {@link \Catharsis\Web\IntenseDebateWidgetsFactory::comments()}
     * method.
     * @return void
     */
    public function testCommentsMethod()
    {
        $factory = new Catharsis\Web\IntenseDebateWidgetsFactory();
        $this->assertNotSame($factory->comments(), $factory->comments());
        $this->assertInstanceOf('Catharsis\Web\IntenseDebateCommentsWidget', $factory->comments());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\IntenseDebateWidgetsFactory::link()}
     * method.
     * @return void
     */
    public function testLinkMethod()
    {
        $factory = new Catharsis\Web\IntenseDebateWidgetsFactory();
        $this->assertNotSame($factory->link(), $factory->link());
        $this->assertInstanceOf('Catharsis\Web\IntenseDebateLinkWidget', $factory->link());
    }
}

?>
