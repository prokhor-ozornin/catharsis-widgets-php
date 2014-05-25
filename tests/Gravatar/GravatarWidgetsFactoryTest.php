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
 * Tests set for class {@link \Catharsis\Web\GravatarWidgetsFactory}
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class GravatarWidgetsFactoryTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of
     * {@link \Catharsis\Web\GravatarWidgetsFactory::imageUrl()}
     * method.
     * @return void
     */
    public function testImageUrlMethod()
    {
        $factory = new Catharsis\Web\GravatarWidgetsFactory();
        $this->assertNotSame($factory->imageUrl(), $factory->imageUrl());
        $this->assertInstanceOf('Catharsis\Web\GravatarImageUrlWidget', $factory->imageUrl());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\GravatarWidgetsFactory::profileUrl()}
     * method.
     * @return void
     */
    public function testProfileUrlMethod()
    {
        $factory = new Catharsis\Web\GravatarWidgetsFactory();
        $this->assertNotSame($factory->profileUrl(), $factory->profileUrl());
        $this->assertInstanceOf('Catharsis\Web\GravatarProfileUrlWidget', $factory->profileUrl());
    }
}

?>
