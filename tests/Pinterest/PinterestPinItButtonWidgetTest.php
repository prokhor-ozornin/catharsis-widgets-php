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
 * Tests set for class {@link \Catharsis\Web\PinterestPinItButtonWidget}
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class PinterestPinItButtonWidgetTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of class constructor(s).
     * @link \Catharsis\Web\PinterestPinItButtonWidget::__construct()
     * @return void
     */
    public function testConstructors()
    {
        $widget = new Catharsis\Web\PinterestPinItButtonWidget();
        $this->assertEquals('gray', $widget->getColor());
        $this->assertEquals(Catharsis\Web\PinterestPinItButtonPinCountPosition::NONE, $widget->getCounter());
        $this->assertEmpty($widget->getDescription());
        $this->assertEmpty($widget->getImage());
        $this->assertEquals('en', $widget->getLanguage());
        $this->assertEquals(Catharsis\Web\PinterestPinItButtonShape::RECTANGULAR, $widget->getShape());
        $this->assertEquals(Catharsis\Web\PinterestPinItButtonSize::SMALL, $widget->getSize());
        $this->assertEmpty($widget->getUrl());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\PinterestPinItButtonWidget::color(string $color)}
     * method.
     * @return void
     */
    public function testColorMethod()
    {
        $widget = new Catharsis\Web\PinterestPinItButtonWidget();
        $this->assertEquals('gray', $widget->getColor());
        $this->assertSame($widget, $widget->color('color'));
        $this->assertEquals('color', $widget->getColor());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\PinterestPinItButtonWidget::counter(string $position)}
     * method.
     * @return void
     */
    public function testCounterMethod()
    {
        $widget = new Catharsis\Web\PinterestPinItButtonWidget();
        $this->assertEquals(Catharsis\Web\PinterestPinItButtonPinCountPosition::NONE, $widget->getCounter());
        $this->assertSame($widget, $widget->counter('counter'));
        $this->assertEquals('counter', $widget->getCounter());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\PinterestPinItButtonWidget::description(string $description)}
     * method.
     * @return void
     */
    public function testDescriptionMethod()
    {
        $widget = new Catharsis\Web\PinterestPinItButtonWidget();
        $this->assertEmpty($widget->getDescription());
        $this->assertSame($widget, $widget->description('description'));
        $this->assertEquals('description', $widget->getDescription());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\PinterestPinItButtonWidget::gray()}
     * method.
     * @return void
     */
    public function testGrayMethod()
    {
        $widget = new Catharsis\Web\PinterestPinItButtonWidget();
        $this->assertSame($widget, $widget->gray());
        $this->assertEquals('gray', $widget->getColor());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\PinterestPinItButtonWidget::image(string $image)}
     * method.
     * @return void
     */
    public function testImageMethod()
    {
        $widget = new Catharsis\Web\PinterestPinItButtonWidget();
        $this->assertEmpty($widget->getImage());
        $this->assertSame($widget, $widget->image('image'));
        $this->assertEquals('image', $widget->getImage());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\PinterestPinItButtonWidget::language(string $language)}
     * method.
     * @return void
     */
    public function testLanguageMethod()
    {
        $widget = new Catharsis\Web\PinterestPinItButtonWidget();
        $this->assertEquals('en', $widget->getLanguage());
        $this->assertSame($widget, $widget->language('language'));
        $this->assertEquals('language', $widget->getLanguage());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\PinterestPinItButtonWidget::red()}
     * method.
     * @return void
     */
    public function testRedMethod()
    {
        $widget = new Catharsis\Web\PinterestPinItButtonWidget();
        $this->assertSame($widget, $widget->red());
        $this->assertEquals('red', $widget->getColor());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\PinterestPinItButtonWidget::shape(string $shape)}
     * method.
     * @return void
     */
    public function testShapeMethod()
    {
        $widget = new Catharsis\Web\PinterestPinItButtonWidget();
        $this->assertEquals(Catharsis\Web\PinterestPinItButtonShape::RECTANGULAR, $widget->getShape());
        $this->assertSame($widget, $widget->shape('shape'));
        $this->assertEquals('shape', $widget->getShape());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\PinterestPinItButtonWidget::size(string $size)}
     * method.
     * @return void
     */
    public function testSizeMethod()
    {
        $widget = new Catharsis\Web\PinterestPinItButtonWidget();
        $this->assertEquals(Catharsis\Web\PinterestPinItButtonSize::SMALL, $widget->getSize());
        $this->assertSame($widget, $widget->size('size'));
        $this->assertEquals('size', $widget->getSize());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\PinterestPinItButtonWidget::url(string $url)}
     * method.
     * @return void
     */
    public function testUrlMethod()
    {
        $widget = new Catharsis\Web\PinterestPinItButtonWidget();
        $this->assertEmpty($widget->getUrl());
        $this->assertSame($widget, $widget->url('url'));
        $this->assertEquals('url', $widget->getUrl());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\PinterestPinItButtonWidget::white()}
     * method.
     * @return void
     */
    public function testWhiteMethod()
    {
        $widget = new Catharsis\Web\PinterestPinItButtonWidget();
        $this->assertSame($widget, $widget->white());
        $this->assertEquals('white', $widget->getColor());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\PinterestPinItButtonWidget::__toString()}
     * method.
     * @return void
     */
    public function testToStringMethod()
    {
        $widget = new Catharsis\Web\PinterestPinItButtonWidget();
        $this->assertEmpty((string) $widget);

        $widget = new Catharsis\Web\PinterestPinItButtonWidget();
        $this->assertEmpty((string) $widget->url('url')->image('image'));

        $widget = new Catharsis\Web\PinterestPinItButtonWidget();
        $this->assertEmpty((string) $widget->url('url')->description('description'));

        $widget = new Catharsis\Web\PinterestPinItButtonWidget();
        $this->assertEmpty((string) $widget->image('image')->description('description'));

        $widget = new Catharsis\Web\PinterestPinItButtonWidget();
        $this->assertEquals(
            '<a data-pin-color="gray" data-pin-config="none" data-pin-do="buttonPin"'
            .' data-pin-height="20" data-pin-lang="en" data-pin-shape="rect"'
            .' href="http://www.pinterest.com/pin/create/button/?url=url&amp;media=image&amp;description=description">'
            .'<img src="http://assets.pinterest.com/images/pidgets/pinit_fg_en_rect_gray_20.png"/></a>',
            (string) $widget
                ->url('url')
                ->image('image')
                ->description('description')
        );

        $widget = new Catharsis\Web\PinterestPinItButtonWidget();
        $this->assertEquals(
            '<a data-pin-color="color" data-pin-config="above" data-pin-do="buttonPin"'
            .' data-pin-height="28" data-pin-lang="language" data-pin-shape="rect"'
            .' href="http://www.pinterest.com/pin/create/button/?url=url&amp;media=image&amp;description=description">'
            .'<img src="http://assets.pinterest.com/images/pidgets/pinit_fg_language_rect_color_28.png"/></a>',
            (string) $widget
                ->url('url')
                ->image('image')
                ->description('description')
                ->color('color')
                ->counter(Catharsis\Web\PinterestPinItButtonPinCountPosition::ABOVE)
                ->language('language')
                ->size(Catharsis\Web\PinterestPinItButtonSize::LARGE)
        );
    }
}

?>
