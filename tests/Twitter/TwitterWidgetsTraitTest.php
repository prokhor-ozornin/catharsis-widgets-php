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
 * Tests set for trait {@link \Catharsis\Web\TwitterWidgetsTrait}
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class TwitterWidgetsTraitTest extends PHPUnit_Framework_TestCase
{
    use Catharsis\Web\TwitterWidgetsTrait;

    /**
     * Performs testing of
     * {@link \Catharsis\Web\TwitterWidgetsTrait::twitter()}
     * method.
     * @return void
     */
    public function testTwitterMethod()
    {
        $this->assertAttributeEmpty('_twitter', get_class());
        $this->assertSame(self::twitter(), self::twitter());
        $this->assertInstanceOf('Catharsis\Web\TwitterWidgetsFactory', self::twitter());
    }
}

?>
