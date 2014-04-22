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
    $this->assertAttributeEmpty("account", $widget);
    $this->assertAttributeEmpty("background_color", $widget);
    $this->assertAttributeEmpty("button_color", $widget);
    $this->assertAttributeEmpty("domain", $widget);
    $this->assertAttributeEmpty("height", $widget);
    $this->assertAttributeEquals(true, "subscribers", $widget);
    $this->assertAttributeEmpty("text_color", $widget);
    $this->assertAttributeEmpty("width", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\MailRuGroupsWidget::account(string $account)} method.
   */
  public function test_account_method()
  {
    $widget = new Catharsis\Web\MailRuGroupsWidget();
    $this->assertAttributeEmpty("account", $widget);
    $this->assertSame($widget, $widget->account("account"));
    $this->assertAttributeEquals("account", "account", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\MailRuGroupsWidget::background_color(string $color)} method.
   */
  public function test_background_color_method()
  {
    $widget = new Catharsis\Web\MailRuGroupsWidget();
    $this->assertAttributeEmpty("background_color", $widget);
    $this->assertSame($widget, $widget->background_color("background_color"));
    $this->assertAttributeEquals("background_color", "background_color", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\MailRuGroupsWidget::button_color(string $color)} method.
   */
  public function test_button_color_method()
  {
    $widget = new Catharsis\Web\MailRuGroupsWidget();
    $this->assertAttributeEmpty("button_color", $widget);
    $this->assertSame($widget, $widget->button_color("button_color"));
    $this->assertAttributeEquals("button_color", "button_color", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\MailRuGroupsWidget::domain(string $domain)} method.
   */
  public function test_domain_method()
  {
    $widget = new Catharsis\Web\MailRuGroupsWidget();
    $this->assertAttributeEmpty("domain", $widget);
    $this->assertSame($widget, $widget->domain("domain"));
    $this->assertAttributeEquals("domain", "domain", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\MailRuGroupsWidget::height(string $height)} method.
   */
  public function test_height_method()
  {
    $widget = new Catharsis\Web\MailRuGroupsWidget();
    $this->assertAttributeEmpty("height", $widget);
    $this->assertSame($widget, $widget->height("height"));
    $this->assertAttributeEquals("height", "height", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\MailRuGroupsWidget::subscribers(boolean $show)} method.
   */
  public function test_subscribers_method()
  {
    $widget = new Catharsis\Web\MailRuGroupsWidget();
    $this->assertAttributeEquals(true, "subscribers", $widget);
    $this->assertSame($widget, $widget->subscribers(false));
    $this->assertAttributeEquals(false, "subscribers", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\MailRuGroupsWidget::text_color(string $color)} method.
   */
  public function test_text_color_method()
  {
    $widget = new Catharsis\Web\MailRuGroupsWidget();
    $this->assertAttributeEmpty("text_color", $widget);
    $this->assertSame($widget, $widget->text_color("text_color"));
    $this->assertAttributeEquals("text_color", "text_color", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\MailRuGroupsWidget::width(string $width)} method.
   */
  public function test_width_method()
  {
    $widget = new Catharsis\Web\MailRuGroupsWidget();
    $this->assertAttributeEmpty("width", $widget);
    $this->assertSame($widget, $widget->width("width"));
    $this->assertAttributeEquals("width", "width", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\MailRuGroupsWidget::__toString()} method.
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
    $this->assertEquals('<a target="_blank" class="mrc__plugin_groups_widget" href="http://connect.mail.ru/groups_widget?group=account&max_sub=50&width=width&height=height&show_subscribers=true" rel="{&quot;group&quot;:&quot;account&quot;,&quot;max_sub&quot;:50,&quot;width&quot;:&quot;width&quot;,&quot;height&quot;:&quot;height&quot;,&quot;show_subscribers&quot;:&quot;true&quot;}">Группы</a>', (string) $widget->account("account")->width("width")->height("height"));

    $widget = new Catharsis\Web\MailRuGroupsWidget();
    $this->assertEquals('<a target="_blank" class="mrc__plugin_groups_widget" href="http://connect.mail.ru/groups_widget?group=account&max_sub=50&width=width&height=height&background=background_color&color=text_color&button_background=button_color&domain=domain" rel="{&quot;group&quot;:&quot;account&quot;,&quot;max_sub&quot;:50,&quot;width&quot;:&quot;width&quot;,&quot;height&quot;:&quot;height&quot;,&quot;background&quot;:&quot;background_color&quot;,&quot;color&quot;:&quot;text_color&quot;,&quot;button_background&quot;:&quot;button_color&quot;,&quot;domain&quot;:&quot;domain&quot;}">Группы</a>', (string) $widget->account("account")->width("width")->height("height")->subscribers(false)->background_color("background_color")->text_color("text_color")->button_color("button_color")->domain("domain"));
  }
}