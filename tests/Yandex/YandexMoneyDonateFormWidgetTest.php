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
        $this->assertAttributeEmpty("_account", $widget);
        $this->assertAttributeEquals(false, "_askPayerComment", $widget);
        $this->assertAttributeEquals(false, "_askPayerEmail", $widget);
        $this->assertAttributeEquals(false, "_askPayerFullName", $widget);
        $this->assertAttributeEquals(false, "_askPayerPhone", $widget);
        $this->assertAttributeEquals(true, "_cards", $widget);
        $this->assertAttributeEmpty("_commentHint", $widget);
        $this->assertAttributeEquals(false, "_description", $widget);
        $this->assertAttributeEmpty("_descriptionText", $widget);
        $this->assertAttributeEmpty("_projectName", $widget);
        $this->assertAttributeEmpty("_projectSite", $widget);
        $this->assertAttributeEmpty("_sum", $widget);
        $this->assertAttributeEquals(Catharsis\Web\YandexMoneyDonateFormText::Donate, "_text", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\YandexMoneyDonateFormWidget::account(string $account)} method.
     */
    public function test_account_method()
    {
        $widget = new Catharsis\Web\YandexMoneyDonateFormWidget();
        $this->assertAttributeEmpty("_account", $widget);
        $this->assertSame($widget, $widget->account("account"));
        $this->assertAttributeEquals("account", "_account", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\YandexMoneyDonateFormWidget::askPayerComment(boolean $ask)} method.
     */
    public function test_askPayerComment_method()
    {
        $widget = new Catharsis\Web\YandexMoneyDonateFormWidget();
        $this->assertAttributeEquals(false, "_askPayerComment", $widget);
        $this->assertSame($widget, $widget->askPayerComment());
        $this->assertAttributeEquals(true, "_askPayerComment", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\YandexMoneyDonateFormWidget::askPayerEmail(boolean $ask)} method.
     */
    public function test_askPayerEmail_method()
    {
        $widget = new Catharsis\Web\YandexMoneyDonateFormWidget();
        $this->assertAttributeEquals(false, "_askPayerEmail", $widget);
        $this->assertSame($widget, $widget->askPayerEmail());
        $this->assertAttributeEquals(true, "_askPayerEmail", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\YandexMoneyDonateFormWidget::askPayerFullName(boolean $ask)} method.
     */
    public function test_askPayerFullName_method()
    {
        $widget = new Catharsis\Web\YandexMoneyDonateFormWidget();
        $this->assertAttributeEquals(false, "_askPayerFullName", $widget);
        $this->assertSame($widget, $widget->askPayerFullName());
        $this->assertAttributeEquals(true, "_askPayerFullName", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\YandexMoneyDonateFormWidget::askPayerPhone(boolean $ask)} method.
     */
    public function test_askPayerPhone_method()
    {
        $widget = new Catharsis\Web\YandexMoneyDonateFormWidget();
        $this->assertAttributeEquals(false, "_askPayerPhone", $widget);
        $this->assertSame($widget, $widget->askPayerPhone());
        $this->assertAttributeEquals(true, "_askPayerPhone", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\YandexMoneyDonateFormWidget::cards(boolean $accept)} method.
     */
    public function test_cards_method()
    {
        $widget = new Catharsis\Web\YandexMoneyDonateFormWidget();
        $this->assertAttributeEquals(true, "_cards", $widget);
        $this->assertSame($widget, $widget->cards(false));
        $this->assertAttributeEquals(false, "_cards", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\YandexMoneyDonateFormWidget::payerCommentHint(string $hint)} method.
     */
    public function test_commentHint_method()
    {
        $widget = new Catharsis\Web\YandexMoneyDonateFormWidget();
        $this->assertAttributeEmpty("_commentHint", $widget);
        $this->assertSame($widget, $widget->commentHint("commentHint"));
        $this->assertAttributeEquals("commentHint", "_commentHint", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\YandexMoneyDonateFormWidget::description(boolean $show)} method.
     */
    public function test_description_method()
    {
        $widget = new Catharsis\Web\YandexMoneyDonateFormWidget();
        $this->assertAttributeEquals(false, "_description", $widget);
        $this->assertSame($widget, $widget->description());
        $this->assertAttributeEquals(true, "_description", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\YandexMoneyDonateFormWidget::descriptiontext(string $description)} method.
     */
    public function test_descriptionText_method()
    {
        $widget = new Catharsis\Web\YandexMoneyDonateFormWidget();
        $this->assertAttributeEmpty("_descriptionText", $widget);
        $this->assertSame($widget, $widget->descriptionText("description"));
        $this->assertAttributeEquals("description", "_descriptionText", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\YandexMoneyDonateFormWidget::projectName(string $name)} method.
     */
    public function test_projectName_method()
    {
        $widget = new Catharsis\Web\YandexMoneyDonateFormWidget();
        $this->assertAttributeEmpty("_projectName", $widget);
        $this->assertSame($widget, $widget->projectName("projectName"));
        $this->assertAttributeEquals("projectName", "_projectName", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\YandexMoneyDonateFormWidget::projectSite(string $url)} method.
     */
    public function test_projectSite_method()
    {
        $widget = new Catharsis\Web\YandexMoneyDonateFormWidget();
        $this->assertAttributeEmpty("_projectSite", $widget);
        $this->assertSame($widget, $widget->projectSite("projectSite"));
        $this->assertAttributeEquals("projectSite", "_projectSite", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\YandexMoneyDonateFormWidget::sum(float $sum)} method.
     */
    public function test_sum_method()
    {
        $widget = new Catharsis\Web\YandexMoneyDonateFormWidget();
        $this->assertAttributeEmpty("_sum", $widget);
        $this->assertSame($widget, $widget->sum(1));
        $this->assertAttributeEquals(1, "_sum", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\YandexMoneyDonateFormWidget::text(integer $text)} method.
     */
    public function test_text_method()
    {
        $widget = new Catharsis\Web\YandexMoneyDonateFormWidget();
        $this->assertAttributeEquals(Catharsis\Web\YandexMoneyDonateFormText::Donate, "_text", $widget);
        $this->assertSame($widget, $widget->text(0));
        $this->assertAttributeEquals(0, "_text", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\YandexMoneyDonateFormWidget::__toString()} method.
     */
    public function test_toString_method()
    {
        $widget = new Catharsis\Web\YandexMoneyDonateFormWidget();
        $this->assertEmpty((string) $widget);

        $widget = new Catharsis\Web\YandexMoneyDonateFormWidget();
        $this->assertEmpty((string) $widget->descriptionText("description"));

        $widget = new Catharsis\Web\YandexMoneyDonateFormWidget();
        $this->assertEmpty((string) $widget->account("account"));

        $widget = new Catharsis\Web\YandexMoneyDonateFormWidget();
        $this->assertEquals('<iframe allowtransparency="true" frameborder="0" height="133" scrolling="no" src="https://money.yandex.ru/embed/donate.xml?account=account&amp;quickpay=donate&amp;payment-type-choice=on&amp;default-sum=&amp;targets=description&amp;project-name=&amp;project-site=&amp;button-text=01" width="523"></iframe>',
                            (string) $widget->account("account")->descriptionText("description"));

        $widget = new Catharsis\Web\YandexMoneyDonateFormWidget();
        $this->assertEquals('<iframe allowtransparency="true" frameborder="0" height="210" scrolling="no" src="https://money.yandex.ru/embed/donate.xml?account=account&amp;quickpay=donate&amp;default-sum=1&amp;targets=description&amp;target-visibility=on&amp;project-name=project_name&amp;project-site=project_site&amp;button-text=03&amp;comment=on&amp;hint=comment_hint&amp;fio=on&amp;mail=on&amp;phone=on" width="426"></iframe>',
                            (string) $widget->account("account")->descriptionText("description")->description()->sum(1)->cards(false)->text(Catharsis\Web\YandexMoneyDonateFormText::Transfer)->projectName("project_name")->projectSite("project_site")->askPayerComment()->commentHint("comment_hint")->askPayerFullName()->askPayerEmail()->askPayerPhone());
    }
}

?>
