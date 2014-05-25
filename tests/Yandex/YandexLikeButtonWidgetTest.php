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
 * Tests set for class {@link \Catharsis\Web\YandexLikeButtonWidget}
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class YandexLikeButtonWidgetTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of class constructor(s).
     * @link \Catharsis\Web\YandexLikeButtonWidget::__construct()
     * @return void
     */
    public function testConstructors()
    {
        $widget = new Catharsis\Web\YandexLikeButtonWidget();
        $this->assertEquals(Catharsis\Web\YandexLikeButtonLayout::BUTTON, $widget->getLayout());
        $this->assertEquals(Catharsis\Web\YandexLikeButtonSize::LARGE, $widget->getSize());
        $this->assertEmpty($widget->getText());
        $this->assertEmpty($widget->getTitle());
        $this->assertEmpty($widget->getUrl());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\YandexLikeButtonWidget::layout(string $layout)}
     * method.
     * @return void
     */
    public function testLayoutMethod()
    {
        $widget = new Catharsis\Web\YandexLikeButtonWidget();
        $this->assertEquals(Catharsis\Web\YandexLikeButtonLayout::BUTTON, $widget->getLayout());
        $this->assertSame($widget, $widget->layout('layout'));
        $this->assertEquals('layout', $widget->getLayout());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\YandexLikeButtonWidget::size(string $size)}
     * method.
     * @return void
     */
    public function testSizeMethod()
    {
        $widget = new Catharsis\Web\YandexLikeButtonWidget();
        $this->assertEquals(Catharsis\Web\YandexLikeButtonSize::LARGE, $widget->getSize());
        $this->assertSame($widget, $widget->size('size'));
        $this->assertEquals('size', $widget->getSize());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\YandexLikeButtonWidget::text(string $text)}
     * method.
     * @return void
     */
    public function testTextMethod()
    {
        $widget = new Catharsis\Web\YandexLikeButtonWidget();
        $this->assertEmpty($widget->getText());
        $this->assertSame($widget, $widget->text('text'));
        $this->assertEquals('text', $widget->getText());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\YandexLikeButtonWidget::title(string $title)}
     * method.
     * @return void
     */
    public function testTitleMethod()
    {
        $widget = new Catharsis\Web\YandexLikeButtonWidget();
        $this->assertEmpty($widget->getTitle());
        $this->assertSame($widget, $widget->title('title'));
        $this->assertEquals('title', $widget->getTitle());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\YandexLikeButtonWidget::url(string $url)}
     * method.
     * @return void
     */
    public function testUrlMethod()
    {
        $widget = new Catharsis\Web\YandexLikeButtonWidget();
        $this->assertEmpty($widget->getUrl());
        $this->assertSame($widget, $widget->url('url'));
        $this->assertEquals('url', $widget->getUrl());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\YandexLikeButtonWidget::__toString()}
     * method.
     * @return void
     */
    public function testToStringMethod()
    {
        $widget = new Catharsis\Web\YandexLikeButtonWidget();
        $this->assertContains(
            '<a name="ya-share" size="large" type="button"></a>',
            (string) $widget
        );

        $widget = new Catharsis\Web\YandexLikeButtonWidget();
        $this->assertContains(
            '<a name="ya-share" share_text="text" share_title="title" share_url="url" size="small" type="icon"></a>',
            (string) $widget
                ->layout('icon')
                ->size('small')
                ->text('text')
                ->url('url')
                ->title('title')
        );
    }
}

?>
