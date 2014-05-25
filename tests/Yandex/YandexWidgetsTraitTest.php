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
 * Tests set for trait {@link \Catharsis\Web\YandexWidgetsTrait}
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class YandexWidgetsTraitTest extends PHPUnit_Framework_TestCase
{
    use Catharsis\Web\YandexWidgetsTrait;

    /**
     * Performs testing of
     * {@link \Catharsis\Web\YandexWidgetsTrait::yandex()}
     * method.
     * @return void
     */
    public function testYandexMethod()
    {
        $this->assertAttributeEmpty('_yandex', get_class());
        $this->assertSame(self::yandex(), self::yandex());
        $this->assertInstanceOf('Catharsis\Web\YandexWidgetsFactory', self::yandex());
    }
}

?>
