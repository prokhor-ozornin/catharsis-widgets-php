<?php

/**
 * Tests set for class {@link Catharsis\Web\YandexMoneyPaymentFormWidget}
 */
final class YandexMoneyPaymentFormWidgetTest extends PHPUnit_Framework_TestCase
{
  /**
   * Performs testing of class constructor(s).
   * @link Catharsis\Web\YandexMoneyPaymentFormWidget::__construct()
   */
  public function test_constructors()
  {
    $widget = new Catharsis\Web\YandexMoneyPaymentFormWidget();
    $this->assertAttributeEmpty("account", $widget);
    $this->assertAttributeEquals(true, "cards", $widget);
    $this->assertAttributeEmpty("description", $widget);
    $this->assertAttributeEquals(false, "payer_address", $widget);
    $this->assertAttributeEquals(false, "payer_comment", $widget);
    $this->assertAttributeEquals(false, "payer_email", $widget);
    $this->assertAttributeEquals(false, "payer_full_name", $widget);
    $this->assertAttributeEquals(false, "payer_phone", $widget);
    $this->assertAttributeEquals(false, "payer_purpose", $widget);
    $this->assertAttributeEmpty("sum", $widget);
    $this->assertAttributeEquals(Catharsis\Web\YandexMoneyPaymentFormText::Pay, "text", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\YandexMoneyPaymentFormWidget::account(string $account)} method.
   */
  public function test_account_method()
  {
    $widget = new Catharsis\Web\YandexMoneyPaymentFormWidget();
    $this->assertAttributeEmpty("account", $widget);
    $this->assertSame($widget, $widget->account("account"));
    $this->assertAttributeEquals("account", "account", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\YandexMoneyPaymentFormWidget::cards(boolean $accept)} method.
   */
  public function test_cards_method()
  {
    $widget = new Catharsis\Web\YandexMoneyPaymentFormWidget();
    $this->assertAttributeEquals(true, "cards", $widget);
    $this->assertSame($widget, $widget->cards(false));
    $this->assertAttributeEquals(false, "cards", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\YandexMoneyPaymentFormWidget::description(string $description)} method.
   */
  public function test_description_method()
  {
    $widget = new Catharsis\Web\YandexMoneyPaymentFormWidget();
    $this->assertAttributeEmpty("description", $widget);
    $this->assertSame($widget, $widget->description("description"));
    $this->assertAttributeEquals("description", "description", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\YandexMoneyPaymentFormWidget::payer_address(boolean $require)} method.
   */
  public function test_payer_address_method()
  {
    $widget = new Catharsis\Web\YandexMoneyPaymentFormWidget();
    $this->assertAttributeEquals(false, "payer_address", $widget);
    $this->assertSame($widget, $widget->payer_address());
    $this->assertAttributeEquals(true, "payer_address", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\YandexMoneyPaymentFormWidget::payer_comment(boolean $require)} method.
   */
  public function test_payer_comment_method()
  {
    $widget = new Catharsis\Web\YandexMoneyPaymentFormWidget();
    $this->assertAttributeEquals(false, "payer_comment", $widget);
    $this->assertSame($widget, $widget->payer_comment());
    $this->assertAttributeEquals(true, "payer_comment", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\YandexMoneyPaymentFormWidget::payer_email(boolean $require)} method.
   */
  public function test_payer_email_method()
  {
    $widget = new Catharsis\Web\YandexMoneyPaymentFormWidget();
    $this->assertAttributeEquals(false, "payer_email", $widget);
    $this->assertSame($widget, $widget->payer_email());
    $this->assertAttributeEquals(true, "payer_email", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\YandexMoneyPaymentFormWidget::payer_full_name(boolean $require)} method.
   */
  public function test_payer_full_name_method()
  {
    $widget = new Catharsis\Web\YandexMoneyPaymentFormWidget();
    $this->assertAttributeEquals(false, "payer_full_name", $widget);
    $this->assertSame($widget, $widget->payer_full_name());
    $this->assertAttributeEquals(true, "payer_full_name", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\YandexMoneyPaymentFormWidget::payer_phone(boolean $require)} method.
   */
  public function test_payer_phone_method()
  {
    $widget = new Catharsis\Web\YandexMoneyPaymentFormWidget();
    $this->assertAttributeEquals(false, "payer_phone", $widget);
    $this->assertSame($widget, $widget->payer_phone());
    $this->assertAttributeEquals(true, "payer_phone", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\YandexMoneyPaymentFormWidget::payer_purpose(boolean $require)} method.
   */
  public function test_payer_purpose_method()
  {
    $widget = new Catharsis\Web\YandexMoneyPaymentFormWidget();
    $this->assertAttributeEquals(false, "payer_purpose", $widget);
    $this->assertSame($widget, $widget->payer_purpose());
    $this->assertAttributeEquals(true, "payer_purpose", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\YandexMoneyPaymentFormWidget::sum(float $sum)} method.
   */
  public function test_sum_method()
  {
    $widget = new Catharsis\Web\YandexMoneyPaymentFormWidget();
    $this->assertAttributeEmpty("sum", $widget);
    $this->assertSame($widget, $widget->sum(1));
    $this->assertAttributeEquals(1, "sum", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\YandexMoneyPaymentFormWidget::text(integer $text)} method.
   */
  public function test_text_method()
  {
    $widget = new Catharsis\Web\YandexMoneyPaymentFormWidget();
    $this->assertAttributeEquals(Catharsis\Web\YandexMoneyPaymentFormText::Pay, "text", $widget);
    $this->assertSame($widget, $widget->text(0));
    $this->assertAttributeEquals(0, "text", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\YandexMoneyPaymentFormWidget::__toString()} method.
   */
  public function test_toString_method()
  {
    $widget = new Catharsis\Web\YandexMoneyPaymentFormWidget();
    $this->assertEmpty((string) $widget);

    $widget = new Catharsis\Web\YandexMoneyPaymentFormWidget();
    $this->assertEmpty((string) $widget->description("description"));

    $widget = new Catharsis\Web\YandexMoneyPaymentFormWidget();
    $this->assertEmpty((string) $widget->account("account"));

    $widget = new Catharsis\Web\YandexMoneyPaymentFormWidget();
    $this->assertEquals('<iframe allowtransparency="true" frameborder="0" height="200" scrolling="no" src="https://money.yandex.ru/embed/shop.xml?account=account&amp;quickpay=shop&amp;payment-type-choice=on&amp;writer=seller&amp;targets=description&amp;default-sum=&amp;button-text=01" width="450"></iframe>', (string) $widget->account("account")->description("description"));

    $widget = new Catharsis\Web\YandexMoneyPaymentFormWidget();
    $this->assertEquals('<iframe allowtransparency="true" frameborder="0" height="255" scrolling="no" src="https://money.yandex.ru/embed/shop.xml?account=account&amp;quickpay=shop&amp;writer=buyer&amp;targets-hint=description&amp;default-sum=1&amp;button-text=03&amp;comment=on&amp;fio=on&amp;mail=on&amp;phone=on&amp;address=on" width="450"></iframe>', (string) $widget->account("account")->description("description")->sum(1)->cards(false)->text(Catharsis\Web\YandexMoneyPaymentFormText::Transfer)->payer_purpose()->payer_comment()->payer_full_name()->payer_email()->payer_phone()->payer_address());
  }
}