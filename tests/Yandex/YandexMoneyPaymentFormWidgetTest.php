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
 * Tests set for class {@link \Catharsis\Web\YandexMoneyPaymentFormWidget}
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class YandexMoneyPaymentFormWidgetTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of class constructor(s).
     * @link \Catharsis\Web\YandexMoneyPaymentFormWidget::__construct()
     * @return void
     */
    public function testConstructors()
    {
        $widget = new Catharsis\Web\YandexMoneyPaymentFormWidget();
        $this->assertEmpty($widget->getAccount());
        $this->assertFalse($widget->getAskPayerAddress());
        $this->assertFalse($widget->getAskPayerComment());
        $this->assertFalse($widget->getAskPayerEmail());
        $this->assertFalse($widget->getAskPayerFullName());
        $this->assertFalse($widget->getAskPayerPhone());
        $this->assertFalse($widget->getAskPayerPurpose());
        $this->assertTrue($widget->getCards());
        $this->assertEmpty($widget->getDescription());
        $this->assertEmpty($widget->getSum());
        $this->assertEquals(Catharsis\Web\YandexMoneyPaymentFormText::PAY, $widget->getText());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\YandexMoneyPaymentFormWidget::account(string $account)}
     * method.
     * @return void
     */
    public function testAccountMethod()
    {
        $widget = new Catharsis\Web\YandexMoneyPaymentFormWidget();
        $this->assertEmpty($widget->getAccount());
        $this->assertSame($widget, $widget->account('account'));
        $this->assertEquals('account', $widget->getAccount());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\YandexMoneyPaymentFormWidget::askPayerAddress(boolean $ask)}
     * method.
     * @return void
     */
    public function testAskPayerAddressMethod()
    {
        $widget = new Catharsis\Web\YandexMoneyPaymentFormWidget();
        $this->assertFalse($widget->getAskPayerAddress());
        $this->assertSame($widget, $widget->askPayerAddress(true));
        $this->assertTrue($widget->getAskPayerAddress());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\YandexMoneyPaymentFormWidget::askPayerComment(boolean $ask)}
     * method.
     * @return void
     */
    public function testAskPayerCommentMethod()
    {
        $widget = new Catharsis\Web\YandexMoneyPaymentFormWidget();
        $this->assertFalse($widget->getAskPayerComment());
        $this->assertSame($widget, $widget->askPayerComment(true));
        $this->assertTrue($widget->getAskPayerComment());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\YandexMoneyPaymentFormWidget::askPayerEmail(boolean $ask)}
     * method.
     * @return void
     */
    public function testAskPayerEmailMethod()
    {
        $widget = new Catharsis\Web\YandexMoneyPaymentFormWidget();
        $this->assertFalse($widget->getAskPayerEmail());
        $this->assertSame($widget, $widget->askPayerEmail(true));
        $this->assertTrue($widget->getAskPayerEmail());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\YandexMoneyPaymentFormWidget::askPayerFullName(boolean $ask)}
     * method.
     * @return void
     */
    public function testAskPayerFullNameMethod()
    {
        $widget = new Catharsis\Web\YandexMoneyPaymentFormWidget();
        $this->assertFalse($widget->getAskPayerFullName());
        $this->assertSame($widget, $widget->askPayerFullName(true));
        $this->assertTrue($widget->getAskPayerFullName());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\YandexMoneyPaymentFormWidget::askPayerPhone(boolean $ask)}
     * method.
     * @return void
     */
    public function testAskPayerPhoneMethod()
    {
        $widget = new Catharsis\Web\YandexMoneyPaymentFormWidget();
        $this->assertFalse($widget->getAskPayerPhone());
        $this->assertSame($widget, $widget->askPayerPhone(true));
        $this->assertTrue($widget->getAskPayerPhone());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\YandexMoneyPaymentFormWidget::askPayerPurpose(boolean $ask)}
     * method.
     * @return void
     */
    public function testAskPayerPurposeMethod()
    {
        $widget = new Catharsis\Web\YandexMoneyPaymentFormWidget();
        $this->assertFalse($widget->getAskPayerPurpose());
        $this->assertSame($widget, $widget->askPayerPurpose(true));
        $this->assertTrue($widget->getAskPayerPurpose());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\YandexMoneyPaymentFormWidget::cards(boolean $accept)}
     * method.
     * @return void
     */
    public function testCardsMethod()
    {
        $widget = new Catharsis\Web\YandexMoneyPaymentFormWidget();
        $this->assertTrue($widget->getCards());
        $this->assertSame($widget, $widget->cards(false));
        $this->assertFalse($widget->getCards());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\YandexMoneyPaymentFormWidget::description(string $description)}
     * method.
     * @return void
     */
    public function testDescriptionMethod()
    {
        $widget = new Catharsis\Web\YandexMoneyPaymentFormWidget();
        $this->assertEmpty($widget->getDescription());
        $this->assertSame($widget, $widget->description('description'));
        $this->assertEquals('description', $widget->getDescription());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\YandexMoneyPaymentFormWidget::sum(float $sum)}
     * method.
     * @return void
     */
    public function testSumMethod()
    {
        $widget = new Catharsis\Web\YandexMoneyPaymentFormWidget();
        $this->assertEmpty($widget->getSum());
        $this->assertSame($widget, $widget->sum(1));
        $this->assertEquals(1, $widget->getSum());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\YandexMoneyPaymentFormWidget::text(integer $text)}
     * method.
     * @return void
     */
    public function tesTextMethod()
    {
        $widget = new Catharsis\Web\YandexMoneyPaymentFormWidget();
        $this->assertEquals(Catharsis\Web\YandexMoneyPaymentFormText::PAY, $widget->getText());
        $this->assertSame($widget, $widget->text(0));
        $this->assertEquals(0, $widget->getText());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\YandexMoneyPaymentFormWidget::__toString()}
     * method.
     * @return void
     */
    public function testToStringMethod()
    {
        $widget = new Catharsis\Web\YandexMoneyPaymentFormWidget();
        $this->assertEmpty((string) $widget);

        $widget = new Catharsis\Web\YandexMoneyPaymentFormWidget();
        $this->assertEmpty((string) $widget->description('description'));

        $widget = new Catharsis\Web\YandexMoneyPaymentFormWidget();
        $this->assertEmpty((string) $widget->account('account'));

        $widget = new Catharsis\Web\YandexMoneyPaymentFormWidget();
        $this->assertEquals(
            '<iframe allowtransparency="true" frameborder="0" height="200" scrolling="no"'
            .' src="https://money.yandex.ru/embed/shop.xml?account=account&amp;quickpay=shop&amp;payment-type-choice=on&amp;writer=seller&amp;targets=description&amp;default-sum=&amp;button-text=01"'
            .' width="450"></iframe>',
            (string) $widget
                ->account('account')
                ->description('description')
        );

        $widget = new Catharsis\Web\YandexMoneyPaymentFormWidget();
        $this->assertEquals(
            '<iframe allowtransparency="true" frameborder="0" height="255" scrolling="no"'
            .' src="https://money.yandex.ru/embed/shop.xml?account=account&amp;quickpay=shop&amp;writer=buyer&amp;targets-hint=description&amp;default-sum=1&amp;button-text=03&amp;comment=on&amp;fio=on&amp;mail=on&amp;phone=on&amp;address=on"'
            .' width="450"></iframe>',
            (string) $widget
                ->account('account')
                ->description('description')
                ->sum(1)
                ->cards(false)
                ->text(Catharsis\Web\YandexMoneyPaymentFormText::TRANSFER)
                ->askPayerPurpose(true)
                ->askPayerComment(true)
                ->askPayerFullName(true)
                ->askPayerEmail(true)
                ->askPayerPhone(true)
                ->askPayerAddress(true)
        );
    }
}

?>
