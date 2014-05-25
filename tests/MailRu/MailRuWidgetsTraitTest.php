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
 * Tests set for trait {@link \Catharsis\Web\MailRuWidgetsTrait}
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class MailRuWidgetsTraitTest extends PHPUnit_Framework_TestCase
{
    use Catharsis\Web\MailRuWidgetsTrait;

    /**
     * Performs testing of
     * {@link \Catharsis\Web\MailRuWidgetsTrait::mailru()}
     * method.
     * @return void
     */
    public function testMailRuMethod()
    {
        $this->assertAttributeEmpty('_mailru', get_class());
        $this->assertSame(self::mailru(), self::mailru());
        $this->assertInstanceOf('Catharsis\Web\MailRuWidgetsFactory', self::mailru());
    }
}

?>
