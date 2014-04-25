<?php

/**
 * Tests set for class {@link Catharsis\Web\VkontakteCommunityWidget}
 */
final class VkontakteCommunityWidgetTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of class constructor(s).
     * @link Catharsis\Web\VkontakteCommunityWidget::__construct()
     */
    public function test_constructors()
    {
        $widget = new Catharsis\Web\VkontakteCommunityWidget();
        $this->assertAttributeEmpty("_account", $widget);
        $this->assertAttributeEmpty("_height", $widget);
        $this->assertAttributeEquals(Catharsis\Web\VkontakteCommunityMode::Participants, "_mode", $widget);
        $this->assertAttributeEmpty("_width", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\VkontakteCommunityWidget::account(string $account)} method.
     */
    public function test_account_method()
    {
        $widget = new Catharsis\Web\VkontakteCommunityWidget();
        $this->assertAttributeEmpty("_account", $widget);
        $this->assertSame($widget, $widget->account("account"));
        $this->assertAttributeEquals("account", "_account", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\VkontakteCommunityWidget::height(string $height)} method.
     */
    public function test_height_method()
    {
        $widget = new Catharsis\Web\VkontakteCommunityWidget();
        $this->assertAttributeEmpty("_height", $widget);
        $this->assertSame($widget, $widget->height("height"));
        $this->assertAttributeEquals("height", "_height", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\VkontakteCommunityWidget::mode(integer $mode)} method.
     */
    public function test_mode_method()
    {
        $widget = new Catharsis\Web\VkontakteCommunityWidget();
        $this->assertAttributeEquals(Catharsis\Web\VkontakteCommunityMode::Participants, "_mode", $widget);
        $this->assertSame($widget, $widget->mode(0));
        $this->assertAttributeEquals(0, "_mode", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\VkontakteCommunityWidget::width(string $width)} method.
     */
    public function test_width_method()
    {
        $widget = new Catharsis\Web\VkontakteCommunityWidget();
        $this->assertAttributeEmpty("_width", $widget);
        $this->assertSame($widget, $widget->width("width"));
        $this->assertAttributeEquals("width", "_width", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\VkontakteCommunityWidget::__toString()} method.
     */
    public function test_toString_method()
    {
        $widget = new Catharsis\Web\VkontakteCommunityWidget();
        $this->assertEmpty((string) $widget);

        $widget = new Catharsis\Web\VkontakteCommunityWidget();
        $html = (string) $widget->account("account");
        $this->assertContains('<div id="vk_groups"></div>', $html);
        $this->assertContains('<script type="text/javascript">', $html);
        $this->assertContains('VK.Widgets.Group("vk_groups", {"mode":0}, "account");', $html);

        $widget = new Catharsis\Web\VkontakteCommunityWidget();
        $html = (string) $widget->account("account")->account("account")->width("width")->height("height")->mode(Catharsis\Web\VkontakteCommunityMode::News);
        $this->assertContains('<div id="vk_groups"></div>', $html);
        $this->assertContains('<script type="text/javascript">', $html);
        $this->assertContains('VK.Widgets.Group("vk_groups", {"mode":2,"wide":1,"width":"width","height":"height"}, "account");', $html);
    }
}

?>
