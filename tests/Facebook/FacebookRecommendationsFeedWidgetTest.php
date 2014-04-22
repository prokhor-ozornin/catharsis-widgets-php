<?php

/**
 * Tests set for class {@link Catharsis\Web\FacebookRecommendationsFeedWidget}
 */
final class FacebookRecommendationsFeedWidgetTest extends PHPUnit_Framework_TestCase
{
  /**
   * Performs testing of class constructor(s).
   * @link Catharsis\Web\FacebookRecommendationsFeedWidget::__construct()
   */
  public function test_constructors()
  {
    $widget = new Catharsis\Web\FacebookRecommendationsFeedWidget();
    $this->assertAttributeEmpty("actions", $widget);
    $this->assertAttributeEmpty("app_id", $widget);
    $this->assertAttributeEmpty("color_scheme", $widget);
    $this->assertAttributeEmpty("domain", $widget);
    $this->assertAttributeEmpty("header", $widget);
    $this->assertAttributeEmpty("height", $widget);
    $this->assertAttributeEmpty("link_target", $widget);
    $this->assertAttributeEmpty("max_age", $widget);
    $this->assertAttributeEmpty("track_label", $widget);
    $this->assertAttributeEmpty("width", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\FacebookRecommendationsFeedWidget::actions(array $actions)} method.
   */
  public function test_actions_method()
  {
    $widget = new Catharsis\Web\FacebookRecommendationsFeedWidget();
    $this->assertAttributeEmpty("actions", $widget);
    $this->assertSame($widget, $widget->actions(array("action")));
    $this->assertAttributeEquals(array("action"), "actions", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\FacebookRecommendationsFeedWidget::app_id(string $app_id)} method.
   */
  public function test_app_id_method()
  {
    $widget = new Catharsis\Web\FacebookRecommendationsFeedWidget();
    $this->assertAttributeEmpty("app_id", $widget);
    $this->assertSame($widget, $widget->app_id("app_id"));
    $this->assertAttributeEquals("app_id", "app_id", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\FacebookRecommendationsFeedWidget::color_scheme(string $color_scheme)} method.
   */
  public function test_color_scheme_method()
  {
    $widget = new Catharsis\Web\FacebookRecommendationsFeedWidget();
    $this->assertAttributeEmpty("color_scheme", $widget);
    $this->assertSame($widget, $widget->color_scheme("color_scheme"));
    $this->assertAttributeEquals("color_scheme", "color_scheme", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\FacebookRecommendationsFeedWidget::domain(string $domain)} method.
   */
  public function test_domain_method()
  {
    $widget = new Catharsis\Web\FacebookRecommendationsFeedWidget();
    $this->assertAttributeEmpty("domain", $widget);
    $this->assertSame($widget, $widget->domain("domain"));
    $this->assertAttributeEquals("domain", "domain", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\FacebookRecommendationsFeedWidget::header(boolean $header)} method.
   */
  public function test_header_method()
  {
    $widget = new Catharsis\Web\FacebookRecommendationsFeedWidget();
    $this->assertAttributeEmpty("header", $widget);
    $this->assertSame($widget, $widget->header());
    $this->assertAttributeEquals(true, "header", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\FacebookRecommendationsFeedWidget::height(string $height)} method.
   */
  public function test_height_method()
  {
    $widget = new Catharsis\Web\FacebookRecommendationsFeedWidget();
    $this->assertAttributeEmpty("height", $widget);
    $this->assertSame($widget, $widget->height("height"));
    $this->assertAttributeEquals("height", "height", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\FacebookRecommendationsFeedWidget::link_target(string $link_target)} method.
   */
  public function test_link_target_method()
  {
    $widget = new Catharsis\Web\FacebookRecommendationsFeedWidget();
    $this->assertAttributeEmpty("link_target", $widget);
    $this->assertSame($widget, $widget->link_target("link_target"));
    $this->assertAttributeEquals("link_target", "link_target", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\FacebookRecommendationsFeedWidget::max_age(integer $max_age)} method.
   */
  public function test_max_age_method()
  {
    $widget = new Catharsis\Web\FacebookRecommendationsFeedWidget();
    $this->assertAttributeEmpty("max_age", $widget);
    $this->assertSame($widget, $widget->max_age(1));
    $this->assertAttributeEquals(1, "max_age", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\FacebookRecommendationsFeedWidget::track_label(string $track_label)} method.
   */
  public function test_track_label_method()
  {
    $widget = new Catharsis\Web\FacebookRecommendationsFeedWidget();
    $this->assertAttributeEmpty("track_label", $widget);
    $this->assertSame($widget, $widget->track_label("track_label"));
    $this->assertAttributeEquals("track_label", "track_label", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\FacebookRecommendationsFeedWidget::width(string $width)} method.
   */
  public function test_width_method()
  {
    $widget = new Catharsis\Web\FacebookRecommendationsFeedWidget();
    $this->assertAttributeEmpty("width", $widget);
    $this->assertSame($widget, $widget->width("width"));
    $this->assertAttributeEquals("width", "width", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\FacebookRecommendationsFeedWidget::__toString()} method.
   */
  public function test_toString_method()
  {
    $widget = new Catharsis\Web\FacebookRecommendationsFeedWidget();
    $this->assertEquals('<div class="fb-recommendations"></div>', (string) $widget);

    $widget = new Catharsis\Web\FacebookRecommendationsFeedWidget();
    $this->assertEquals('<div class="fb-recommendations" data-action="actions" data-app-id="app_id" data-colorscheme="dark" data-header="true" data-height="height" data-linktarget="link_target" data-max-age="1" data-ref="track_label" data-site="domain" data-width="width"></div>', (string) $widget->domain("domain")->app_id("app_id")->actions("actions")->width("width")->height("height")->color_scheme(Catharsis\Web\FacebookColorScheme::Dark)->header()->link_target("link_target")->max_age(1)->track_label("track_label"));
  }
}