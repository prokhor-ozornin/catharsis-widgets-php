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
 * Tests set for trait {@link \Catharsis\Web\InlineImageWidgetsTrait}
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class InlineImageWidgetsTraitTest extends PHPUnit_Framework_TestCase
{
    use Catharsis\Web\InlineImageWidgetsTrait;

    /**
     * Performs testing of
     * {@link \Catharsis\Web\InlineImageWidgetsTrait::inlineImage()}
     * method.
     * @return void
     */
    public function testInlineImageMethod()
    {
        $this->assertNotSame(self::inlineImage(), self::inlineImage());
        $this->assertInstanceOf('Catharsis\Web\InlineImageWidget', self::inlineImage());
    }
}

?>
