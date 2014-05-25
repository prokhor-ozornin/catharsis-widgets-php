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
 * Tests set for class {@link \Catharsis\Web\FacebookLikeBoxWidget}
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class FacebookLikeBoxWidgetTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of class constructor(s).
     * @link \Catharsis\Web\FacebookLikeBoxWidget::__construct()
     * @return void
     */
    public function testConstructors()
    {
        $widget = new Catharsis\Web\FacebookLikeBoxWidget();
        $this->assertEmpty($widget->getBorder());
        $this->assertEmpty($widget->getColorScheme());
        $this->assertEmpty($widget->getFaces());
        $this->assertEmpty($widget->getHeader());
        $this->assertEmpty($widget->getHeight());
        $this->assertEmpty($widget->getStream());
        $this->assertEmpty($widget->getUrl());
        $this->assertEmpty($widget->getWall());
        $this->assertEmpty($widget->getWidth());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\FacebookLikeBoxWidget::border(boolean $border)}
     * method.
     * @return void
     */
    public function testBorderMethod()
    {
        $widget = new Catharsis\Web\FacebookLikeBoxWidget();
        $this->assertEmpty($widget->getBorder());
        $this->assertSame($widget, $widget->border(true));
        $this->assertTrue(true, $widget->getBorder());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\FacebookLikeBoxWidget::colorScheme(string $colorScheme)}
     * method.
     * @return void
     */
    public function testColorSchemeMethod()
    {
        $widget = new Catharsis\Web\FacebookLikeBoxWidget();
        $this->assertEmpty($widget->getColorScheme());
        $this->assertSame($widget, $widget->colorScheme('colorScheme'));
        $this->assertEquals('colorScheme', $widget->getColorScheme());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\FacebookLikeBoxWidget::faces(boolean $show)}
     * method.
     * @return void
     */
    public function testFacesMethod()
    {
        $widget = new Catharsis\Web\FacebookLikeBoxWidget();
        $this->assertEmpty($widget->getFaces());
        $this->assertSame($widget, $widget->faces(true));
        $this->assertTrue($widget->getFaces());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\FacebookLikeBoxWidget::header(boolean $header)}
     * method.
     * @return void
     */
    public function testHeaderMethod()
    {
        $widget = new Catharsis\Web\FacebookLikeBoxWidget();
        $this->assertEmpty($widget->getHeader());
        $this->assertSame($widget, $widget->header(true));
        $this->assertTrue($widget->getHeader());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\FacebookLikeBoxWidget::height(string $height)}
     * method.
     * @return void
     */
    public function testHeightMethod()
    {
        $widget = new Catharsis\Web\FacebookLikeBoxWidget();
        $this->assertEmpty($widget->getHeight());
        $this->assertSame($widget, $widget->height('height'));
        $this->assertEquals('height', $widget->getHeight());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\FacebookLikeBoxWidget::stream(boolean $show)}
     * method.
     * @return void
     */
    public function testStreamMethod()
    {
        $widget = new Catharsis\Web\FacebookLikeBoxWidget();
        $this->assertEmpty($widget->getStream());
        $this->assertSame($widget, $widget->stream(true));
        $this->assertTrue($widget->getStream());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\FacebookLikeBoxWidget::url(string $url)}
     * method.
     * @return void
     */
    public function testUrlMethod()
    {
        $widget = new Catharsis\Web\FacebookLikeBoxWidget();
        $this->assertEmpty($widget->getUrl());
        $this->assertSame($widget, $widget->url('url'));
        $this->assertEquals('url', $widget->getUrl());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\FacebookLikeBoxWidget::wall(boolean $include)}
     * method.
     * @return void
     */
    public function testWallMethod()
    {
        $widget = new Catharsis\Web\FacebookLikeBoxWidget();
        $this->assertEmpty($widget->getWall());
        $this->assertSame($widget, $widget->wall(true));
        $this->assertTrue($widget->getWall());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\FacebookLikeBoxWidget::width(string $width)}
     * method.
     * @return void
     */
    public function testWidthMethod()
    {
        $widget = new Catharsis\Web\FacebookLikeBoxWidget();
        $this->assertEmpty($widget->getWidth());
        $this->assertSame($widget, $widget->width('width'));
        $this->assertEquals('width', $widget->getWidth());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\FacebookLikeBoxWidget::__toString()}
     * method.
     * @return void
     */
    public function testToStringMethod()
    {
        $widget = new Catharsis\Web\FacebookLikeBoxWidget();
        $this->assertEmpty((string) $widget);

        $widget = new Catharsis\Web\FacebookLikeBoxWidget();
        $this->assertEquals(
            '<div class="fb-like-box" data-href="https://www.facebook.com/pages/Clear-Words/515749945120070"></div>',
            (string) $widget->url('https://www.facebook.com/pages/Clear-Words/515749945120070')
        );

        $widget = new Catharsis\Web\FacebookLikeBoxWidget();
        $this->assertEquals(
            '<div class="fb-like-box" data-colorscheme="dark" data-force-wall="true"'
            .' data-header="true" data-height="height" data-href="https://www.facebook.com/pages/Clear-Words/515749945120070"'
            .' data-show-border="true" data-show-faces="true" data-stream="true" data-width="width"></div>',
            (string) $widget
                ->url('https://www.facebook.com/pages/Clear-Words/515749945120070')
                ->width('width')
                ->height('height')
                ->colorScheme(Catharsis\Web\FacebookColorScheme::DARK)
                ->wall(true)
                ->header(true)
                ->border(true)
                ->faces(true)
                ->stream(true)
        );
    }
}

?>
