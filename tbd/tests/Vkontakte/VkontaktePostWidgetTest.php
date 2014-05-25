<?php

/**
 * Tests set for class {@link \Catharsis\Web\VkontaktePostWidget}
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class VkontaktePostWidgetTest extends PHPUnit_Framework_TestCase
{
    /**
* Performs testing of class constructor(s).
     * @link \Catharsis\Web\VkontaktePostWidget::__construct()
     */
    public function testConstructors()
    {
        $widget = new Catharsis\Web\VkontaktePostWidget();
        $this->assertAttributeEmpty("_url", $widget);
        $this->assertAttributeEmpty("_width", $widget);
    }

    /**
*     * Performs testing of {@link \Catharsis\Web\VkontaktePostWidget::url(string $url)} method.
     */
    public function test_url_method()
    {
        $widget = new Catharsis\Web\VkontaktePostWidget();
        $this->assertAttributeEmpty("_url", $widget);
        $this->assertSame($widget, $widget->url("url"));
        $this->assertAttributeEquals("url", "_url", $widget);
    }

    /**
*     * Performs testing of {@link \Catharsis\Web\VkontaktePostWidget::width(string $width)} method.
     */
    public function test_width_method()
    {
        $widget = new Catharsis\Web\VkontaktePostWidget();
        $this->assertAttributeEmpty("_width", $widget);
        $this->assertSame($widget, $widget->width("width"));
        $this->assertAttributeEquals("width", "_width", $widget);
    }

    /**
*     * Performs testing of {@link \Catharsis\Web\VkontaktePostWidget::__toString()} method.
     */
    public function testToStringMethod()
    {
        $widget = new Catharsis\Web\VkontaktePostWidget();
    }
}

?>
