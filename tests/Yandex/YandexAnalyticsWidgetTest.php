<?php

/**
 * Tests set for class {@link Catharsis\Web\YandexAnalyticsWidget}
 */
final class YandexAnalyticsWidgetTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of class constructor(s).
     * @link Catharsis\Web\YandexAnalyticsWidget::__construct()
     */
    public function test_constructors()
    {
        $widget = new Catharsis\Web\YandexAnalyticsWidget();
        $this->assertAttributeEmpty("_account", $widget);
        $this->assertAttributeEquals(true, "_accurate", $widget);
        $this->assertAttributeEquals(true, "_clickMap", $widget);
        $this->assertAttributeEmpty("_language", $widget);
        $this->assertAttributeEmpty("_noIndex", $widget);
        $this->assertAttributeEquals(true, "_trackHash", $widget);
        $this->assertAttributeEquals(true, "_trackLinks", $widget);
        $this->assertAttributeEquals(true, "_webVisor", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\YandexAnalyticsWidget::account(string $account)} method.
     */
    public function test_account_method()
    {
        $widget = new Catharsis\Web\YandexAnalyticsWidget();
        $this->assertAttributeEmpty("_account", $widget);
        $this->assertSame($widget, $widget->account("account"));
        $this->assertAttributeEquals("account", "_account", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\YandexAnalyticsWidget::accurate(boolean $enabled)} method.
     */
    public function test_accurate_method()
    {
        $widget = new Catharsis\Web\YandexAnalyticsWidget();
        $this->assertAttributeEquals(true, "_accurate", $widget);
        $this->assertSame($widget, $widget->accurate(false));
        $this->assertAttributeEquals(false, "_accurate", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\YandexAnalyticsWidget::clickMap(boolean $enabled)} method.
     */
    public function test_clickMap_method()
    {
        $widget = new Catharsis\Web\YandexAnalyticsWidget();
        $this->assertAttributeEquals(true, "_clickMap", $widget);
        $this->assertSame($widget, $widget->clickMap(false));
        $this->assertAttributeEquals(false, "_clickMap", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\YandexAnalyticsWidget::language(string $language)} method.
     */
    public function test_language_method()
    {
        $widget = new Catharsis\Web\YandexAnalyticsWidget();
        $this->assertAttributeEmpty("_language", $widget);
        $this->assertSame($widget, $widget->language("language"));
        $this->assertAttributeEquals("language", "_language", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\YandexAnalyticsWidget::noIndex(boolean $enabled)} method.
     */
    public function test_noIndex_method()
    {
        $widget = new Catharsis\Web\YandexAnalyticsWidget();
        $this->assertAttributeEmpty("_noIndex", $widget);
        $this->assertSame($widget, $widget->noIndex());
        $this->assertAttributeEquals(true, "_noIndex", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\YandexAnalyticsWidget::trackHash(boolean $enabled)} method.
     */
    public function test_trackHash_method()
    {
        $widget = new Catharsis\Web\YandexAnalyticsWidget();
        $this->assertAttributeEquals(true, "_trackHash", $widget);
        $this->assertSame($widget, $widget->trackHash(false));
        $this->assertAttributeEquals(false, "_trackHash", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\YandexAnalyticsWidget::track_links(boolean $enabled)} method.
     */
    public function test_trackLinks_method()
    {
        $widget = new Catharsis\Web\YandexAnalyticsWidget();
        $this->assertAttributeEquals(true, "_trackLinks", $widget);
        $this->assertSame($widget, $widget->trackLinks(false));
        $this->assertAttributeEquals(false, "_trackLinks", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\YandexAnalyticsWidget::webVisor(boolean $enabled)} method.
     */
    public function test_webVisor_method()
    {
        $widget = new Catharsis\Web\YandexAnalyticsWidget();
        $this->assertAttributeEquals(true, "_webVisor", $widget);
        $this->assertSame($widget, $widget->webVisor(false));
        $this->assertAttributeEquals(false, "_webVisor", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\YandexAnalyticsWidget::__toString()} method.
     */
    public function test_toString_method()
    {
        $widget = new Catharsis\Web\YandexAnalyticsWidget();
        $this->assertEmpty((string) $widget);

        $widget = new Catharsis\Web\YandexAnalyticsWidget();
        $html = (string) $widget->account("account");
        $this->assertContains("Ya.Metrika.informer({i: this, id: account, lang: '{$widget->userLanguage()}'})", $html);
        $this->assertContains('yaCounteraccount', $html);
        $this->assertContains('"webvisor":true', $html);
        $this->assertContains('"clickmap":true', $html);
        $this->assertContains('"trackLinks":true', $html);
        $this->assertContains('"accurateTrackBounce":true', $html);
        $this->assertContains('"trackHash":true', $html);
        $this->assertNotContains('"ut":"noindex"', $html);

        $widget = new Catharsis\Web\YandexAnalyticsWidget();
        $html = (string) $widget->account("account")->language("language")->webVisor(false)->clickMap(false)->trackLinks(false)->accurate(false)->trackHash(false)->noIndex();
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
