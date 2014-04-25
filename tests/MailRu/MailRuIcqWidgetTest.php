<?php

/**
 * Tests set for class {@link Catharsis\Web\MailRuIcqWidget}
 */
final class MailRuIcqWidgetTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of class constructor(s).
     * @link Catharsis\Web\MailRuIcqWidget::__construct()
     */
    public function test_constructors()
    {
        $widget = new Catharsis\Web\MailRuIcqWidget();
        $this->assertAttributeEmpty("_account", $widget);
        $this->assertAttributeEmpty("_language", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\MailRuIcqWidget::account(string $account)} method.
     */
    public function test_account_method()
    {
        $widget = new Catharsis\Web\MailRuIcqWidget();
        $this->assertAttributeEmpty("_account", $widget);
        $this->assertSame($widget, $widget->account("account"));
        $this->assertAttributeEquals("account", "_account", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\MailRuIcqWidget::language(string $language)} method.
     */
    public function test_language_method()
    {
        $widget = new Catharsis\Web\MailRuIcqWidget();
        $this->assertAttributeEmpty("_language", $widget);
        $this->assertSame($widget, $widget->language("language"));
        $this->assertAttributeEquals("language", "_language", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\MailRuIcqWidget::__toString()} method.
     */
    public function test_toString_method()
    {
        $widget = new Catharsis\Web\MailRuIcqWidget();
        $this->assertEquals('<script src="http://c.icq.com/siteim/icqbar/js/partners/initbar_ru.js" type="text/javascript"></script>',
                            (string) $widget);

        $widget = new Catharsis\Web\MailRuIcqWidget();
        $html = (string) $widget->account("account")->language("en");
        $this->assertContains('window.ICQ = {siteOwner:\'account\'};', $html);
        $this->assertContains('<script src="http://c.icq.com/siteim/icqbar/js/partners/initbar_en.js" type="text/javascript"></script>', $html);
    }
}

?>
