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
 * Tests set for class {@link \Catharsis\Web\GoogleAnalyticsWidget}
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class GoogleAnalyticsWidgetTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of class constructor(s).
     * @link \Catharsis\Web\GoogleAnalyticsWidget::__construct()
     * @return void
     */
    public function testConstructors()
    {
        $widget = new Catharsis\Web\GoogleAnalyticsWidget();
        $this->assertEmpty($widget->getAccount());
        $this->assertEmpty($widget->getDomain());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\GoogleAnalyticsWidget::account(string $account)}
     * method.
     * @return void
     */
    public function testAccountMethod()
    {
        $widget = new Catharsis\Web\GoogleAnalyticsWidget();
        $this->assertEmpty($widget->getAccount());
        $this->assertSame($widget, $widget->account('account'));
        $this->assertEquals('account', $widget->getAccount());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\GoogleAnalyticsWidget::domain(string $domain)}
     * method.
     * @return void
     */
    public function testDomainMethod()
    {
        $widget = new Catharsis\Web\GoogleAnalyticsWidget();
        $this->assertEmpty($widget->getDomain());
        $this->assertSame($widget, $widget->domain('domain'));
        $this->assertEquals('domain', $widget->getDomain());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\GoogleAnalyticsWidget::__toString()}
     * method.
     * @return void
     */
    public function testToStringMethod()
    {
        $widget = new Catharsis\Web\GoogleAnalyticsWidget();
        $this->assertEmpty((string) $widget);

        $widget = new Catharsis\Web\GoogleAnalyticsWidget();
        $this->assertEmpty((string) $widget->account('account'));

        $widget = new Catharsis\Web\GoogleAnalyticsWidget();
        $this->assertEmpty((string) $widget->domain('domain'));

        $widget = new Catharsis\Web\GoogleAnalyticsWidget();
        $html = (string) $widget->account('account')->domain('domain');
        $this->assertContains('//www.google-analytics.com/analytics.js', $html);
        $this->assertContains('ga("create", "account", "domain");', $html);
    }
}

?>
