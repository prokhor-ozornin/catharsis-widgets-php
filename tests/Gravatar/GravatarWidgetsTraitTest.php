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
 * Tests set for trait {@link \Catharsis\Web\GravatarWidgetsTrait}
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class GravatarWidgetsTraitTest extends PHPUnit_Framework_TestCase
{
    use Catharsis\Web\GravatarWidgetsTrait;

    /**
     * Performs testing of
     * {@link \Catharsis\Web\GravatarWidgetsTrait::gravatar()}
     * method.
     * @return void
     */
    public function testGravatarMethod()
    {
        $this->assertAttributeEmpty('_gravatar', get_class());
        $this->assertSame(self::gravatar(), self::gravatar());
        $this->assertInstanceOf('Catharsis\Web\GravatarWidgetsFactory', self::gravatar());
    }
}

?>
