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
        $this->assertAttributeEmpty("_actions", $widget);
        $this->assertAttributeEmpty("_appId", $widget);
        $this->assertAttributeEmpty("_colorScheme", $widget);
        $this->assertAttributeEmpty("_domain", $widget);
        $this->assertAttributeEmpty("_header", $widget);
        $this->assertAttributeEmpty("_height", $widget);
        $this->assertAttributeEmpty("_linkTarget", $widget);
        $this->assertAttributeEmpty("_maxAge", $widget);
        $this->assertAttributeEmpty("_trackLabel", $widget);
        $this->assertAttributeEmpty("_width", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\FacebookRecommendationsFeedWidget::actions(array $actions)} method.
     */
    public function test_actions_method()
    {
        $widget = new Catharsis\Web\FacebookRecommendationsFeedWidget();
        $this->assertAttributeEmpty("_actions", $widget);
        $this->assertSame($widget, $widget->actions(array("action")));
        $this->assertAttributeEquals(array("action"), "_actions", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\FacebookRecommendationsFeedWidget::appId(string $appId)} method.
     */
    public function test_appId_method()
    {
        $widget = new Catharsis\Web\FacebookRecommendationsFeedWidget();
        $this->assertAttributeEmpty("_appId", $widget);
        $this->assertSame($widget, $widget->appId("appId"));
        $this->assertAttributeEquals("appId", "_appId", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\FacebookRecommendationsFeedWidget::colorScheme(string $colorScheme)} method.
     */
    public function test_colorScheme_method()
    {
        $widget = new Catharsis\Web\FacebookRecommendationsFeedWidget();
        $this->assertAttributeEmpty("_colorScheme", $widget);
        $this->assertSame($widget, $widget->colorScheme("colorScheme"));
        $this->assertAttributeEquals("colorScheme", "_colorScheme", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\FacebookRecommendationsFeedWidget::domain(string $domain)} method.
     */
    public function test_domain_method()
    {
        $widget = new Catharsis\Web\FacebookRecommendationsFeedWidget();
        $this->assertAttributeEmpty("_domain", $widget);
        $this->assertSame($widget, $widget->domain("domain"));
        $this->assertAttributeEquals("domain", "_domain", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\FacebookRecommendationsFeedWidget::header(boolean $header)} method.
     */
    public function test_header_method()
    {
        $widget = new Catharsis\Web\FacebookRecommendationsFeedWidget();
        $this->assertAttributeEmpty("_header", $widget);
        $this->assertSame($widget, $widget->header());
        $this->assertAttributeEquals(true, "_header", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\FacebookRecommendationsFeedWidget::height(string $height)} method.
     */
    public function test_height_method()
    {
        $widget = new Catharsis\Web\FacebookRecommendationsFeedWidget();
        $this->assertAttributeEmpty("_height", $widget);
        $this->assertSame($widget, $widget->height("height"));
        $this->assertAttributeEquals("height", "_height", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\FacebookRecommendationsFeedWidget::linkTarget(string $target)} method.
     */
    public function test_linkTarget_method()
    {
        $widget = new Catharsis\Web\FacebookRecommendationsFeedWidget();
        $this->assertAttributeEmpty("_linkTarget", $widget);
        $this->assertSame($widget, $widget->linkTarget("linkTarget"));
        $this->assertAttributeEquals("linkTarget", "_linkTarget", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\FacebookRecommendationsFeedWidget::maxAge(integer $maxAge)} method.
     */
    public function test_maxAge_method()
    {
        $widget = new Catharsis\Web\FacebookRecommendationsFeedWidget();
        $this->assertAttributeEmpty("_maxAge", $widget);
        $this->assertSame($widget, $widget->maxAge(1));
        $this->assertAttributeEquals(1, "_maxAge", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\FacebookRecommendationsFeedWidget::trackLabel(string $label)} method.
     */
    public function test_trackLabel_method()
    {
        $widget = new Catharsis\Web\FacebookRecommendationsFeedWidget();
        $this->assertAttributeEmpty("_trackLabel", $widget);
        $this->assertSame($widget, $widget->trackLabel("trackLabel"));
        $this->assertAttributeEquals("trackLabel", "_trackLabel", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\FacebookRecommendationsFeedWidget::width(string $width)} method.
     */
    public function test_width_method()
    {
        $widget = new Catharsis\Web\FacebookRecommendationsFeedWidget();
        $this->assertAttributeEmpty("_width", $widget);
        $this->assertSame($widget, $widget->width("width"));
        $this->assertAttributeEquals("width", "_width", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\FacebookRecommendationsFeedWidget::__toString()} method.
     */
    public function test_toString_method()
    {
        $widget = new Catharsis\Web\FacebookRecommendationsFeedWidget();
        $this->assertEquals('<div class="fb-recommendations"></div>',
                            (string) $widget);

        $widget = new Catharsis\Web\FacebookRecommendationsFeedWidget();
        $this->assertEquals('<div class="fb-recommendations" data-action="actions" data-app-id="app_id" data-colorscheme="dark" data-header="true" data-height="height" data-linktarget="link_target" data-max-age="1" data-ref="track_label" data-site="domain" data-width="width"></div>',
                            (string) $widget->domain("domain")->appId("app_id")->actions("actions")->width("width")->height("height")->colorScheme(Catharsis\Web\FacebookColorScheme::Dark)->header()->linkTarget("link_target")->maxAge(1)->trackLabel("track_label"));
    }
}

?>
