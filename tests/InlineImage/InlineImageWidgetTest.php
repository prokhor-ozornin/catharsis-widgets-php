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
 * Tests set for class {@link \Catharsis\Web\InlineImageWidget}
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class InlineImageWidgetTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of class constructor(s).
     * @link \Catharsis\Web\InlineImageWidget::__construct()
     * @return void
     */
    public function testConstructors()
    {
        $widget = new Catharsis\Web\InlineImageWidget();
        $this->assertEmpty($widget->getContents());
        $this->assertEmpty($widget->getFormat());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\InlineImageWidget::contents(string $contents)}
     * method.
     * @return void
     */
    public function testContentsMethod()
    {
        $widget = new Catharsis\Web\InlineImageWidget();
        $this->assertEmpty($widget->getContents());
        $this->assertSame($widget, $widget->contents('contents'));
        $this->assertEquals('contents', $widget->getContents());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\InlineImageWidget::format(string $format)}
     * method.
     * @return void
     */
    public function testFormatMethod()
    {
        $widget = new Catharsis\Web\InlineImageWidget();
        $this->assertEmpty($widget->getFormat());
        $this->assertSame($widget, $widget->format('format'));
        $this->assertEquals('format', $widget->getFormat());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\InlineImageWidget::__toString()}
     * method.
     * @return void
     */
    public function testToStringMethod()
    {
        $widget = new Catharsis\Web\InlineImageWidget();
        $this->assertEmpty((string) $widget);

        $image_data = 'data';
        $base64_image_data = base64_encode($image_data);

        $widget = new Catharsis\Web\InlineImageWidget();
        $this->assertEquals(
            "<img src=\"data:image;base64,{$base64_image_data}\"></img>",
            (string) $widget->contents($image_data)
        );

        $widget = new Catharsis\Web\InlineImageWidget();
        $this->assertEquals(
            "<img src=\"data:jpg;base64,{$base64_image_data}\"></img>",
            (string) $widget->contents($image_data)->format('jpg')
        );
    }
}

?>
