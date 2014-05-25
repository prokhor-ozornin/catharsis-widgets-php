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
 * Tests set for class {@link \Catharsis\Web\PinterestWidgetsFactory}
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class PinterestWidgetsFactoryTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of
     * {@link \Catharsis\Web\PinterestWidgetsFactory::board()}
     * method.
     * @return void
     */
    public function testBoardMethod()
    {
        $factory = new Catharsis\Web\PinterestWidgetsFactory();
        $this->assertNotSame($factory->board(), $factory->board());
        $this->assertInstanceOf('Catharsis\Web\PinterestBoardWidget', $factory->board());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\PinterestWidgetsFactory::followButton()}
     * method.
     * @return void
     */
    public function testFollowButtonMethod()
    {
        $factory = new Catharsis\Web\PinterestWidgetsFactory();
        $this->assertNotSame($factory->followButton(), $factory->followButton());
        $this->assertInstanceOf('Catharsis\Web\PinterestFollowButtonWidget', $factory->followButton());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\PinterestWidgetsFactory::pinItButton()}
     * method.
     * @return void
     */
    public function testPinItButtonMethod()
    {
        $factory = new Catharsis\Web\PinterestWidgetsFactory();
        $this->assertNotSame($factory->pinItButton(), $factory->pinItButton());
        $this->assertInstanceOf('Catharsis\Web\PinterestPinItButtonWidget', $factory->pinItButton());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\PinterestWidgetsFactory::pin()}
     * method.
     * @return void
     */
    public function testPinMethod()
    {
        $factory = new Catharsis\Web\PinterestWidgetsFactory();
        $this->assertNotSame($factory->pin(), $factory->pin());
        $this->assertInstanceOf('Catharsis\Web\PinterestPinWidget', $factory->pin());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\PinterestWidgetsFactory::profile()}
     * method.
     * @return void
     */
    public function testProfileMethod()
    {
        $factory = new Catharsis\Web\PinterestWidgetsFactory();
        $this->assertNotSame($factory->profile(), $factory->profile());
        $this->assertInstanceOf('Catharsis\Web\PinterestProfileWidget', $factory->profile());
    }
}

?>
