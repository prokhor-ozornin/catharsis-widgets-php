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
 * Tests set for class {@link \Catharsis\Web\PinterestBoardWidget}
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class PinterestBoardWidgetTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of class constructor(s).
     * @link \Catharsis\Web\PinterestBoardWidget::__construct()
     * @return void
     */
    public function testConstructors()
    {
        $widget = new Catharsis\Web\PinterestBoardWidget();
        $this->assertEmpty($widget->getAccount());
        $this->assertEmpty($widget->getHeight());
        $this->assertEmpty($widget->getId());
        $this->assertEmpty($widget->getImage());
        $this->assertEmpty($widget->getWidth());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\PinterestBoardWidget::account(string $account)}
     * method.
     * @return void
     */
    public function testAccountMethod()
    {
        $widget = new Catharsis\Web\PinterestBoardWidget();
        $this->assertEmpty($widget->getAccount());
        $this->assertSame($widget, $widget->account('account'));
        $this->assertEquals('account', $widget->getAccount());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\PinterestBoardWidget::height(string $height)}
     * method.
     * @return void
     */
    public function testHeightMethod()
    {
        $widget = new Catharsis\Web\PinterestBoardWidget();
        $this->assertEmpty($widget->getHeight());
        $this->assertSame($widget, $widget->height('height'));
        $this->assertEquals('height', $widget->getHeight());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\PinterestBoardWidget::header()}
     * method.
     * @return void
     */
    public function testHeaderMethod()
    {
        $widget = new Catharsis\Web\PinterestBoardWidget();
        $this->assertSame($widget, $widget->header());
        $this->assertEquals('115', $widget->getImage());
        $this->assertEquals('120', $widget->getHeight());
        $this->assertEquals('900', $widget->getWidth());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\PinterestBoardWidget::id()}
     * method.
     * @return void
     */
    public function testIdMethod()
    {
        $widget = new Catharsis\Web\PinterestBoardWidget();
        $this->assertEmpty($widget->getId());
        $this->assertSame($widget, $widget->id('id'));
        $this->assertEquals('id', $widget->getId());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\PinterestBoardWidget::image(string $width)}
     * method.
     * @return void
     */
    public function testImageMethod()
    {
        $widget = new Catharsis\Web\PinterestBoardWidget();
        $this->assertEmpty($widget->getImage());
        $this->assertSame($widget, $widget->image('image'));
        $this->assertEquals('image', $widget->getImage());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\PinterestBoardWidget::sidebar()}
     * method.
     * @return void
     */
    public function testSidebarMethod()
    {
        $widget = new Catharsis\Web\PinterestBoardWidget();
        $this->assertSame($widget, $widget->sidebar());
        $this->assertEquals('60', $widget->getImage());
        $this->assertEquals('800', $widget->getHeight());
        $this->assertEquals('150', $widget->getWidth());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\PinterestBoardWidget::square()}
     * method.
     * @return void
     */
    public function testSquareMethod()
    {
        $widget = new Catharsis\Web\PinterestBoardWidget();
        $this->assertSame($widget, $widget->square());
        $this->assertEquals('80', $widget->getImage());
        $this->assertEquals('320', $widget->getHeight());
        $this->assertEquals('400', $widget->getWidth());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\PinterestBoardWidget::width(string $width)}
     * method.
     * @return void
     */
    public function testWidthMethod()
    {
        $widget = new Catharsis\Web\PinterestBoardWidget();
        $this->assertEmpty($widget->getWidth());
        $this->assertSame($widget, $widget->width('width'));
        $this->assertEquals('width', $widget->getWidth());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\PinterestBoardWidget::__toString()}
     * method.
     * @return void
     */
    public function testToStringMethod()
    {
        $widget = new Catharsis\Web\PinterestBoardWidget();
        $this->assertEmpty((string) $widget);

        $widget = new Catharsis\Web\PinterestBoardWidget();
        $this->assertEquals(
            '<a data-pin-do="embedBoard" href="http://www.pinterest.com/account/id"></a>',
            (string) $widget->account('account')->id('id')
        );

        $widget = new Catharsis\Web\PinterestBoardWidget();
        $this->assertEquals(
            '<a data-pin-board-width="width" data-pin-do="embedBoard" data-pin-scale-height="height"'
            .' data-pin-scale-width="image" href="http://www.pinterest.com/account/id"></a>',
            (string) $widget
                ->account('account')
                ->id('id')
                ->width('width')
                ->height('height')
                ->image('image')
        );
    }
}

?>
