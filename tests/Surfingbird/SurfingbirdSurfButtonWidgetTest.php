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
 * Tests set for class {@link \Catharsis\Web\SurfingbirdSurfButtonWidget}
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class SurfingbirdSurfButtonWidgetTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of class constructor(s).
     * @link \Catharsis\Web\SurfingbirdSurfButtonWidget::__construct()
     * @return void
     */
    public function testConstructors()
    {
        $widget = new Catharsis\Web\SurfingbirdSurfButtonWidget();
        $this->assertEmpty($widget->getColor());
        $this->assertFalse($widget->getCounter());
        $this->assertEmpty($widget->getHeight());
        $this->assertEquals('Surf', $widget->getLabel());
        $this->assertEquals(Catharsis\Web\SurfingbirdSurfButtonLayout::COMMON, $widget->getLayout());
        $this->assertEmpty($widget->getUrl());
        $this->assertEmpty($widget->getWidth());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\SurfingbirdSurfButtonWidget::color(string $color)}
     * method.
     * @return void
     */
    public function testColorMethod()
    {
        $widget = new Catharsis\Web\SurfingbirdSurfButtonWidget();
        $this->assertEmpty($widget->getColor());
        $this->assertSame($widget, $widget->color('color'));
        $this->assertEquals('color', $widget->getColor());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\SurfingbirdSurfButtonWidget::counter(boolean $show)}
     * method.
     * @return void
     */
    public function testCounterMethod()
    {
        $widget = new Catharsis\Web\SurfingbirdSurfButtonWidget();
        $this->assertFalse($widget->getCounter());
        $this->assertSame($widget, $widget->counter(true));
        $this->assertTrue($widget->getCounter());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\SurfingbirdSurfButtonWidget::height(string $height)}
     * method.
     * @return void
     */
    public function testHeightMethod()
    {
        $widget = new Catharsis\Web\SurfingbirdSurfButtonWidget();
        $this->assertEmpty($widget->getHeight());
        $this->assertSame($widget, $widget->height('height'));
        $this->assertEquals('height', $widget->getHeight());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\SurfingbirdSurfButtonWidget::label(string $label)}
     * method.
     * @return void
     */
    public function testLabelMethod()
    {
        $widget = new Catharsis\Web\SurfingbirdSurfButtonWidget();
        $this->assertEquals('Surf', $widget->getLabel());
        $this->assertSame($widget, $widget->label('label'));
        $this->assertEquals('label', $widget->getLabel());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\SurfingbirdSurfButtonWidget::layout(string $layout)}
     * method.
     * @return void
     */
    public function testLayoutMethod()
    {
        $widget = new Catharsis\Web\SurfingbirdSurfButtonWidget();
        $this->assertEquals(Catharsis\Web\SurfingbirdSurfButtonLayout::COMMON, $widget->getLayout());
        $this->assertSame($widget, $widget->layout('layout'));
        $this->assertEquals('layout', $widget->getLayout());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\SurfingbirdSurfButtonWidget::url(string $url)}
     * method.
     * @return void
     */
    public function testUrlMethod()
    {
        $widget = new Catharsis\Web\SurfingbirdSurfButtonWidget();
        $this->assertEmpty($widget->getUrl());
        $this->assertSame($widget, $widget->url('url'));
        $this->assertEquals('url', $widget->getUrl());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\SurfingbirdSurfButtonWidget::width(string $width)}
     * method.
     * @return void
     */
    public function testWidthMethod()
    {
        $widget = new Catharsis\Web\SurfingbirdSurfButtonWidget();
        $this->assertEmpty($widget->getWidth());
        $this->assertSame($widget, $widget->width('width'));
        $this->assertEquals('width', $widget->getWidth());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\SurfingbirdSurfButtonWidget::__toString()}
     * method.
     * @return void
     */
    public function testToStringMethod()
    {
        $widget = new Catharsis\Web\SurfingbirdSurfButtonWidget();
        $this->assertEquals(
            '<a class="surfinbird__like_button" data-surf-config="{&quot;layout&quot;:&quot;common-nocount&quot;}" href="http://surfingbird.ru/share" target="_blank">Surf</a>',
            (string) $widget
        );

        $widget = new Catharsis\Web\SurfingbirdSurfButtonWidget();
        $this->assertEquals(
            '<a class="surfinbird__like_button"'
            .' data-surf-config="{&quot;layout&quot;:&quot;common-blue&quot;,&quot;url&quot;:&quot;url&quot;,&quot;width&quot;:&quot;width&quot;,&quot;height&quot;:&quot;height&quot;}"'
            .' href="http://surfingbird.ru/share" target="_blank">Share</a>',
            (string) $widget
                ->color(Catharsis\Web\SurfingbirdSurfButtonColor::BLUE)
                ->counter(true)
                ->label('Share')
                ->url('url')
                ->layout(Catharsis\Web\SurfingbirdSurfButtonLayout::COMMON)
                ->width('width')
                ->height('height')
        );
    }
}

?>
