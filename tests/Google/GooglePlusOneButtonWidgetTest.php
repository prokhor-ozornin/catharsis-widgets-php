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
 * Tests set for class {@link \Catharsis\Web\GooglePlusOneButtonWidget}
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class GooglePlusOneButtonWidgetTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of class constructor(s).
     * @link \Catharsis\Web\GooglePlusOneButtonWidget::__construct()
     * @return void
     */
    public function testConstructors()
    {
        $widget = new Catharsis\Web\GooglePlusOneButtonWidget();
        $this->assertEmpty($widget->getAlignment());
        $this->assertEmpty($widget->getAnnotation());
        $this->assertEmpty($widget->getCallback());
        $this->assertEmpty($widget->getRecommendations());
        $this->assertEmpty($widget->getSize());
        $this->assertEmpty($widget->getUrl());
        $this->assertEmpty($widget->getWidth());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\GooglePlusOneButtonWidget::alignment(string $alignment)}
     * method.
     * @return void
     */
    public function testAlignmentMethod()
    {
        $widget = new Catharsis\Web\GooglePlusOneButtonWidget();
        $this->assertEmpty($widget->getAlignment());
        $this->assertSame($widget, $widget->alignment('alignment'));
        $this->assertEquals('alignment', $widget->getAlignment());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\GooglePlusOneButtonWidget::annotation(string $annotation)}
     * method.
     * @return void
     */
    public function testAnnotationMethod()
    {
        $widget = new Catharsis\Web\GooglePlusOneButtonWidget();
        $this->assertEmpty($widget->getAnnotation());
        $this->assertSame($widget, $widget->annotation('annotation'));
        $this->assertEquals('annotation', $widget->getAnnotation());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\GooglePlusOneButtonWidget::callback(string $callback)}
     * method.
     * @return void
     */
    public function testCallbackMethod()
    {
        $widget = new Catharsis\Web\GooglePlusOneButtonWidget();
        $this->assertEmpty($widget->getCallback());
        $this->assertSame($widget, $widget->callback('callback'));
        $this->assertEquals('callback', $widget->getCallback());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\GooglePlusOneButtonWidget::recommendations(boolean $show)}
     * method.
     * @return void
     */
    public function testRecommendationsMethod()
    {
        $widget = new Catharsis\Web\GooglePlusOneButtonWidget();
        $this->assertEmpty($widget->getRecommendations());
        $this->assertSame($widget, $widget->recommendations(true));
        $this->assertTrue($widget->getRecommendations());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\GooglePlusOneButtonWidget::size(string $size)}
     * method.
     * @return void
     */
    public function testSizeMethod()
    {
        $widget = new Catharsis\Web\GooglePlusOneButtonWidget();
        $this->assertEmpty($widget->getSize());
        $this->assertSame($widget, $widget->size('size'));
        $this->assertEquals('size', $widget->getSize());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\GooglePlusOneButtonWidget::url(string $url)}
     * method.
     * @return void
     */
    public function testUrlMethod()
    {
        $widget = new Catharsis\Web\GooglePlusOneButtonWidget();
        $this->assertEmpty($widget->getUrl());
        $this->assertSame($widget, $widget->url('url'));
        $this->assertEquals('url', $widget->getUrl());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\GooglePlusOneButtonWidget::width(string $width)}
     * method.
     * @return void
     */
    public function testWidthMethod()
    {
        $widget = new Catharsis\Web\GooglePlusOneButtonWidget();
        $this->assertEmpty($widget->getWidth());
        $this->assertSame($widget, $widget->width('width'));
        $this->assertEquals('width', $widget->getWidth());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\GooglePlusOneButtonWidget::__toString()}
     * method.
     * @return void
     */
    public function testToStringMethod()
    {
        $widget = new Catharsis\Web\GooglePlusOneButtonWidget();
        $this->assertEquals('<g:plusone></g:plusone>', (string) $widget);

        $widget = new Catharsis\Web\GooglePlusOneButtonWidget();
        $this->assertEquals(
            '<g:plusone align="left" annotation="none" data-callback="callback"'
            .' data-recommendations="true" href="url" size="small" width="width"></g:plusone>',
            (string) $widget
                ->url('url')
                ->size(Catharsis\Web\GooglePlusOneButtonSize::SMALL)
                ->annotation(Catharsis\Web\GooglePlusOneButtonAnnotation::NONE)
                ->width('width')
                ->alignment(Catharsis\Web\GooglePlusOneButtonAlignment::LEFT)
                ->callback('callback')
                ->recommendations(true)
        );
    }
}

?>
