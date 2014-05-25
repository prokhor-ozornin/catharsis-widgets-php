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
 * Tests set for class {@link \Catharsis\Web\FacebookPostWidget}
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class FacebookPostWidgetTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of class constructor(s).
     * @link \Catharsis\Web\FacebookPostWidget::__construct()
     * @return void
     */
    public function testConstructors()
    {
        $widget = new Catharsis\Web\FacebookPostWidget();
        $this->assertEmpty($widget->getUrl());
        $this->assertEmpty($widget->getWidth());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\FacebookPostWidget::url(string $url)}
     * method.
     * @return void
     */
    public function testUrlMethod()
    {
        $widget = new Catharsis\Web\FacebookPostWidget();
        $this->assertEmpty($widget->getUrl());
        $this->assertSame($widget, $widget->url('url'));
        $this->assertEquals('url', $widget->getUrl());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\FacebookPostWidget::width(string $width)}
     * method.
     * @return void
     */
    public function testWidthMethod()
    {
        $widget = new Catharsis\Web\FacebookPostWidget();
        $this->assertEmpty($widget->getWidth());
        $this->assertSame($widget, $widget->width('width'));
        $this->assertEquals('width', $widget->getWidth());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\FacebookPostWidget::__toString()}
     * method.
     * @return void
     */
    public function testToStringMethod()
    {
        $widget = new Catharsis\Web\FacebookPostWidget();
        $this->assertEmpty((string) $widget);

        $widget = new Catharsis\Web\FacebookPostWidget();
        $this->assertEquals(
            '<div class="fb-post" data-href="url" data-width="width"></div>',
            (string) $widget->url('url')->width('width')
        );
    }
}

?>
