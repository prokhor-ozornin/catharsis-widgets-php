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
 * Tests set for class {@link \Catharsis\Web\PinterestProfileWidget}
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class PinterestProfileWidgetTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of class constructor(s).
     * @link \Catharsis\Web\PinterestProfileWidget::__construct()
     * @return void
     */
    public function testConstructors()
    {
        $widget = new Catharsis\Web\PinterestProfileWidget();
        $this->assertEmpty($widget->getAccount());
        $this->assertEmpty($widget->getHeight());
        $this->assertEmpty($widget->getImage());
        $this->assertEmpty($widget->getWidth());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\PinterestProfileWidget::account(string $account)}
     * method.
     * @return void
     */
    public function testAccountMethod()
    {
        $widget = new Catharsis\Web\PinterestProfileWidget();
        $this->assertEmpty($widget->getAccount());
        $this->assertSame($widget, $widget->account('account'));
        $this->assertEquals('account', $widget->getAccount());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\PinterestProfileWidget::height(string $height)}
     * method.
     * @return void
     */
    public function testHeightMethod()
    {
        $widget = new Catharsis\Web\PinterestProfileWidget();
        $this->assertEmpty($widget->getHeight());
        $this->assertSame($widget, $widget->height('height'));
        $this->assertEquals('height', $widget->getHeight());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\PinterestProfileWidget::header()}
     * method.
     * @return void
     */
    public function testHeaderMethod()
    {
        $widget = new Catharsis\Web\PinterestProfileWidget();
        $this->assertSame($widget, $widget->header());
        $this->assertEquals('115', $widget->getImage());
        $this->assertEquals('120', $widget->getHeight());
        $this->assertEquals('900', $widget->getWidth());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\PinterestProfileWidget::image(string $width)}
     * method.
     * @return void
     */
    public function testImageMethod()
    {
        $widget = new Catharsis\Web\PinterestProfileWidget();
        $this->assertEmpty($widget->getImage());
        $this->assertSame($widget, $widget->image('image'));
        $this->assertEquals('image', $widget->getImage());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\PinterestProfileWidget::sidebar()}
     * method.
     * @return void
     */
    public function testSidebarMethod()
    {
        $widget = new Catharsis\Web\PinterestProfileWidget();
        $this->assertSame($widget, $widget->sidebar());
        $this->assertEquals('60', $widget->getImage());
        $this->assertEquals('800', $widget->getHeight());
        $this->assertEquals('150', $widget->getWidth());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\PinterestProfileWidget::square()}
     * method.
     * @return void
     */
    public function testSquareMethod()
    {
        $widget = new Catharsis\Web\PinterestProfileWidget();
        $this->assertSame($widget, $widget->square());
        $this->assertEquals('80', $widget->getImage());
        $this->assertEquals('320', $widget->getHeight());
        $this->assertEquals('400', $widget->getWidth());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\PinterestProfileWidget::width(string $width)}
     * method.
     * @return void
     */
    public function testWidthMethod()
    {
        $widget = new Catharsis\Web\PinterestProfileWidget();
        $this->assertEmpty($widget->getWidth());
        $this->assertSame($widget, $widget->width('width'));
        $this->assertEquals('width', $widget->getWidth());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\PinterestProfileWidget::__toString()}
     * method.
     * @return void
     */
    public function testToStringMethod()
    {
        $widget = new Catharsis\Web\PinterestProfileWidget();
        $this->assertEmpty((string) $widget);

        $widget = new Catharsis\Web\PinterestProfileWidget();
        $this->assertEquals(
            '<a data-pin-do="embedUser" href="http://www.pinterest.com/account"></a>',
            (string) $widget->account('account')
        );

        $widget = new Catharsis\Web\PinterestProfileWidget();
        $this->assertEquals(
            '<a data-pin-board-width="width" data-pin-do="embedUser" data-pin-scale-height="height"'
            .' data-pin-scale-width="image" href="http://www.pinterest.com/account"></a>',
            (string) $widget->account('account')->width('width')->height('height')->image('image')
        );
    }
}

?>
