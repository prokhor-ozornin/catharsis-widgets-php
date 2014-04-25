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
        $this->assertAttributeEmpty("_account", $widget);
        $this->assertAttributeEquals(Catharsis\Web\YandexMoneyButtonColor::Orange, "_color", $widget);
        $this->assertAttributeEmpty("_description", $widget);
        $this->assertAttributeEquals(false, "_askPayerAddress", $widget);
        $this->assertAttributeEquals(false, "_askPayerEmail", $widget);
        $this->assertAttributeEquals(false, "_askPayerFullName", $widget);
        $this->assertAttributeEquals(false, "_askPayerPhone", $widget);
        $this->assertAttributeEquals(Catharsis\Web\YandexMoneyButtonSize::Large, "_size", $widget);
        $this->assertAttributeEmpty("_sum", $widget);
        $this->assertAttributeEquals(Catharsis\Web\YandexMoneyButtonText::Pay, "_text", $widget);
        $this->assertAttributeEquals(Catharsis\Web\YandexMoneyButtonType::Wallet, "_type", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\YandexMoneyButtonWidget::account(string $account)} method.
     */
    public function test_account_method()
    {
        $widget = new Catharsis\Web\YandexMoneyButtonWidget();
        $this->assertAttributeEmpty("_account", $widget);
        $this->assertSame($widget, $widget->account("account"));
        $this->assertAttributeEquals("account", "_account", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\YandexMoneyButtonWidget::askPayerAddress(boolean $ask)} method.
     */
    public function test_askPayerAddress_method()
    {
        $widget = new Catharsis\Web\YandexMoneyButtonWidget();
        $this->assertAttributeEquals(false, "_askPayerAddress", $widget);
        $this->assertSame($widget, $widget->askPayerAddress());
        $this->assertAttributeEquals(true, "_askPayerAddress", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\YandexMoneyButtonWidget::askPayerEmail(boolean $ask)} method.
     */
    public function test_askPayerEmail_method()
    {
        $widget = new Catharsis\Web\YandexMoneyButtonWidget();
        $this->assertAttributeEquals(false, "_askPayerEmail", $widget);
        $this->assertSame($widget, $widget->askPayerEmail());
        $this->assertAttributeEquals(true, "_askPayerEmail", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\YandexMoneyButtonWidget::askPayerFullName(boolean $ask)} method.
     */
    public function test_askPayerFullName_method()
    {
        $widget = new Catharsis\Web\YandexMoneyButtonWidget();
        $this->assertAttributeEquals(false, "_askPayerFullName", $widget);
        $this->assertSame($widget, $widget->askPayerFullName());
        $this->assertAttributeEquals(true, "_askPayerFullName", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\YandexMoneyButtonWidget::askPayerPhone(string $ask)} method.
     */
    public function test_askPayerPhone_method()
    {
        $widget = new Catharsis\Web\YandexMoneyButtonWidget();
        $this->assertAttributeEquals(false, "_askPayerPhone", $widget);
        $this->assertSame($widget, $widget->askPayerPhone());
        $this->assertAttributeEquals(true, "_askPayerPhone", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\YandexMoneyButtonWidget::color(string $color)} method.
     */
    public function test_color_method()
    {
        $widget = new Catharsis\Web\YandexMoneyButtonWidget();
        $this->assertAttributeEquals(Catharsis\Web\YandexMoneyButtonColor::Orange, "_color", $widget);
        $this->assertSame($widget, $widget->color("color"));
        $this->assertAttributeEquals("color", "_color", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\YandexMoneyButtonWidget::description(string $description)} method.
     */
    public function test_description_method()
    {
        $widget = new Catharsis\Web\YandexMoneyButtonWidget();
        $this->assertAttributeEmpty("_description", $widget);
        $this->assertSame($widget, $widget->description("description"));
        $this->assertAttributeEquals("description", "_description", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\YandexMoneyButtonWidget::size(string $size)} method.
     */
    public function test_size_method()
    {
        $widget = new Catharsis\Web\YandexMoneyButtonWidget();
        $this->assertAttributeEquals(Catharsis\Web\YandexMoneyButtonSize::Large, "_size", $widget);
        $this->assertSame($widget, $widget->size("size"));
        $this->assertAttributeEquals("size", "_size", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\YandexMoneyButtonWidget::sum(float $sum)} method.
     */
    public function test_sum_method()
    {
        $widget = new Catharsis\Web\YandexMoneyButtonWidget();
        $this->assertAttributeEmpty("_sum", $widget);
        $this->assertSame($widget, $widget->sum(1));
        $this->assertAttributeEquals(1, "_sum", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\YandexMoneyButtonWidget::text(integer $text)} method.
     */
    public function test_text_method()
    {
        $widget = new Catharsis\Web\YandexMoneyButtonWidget();
        $this->assertAttributeEquals(Catharsis\Web\YandexMoneyButtonText::Pay, "_text", $widget);
        $this->assertSame($widget, $widget->text(0));
        $this->assertAttributeEquals(0, "_text", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\YandexMoneyButtonWidget::type(string $type)} method.
     */
    public function test_type_method()
    {
        $widget = new Catharsis\Web\YandexMoneyButtonWidget();
        $this->assertAttributeEquals(Catharsis\Web\YandexMoneyButtonType::Wallet, "_type", $widget);
        $this->assertSame($widget, $widget->type("type"));
        $this->assertAttributeEquals("type", "_type", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\YandexMoneyButtonWidget::__toString()} method.
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
        $this->assertEquals('<iframe allowtransparency="true" frameborder="0" height="54" scrolling="no" src="https://money.yandex.ru/embed/small.xml?account=account&amp;quickpay=small&amp;yamoney-payment-type=on&amp;button-text=01&amp;button-size=l&amp;button-color=orange&amp;targets=description&amp;default-sum=1" width="229"></iframe>',
                            (string) $widget->account("account")->description("description")->sum(1));

        $widget = new Catharsis\Web\YandexMoneyButtonWidget();
        $this->assertEquals('<iframe allowtransparency="true" frameborder="0" height="54" scrolling="no" src="https://money.yandex.ru/embed/small.xml?account=account&amp;quickpay=small&amp;any-card-payment-type=on&amp;button-text=03&amp;button-size=m&amp;button-color=white&amp;targets=description&amp;default-sum=1&amp;fio=on&amp;mail=on&amp;phone=on&amp;address=on" width="242"></iframe>',
                            (string) $widget->account("account")->description("description")->sum(1)->type(Catharsis\Web\YandexMoneyButtonType::Card)->text(Catharsis\Web\YandexMoneyButtonText::Transfer)->size(Catharsis\Web\YandexMoneyButtonSize::Medium)->color(Catharsis\Web\YandexMoneyButtonColor::White)->askPayerFullName()->askPayerEmail()->askPayerPhone()->askPayerAddress());
    }
}

?>
