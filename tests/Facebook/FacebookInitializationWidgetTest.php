<?php

/**
 * Tests set for class {@link Catharsis\Web\FacebookInitializationWidget}
 */
final class FacebookInitializationWidgetTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of class constructor(s).
     * @link Catharsis\Web\FacebookInitializationWidget::__construct()
     */
    public function test_constructors()
    {
        $widget = new Catharsis\Web\FacebookInitializationWidget();
        $this->assertAttributeEmpty("_appId", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\FacebookInitializationWidget::appId(string $appId)} method.
     */
    public function test_appId_method()
    {
        $widget = new Catharsis\Web\FacebookInitializationWidget();
        $this->assertAttributeEmpty("_appId", $widget);
        $this->assertSame($widget, $widget->appId("appId"));
        $this->assertAttributeEquals("appId", "_appId", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\FacebookInitializationWidget::__toString()} method.
     */
    public function test_toString_method()
    {
        $widget = new Catharsis\Web\FacebookInitializationWidget();
        $this->assertEmpty((string) $widget);

        $widget = new Catharsis\Web\FacebookInitializationWidget();
        $html = (string) $widget->appId("app_id");
        $this->assertContains('<div id="fb-root"></div>', $html);
        $this->assertContains('//connect.facebook.net/en_US/all.js#xfbml=1&appId=app_id', $html);
    }
}

?>
