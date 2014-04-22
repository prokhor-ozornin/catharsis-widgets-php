<?php

/**
 * Tests set for class {@link Catharsis\Web\YandexMoneyButtonWidget}
 */
final class YandexMoneyButtonWidgetTest extends PHPUnit_Framework_TestCase
{
  /**
   * Performs testing of class constructor(s).
   * @link Catharsis\Web\YandexMoneyButtonWidget::__construct()
   */
  public function test_constructors()
  {
    $widget = new Catharsis\Web\YandexMoneyButtonWidget();
    $this->assertAttributeEmpty("account", $widget);
    $this->assertAttributeEquals(Catharsis\Web\YandexMoneyButtonColor::Orange, "color", $widget);
    $this->assertAttributeEmpty("description", $widget);
    $this->assertAttributeEquals(false, "payer_address", $widget);
    $this->assertAttributeEquals(false, "payer_email", $widget);
    $this->assertAttributeEquals(false, "payer_full_name", $widget);
    $this->assertAttributeEquals(false, "payer_phone", $widget);
    $this->assertAttributeEquals(Catharsis\Web\YandexMoneyButtonSize::Large, "size", $widget);
    $this->assertAttributeEmpty("sum", $widget);
    $this->assertAttributeEquals(Catharsis\Web\YandexMoneyButtonText::Pay, "text", $widget);
    $this->assertAttributeEquals(Catharsis\Web\YandexMoneyButtonType::Wallet, "type", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\YandexMoneyButtonWidget::account(string $account)} method.
   */
  public function test_account_method()
  {
    $widget = new Catharsis\Web\YandexMoneyButtonWidget();
    $this->assertAttributeEmpty("account", $widget);
    $this->assertSame($widget, $widget->account("account"));
    $this->assertAttributeEquals("account", "account", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\YandexMoneyButtonWidget::color(string $color)} method.
   */
  public function test_color_method()
  {
    $widget = new Catharsis\Web\YandexMoneyButtonWidget();
    $this->assertAttributeEquals(Catharsis\Web\YandexMoneyButtonColor::Orange, "color", $widget);
    $this->assertSame($widget, $widget->color("color"));
    $this->assertAttributeEquals("color", "color", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\YandexMoneyButtonWidget::description(string $description)} method.
   */
  public function test_description_method()
  {
    $widget = new Catharsis\Web\YandexMoneyButtonWidget();
    $this->assertAttributeEmpty("description", $widget);
    $this->assertSame($widget, $widget->description("description"));
    $this->assertAttributeEquals("description", "description", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\YandexMoneyButtonWidget::payer_address(boolean $require)} method.
   */
  public function test_payer_address_method()
  {
    $widget = new Catharsis\Web\YandexMoneyButtonWidget();
    $this->assertAttributeEquals(false, "payer_address", $widget);
    $this->assertSame($widget, $widget->payer_address());
    $this->assertAttributeEquals(true, "payer_address", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\YandexMoneyButtonWidget::payer_email(boolean $require)} method.
   */
  public function test_payer_email_method()
  {
    $widget = new Catharsis\Web\YandexMoneyButtonWidget();
    $this->assertAttributeEquals(false, "payer_email", $widget);
    $this->assertSame($widget, $widget->payer_email());
    $this->assertAttributeEquals(true, "payer_email", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\YandexMoneyButtonWidget::payer_full_name(boolean $require)} method.
   */
  public function test_payer_full_name_method()
  {
    $widget = new Catharsis\Web\YandexMoneyButtonWidget();
    $this->assertAttributeEquals(false, "payer_full_name", $widget);
    $this->assertSame($widget, $widget->payer_full_name());
    $this->assertAttributeEquals(true, "payer_full_name", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\YandexMoneyButtonWidget::payer_phone(string $require)} method.
   */
  public function test_payer_phone_method()
  {
    $widget = new Catharsis\Web\YandexMoneyButtonWidget();
    $this->assertAttributeEquals(false, "payer_phone", $widget);
    $this->assertSame($widget, $widget->payer_phone());
    $this->assertAttributeEquals(true, "payer_phone", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\YandexMoneyButtonWidget::size(string $size)} method.
   */
  public function test_size_method()
  {
    $widget = new Catharsis\Web\YandexMoneyButtonWidget();
    $this->assertAttributeEquals(Catharsis\Web\YandexMoneyButtonSize::Large, "size", $widget);
    $this->assertSame($widget, $widget->size("size"));
    $this->assertAttributeEquals("size", "size", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\YandexMoneyButtonWidget::sum(float $sum)} method.
   */
  public function test_sum_method()
  {
    $widget = new Catharsis\Web\YandexMoneyButtonWidget();
    $this->assertAttributeEmpty("sum", $widget);
    $this->assertSame($widget, $widget->sum(1));
    $this->assertAttributeEquals(1, "sum", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\YandexMoneyButtonWidget::text(integer $text)} method.
   */
  public function test_text_method()
  {
    $widget = new Catharsis\Web\YandexMoneyButtonWidget();
    $this->assertAttributeEquals(Catharsis\Web\YandexMoneyButtonText::Pay, "text", $widget);
    $this->assertSame($widget, $widget->text(0));
    $this->assertAttributeEquals(0, "text", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\YandexMoneyButtonWidget::type(string $type)} method.
   */
  public function test_type_method()
  {
    $widget = new Catharsis\Web\YandexMoneyButtonWidget();
    $this->assertAttributeEquals(Catharsis\Web\YandexMoneyButtonType::Wallet, "type", $widget);
    $this->assertSame($widget, $widget->type("type"));
    $this->assertAttributeEquals("type", "type", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\YandexMoneyButtonWidget::__toString()} method.
   */
  public function test_toString_method()
  {
    $widget = new Catharsis\Web\YandexMoneyButtonWidget();
    $this->assertEmpty((string) $widget);

    $widget = new Catharsis\Web\YandexMoneyButtonWidget();
    $this->assertEmpty((string) $widget->description("description")->sum(1));

    $widget = new Catharsis\Web\YandexMoneyButtonWidget();
    $this->assertEmpty((string) $widget->account("account")->sum(1));

    $widget = new Catharsis\Web\YandexMoneyButtonWidget();
    $this->assertEmpty((string) $widget->account("account")->description("description"));

    $widget = new Catharsis\Web\YandexMoneyButtonWidget();
    $this->assertEquals('<iframe allowtransparency="true" frameborder="0" height="54" scrolling="no" src="https://money.yandex.ru/embed/small.xml?account=account&amp;quickpay=small&amp;yamoney-payment-type=on&amp;button-text=01&amp;button-size=l&amp;button-color=orange&amp;targets=description&amp;default-sum=1" width="229"></iframe>', (string) $widget->account("account")->description("description")->sum(1));

    $widget = new Catharsis\Web\YandexMoneyButtonWidget();
    $this->assertEquals('<iframe allowtransparency="true" frameborder="0" height="54" scrolling="no" src="https://money.yandex.ru/embed/small.xml?account=account&amp;quickpay=small&amp;any-card-payment-type=on&amp;button-text=03&amp;button-size=m&amp;button-color=white&amp;targets=description&amp;default-sum=1&amp;fio=on&amp;mail=on&amp;phone=on&amp;address=on" width="242"></iframe>', (string) $widget->account("account")->description("description")->sum(1)->type(Catharsis\Web\YandexMoneyButtonType::Card)->text(Catharsis\Web\YandexMoneyButtonText::Transfer)->size(Catharsis\Web\YandexMoneyButtonSize::Medium)->color(Catharsis\Web\YandexMoneyButtonColor::White)->payer_full_name()->payer_email()->payer_phone()->payer_address());
  }
}