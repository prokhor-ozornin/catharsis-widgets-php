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
 * Tests set for class {@link \Catharsis\Web\FacebookFollowButtonWidget}
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class FacebookFollowButtonWidgetTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of class constructor(s).
     * @link \Catharsis\Web\FacebookFollowButtonWidget::__construct()
     * @return void
     */
    public function testConstructors()
    {
        $widget = new Catharsis\Web\FacebookFollowButtonWidget();
        $this->assertEmpty($widget->getColorScheme());
        $this->assertEmpty($widget->getFaces());
        $this->assertEmpty($widget->getHeight());
        $this->assertEmpty($widget->getKidsMode());
        $this->assertEmpty($widget->getLayout());
        $this->assertEmpty($widget->getUrl());
        $this->assertEmpty($widget->getWidth());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\FacebookFollowButtonWidget::colorScheme(string $colorScheme)}
     * method.
     * @return void
     */
    public function testColorSchemeMethod()
    {
        $widget = new Catharsis\Web\FacebookFollowButtonWidget();
        $this->assertEmpty($widget->getColorScheme());
        $this->assertSame($widget, $widget->colorScheme('colorScheme'));
        $this->assertEquals('colorScheme', $widget->getColorScheme());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\FacebookFollowButtonWidget::faces(boolean $show)}
     * method.
     * @return void
     */
    public function testFacesMethod()
    {
        $widget = new Catharsis\Web\FacebookFollowButtonWidget();
        $this->assertEmpty($widget->getFaces());
        $this->assertSame($widget, $widget->faces(true));
        $this->assertTrue($widget->getFaces());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\FacebookFollowButtonWidget::height(string $height)}
     * method.
     * @return void
     */
    public function testHeightMethod()
    {
        $widget = new Catharsis\Web\FacebookFollowButtonWidget();
        $this->assertEmpty($widget->getHeight());
        $this->assertSame($widget, $widget->height('height'));
        $this->assertEquals('height', $widget->getHeight());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\FacebookFollowButtonWidget::kidsMode(boolean $enabled)}
     * method.
     * @return void
     */
    public function testKidsModeMethod()
    {
        $widget = new Catharsis\Web\FacebookFollowButtonWidget();
        $this->assertEmpty($widget->getKidsMode());
        $this->assertSame($widget, $widget->kidsMode(true));
        $this->assertTrue($widget->getKidsMode());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\FacebookFollowButtonWidget::layout(string $layout)}
     * method.
     * @return void
     */
    public function testLayoutMethod()
    {
        $widget = new Catharsis\Web\FacebookFollowButtonWidget();
        $this->assertEmpty($widget->getLayout());
        $this->assertSame($widget, $widget->layout('layout'));
        $this->assertEquals('layout', $widget->getLayout());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\FacebookFollowButtonWidget::url(string $url)}
     * method.
     * @return void
     */
    public function testUrlMethod()
    {
        $widget = new Catharsis\Web\FacebookFollowButtonWidget();
        $this->assertEmpty($widget->getUrl());
        $this->assertSame($widget, $widget->url('url'));
        $this->assertEquals('url', $widget->getUrl());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\FacebookFollowButtonWidget::width(string $width)}
     * method.
     * @return void
     */
    public function testWidthMethod()
    {
        $widget = new Catharsis\Web\FacebookFollowButtonWidget();
        $this->assertEmpty($widget->getWidth());
        $this->assertSame($widget, $widget->width('width'));
        $this->assertEquals('width', $widget->getWidth());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\FacebookFollowButtonWidget::__toString()}
     * method.
     * @return void
     */
    public function testToStringMethod()
    {
        $widget = new Catharsis\Web\FacebookFollowButtonWidget();
        $this->assertEmpty((string) $widget);

        $widget = new Catharsis\Web\FacebookFollowButtonWidget();
        $this->assertEquals(
            '<div class="fb-follow" data-href="url"></div>',
            (string) $widget->url('url')
        );

        $widget = new Catharsis\Web\FacebookFollowButtonWidget();
        $this->assertEquals(
            '<div class="fb-follow" data-colorscheme="dark" data-height="height" data-href="url"'
            .' data-kid-directed-site="true" data-layout="box_count" data-show-faces="true" data-width="width"></div>',
            (string) $widget
                ->url('url')
                ->colorScheme(Catharsis\Web\FacebookColorScheme::DARK)
                ->kidsMode(true)
                ->layout(Catharsis\Web\FacebookButtonLayout::BOX_COUNT)
                ->faces(true)
                ->width('width')
                ->height('height')
        );
    }
}

?>
