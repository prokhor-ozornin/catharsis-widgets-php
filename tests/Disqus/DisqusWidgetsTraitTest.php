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
 * Tests set for trait {@link \Catharsis\Web\DisqusWidgetsTrait}
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class DisqusWidgetsTraitTest extends PHPUnit_Framework_TestCase
{
    use Catharsis\Web\DisqusWidgetsTrait;

    /**
     * Performs testing of
     * {@link \Catharsis\Web\DisqusWidgetsTrait::disqus()}
     * method.
     * @return void
     */
    public function testDisqusMethod()
    {
        $this->assertAttributeEmpty('_disqus', get_class());
        $this->assertSame(self::disqus(), self::disqus());
        $this->assertInstanceOf('Catharsis\Web\DisqusWidgetsFactory', self::disqus());
    }
}

?>
