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
 * Tests set for class {@link \Catharsis\Web\FacebookInitializationWidget}
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class FacebookInitializationWidgetTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of class constructor(s).
     * @link \Catharsis\Web\FacebookInitializationWidget::__construct()
     * @return void
     */
    public function testConstructors()
    {
        $widget = new Catharsis\Web\FacebookInitializationWidget();
        $this->assertAttributeEmpty('_appId', $widget);
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\FacebookInitializationWidget::appId(string $appId)}
     * method.
     * @return void
     */
    public function testAppIdMethod()
    {
        $widget = new Catharsis\Web\FacebookInitializationWidget();
        $this->assertAttributeEmpty('_appId', $widget);
        $this->assertSame($widget, $widget->appId('appId'));
        $this->assertAttributeEquals('appId', '_appId', $widget);
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\FacebookInitializationWidget::__toString()}
     * method.
     * @return void
     */
    public function testToStringMethod()
    {
        $widget = new Catharsis\Web\FacebookInitializationWidget();
        $this->assertEmpty((string) $widget);

        $widget = new Catharsis\Web\FacebookInitializationWidget();
        $html = (string) $widget->appId('app_id');
        $this->assertContains('<div id="fb-root"></div>', $html);
        $this->assertContains('//connect.facebook.net/en_US/all.js#xfbml=1&appId=app_id', $html);
    }
}

?>
