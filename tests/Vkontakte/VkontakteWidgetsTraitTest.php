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
 * Tests set for trait {@link \Catharsis\Web\VkontakteWidgetsTrait}
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class VkontakteWidgetsTraitTest extends PHPUnit_Framework_TestCase
{
    use Catharsis\Web\VkontakteWidgetsTrait;

    /**
     * Performs testing of
     * {@link \Catharsis\Web\VkontakteWidgetsTrait::vkontakte()}
     * method.
     * @return void
     */
    public function testVkontakteMethod()
    {
        $this->assertAttributeEmpty('_vkontakte', get_class());
        $this->assertSame(self::vkontakte(), self::vkontakte());
        $this->assertInstanceOf('Catharsis\Web\VkontakteWidgetsFactory', self::vkontakte());
    }
}

?>
