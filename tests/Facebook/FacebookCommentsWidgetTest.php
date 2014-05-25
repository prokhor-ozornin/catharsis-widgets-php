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
 * Tests set for class {@link \Catharsis\Web\FacebookCommentsWidget}
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class FacebookCommentsWidgetTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of class constructor(s).
     * @link \Catharsis\Web\FacebookCommentsWidget::__construct()
     * @return void
    */
    public function testConstructors()
    {
        $widget = new Catharsis\Web\FacebookCommentsWidget();
        $this->assertEmpty($widget->getColorScheme());
        $this->assertEmpty($widget->getMobile());
        $this->assertEmpty($widget->getOrder());
        $this->assertEmpty($widget->getPosts());
        $this->assertEmpty($widget->getUrl());
        $this->assertEmpty($widget->getWidth());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\FacebookCommentsWidget::colorScheme(string $colorScheme)}
     * method.
     * @return void
     */
    public function testColorSchemeMethod()
    {
        $widget = new Catharsis\Web\FacebookCommentsWidget();
        $this->assertEmpty($widget->getColorScheme());
        $this->assertSame($widget, $widget->colorScheme('colorScheme'));
        $this->assertEquals('colorScheme', $widget->getColorScheme());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\FacebookCommentsWidget::mobile(boolean $mobile)}
     * method.
     * @return void
     */
    public function testMobileMethod()
    {
        $widget = new Catharsis\Web\FacebookCommentsWidget();
        $this->assertEmpty($widget->getMobile());
        $this->assertSame($widget, $widget->mobile(true));
        $this->assertTrue($widget->getMobile());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\FacebookCommentsWidget::order(string $order)}
     * method.
     * @return void
     */
    public function testOrderMethod()
    {
        $widget = new Catharsis\Web\FacebookCommentsWidget();
        $this->assertEmpty($widget->getOrder());
        $this->assertSame($widget, $widget->order('order'));
        $this->assertEquals('order', $widget->getOrder());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\FacebookCommentsWidget::posts(integer $posts)}
     * method.
     * @return void
     */
    public function testPostsMethod()
    {
        $widget = new Catharsis\Web\FacebookCommentsWidget();
        $this->assertEmpty($widget->getPosts());
        $this->assertSame($widget, $widget->posts(1));
        $this->assertEquals(1, $widget->getPosts());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\FacebookCommentsWidget::url(string $url)}
     * method.
     * @return void
     */
    public function testUrlMethod()
    {
        $widget = new Catharsis\Web\FacebookCommentsWidget();
        $this->assertEmpty($widget->getUrl());
        $this->assertSame($widget, $widget->url('url'));
        $this->assertEquals('url', $widget->getUrl());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\FacebookCommentsWidget::width(string $width)}
     * method.
     * @return void
     */
    public function testWidthMethod()
    {
        $widget = new Catharsis\Web\FacebookCommentsWidget();
        $this->assertEmpty($widget->getWidth());
        $this->assertSame($widget, $widget->width('width'));
        $this->assertEquals('width', $widget->getWidth());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\FacebookCommentsWidget::__toString()}
     * method.
     * @return void
     */
    public function testToStringMethod()
    {
        $widget = new Catharsis\Web\FacebookCommentsWidget();
        $this->assertEquals('<div class="fb-comments"></div>', (string) $widget);

        $widget = new Catharsis\Web\FacebookCommentsWidget();
        $this->assertEquals(
            '<div class="fb-comments" data-colorscheme="dark" data-href="url" data-mobile="true"'
            .' data-num-posts="1" data-order-by="reverse_time" data-width="width"></div>',
            (string) $widget
                ->url('url')
                ->posts(1)
                ->width('width')
                ->colorScheme(Catharsis\Web\FacebookColorScheme::DARK)
                ->mobile(true)
                ->order(Catharsis\Web\FacebookCommentsOrder::REVERSE_TIME)
        );
    }
}

?>
