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
    $this->assertAttributeEmpty("background_color", $widget);
    $this->assertAttributeEmpty("border_color", $widget);
    $this->assertAttributeEmpty("domain", $widget);
    $this->assertAttributeEquals(Catharsis\Web\MailRuFacesFont::Arial, "font", $widget);
    $this->assertAttributeEmpty("height", $widget);
    $this->assertAttributeEmpty("hyperlink_color", $widget);
    $this->assertAttributeEquals(true, "show_title", $widget);
    $this->assertAttributeEmpty("text_color", $widget);
    $this->assertAttributeEmpty("title", $widget);
    $this->assertAttributeEmpty("title_color", $widget);
    $this->assertAttributeEmpty("width", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\MailRuFacesWidget::background_color(string $color)} method.
   */
  public function test_background_color_method()
  {
    $widget = new Catharsis\Web\MailRuFacesWidget();
    $this->assertAttributeEmpty("background_color", $widget);
    $this->assertSame($widget, $widget->background_color("background_color"));
    $this->assertAttributeEquals("background_color", "background_color", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\MailRuFacesWidget::border_color(string $color)} method.
   */
  public function test_border_color_method()
  {
    $widget = new Catharsis\Web\MailRuFacesWidget();
    $this->assertAttributeEmpty("border_color", $widget);
    $this->assertSame($widget, $widget->border_color("border_color"));
    $this->assertAttributeEquals("border_color", "border_color", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\MailRuFacesWidget::domain(string $domain)} method.
   */
  public function test_domain_method()
  {
    $widget = new Catharsis\Web\MailRuFacesWidget();
    $this->assertAttributeEmpty("domain", $widget);
    $this->assertSame($widget, $widget->domain("domain"));
    $this->assertAttributeEquals("domain", "domain", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\MailRuFacesWidget::font(string $font)} method.
   */
  public function test_font_method()
  {
    $widget = new Catharsis\Web\MailRuFacesWidget();
    $this->assertAttributeEquals(Catharsis\Web\MailRuFacesFont::Arial, "font", $widget);
    $this->assertSame($widget, $widget->font("font"));
    $this->assertAttributeEquals("font", "font", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\MailRuFacesWidget::height(string $height)} method.
   */
  public function test_height_method()
  {
    $widget = new Catharsis\Web\MailRuFacesWidget();
    $this->assertAttributeEmpty("height", $widget);
    $this->assertSame($widget, $widget->height("height"));
    $this->assertAttributeEquals("height", "height", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\MailRuFacesWidget::hyperlink_color(string $color)} method.
   */
  public function test_hyperlink_color_method()
  {
    $widget = new Catharsis\Web\MailRuFacesWidget();
    $this->assertAttributeEmpty("hyperlink_color", $widget);
    $this->assertSame($widget, $widget->hyperlink_color("hyperlink_color"));
    $this->assertAttributeEquals("hyperlink_color", "hyperlink_color", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\MailRuFacesWidget::show_title(boolean $show)} method.
   */
  public function test_show_title_method()
  {
    $widget = new Catharsis\Web\MailRuFacesWidget();
    $this->assertAttributeEquals(true, "show_title", $widget);
    $this->assertSame($widget, $widget->show_title(false));
    $this->assertAttributeEquals(false, "show_title", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\MailRuFacesWidget::text_color(string $color)} method.
   */
  public function test_text_color_method()
  {
    $widget = new Catharsis\Web\MailRuFacesWidget();
    $this->assertAttributeEmpty("text_color", $widget);
    $this->assertSame($widget, $widget->text_color("text_color"));
    $this->assertAttributeEquals("text_color", "text_color", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\MailRuFacesWidget::title(string $title)} method.
   */
  public function test_title_method()
  {
    $widget = new Catharsis\Web\MailRuFacesWidget();
    $this->assertAttributeEmpty("title", $widget);
    $this->assertSame($widget, $widget->title("title"));
    $this->assertAttributeEquals("title", "title", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\MailRuFacesWidget::title_color(string $color)} method.
   */
  public function test_title_color_method()
  {
    $widget = new Catharsis\Web\MailRuFacesWidget();
    $this->assertAttributeEmpty("title_color", $widget);
    $this->assertSame($widget, $widget->title_color("title_color"));
    $this->assertAttributeEquals("title_color", "title_color", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\MailRuFacesWidget::width(string $width)} method.
   */
  public function test_width_method()
  {
    $widget = new Catharsis\Web\MailRuFacesWidget();
    $this->assertAttributeEmpty("width", $widget);
    $this->assertSame($widget, $widget->width("width"));
    $this->assertAttributeEquals("width", "width", $widget);
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
    $this->assertEquals('<a class="mrc__plugin_share_friends" href="http://connect.mail.ru/share_friends?domain=domain&font=Arial&width=width&height=height" rel="{&quot;domain&quot;:&quot;domain&quot;,&quot;font&quot;:&quot;Arial&quot;,&quot;width&quot;:&quot;width&quot;,&quot;height&quot;:&quot;height&quot;}">Друзья</a>', (string) $widget->domain("domain")->width("width")->height("height"));

    $widget = new Catharsis\Web\MailRuFacesWidget();
    $this->assertEquals('<a class="mrc__plugin_share_friends" href="http://connect.mail.ru/share_friends?domain=domain&font=Arial&width=width&height=height&title=title&notitle=true&title-color=title_color&background=background_color&border=border_color&color=text_color&link-color=hyperlink_color" rel="{&quot;domain&quot;:&quot;domain&quot;,&quot;font&quot;:&quot;Arial&quot;,&quot;width&quot;:&quot;width&quot;,&quot;height&quot;:&quot;height&quot;,&quot;title&quot;:&quot;title&quot;,&quot;notitle&quot;:&quot;true&quot;,&quot;title-color&quot;:&quot;title_color&quot;,&quot;background&quot;:&quot;background_color&quot;,&quot;border&quot;:&quot;border_color&quot;,&quot;color&quot;:&quot;text_color&quot;,&quot;link-color&quot;:&quot;hyperlink_color&quot;}">Друзья</a>', (string) $widget->domain("domain")->width("width")->height("height")->title("title")->show_title(false)->title_color("title_color")->background_color("background_color")->border_color("border_color")->text_color("text_color")->hyperlink_color("hyperlink_color"));
  }
}