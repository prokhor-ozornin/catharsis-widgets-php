<?php

/**
 * Tests set for class {@link Catharsis\Web\VkontakteInitializationWidget}
 */
final class VkontakteInitializationWidgetTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of class constructor(s).
     * @link Catharsis\Web\VkontakteInitializationWidget::__construct()
     */
    public function test_constructors()
    {
        $widget = new Catharsis\Web\VkontakteInitializationWidget();
        $this->assertAttributeEmpty("_apiId", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\VkontakteInitializationWidget::apiId(string $apiId)} method.
     */
    public function test_apiId_method()
    {
        $widget = new Catharsis\Web\VkontakteInitializationWidget();
        $this->assertAttributeEmpty("_apiId", $widget);
        $this->assertSame($widget, $widget->apiId("apiId"));
        $this->assertAttributeEquals("apiId", "_apiId", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\VkontakteInitializationWidget::__toString()} method.
     */
    public function test_toString_method()
    {
        $widget = new Catharsis\Web\VkontakteInitializationWidget();
        $this->assertEmpty((string) $widget);

        $widget = new Catharsis\Web\VkontakteInitializationWidget();
        $html = (string) $widget->apiId("id");
        $this->assertContains('<script type="text/javascript">', $html);
        $this->assertContains('VK.init({apiId:id, onlyWidgets:true});', $html);
    }
}

?>
