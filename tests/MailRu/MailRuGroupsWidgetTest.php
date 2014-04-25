<?php

/**
 * Tests set for class {@link Catharsis\Web\MailRuGroupsWidget}
 */
final class MailRuGroupsWidgetTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of class constructor(s).
     * @link Catharsis\Web\MailRuGroupsWidget::__construct()
     */
    public function test_constructors()
    {
        $widget = new Catharsis\Web\MailRuGroupsWidget();
        $this->assertAttributeEmpty("_account", $widget);
        $this->assertAttributeEmpty("_backgroundColor", $widget);
        $this->assertAttributeEmpty("_buttonColor", $widget);
        $this->assertAttributeEmpty("_domain", $widget);
        $this->assertAttributeEmpty("_height", $widget);
        $this->assertAttributeEquals(true, "_subscribers", $widget);
        $this->assertAttributeEmpty("_textColor", $widget);
        $this->assertAttributeEmpty("_width", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\MailRuGroupsWidget::account(string $account)} method.
     */
    public function test_account_method()
    {
        $widget = new Catharsis\Web\MailRuGroupsWidget();
        $this->assertAttributeEmpty("_account", $widget);
        $this->assertSame($widget, $widget->account("account"));
        $this->assertAttributeEquals("account", "_account", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\MailRuGroupsWidget::backgroundColor(string $color)} method.
     */
    public function test_backgroundColor_method()
    {
        $widget = new Catharsis\Web\MailRuGroupsWidget();
        $this->assertAttributeEmpty("_backgroundColor", $widget);
        $this->assertSame($widget, $widget->backgroundColor("backgroundColor"));
        $this->assertAttributeEquals("backgroundColor", "_backgroundColor", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\MailRuGroupsWidget::buttonColor(string $color)} method.
     */
    public function test_buttonColor_method()
    {
        $widget = new Catharsis\Web\MailRuGroupsWidget();
        $this->assertAttributeEmpty("_buttonColor", $widget);
        $this->assertSame($widget, $widget->buttonColor("buttonColor"));
        $this->assertAttributeEquals("buttonColor", "_buttonColor", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\MailRuGroupsWidget::domain(string $domain)} method.
     */
    public function test_domain_method()
    {
        $widget = new Catharsis\Web\MailRuGroupsWidget();
        $this->assertAttributeEmpty("_domain", $widget);
        $this->assertSame($widget, $widget->domain("domain"));
        $this->assertAttributeEquals("domain", "_domain", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\MailRuGroupsWidget::height(string $height)} method.
     */
    public function test_height_method()
    {
        $widget = new Catharsis\Web\MailRuGroupsWidget();
        $this->assertAttributeEmpty("_height", $widget);
        $this->assertSame($widget, $widget->height("height"));
        $this->assertAttributeEquals("height", "_height", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\MailRuGroupsWidget::subscribers(boolean $show)} method.
     */
    public function test_subscribers_method()
    {
        $widget = new Catharsis\Web\MailRuGroupsWidget();
        $this->assertAttributeEquals(true, "_subscribers", $widget);
        $this->assertSame($widget, $widget->subscribers(false));
        $this->assertAttributeEquals(false, "_subscribers", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\MailRuGroupsWidget::textColor(string $color)} method.
     */
    public function test_textColor_method()
    {
        $widget = new Catharsis\Web\MailRuGroupsWidget();
        $this->assertAttributeEmpty("_textColor", $widget);
        $this->assertSame($widget, $widget->textColor("textColor"));
        $this->assertAttributeEquals("textColor", "_textColor", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\MailRuGroupsWidget::width(string $width)} method.
     */
    public function test_width_method()
    {
        $widget = new Catharsis\Web\MailRuGroupsWidget();
        $this->assertAttributeEmpty("_width", $widget);
        $this->assertSame($widget, $widget->width("width"));
        $this->assertAttributeEquals("width", "_width", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\MailRuGroupsWidget::__toString()} method.
     */
    public function test_toString_method()
    {
        $widget = new Catharsis\Web\MailRuGroupsWidget();
        $this->assertEmpty((string) $widget);

        $widget = new Catharsis\Web\MailRuGroupsWidget();
        $this->assertEmpty((string) $widget->account("account")->width("width"));

        $widget = new Catharsis\Web\MailRuGroupsWidget();
        $this->assertEmpty((string) $widget->account("account")->height("height"));

        $widget = new Catharsis\Web\MailRuGroupsWidget();
        $this->assertEmpty((string) $widget->width("width")->height("height"));

        $widget = new Catharsis\Web\MailRuGroupsWidget();
        $this->assertEquals('<a target="_blank" class="mrc__plugin_groups_widget" href="http://connect.mail.ru/groups_widget?group=account&max_sub=50&width=width&height=height&show_subscribers=true" rel="{&quot;group&quot;:&quot;account&quot;,&quot;max_sub&quot;:50,&quot;width&quot;:&quot;width&quot;,&quot;height&quot;:&quot;height&quot;,&quot;show_subscribers&quot;:&quot;true&quot;}">Группы</a>',
                            (string) $widget->account("account")->width("width")->height("height"));

        $widget = new Catharsis\Web\MailRuGroupsWidget();
        $this->assertEquals('<a target="_blank" class="mrc__plugin_groups_widget" href="http://connect.mail.ru/groups_widget?group=account&max_sub=50&width=width&height=height&background=background_color&color=text_color&button_background=button_color&domain=domain" rel="{&quot;group&quot;:&quot;account&quot;,&quot;max_sub&quot;:50,&quot;width&quot;:&quot;width&quot;,&quot;height&quot;:&quot;height&quot;,&quot;background&quot;:&quot;background_color&quot;,&quot;color&quot;:&quot;text_color&quot;,&quot;button_background&quot;:&quot;button_color&quot;,&quot;domain&quot;:&quot;domain&quot;}">Группы</a>',
                           (string) $widget->account("account")->width("width")->height("height")->subscribers(false)->backgroundColor("background_color")->textColor("text_color")->buttonColor("button_color")->domain("domain"));
    }
}

?>
