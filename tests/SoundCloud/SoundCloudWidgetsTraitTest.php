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
 * Tests set for trait {@link \Catharsis\Web\SoundCloudWidgetsTrait}
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class SoundCloudWidgetsTraitTest extends PHPUnit_Framework_TestCase
{
    use Catharsis\Web\SoundCloudWidgetsTrait;

    /**
     * Performs testing of
     * {@link \Catharsis\Web\SoundcloudWidgetsTrait::soundcloud()}
     * method.
     * @return void
     */
    public function testSoundCloudMethod()
    {
        $this->assertAttributeEmpty('_soundcloud', get_class());
        $this->assertSame(self::soundcloud(), self::soundcloud());
        $this->assertInstanceOf('Catharsis\Web\SoundCloudWidgetsFactory', self::soundcloud());
    }
}

?>
