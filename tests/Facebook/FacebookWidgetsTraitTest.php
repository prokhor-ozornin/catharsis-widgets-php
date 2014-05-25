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
 * Tests set for trait {@link \Catharsis\Web\FacebookWidgetsTrait}
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class FacebookWidgetsTraitTest extends PHPUnit_Framework_TestCase
{
    use Catharsis\Web\FacebookWidgetsTrait;

    /**
     * Performs testing of
     * {@link \Catharsis\Web\FacebookWidgetsTrait::facebook()}
     * method.
     * @return void
     */
    public function testFacebookMethod()
    {
        $this->assertAttributeEmpty('_facebook', get_class());
        $this->assertSame(self::facebook(), self::facebook());
        $this->assertInstanceOf('Catharsis\Web\FacebookWidgetsFactory', self::facebook());
    }
}

?>
