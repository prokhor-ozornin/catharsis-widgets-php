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
 * Tests set for class {@link \Catharsis\Web\FacebookSendButtonWidget}
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class FacebookSendButtonWidgetTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of class constructor(s).
     * @link \Catharsis\Web\FacebookSendButtonWidget::__construct()
     * @return void
     */
    public function testConstructors()
    {
        $widget = new Catharsis\Web\FacebookSendButtonWidget();
        $this->assertEmpty($widget->getColorScheme());
        $this->assertEmpty($widget->getHeight());
        $this->assertEmpty($widget->getKidsMode());
        $this->assertEmpty($widget->getTrackLabel());
        $this->assertEmpty($widget->getUrl());
        $this->assertEmpty($widget->getWidth());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\FacebookSendButtonWidget::colorScheme(string $colorScheme)}
     * method.
     * @return void
     */
    public function testColorSchemeMethod()
    {
        $widget = new Catharsis\Web\FacebookSendButtonWidget();
        $this->assertEmpty($widget->getColorScheme());
        $this->assertSame($widget, $widget->colorScheme('colorScheme'));
        $this->assertEquals('colorScheme', $widget->getColorScheme());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\FacebookSendButtonWidget::height(string $height)}
     * method.
     * @return void
     */
    public function testHeightMethod()
    {
        $widget = new Catharsis\Web\FacebookSendButtonWidget();
        $this->assertEmpty($widget->getHeight());
        $this->assertSame($widget, $widget->height('height'));
        $this->assertEquals('height', $widget->getHeight());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\FacebookSendButtonWidget::kidsMode(boolean $enabled)}
     * method.
     * @return void
     */
    public function testKidsModeMethod()
    {
        $widget = new Catharsis\Web\FacebookSendButtonWidget();
        $this->assertEmpty($widget->getKidsMode());
        $this->assertSame($widget, $widget->kidsMode(true));
        $this->assertTrue($widget->getKidsMode());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\FacebookSendButtonWidget::trackLabel(string $label)}
     * method.
     * @return void
     */
    public function testTrackLabelMethod()
    {
        $widget = new Catharsis\Web\FacebookSendButtonWidget();
        $this->assertEmpty($widget->getTrackLabel());
        $this->assertSame($widget, $widget->trackLabel('trackLabel'));
        $this->assertEquals('trackLabel', $widget->getTrackLabel());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\FacebookSendButtonWidget::url(string $url)}
     * method.
     * @return void
     */
    public function testUrlMethod()
    {
        $widget = new Catharsis\Web\FacebookSendButtonWidget();
        $this->assertEmpty($widget->getUrl());
        $this->assertSame($widget, $widget->url('url'));
        $this->assertEquals('url', $widget->getUrl());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\FacebookSendButtonWidget::width(string $width)}
     * method.
     * @return void
     */
    public function testWidthMethod()
    {
        $widget = new Catharsis\Web\FacebookSendButtonWidget();
        $this->assertEmpty($widget->getWidth());
        $this->assertSame($widget, $widget->width('width'));
        $this->assertEquals('width', $widget->getWidth());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\FacebookSendButtonWidget::__toString()}
     * method.
     * @return void
     */
    public function testToStringMethod()
    {
        $widget = new Catharsis\Web\FacebookSendButtonWidget();
        $this->assertEquals('<div class="fb-send"></div>', (string) $widget);

        $widget = new Catharsis\Web\FacebookSendButtonWidget();
        $this->assertEquals(
            '<div class="fb-send" data-colorscheme="dark" data-height="height" data-href="url"'
            .' data-kid-directed-site="true" data-ref="track_label" data-width="width"></div>',
            (string) $widget
                ->url('url')
                ->colorScheme(Catharsis\Web\FacebookColorScheme::DARK)
                ->kidsMode(true)
                ->width('width')
                ->height('height')
                ->trackLabel('track_label')
        );
    }
}

?>
