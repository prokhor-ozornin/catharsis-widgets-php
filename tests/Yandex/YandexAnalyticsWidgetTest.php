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
    $this->assertAttributeEmpty("account", $widget);
    $this->assertAttributeEquals(true, "accurate", $widget);
    $this->assertAttributeEquals(true, "click_map", $widget);
    $this->assertAttributeEmpty("language", $widget);
    $this->assertAttributeEmpty("no_index", $widget);
    $this->assertAttributeEquals(true, "track_hash", $widget);
    $this->assertAttributeEquals(true, "track_links", $widget);
    $this->assertAttributeEquals(true, "web_visor", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\YandexAnalyticsWidget::account(string $account)} method.
   */
  public function test_account_method()
  {
    $widget = new Catharsis\Web\YandexAnalyticsWidget();
    $this->assertAttributeEmpty("account", $widget);
    $this->assertSame($widget, $widget->account("account"));
    $this->assertAttributeEquals("account", "account", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\YandexAnalyticsWidget::accurate(boolean $accurate)} method.
   */
  public function test_accurate_method()
  {
    $widget = new Catharsis\Web\YandexAnalyticsWidget();
    $this->assertAttributeEquals(true, "accurate", $widget);
    $this->assertSame($widget, $widget->accurate(false));
    $this->assertAttributeEquals(false, "accurate", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\YandexAnalyticsWidget::click_map(boolean $clickmap)} method.
   */
  public function test_click_map_method()
  {
    $widget = new Catharsis\Web\YandexAnalyticsWidget();
    $this->assertAttributeEquals(true, "click_map", $widget);
    $this->assertSame($widget, $widget->click_map(false));
    $this->assertAttributeEquals(false, "click_map", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\YandexAnalyticsWidget::language(string $language)} method.
   */
  public function test_language_method()
  {
    $widget = new Catharsis\Web\YandexAnalyticsWidget();
    $this->assertAttributeEmpty("language", $widget);
    $this->assertSame($widget, $widget->language("language"));
    $this->assertAttributeEquals("language", "language", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\YandexAnalyticsWidget::no_index(boolean $noindex)} method.
   */
  public function test_no_index_method()
  {
    $widget = new Catharsis\Web\YandexAnalyticsWidget();
    $this->assertAttributeEmpty("no_index", $widget);
    $this->assertSame($widget, $widget->no_index());
    $this->assertAttributeEquals(true, "no_index", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\YandexAnalyticsWidget::track_hash(boolean $trackhash)} method.
   */
  public function test_track_hash_method()
  {
    $widget = new Catharsis\Web\YandexAnalyticsWidget();
    $this->assertAttributeEquals(true, "track_hash", $widget);
    $this->assertSame($widget, $widget->track_hash(false));
    $this->assertAttributeEquals(false, "track_hash", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\YandexAnalyticsWidget::track_links(boolean $tracklinks)} method.
   */
  public function test_track_links_method()
  {
    $widget = new Catharsis\Web\YandexAnalyticsWidget();
    $this->assertAttributeEquals(true, "track_links", $widget);
    $this->assertSame($widget, $widget->track_links(false));
    $this->assertAttributeEquals(false, "track_links", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\YandexAnalyticsWidget::web_visor(boolean $webvisor)} method.
   */
  public function test_web_visor_method()
  {
    $widget = new Catharsis\Web\YandexAnalyticsWidget();
    $this->assertAttributeEquals(true, "web_visor", $widget);
    $this->assertSame($widget, $widget->web_visor(false));
    $this->assertAttributeEquals(false, "web_visor", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\YandexAnalyticsWidget::__toString()} method.
   */
  public function test_toString_method()
  {
    $widget = new Catharsis\Web\YandexAnalyticsWidget();
    $this->assertEmpty((string) $widget);

    $widget = new Catharsis\Web\YandexAnalyticsWidget();
    $html = (string) $widget->account("account");
    $this->assertContains("Ya.Metrika.informer({i: this, id: account, lang: '{$widget->user_language()}'})", $html);
    $this->assertContains('yaCounteraccount', $html);
    $this->assertContains('"webvisor":true', $html);
    $this->assertContains('"clickmap":true', $html);
    $this->assertContains('"trackLinks":true', $html);
    $this->assertContains('"accurateTrackBounce":true', $html);
    $this->assertContains('"trackHash":true', $html);
    $this->assertNotContains('"ut":"noindex"', $html);

    $widget = new Catharsis\Web\YandexAnalyticsWidget();
    $html = (string) $widget->account("account")->language("language")->web_visor(false)->click_map(false)->track_links(false)->accurate(false)->track_hash(false)->no_index();
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