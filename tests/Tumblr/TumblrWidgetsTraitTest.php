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
 * Tests set for trait {@link \Catharsis\Web\TumblrWidgetsTrait}
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class TumblrWidgetsTraitTest extends PHPUnit_Framework_TestCase
{
    use Catharsis\Web\TumblrWidgetsTrait;

    /**
     * Performs testing of
     * {@link \Catharsis\Web\TumblrWidgetsTrait::tumblr()}
     * method.
     * @return void
     */
    public function testTumblrMethod()
    {
        $this->assertAttributeEmpty('_tumblr', get_class());
        $this->assertSame(self::tumblr(), self::tumblr());
        $this->assertInstanceOf('Catharsis\Web\TumblrWidgetsFactory', self::tumblr());
    }
}

?>
