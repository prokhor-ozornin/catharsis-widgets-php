<?php

/**
 * Tests set for class {@link Catharsis\Web\MailRuFacesWidget}
 */
final class MailRuFacesWidgetTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of class constructor(s).
     * @link Catharsis\Web\MailRuFacesWidget::__construct()
     */
    public function test_constructors()
    {
        $widget = new Catharsis\Web\MailRuFacesWidget();
        $this->assertAttributeEmpty("_backgroundColor", $widget);
        $this->assertAttributeEmpty("_borderColor", $widget);
        $this->assertAttributeEmpty("_domain", $widget);
        $this->assertAttributeEquals(Catharsis\Web\MailRuFacesFont::Arial,
            "_font", $widget);
        $this->assertAttributeEmpty("_height", $widget);
        $this->assertAttributeEmpty("_hyperlinkColor", $widget);
        $this->assertAttributeEmpty("_textColor", $widget);
        $this->assertAttributeEquals(true, "_title", $widget);
        $this->assertAttributeEmpty("_titleColor", $widget);
        $this->assertAttributeEmpty("_titleText", $widget);
        $this->assertAttributeEmpty("_width", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\MailRuFacesWidget::backgroundColor(string $color)} method.
     */
    public function test_backgroundColor_method()
    {
        $widget = new Catharsis\Web\MailRuFacesWidget();
        $this->assertAttributeEmpty("_backgroundColor", $widget);
        $this->assertSame($widget, $widget->backgroundColor("backgroundColor"));
        $this->assertAttributeEquals("backgroundColor", "_backgroundColor",
            $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\MailRuFacesWidget::borderColor(string $color)} method.
     */
    public function test_borderColor_method()
    {
        $widget = new Catharsis\Web\MailRuFacesWidget();
        $this->assertAttributeEmpty("_borderColor", $widget);
        $this->assertSame($widget, $widget->borderColor("borderColor"));
        $this->assertAttributeEquals("borderColor", "_borderColor", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\MailRuFacesWidget::domain(string $domain)} method.
     */
    public function test_domain_method()
    {
        $widget = new Catharsis\Web\MailRuFacesWidget();
        $this->assertAttributeEmpty("_domain", $widget);
        $this->assertSame($widget, $widget->domain("domain"));
        $this->assertAttributeEquals("domain", "_domain", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\MailRuFacesWidget::font(string $font)} method.
     */
    public function test_font_method()
    {
        $widget = new Catharsis\Web\MailRuFacesWidget();
        $this->assertAttributeEquals(Catharsis\Web\MailRuFacesFont::Arial,
            "_font", $widget);
        $this->assertSame($widget, $widget->font("font"));
        $this->assertAttributeEquals("font", "_font", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\MailRuFacesWidget::height(string $height)} method.
     */
    public function test_height_method()
    {
        $widget = new Catharsis\Web\MailRuFacesWidget();
        $this->assertAttributeEmpty("_height", $widget);
        $this->assertSame($widget, $widget->height("height"));
        $this->assertAttributeEquals("height", "_height", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\MailRuFacesWidget::hyperlinkColor(string $color)} method.
     */
    public function test_hyperlinkColor_method()
    {
        $widget = new Catharsis\Web\MailRuFacesWidget();
        $this->assertAttributeEmpty("_hyperlinkColor", $widget);
        $this->assertSame($widget, $widget->hyperlinkColor("hyperlinkColor"));
        $this->assertAttributeEquals("hyperlinkColor", "_hyperlinkColor",
            $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\MailRuFacesWidget::textColor(string $color)} method.
     */
    public function test_textColor_method()
    {
        $widget = new Catharsis\Web\MailRuFacesWidget();
        $this->assertAttributeEmpty("_textColor", $widget);
        $this->assertSame($widget, $widget->textColor("textColor"));
        $this->assertAttributeEquals("textColor", "_textColor", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\MailRuFacesWidget::title(boolean $show)} method.
     */
    public function test_title_method()
    {
        $widget = new Catharsis\Web\MailRuFacesWidget();
        $this->assertAttributeEquals(true, "_title", $widget);
        $this->assertSame($widget, $widget->title(false));
        $this->assertAttributeEquals(false, "_title", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\MailRuFacesWidget::titleColor(string $color)} method.
     */
    public function test_titleColor_method()
    {
        $widget = new Catharsis\Web\MailRuFacesWidget();
        $this->assertAttributeEmpty("_titleColor", $widget);
        $this->assertSame($widget, $widget->titleColor("titleColor"));
        $this->assertAttributeEquals("titleColor", "_titleColor", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\MailRuFacesWidget::titleText(string $title)} method.
     */
    public function test_titleText_method()
    {
        $widget = new Catharsis\Web\MailRuFacesWidget();
        $this->assertAttributeEmpty("_titleText", $widget);
        $this->assertSame($widget, $widget->titleText("titleText"));
        $this->assertAttributeEquals("titleText", "_titleText", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\MailRuFacesWidget::width(string $width)} method.
     */
    public function test_width_method()
    {
        $widget = new Catharsis\Web\MailRuFacesWidget();
        $this->assertAttributeEmpty("_width", $widget);
        $this->assertSame($widget, $widget->width("width"));
        $this->assertAttributeEquals("width", "_width", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\MailRuFacesWidget::__toString()} method.
     */
    public function test_toString_method()
    {
        $widget = new Catharsis\Web\MailRuFacesWidget();
        $this->assertEmpty((string) $widget);

        $widget = new Catharsis\Web\MailRuFacesWidget();
        $this->assertEmpty((string) $widget->domain("domain")->width("width"));

        $widget = new Catharsis\Web\MailRuFacesWidget();
        $this->assertEmpty((string) $widget->domain("domain")->height("height"));

        $widget = new Catharsis\Web\MailRuFacesWidget();
        $this->assertEmpty((string) $widget->width("width")->height("height"));

        $widget = new Catharsis\Web\MailRuFacesWidget();
        $this->assertEquals('<a class="mrc__plugin_share_friends" href="http://connect.mail.ru/share_friends?domain=domain&font=Arial&width=width&height=height" rel="{&quot;domain&quot;:&quot;domain&quot;,&quot;font&quot;:&quot;Arial&quot;,&quot;width&quot;:&quot;width&quot;,&quot;height&quot;:&quot;height&quot;}">Друзья</a>',
                            (string) $widget->domain("domain")->width("width")->height("height"));

        $widget = new Catharsis\Web\MailRuFacesWidget();
        $this->assertEquals('<a class="mrc__plugin_share_friends" href="http://connect.mail.ru/share_friends?domain=domain&font=Arial&width=width&height=height&title=title&notitle=true&title-color=title_color&background=background_color&border=border_color&color=text_color&link-color=hyperlink_color" rel="{&quot;domain&quot;:&quot;domain&quot;,&quot;font&quot;:&quot;Arial&quot;,&quot;width&quot;:&quot;width&quot;,&quot;height&quot;:&quot;height&quot;,&quot;title&quot;:&quot;title&quot;,&quot;notitle&quot;:&quot;true&quot;,&quot;title-color&quot;:&quot;title_color&quot;,&quot;background&quot;:&quot;background_color&quot;,&quot;border&quot;:&quot;border_color&quot;,&quot;color&quot;:&quot;text_color&quot;,&quot;link-color&quot;:&quot;hyperlink_color&quot;}">Друзья</a>',
                            (string) $widget->domain("domain")->width("width")->height("height")->titleText("title")->title(false)->titleColor("title_color")->backgroundColor("background_color")->borderColor("border_color")->textColor("text_color")->hyperlinkColor("hyperlink_color"));
    }
}

?>
