<?php

/**
 * Tests set for class {@link Catharsis\Web\YandexMoneyDonateFormWidget}
 */
final class YandexMoneyDonateFormWidgetTest extends PHPUnit_Framework_TestCase
{
  /**
   * Performs testing of class constructor(s).
   * @link Catharsis\Web\YandexMoneyDonateFormWidget::__construct()
   */
  public function test_constructors()
  {
    $widget = new Catharsis\Web\YandexMoneyDonateFormWidget();
    $this->assertAttributeEmpty("account", $widget);
    $this->assertAttributeEquals(true, "cards", $widget);
    $this->assertAttributeEmpty("description", $widget);
    $this->assertAttributeEquals(false, "payer_comment", $widget);
    $this->assertAttributeEmpty("payer_comment_hint", $widget);
    $this->assertAttributeEquals(false, "payer_email", $widget);
    $this->assertAttributeEquals(false, "payer_full_name", $widget);
    $this->assertAttributeEquals(false, "payer_phone", $widget);
    $this->assertAttributeEmpty("project_name", $widget);
    $this->assertAttributeEmpty("project_site", $widget);
    $this->assertAttributeEquals(false, "show_description", $widget);
    $this->assertAttributeEmpty("sum", $widget);
    $this->assertAttributeEquals(Catharsis\Web\YandexMoneyDonateFormText::Donate, "text", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\YandexMoneyDonateFormWidget::account(string $account)} method.
   */
  public function test_account_method()
  {
    $widget = new Catharsis\Web\YandexMoneyDonateFormWidget();
    $this->assertAttributeEmpty("account", $widget);
    $this->assertSame($widget, $widget->account("account"));
    $this->assertAttributeEquals("account", "account", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\YandexMoneyDonateFormWidget::cards(boolean $accept)} method.
   */
  public function test_cards_method()
  {
    $widget = new Catharsis\Web\YandexMoneyDonateFormWidget();
    $this->assertAttributeEquals(true, "cards", $widget);
    $this->assertSame($widget, $widget->cards(false));
    $this->assertAttributeEquals(false, "cards", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\YandexMoneyDonateFormWidget::description(string $description)} method.
   */
  public function test_description_method()
  {
    $widget = new Catharsis\Web\YandexMoneyDonateFormWidget();
    $this->assertAttributeEmpty("description", $widget);
    $this->assertSame($widget, $widget->description("description"));
    $this->assertAttributeEquals("description", "description", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\YandexMoneyDonateFormWidget::payer_comment(boolean $require)} method.
   */
  public function test_payer_comment_method()
  {
    $widget = new Catharsis\Web\YandexMoneyDonateFormWidget();
    $this->assertAttributeEquals(false, "payer_comment", $widget);
    $this->assertSame($widget, $widget->payer_comment());
    $this->assertAttributeEquals(true, "payer_comment", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\YandexMoneyDonateFormWidget::payer_comment_hint(string $hint)} method.
   */
  public function test_payer_comment_hint_method()
  {
    $widget = new Catharsis\Web\YandexMoneyDonateFormWidget();
    $this->assertAttributeEmpty("payer_comment_hint", $widget);
    $this->assertSame($widget, $widget->payer_comment_hint("payer_comment_hint"));
    $this->assertAttributeEquals("payer_comment_hint", "payer_comment_hint", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\YandexMoneyDonateFormWidget::payer_email(boolean $require)} method.
   */
  public function test_payer_email_method()
  {
    $widget = new Catharsis\Web\YandexMoneyDonateFormWidget();
    $this->assertAttributeEquals(false, "payer_email", $widget);
    $this->assertSame($widget, $widget->payer_email());
    $this->assertAttributeEquals(true, "payer_email", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\YandexMoneyDonateFormWidget::payer_full_name(boolean $require)} method.
   */
  public function test_payer_full_name_method()
  {
    $widget = new Catharsis\Web\YandexMoneyDonateFormWidget();
    $this->assertAttributeEquals(false, "payer_full_name", $widget);
    $this->assertSame($widget, $widget->payer_full_name());
    $this->assertAttributeEquals(true, "payer_full_name", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\YandexMoneyDonateFormWidget::payer_phone(boolean $require)} method.
   */
  public function test_payer_phone_method()
  {
    $widget = new Catharsis\Web\YandexMoneyDonateFormWidget();
    $this->assertAttributeEquals(false, "payer_phone", $widget);
    $this->assertSame($widget, $widget->payer_phone());
    $this->assertAttributeEquals(true, "payer_phone", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\YandexMoneyDonateFormWidget::project_name(string $name)} method.
   */
  public function test_project_name_method()
  {
    $widget = new Catharsis\Web\YandexMoneyDonateFormWidget();
    $this->assertAttributeEmpty("project_name", $widget);
    $this->assertSame($widget, $widget->project_name("project_name"));
    $this->assertAttributeEquals("project_name", "project_name", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\YandexMoneyDonateFormWidget::project_site(string $url)} method.
   */
  public function test_project_site_method()
  {
    $widget = new Catharsis\Web\YandexMoneyDonateFormWidget();
    $this->assertAttributeEmpty("project_site", $widget);
    $this->assertSame($widget, $widget->project_site("project_site"));
    $this->assertAttributeEquals("project_site", "project_site", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\YandexMoneyDonateFormWidget::show_description(boolean $show)} method.
   */
  public function test_show_description_method()
  {
    $widget = new Catharsis\Web\YandexMoneyDonateFormWidget();
    $this->assertAttributeEquals(false, "show_description", $widget);
    $this->assertSame($widget, $widget->show_description());
    $this->assertAttributeEquals(true, "show_description", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\YandexMoneyDonateFormWidget::sum(float $sum)} method.
   */
  public function test_sum_method()
  {
    $widget = new Catharsis\Web\YandexMoneyDonateFormWidget();
    $this->assertAttributeEmpty("sum", $widget);
    $this->assertSame($widget, $widget->sum(1));
    $this->assertAttributeEquals(1, "sum", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\YandexMoneyDonateFormWidget::text(integer $text)} method.
   */
  public function test_text_method()
  {
    $widget = new Catharsis\Web\YandexMoneyDonateFormWidget();
    $this->assertAttributeEquals(Catharsis\Web\YandexMoneyDonateFormText::Donate, "text", $widget);
    $this->assertSame($widget, $widget->text(0));
    $this->assertAttributeEquals(0, "text", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\YandexMoneyDonateFormWidget::__toString()} method.
   */
  public function test_toString_method()
  {
    $widget = new Catharsis\Web\YandexMoneyDonateFormWidget();
    $this->assertEmpty((string) $widget);

    $widget = new Catharsis\Web\YandexMoneyDonateFormWidget();
    $this->assertEmpty((string) $widget->description("description"));

    $widget = new Catharsis\Web\YandexMoneyDonateFormWidget();
    $this->assertEmpty((string) $widget->account("account"));

    $widget = new Catharsis\Web\YandexMoneyDonateFormWidget();
    $this->assertEquals('<iframe allowtransparency="true" frameborder="0" height="133" scrolling="no" src="https://money.yandex.ru/embed/donate.xml?account=account&amp;quickpay=donate&amp;payment-type-choice=on&amp;default-sum=&amp;targets=description&amp;project-name=&amp;project-site=&amp;button-text=01" width="523"></iframe>', (string) $widget->account("account")->description("description"));

    $widget = new Catharsis\Web\YandexMoneyDonateFormWidget();
    $this->assertEquals('<iframe allowtransparency="true" frameborder="0" height="210" scrolling="no" src="https://money.yandex.ru/embed/donate.xml?account=account&amp;quickpay=donate&amp;default-sum=1&amp;targets=description&amp;target-visibility=on&amp;project-name=project_name&amp;project-site=project_site&amp;button-text=03&amp;comment=on&amp;hint=payer_comment_hint&amp;fio=on&amp;mail=on&amp;phone=on" width="426"></iframe>', (string) $widget->account("account")->description("description")->show_description()->sum(1)->cards(false)->text(Catharsis\Web\YandexMoneyDonateFormText::Transfer)->project_name("project_name")->project_site("project_site")->payer_comment()->payer_comment_hint("payer_comment_hint")->payer_full_name()->payer_email()->payer_phone());
  }
}