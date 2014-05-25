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
 * Tests set for class {@link \Catharsis\Web\SoundCloudWidgetsFactory}
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class SoundCloudWidgetsFactoryTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of
     * {@link \Catharsis\Web\SoundcloudWidgetsFactory::profileIcon()}
     * method.
     * @return void
     */
    public function testProfileIconMethod()
    {
        $factory = new Catharsis\Web\SoundCloudWidgetsFactory();
        $this->assertNotSame($factory->profileIcon(), $factory->profileIcon());
        $this->assertInstanceOf('Catharsis\Web\SoundCloudProfileIconWidget', $factory->profileIcon());
    }
}

?>
