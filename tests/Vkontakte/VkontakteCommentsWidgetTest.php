<?php

/**
 * Tests set for class {@link Catharsis\Web\VkontakteCommentsWidget}
 */
final class VkontakteCommentsWidgetTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of class constructor(s).
     * @link Catharsis\Web\VkontakteCommentsWidget::__construct()
     */
    public function test_constructors()
    {
        $widget = new Catharsis\Web\VkontakteCommentsWidget();
        $this->assertAttributeEmpty("_attach", $widget);
        $this->assertAttributeEquals(Catharsis\Web\VkontakteCommentsLimit::Limit5, "_limit", $widget);
        $this->assertAttributeEmpty("_width", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\VkontakteCommentsWidget::attach(array $types)} method.
     */
    public function test_attach_method()
    {
        $widget = new Catharsis\Web\VkontakteCommentsWidget();
        $this->assertAttributeEmpty("_attach", $widget);
        $this->assertSame($widget, $widget->attach(array("attach")));
        $this->assertAttributeEquals(array("attach"), "_attach", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\VkontakteCommentsWidget::limit(integer $limit)} method.
     */
    public function test_limit_method()
    {
        $widget = new Catharsis\Web\VkontakteCommentsWidget();
        $this->assertAttributeEquals(Catharsis\Web\VkontakteCommentsLimit::Limit5, "_limit", $widget);
        $this->assertSame($widget, $widget->limit(0));
        $this->assertAttributeEquals(0, "_limit", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\VkontakteCommentsWidget::width(string $width)} method.
     */
    public function test_width_method()
    {
        $widget = new Catharsis\Web\VkontakteCommentsWidget();
        $this->assertAttributeEmpty("_width", $widget);
        $this->assertSame($widget, $widget->width("width"));
        $this->assertAttributeEquals("width", "_width", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\VkontakteCommentsWidget::__toString()} method.
     */
    public function test_toString_method()
    {
        $widget = new Catharsis\Web\VkontakteCommentsWidget();
        $html = (string) $widget;
        $this->assertContains('<div id="vk_comments"></div>', $html);
        $this->assertContains('<script type="text/javascript">', $html);
        $this->assertContains('VK.Widgets.Comments("vk_comments", {"limit":5,"attach":false});', $html);

        $widget = new Catharsis\Web\VkontakteCommentsWidget();
        $html = (string) $widget->limit(10)->attach(Catharsis\Web\VkontakteCommentsAttach::All)->width("width");
        $this->assertContains('<div id="vk_comments"></div>', $html);
        $this->assertContains('<script type="text/javascript">', $html);
        $this->assertContains('VK.Widgets.Comments("vk_comments", {"limit":10,"attach":"*","width":"width"});', $html);
    }
}

?>
