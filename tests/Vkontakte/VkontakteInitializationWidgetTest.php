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
 * Tests set for class {@link \Catharsis\Web\VkontakteInitializationWidget}
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class VkontakteInitializationWidgetTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of class constructor(s).
     * @link \Catharsis\Web\VkontakteInitializationWidget::__construct()
     * @return void
     */
    public function testConstructors()
    {
        $widget = new Catharsis\Web\VkontakteInitializationWidget();
        $this->assertEmpty($widget->getApiId());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\VkontakteInitializationWidget::apiId(string $apiId)}
     * method.
     * @return void
     */
    public function testApiIdMethod()
    {
        $widget = new Catharsis\Web\VkontakteInitializationWidget();
        $this->assertEmpty($widget->getApiId());
        $this->assertSame($widget, $widget->apiId('apiId'));
        $this->assertEquals('apiId', $widget->getApiId());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\VkontakteInitializationWidget::__toString()}
     * method.
     * @return void
     */
    public function testToStringMethod()
    {
        $widget = new Catharsis\Web\VkontakteInitializationWidget();
        $this->assertEmpty((string) $widget);

        $widget = new Catharsis\Web\VkontakteInitializationWidget();
        $html = (string) $widget->apiId('id');
        $this->assertContains('<script type="text/javascript">', $html);
        $this->assertContains('VK.init({apiId:id, onlyWidgets:true});', $html);
    }
}

?>
