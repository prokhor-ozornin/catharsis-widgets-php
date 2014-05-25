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
 * Tests set for class {@link \Catharsis\Web\FacebookFacepileWidget}
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class FacebookFacepileWidgetTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of class constructor(s).
     * @link \Catharsis\Web\FacebookFacepileWidget::__construct()
     * @return void
     */
    public function testConstructors()
    {
        $widget = new Catharsis\Web\FacebookFacepileWidget();
        $this->assertEmpty($widget->getActions());
        $this->assertEmpty($widget->getColorScheme());
        $this->assertEmpty($widget->getHeight());
        $this->assertEmpty($widget->getMaxRows());
        $this->assertEmpty($widget->getPhotoSize());
        $this->assertEmpty($widget->getUrl());
        $this->assertEmpty($widget->getWidth());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\FacebookFacepileWidget::actions(array $actions)}
     * method.
     * @return void
     */
    public function testActionsMethod()
    {
        $widget = new Catharsis\Web\FacebookFacepileWidget();
        $this->assertEmpty($widget->getActions());
        $this->assertSame($widget, $widget->actions(array('action')));
        $this->assertEquals(array('action'), $widget->getActions());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\FacebookFacepileWidget::colorScheme(string $color_scheme)}
     * method.
     * @return void
     */
    public function testColorSchemeMethod()
    {
        $widget = new Catharsis\Web\FacebookFacepileWidget();
        $this->assertEmpty($widget->getColorScheme());
        $this->assertSame($widget, $widget->colorScheme('colorScheme'));
        $this->assertEquals('colorScheme', $widget->getColorScheme());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\FacebookFacepileWidget::height(string $height)}
     * method.
     * @return void
     */
    public function testHeightMethod()
    {
        $widget = new Catharsis\Web\FacebookFacepileWidget();
        $this->assertEmpty($widget->getHeight());
        $this->assertSame($widget, $widget->height('height'));
        $this->assertEquals('height', $widget->getHeight());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\FacebookFacepileWidget::maxRows(integer $maxRows)}
     * method.
     * @return void
     */
    public function testMaxRowsMethod()
    {
        $widget = new Catharsis\Web\FacebookFacepileWidget();
        $this->assertEmpty($widget->getMaxRows());
        $this->assertSame($widget, $widget->maxRows(1));
        $this->assertEquals(1, $widget->getMaxRows());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\FacebookFacepileWidget::photoSize(string $size)}
     * method.
     * @return void
     */
    public function testPhotoSizeMethod()
    {
        $widget = new Catharsis\Web\FacebookFacepileWidget();
        $this->assertEmpty($widget->getPhotoSize());
        $this->assertSame($widget, $widget->photoSize('photoSize'));
        $this->assertEquals('photoSize', $widget->getPhotoSize());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\FacebookFacepileWidget::url(string $url)}
     * method.
     * @return void
     */
    public function testUrlMethod()
    {
        $widget = new Catharsis\Web\FacebookFacepileWidget();
        $this->assertEmpty($widget->getUrl());
        $this->assertSame($widget, $widget->url('url'));
        $this->assertEquals('url', $widget->getUrl());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\FacebookFacepileWidget::width(string $width)}
     * method.
     * @return void
     */
    public function testWidthMethod()
    {
        $widget = new Catharsis\Web\FacebookFacepileWidget();
        $this->assertEmpty($widget->getWidth());
        $this->assertSame($widget, $widget->width('width'));
        $this->assertEquals('width', $widget->getWidth());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\FacebookFacepileWidget::__toString()}
     * method.
     * @return void
     */
    public function testToStringMethod()
    {
        $widget = new Catharsis\Web\FacebookFacepileWidget();
        $this->assertEquals('<div class="fb-facepile"></div>', (string) $widget);

        $widget = new Catharsis\Web\FacebookFacepileWidget();
        $this->assertEquals(
            '<div class="fb-facepile" data-action="actions" data-colorscheme="dark"'
            . ' data-height="height" data-href="url" data-max-rows="10" data-size="large"'
            .' data-width="width"></div>',
            (string) $widget
                ->url('url')
                ->actions('actions')
                ->photoSize(Catharsis\Web\FacebookFacepilePhotoSize::LARGE)
                ->width('width')
                ->height('height')
                ->maxRows(10)
                ->colorScheme(Catharsis\Web\FacebookColorScheme::DARK)
        );
    }
}

?>
