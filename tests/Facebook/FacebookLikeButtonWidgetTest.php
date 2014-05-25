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
 * Tests set for class {@link \Catharsis\Web\FacebookLikeButtonWidget}
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class FacebookLikeButtonWidgetTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of class constructor(s).
     * @link \Catharsis\Web\FacebookLikeButtonWidget::__construct()
     * @return void
     */
    public function testConstructors()
    {
        $widget = new Catharsis\Web\FacebookLikeButtonWidget();
        $this->assertEmpty($widget->getColorScheme());
        $this->assertEmpty($widget->getFaces());
        $this->assertEmpty($widget->getKidsMode());
        $this->assertEmpty($widget->getLayout());
        $this->assertEmpty($widget->getTrackLabel());
        $this->assertEmpty($widget->getUrl());
        $this->assertEmpty($widget->getVerb());
        $this->assertEmpty($widget->getWidth());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\FacebookLikeButtonWidget::colorScheme(string $color_scheme)}
     * method.
     * @return void
     */
    public function testColorSchemeMethod()
    {
        $widget = new Catharsis\Web\FacebookLikeButtonWidget();
        $this->assertEmpty($widget->getColorScheme());
        $this->assertSame($widget, $widget->colorScheme('colorScheme'));
        $this->assertEquals('colorScheme', $widget->getColorScheme());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\FacebookLikeButtonWidget::faces(boolean $show)}
     * method.
     * @return void
     */
    public function testFacesMethod()
    {
        $widget = new Catharsis\Web\FacebookLikeButtonWidget();
        $this->assertEmpty($widget->getFaces());
        $this->assertSame($widget, $widget->faces(true));
        $this->assertTrue($widget->getFaces());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\FacebookLikeButtonWidget::kidsMode(boolean $enabled)}
     * method.
     * @return void
     */
    public function testKidsModeMethod()
    {
        $widget = new Catharsis\Web\FacebookLikeButtonWidget();
        $this->assertEmpty($widget->getKidsMode());
        $this->assertSame($widget, $widget->kidsMode(true));
        $this->assertTrue($widget->getKidsMode());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\FacebookLikeButtonWidget::layout(string $layout)}
     * method.
     * @return void
     */
    public function testLayoutMethod()
    {
        $widget = new Catharsis\Web\FacebookLikeButtonWidget();
        $this->assertEmpty($widget->getLayout());
        $this->assertSame($widget, $widget->layout('layout'));
        $this->assertEquals('layout', $widget->getLayout());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\FacebookLikeButtonWidget::trackLabel(string $label)}
     * method.
     * @return void
     */
    public function testTrackLabelMethod()
    {
        $widget = new Catharsis\Web\FacebookLikeButtonWidget();
        $this->assertEmpty($widget->getTrackLabel());
        $this->assertSame($widget, $widget->trackLabel('trackLabel'));
        $this->assertEquals('trackLabel', $widget->getTrackLabel());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\FacebookLikeButtonWidget::url(string $url)}
     * method.
     * @return void
     */
    public function testUrlMethod()
    {
        $widget = new Catharsis\Web\FacebookLikeButtonWidget();
        $this->assertEmpty($widget->getUrl());
        $this->assertSame($widget, $widget->url('url'));
        $this->assertEquals('url', $widget->getUrl());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\FacebookLikeButtonWidget::verb(string $verb)}
     * method.
     * @return void
     */
    public function testVerbMethod()
    {
        $widget = new Catharsis\Web\FacebookLikeButtonWidget();
        $this->assertEmpty($widget->getVerb());
        $this->assertSame($widget, $widget->verb('verb'));
        $this->assertEquals('verb', $widget->getVerb());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\FacebookLikeButtonWidget::width(string $width)}
     * method.
     * @return void
     */
    public function testWidthMethod()
    {
        $widget = new Catharsis\Web\FacebookLikeButtonWidget();
        $this->assertEmpty($widget->getWidth());
        $this->assertSame($widget, $widget->width('width'));
        $this->assertEquals('width', $widget->getWidth());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\FacebookLikeButtonWidget::__toString()}
     * method.
     * @return void
     */
    public function testToStringMethod()
    {
        $widget = new Catharsis\Web\FacebookLikeButtonWidget();
        $this->assertEquals('<div class="fb-like"></div>', (string) $widget);

        $widget = new Catharsis\Web\FacebookLikeButtonWidget();
        $this->assertEquals(
            '<div class="fb-like" data-href="url"></div>',
            (string) $widget->url('url')
        );

        $widget = new Catharsis\Web\FacebookLikeButtonWidget();
        $this->assertEquals(
            '<div class="fb-like" data-action="recommend" data-colorscheme="dark"'
            .' data-href="url" data-kid-directed-site="true" data-layout="box_count"'
            .' data-ref="track_label" data-show-faces="true" data-width="width"></div>',
            (string) $widget
                ->verb(Catharsis\Web\FacebookLikeButtonVerb::RECOMMEND)
                ->colorScheme(Catharsis\Web\FacebookColorScheme::DARK)
                ->url('url')
                ->kidsMode(true)
                ->layout(Catharsis\Web\FacebookButtonLayout::BOX_COUNT)
                ->trackLabel('track_label')
                ->faces(true)
                ->width('width')
        );
    }
}

?>
