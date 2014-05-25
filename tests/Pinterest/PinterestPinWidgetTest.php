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
 * Tests set for class {@link \Catharsis\Web\PinterestPinWidget}
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class PinterestPinWidgetTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of class constructor(s).
     * @link \Catharsis\Web\PinterestPinWidget::__construct()
     * @return void
     */
    public function testConstructors()
    {
        $widget = new Catharsis\Web\PinterestPinWidget();
        $this->assertEmpty($widget->getId());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\PinterestPinWidget::id(string $id)}
     * method.
     * @return void
     */
    public function testIdMethod()
    {
        $widget = new Catharsis\Web\PinterestPinWidget();
        $this->assertEmpty($widget->getId());
        $this->assertSame($widget, $widget->id('id'));
        $this->assertEquals('id', $widget->getId());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\PinterestPinWidget::__toString()}
     * method.
     * @return void
     */
    public function testToStringMethod()
    {
        $widget = new Catharsis\Web\PinterestPinWidget();
        $this->assertEmpty((string) $widget);

        $widget = new Catharsis\Web\PinterestPinWidget();
        $this->assertEquals(
            '<a data-pin-do="embedPin" href="http://www.pinterest.com/pin/id"></a>',
            (string) $widget->id('id')
        );
    }
}

?>
