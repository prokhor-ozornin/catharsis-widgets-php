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
 * Tests set for class {@link \Catharsis\Web\YandexAnalyticsWidget}
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class YandexAnalyticsWidgetTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of class constructor(s).
     * @link \Catharsis\Web\YandexAnalyticsWidget::__construct()
     * @return void
     */
    public function testConstructors()
    {
        $widget = new Catharsis\Web\YandexAnalyticsWidget();
        $this->assertEmpty($widget->getAccount());
        $this->assertTrue($widget->getAccurate());
        $this->assertTrue($widget->getClickMap());
        $this->assertEmpty($widget->getLanguage());
        $this->assertEmpty($widget->getNoIndex());
        $this->assertTrue($widget->getTrackHash());
        $this->assertTrue($widget->getTrackLinks());
        $this->assertTrue($widget->getWebVisor());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\YandexAnalyticsWidget::account(string $account)}
     * method.
     * @return void
     */
    public function testAccountMethod()
    {
        $widget = new Catharsis\Web\YandexAnalyticsWidget();
        $this->assertEmpty($widget->getAccount());
        $this->assertSame($widget, $widget->account('account'));
        $this->assertEquals('account', $widget->getAccount());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\YandexAnalyticsWidget::accurate(boolean $enabled)}
     * method.
     * @return void
     */
    public function testAccurateMethod()
    {
        $widget = new Catharsis\Web\YandexAnalyticsWidget();
        $this->assertTrue($widget->getAccurate());
        $this->assertSame($widget, $widget->accurate(false));
        $this->assertFalse($widget->getAccurate());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\YandexAnalyticsWidget::clickMap(boolean $enabled)}
     * method.
     * @return void
     */
    public function testClickMapMethod()
    {
        $widget = new Catharsis\Web\YandexAnalyticsWidget();
        $this->assertTrue($widget->getClickMap());
        $this->assertSame($widget, $widget->clickMap(false));
        $this->assertFalse($widget->getClickMap());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\YandexAnalyticsWidget::language(string $language)}
     * method.
     * @return void
     */
    public function testLanguageMethod()
    {
        $widget = new Catharsis\Web\YandexAnalyticsWidget();
        $this->assertEmpty($widget->getLanguage());
        $this->assertSame($widget, $widget->language('language'));
        $this->assertEquals('language', $widget->getLanguage());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\YandexAnalyticsWidget::noIndex(boolean $enabled)}
     * method.
     * @return void
     */
    public function testNoIndexMethod()
    {
        $widget = new Catharsis\Web\YandexAnalyticsWidget();
        $this->assertEmpty($widget->getNoIndex());
        $this->assertSame($widget, $widget->noIndex(true));
        $this->assertTrue($widget->getNoIndex());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\YandexAnalyticsWidget::trackHash(boolean $enabled)}
     * method.
     * @return void
     */
    public function testTrackHashMethod()
    {
        $widget = new Catharsis\Web\YandexAnalyticsWidget();
        $this->assertTrue($widget->getTrackHash());
        $this->assertSame($widget, $widget->trackHash(false));
        $this->assertFalse($widget->getTrackHash());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\YandexAnalyticsWidget::track_links(boolean $enabled)}
     * method.
     * @return void
     */
    public function testTrackLinksMethod()
    {
        $widget = new Catharsis\Web\YandexAnalyticsWidget();
        $this->assertTrue($widget->getTrackLinks());
        $this->assertSame($widget, $widget->trackLinks(false));
        $this->assertFalse($widget->getTrackLinks());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\YandexAnalyticsWidget::webVisor(boolean $enabled)}
     * method.
     * @return void
     */
    public function testWebVisorMethod()
    {
        $widget = new Catharsis\Web\YandexAnalyticsWidget();
        $this->assertTrue($widget->getWebVisor());
        $this->assertSame($widget, $widget->webVisor(false));
        $this->assertFalse($widget->getWebVisor());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\YandexAnalyticsWidget::__toString()}
     * method.
     * @return void
     */
    public function testToStringMethod()
    {
        $widget = new Catharsis\Web\YandexAnalyticsWidget();
        $this->assertEmpty((string) $widget);

        $widget = new Catharsis\Web\YandexAnalyticsWidget();
        $html = (string) $widget->account('account');
        $this->assertContains("Ya.Metrika.informer({i: this, id: account, lang: '{$widget->userLanguage()}'})", $html);
        $this->assertContains('yaCounteraccount', $html);
        $this->assertContains('"webvisor":true', $html);
        $this->assertContains('"clickmap":true', $html);
        $this->assertContains('"trackLinks":true', $html);
        $this->assertContains('"accurateTrackBounce":true', $html);
        $this->assertContains('"trackHash":true', $html);
        $this->assertNotContains('"ut":"noindex"', $html);

        $widget = new Catharsis\Web\YandexAnalyticsWidget();
        $html = (string) $widget
            ->account('account')
            ->language('language')
            ->webVisor(false)
            ->clickMap(false)
            ->trackLinks(false)
            ->accurate(false)
            ->trackHash(false)
            ->noIndex(true);
        $this->assertContains("Ya.Metrika.informer({i: this, id: account, lang: 'language'})", $html);
        $this->assertContains('yaCounteraccount', $html);
        $this->assertContains('"webvisor":false', $html);
        $this->assertContains('"clickmap":false', $html);
        $this->assertContains('"trackLinks":false', $html);
        $this->assertContains('"accurateTrackBounce":false', $html);
        $this->assertContains('"trackHash":false', $html);
        $this->assertContains('"ut":"noindex"', $html);
    }
}

?>
