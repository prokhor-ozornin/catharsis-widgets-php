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
 * Tests set for class {@link \Catharsis\Web\HtmlWidget}
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class HtmlWidgetTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of
     * {@link HtmlWidget::render()}
     * method.
     * @return void
     */
    public function testRenderMethod()
    {
        $widget = new MockHtmlWidget();
        $this->assertEquals('html', $widget->html('html')->render());
    }
}

/**
 * Mock HTML Widget implementation for testing purposes.
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class MockHtmlWidget extends HtmlWidget
{
    private $_html;

    /**
     * Sets HTML contents of widget.
     * @param string $html
     * @return \MockHtmlWidget
     */
    public function html($html)
    {
        $this->_html = (string) $html;
        return $this;
    }

    /**
     * Returns HTML markup text of widget.
     * @return string Widget's HTML markup.
     */
    public function __toString()
    {
        return $this->_html;
    }
}