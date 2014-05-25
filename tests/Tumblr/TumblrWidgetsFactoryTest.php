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
 * Tests set for class {@link \Catharsis\Web\TumblrWidgetsFactory}
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class TumblrWidgetsFactoryTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of
     * {@link \Catharsis\Web\TumblrWidgetsFactory::followButton()}
     * method.
     * @return void
     */
    public function testFollowButtonMethod()
    {
        $factory = new Catharsis\Web\TumblrWidgetsFactory();
        $this->assertNotSame($factory->followButton(), $factory->followButton());
        $this->assertInstanceOf('Catharsis\Web\TumblrFollowButtonWidget', $factory->followButton());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\TumblrWidgetsFactory::shareButton()}
     * method.
     * @return void
     */
    public function testShareButtonMethod()
    {
        $factory = new Catharsis\Web\TumblrWidgetsFactory();
        $this->assertNotSame($factory->shareButton(), $factory->shareButton());
        $this->assertInstanceOf('Catharsis\Web\TumblrShareButtonWidget', $factory->shareButton());
    }
}

?>
