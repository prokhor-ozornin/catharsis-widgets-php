<?php
/**
 * PHP version 5
 *
 * @category HTML
 * @package  WebWidgets
 * @author   Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @license  LGPL https://www.gnu.org/licenses/lgpl.html
 * @link     http://pear.php.net/package/HTML_WebWidgets
 */

/**
 * Tests set for class {@link \Catharsis\Web\MailRuIcqWidget}
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class MailRuIcqWidgetTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of class constructor(s).
     * @link \Catharsis\Web\MailRuIcqWidget::__construct()
     * @return void
     */
    public function testConstructors()
    {
        $widget = new Catharsis\Web\MailRuIcqWidget();
        $this->assertEmpty($widget->getAccount());
        $this->assertEmpty($widget->getLanguage());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\MailRuIcqWidget::account(string $account)}
     * method.
     * @return void
     */
    public function testAccountMethod()
    {
        $widget = new Catharsis\Web\MailRuIcqWidget();
        $this->assertEmpty($widget->getAccount());
        $this->assertSame($widget, $widget->account('account'));
        $this->assertEquals('account', $widget->getAccount());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\MailRuIcqWidget::language(string $language)}
     * method.
     * @return void
     */
    public function testLanguageMethod()
    {
        $widget = new Catharsis\Web\MailRuIcqWidget();
        $this->assertEmpty($widget->getLanguage());
        $this->assertSame($widget, $widget->language('language'));
        $this->assertEquals('language', $widget->getLanguage());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\MailRuIcqWidget::__toString()}
     * method.
     * @return void
     */
    public function testToStringMethod()
    {
        $widget = new Catharsis\Web\MailRuIcqWidget();
        $this->assertEquals(
            '<script src="http://c.icq.com/siteim/icqbar/js/partners/initbar_ru.js" type="text/javascript"></script>',
            (string) $widget
        );

        $widget = new Catharsis\Web\MailRuIcqWidget();
        $html = (string) $widget->account('account')->language('en');
        $this->assertContains('window.ICQ = {siteOwner:\'account\'};', $html);
        $this->assertContains(
            '<script src="http://c.icq.com/siteim/icqbar/js/partners/initbar_en.js" type="text/javascript"></script>',
            $html
        );
    }
}

?>
