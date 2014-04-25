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
        $this->assertAttributeEmpty("_account", $widget);
        $this->assertAttributeEquals(false, "_askPayerAddress", $widget);
        $this->assertAttributeEquals(false, "_askPayerComment", $widget);
        $this->assertAttributeEquals(false, "_askPayerEmail", $widget);
        $this->assertAttributeEquals(false, "_askPayerFullName", $widget);
        $this->assertAttributeEquals(false, "_askPayerPhone", $widget);
        $this->assertAttributeEquals(false, "_askPayerPurpose", $widget);
        $this->assertAttributeEquals(true, "_cards", $widget);
        $this->assertAttributeEmpty("_description", $widget);
        $this->assertAttributeEmpty("_sum", $widget);
        $this->assertAttributeEquals(Catharsis\Web\YandexMoneyPaymentFormText::Pay, "_text", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\YandexMoneyPaymentFormWidget::account(string $account)} method.
     */
    public function test_account_method()
    {
        $widget = new Catharsis\Web\YandexMoneyPaymentFormWidget();
        $this->assertAttributeEmpty("_account", $widget);
        $this->assertSame($widget, $widget->account("account"));
        $this->assertAttributeEquals("account", "_account", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\YandexMoneyPaymentFormWidget::askPayerAddress(boolean $ask)} method.
     */
    public function test_askPayerAddress_method()
    {
        $widget = new Catharsis\Web\YandexMoneyPaymentFormWidget();
        $this->assertAttributeEquals(false, "_askPayerAddress", $widget);
        $this->assertSame($widget, $widget->askPayerAddress());
        $this->assertAttributeEquals(true, "_askPayerAddress", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\YandexMoneyPaymentFormWidget::askPayerComment(boolean $ask)} method.
     */
    public function test_askPayerComment_method()
    {
        $widget = new Catharsis\Web\YandexMoneyPaymentFormWidget();
        $this->assertAttributeEquals(false, "_askPayerComment", $widget);
        $this->assertSame($widget, $widget->askPayerComment());
        $this->assertAttributeEquals(true, "_askPayerComment", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\YandexMoneyPaymentFormWidget::askPayerEmail(boolean $ask)} method.
     */
    public function test_askPayerEmail_method()
    {
        $widget = new Catharsis\Web\YandexMoneyPaymentFormWidget();
        $this->assertAttributeEquals(false, "_askPayerEmail", $widget);
        $this->assertSame($widget, $widget->askPayerEmail());
        $this->assertAttributeEquals(true, "_askPayerEmail", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\YandexMoneyPaymentFormWidget::askPayerFullName(boolean $ask)} method.
     */
    public function test_askPayerFullName_method()
    {
        $widget = new Catharsis\Web\YandexMoneyPaymentFormWidget();
        $this->assertAttributeEquals(false, "_askPayerFullName", $widget);
        $this->assertSame($widget, $widget->askPayerFullName());
        $this->assertAttributeEquals(true, "_askPayerFullName", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\YandexMoneyPaymentFormWidget::askPayerPhone(boolean $ask)} method.
     */
    public function test_askPayerPhone_method()
    {
        $widget = new Catharsis\Web\YandexMoneyPaymentFormWidget();
        $this->assertAttributeEquals(false, "_askPayerPhone", $widget);
        $this->assertSame($widget, $widget->askPayerPhone());
        $this->assertAttributeEquals(true, "_askPayerPhone", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\YandexMoneyPaymentFormWidget::askPayerPurpose(boolean $ask)} method.
     */
    public function test_askPayerPurpose_method()
    {
        $widget = new Catharsis\Web\YandexMoneyPaymentFormWidget();
        $this->assertAttributeEquals(false, "_askPayerPurpose", $widget);
        $this->assertSame($widget, $widget->askPayerPurpose());
        $this->assertAttributeEquals(true, "_askPayerPurpose", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\YandexMoneyPaymentFormWidget::cards(boolean $accept)} method.
     */
    public function test_cards_method()
    {
        $widget = new Catharsis\Web\YandexMoneyPaymentFormWidget();
        $this->assertAttributeEquals(true, "_cards", $widget);
        $this->assertSame($widget, $widget->cards(false));
        $this->assertAttributeEquals(false, "_cards", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\YandexMoneyPaymentFormWidget::description(string $description)} method.
     */
    public function test_description_method()
    {
        $widget = new Catharsis\Web\YandexMoneyPaymentFormWidget();
        $this->assertAttributeEmpty("_description", $widget);
        $this->assertSame($widget, $widget->description("description"));
        $this->assertAttributeEquals("description", "_description", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\YandexMoneyPaymentFormWidget::sum(float $sum)} method.
     */
    public function test_sum_method()
    {
        $widget = new Catharsis\Web\YandexMoneyPaymentFormWidget();
        $this->assertAttributeEmpty("_sum", $widget);
        $this->assertSame($widget, $widget->sum(1));
        $this->assertAttributeEquals(1, "_sum", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\YandexMoneyPaymentFormWidget::text(integer $text)} method.
     */
    public function test_text_method()
    {
        $widget = new Catharsis\Web\YandexMoneyPaymentFormWidget();
        $this->assertAttributeEquals(Catharsis\Web\YandexMoneyPaymentFormText::Pay, "_text", $widget);
        $this->assertSame($widget, $widget->text(0));
        $this->assertAttributeEquals(0, "_text", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\YandexMoneyPaymentFormWidget::__toString()} method.
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
        $this->assertEquals('<iframe allowtransparency="true" frameborder="0" height="200" scrolling="no" src="https://money.yandex.ru/embed/shop.xml?account=account&amp;quickpay=shop&amp;payment-type-choice=on&amp;writer=seller&amp;targets=description&amp;default-sum=&amp;button-text=01" width="450"></iframe>',
                            (string) $widget->account("account")->description("description"));

        $widget = new Catharsis\Web\YandexMoneyPaymentFormWidget();
        $this->assertEquals('<iframe allowtransparency="true" frameborder="0" height="255" scrolling="no" src="https://money.yandex.ru/embed/shop.xml?account=account&amp;quickpay=shop&amp;writer=buyer&amp;targets-hint=description&amp;default-sum=1&amp;button-text=03&amp;comment=on&amp;fio=on&amp;mail=on&amp;phone=on&amp;address=on" width="450"></iframe>',
                            (string) $widget->account("account")->description("description")->sum(1)->cards(false)->text(Catharsis\Web\YandexMoneyPaymentFormText::Transfer)->askPayerPurpose()->askPayerComment()->askPayerFullName()->askPayerEmail()->askPayerPhone()->askPayerAddress());
    }
}

?>
