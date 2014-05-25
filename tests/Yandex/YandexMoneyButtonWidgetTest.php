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
 * Tests set for class {@link \Catharsis\Web\YandexMoneyButtonWidget}
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class YandexMoneyButtonWidgetTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of class constructor(s).
     * @link \Catharsis\Web\YandexMoneyButtonWidget::__construct()
     * @return void
     */
    public function testConstructors()
    {
        $widget = new Catharsis\Web\YandexMoneyButtonWidget();
        $this->assertEmpty($widget->getAccount());
        $this->assertEquals(Catharsis\Web\YandexMoneyButtonColor::ORANGE, $widget->getColor());
        $this->assertEmpty($widget->getDescription());
        $this->assertFalse($widget->getAskPayerAddress());
        $this->assertFalse($widget->getAskPayerEmail());
        $this->assertFalse($widget->getAskPayerFullName());
        $this->assertFalse($widget->getAskPayerPhone());
        $this->assertEquals(Catharsis\Web\YandexMoneyButtonSize::LARGE, $widget->getSize());
        $this->assertEmpty($widget->getSum());
        $this->assertEquals(Catharsis\Web\YandexMoneyButtonText::PAY, $widget->getText());
        $this->assertEquals(Catharsis\Web\YandexMoneyButtonType::WALLET, $widget->getType());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\YandexMoneyButtonWidget::account(string $account)}
     * method.
     * @return void
     */
    public function testAccountMethod()
    {
        $widget = new Catharsis\Web\YandexMoneyButtonWidget();
        $this->assertEmpty($widget->getAccount());
        $this->assertSame($widget, $widget->account('account'));
        $this->assertEquals('account', $widget->getAccount());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\YandexMoneyButtonWidget::askPayerAddress(boolean $ask)}
     * method.
     * @return void
     */
    public function testAskPayerAddressMethod()
    {
        $widget = new Catharsis\Web\YandexMoneyButtonWidget();
        $this->assertFalse($widget->getAskPayerAddress());
        $this->assertSame($widget, $widget->askPayerAddress(true));
        $this->assertTrue($widget->getAskPayerAddress());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\YandexMoneyButtonWidget::askPayerEmail(boolean $ask)}
     * method.
     * @return void
     */
    public function testAskPayerEmailMethod()
    {
        $widget = new Catharsis\Web\YandexMoneyButtonWidget();
        $this->assertFalse($widget->getAskPayerEmail());
        $this->assertSame($widget, $widget->askPayerEmail(true));
        $this->assertTrue($widget->getAskPayerEmail());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\YandexMoneyButtonWidget::askPayerFullName(boolean $ask)}
     * method.
     * @return void
     */
    public function testAskPayerFullNameMethod()
    {
        $widget = new Catharsis\Web\YandexMoneyButtonWidget();
        $this->assertFalse($widget->getAskPayerFullName());
        $this->assertSame($widget, $widget->askPayerFullName(true));
        $this->assertTrue($widget->getAskPayerFullName());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\YandexMoneyButtonWidget::askPayerPhone(string $ask)}
     * method.
     * @return void
     */
    public function testAskPayerPhoneMethod()
    {
        $widget = new Catharsis\Web\YandexMoneyButtonWidget();
        $this->assertFalse($widget->getAskPayerPhone());
        $this->assertSame($widget, $widget->askPayerPhone(true));
        $this->assertTrue($widget->getAskPayerPhone());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\YandexMoneyButtonWidget::color(string $color)}
     * method.
     * @return void
     */
    public function testColorMethod()
    {
        $widget = new Catharsis\Web\YandexMoneyButtonWidget();
        $this->assertEquals(Catharsis\Web\YandexMoneyButtonColor::ORANGE, $widget->getColor());
        $this->assertSame($widget, $widget->color('color'));
        $this->assertEquals('color', $widget->getColor());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\YandexMoneyButtonWidget::description(string $description)}
     * method.
     * @return void
     */
    public function testDescriptionMethod()
    {
        $widget = new Catharsis\Web\YandexMoneyButtonWidget();
        $this->assertEmpty($widget->getDescription());
        $this->assertSame($widget, $widget->description('description'));
        $this->assertEquals('description', $widget->getDescription());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\YandexMoneyButtonWidget::size(string $size)}
     * method.
     * @return void
     */
    public function testSizeMethod()
    {
        $widget = new Catharsis\Web\YandexMoneyButtonWidget();
        $this->assertEquals(Catharsis\Web\YandexMoneyButtonSize::LARGE, $widget->getSize());
        $this->assertSame($widget, $widget->size('size'));
        $this->assertEquals('size', $widget->getSize());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\YandexMoneyButtonWidget::sum(float $sum)}
     * method.
     * @return void
     */
    public function testSumMethod()
    {
        $widget = new Catharsis\Web\YandexMoneyButtonWidget();
        $this->assertEmpty($widget->getSum());
        $this->assertSame($widget, $widget->sum(1));
        $this->assertEquals(1, $widget->getSum());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\YandexMoneyButtonWidget::text(integer $text)}
     * method.
     * @return void
     */
    public function testTextMethod()
    {
        $widget = new Catharsis\Web\YandexMoneyButtonWidget();
        $this->assertEquals(Catharsis\Web\YandexMoneyButtonText::PAY, $widget->getText());
        $this->assertSame($widget, $widget->text(0));
        $this->assertEquals(0, $widget->getText());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\YandexMoneyButtonWidget::type(string $type)}
     * method.
     * @return void
     */
    public function testTypeMethod()
    {
        $widget = new Catharsis\Web\YandexMoneyButtonWidget();
        $this->assertEquals(Catharsis\Web\YandexMoneyButtonType::WALLET, $widget->getType());
        $this->assertSame($widget, $widget->type('type'));
        $this->assertEquals('type', $widget->getType());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\YandexMoneyButtonWidget::__toString()}
     * method.
     * @return void
     */
    public function testToStringMethod()
    {
        $widget = new Catharsis\Web\YandexMoneyButtonWidget();
        $this->assertEmpty((string) $widget);

        $widget = new Catharsis\Web\YandexMoneyButtonWidget();
        $this->assertEmpty((string) $widget->description('description')->sum(1));

        $widget = new Catharsis\Web\YandexMoneyButtonWidget();
        $this->assertEmpty((string) $widget->account('account')->sum(1));

        $widget = new Catharsis\Web\YandexMoneyButtonWidget();
        $this->assertEmpty((string) $widget->account('account')->description('description'));

        $widget = new Catharsis\Web\YandexMoneyButtonWidget();
        $this->assertEquals(
            '<iframe allowtransparency="true" frameborder="0" height="54" scrolling="no"'
            .' src="https://money.yandex.ru/embed/small.xml?account=account&amp;quickpay=small&amp;yamoney-payment-type=on&amp;button-text=01&amp;button-size=l&amp;button-color=orange&amp;targets=description&amp;default-sum=1"'
            .' width="229"></iframe>',
            (string) $widget
                ->account('account')
                ->description('description')
                ->sum(1)
        );

        $widget = new Catharsis\Web\YandexMoneyButtonWidget();
        $this->assertEquals(
            '<iframe allowtransparency="true" frameborder="0" height="54" scrolling="no"'
            .' src="https://money.yandex.ru/embed/small.xml?account=account&amp;quickpay=small&amp;any-card-payment-type=on&amp;button-text=03&amp;button-size=m&amp;button-color=white&amp;targets=description&amp;default-sum=1&amp;fio=on&amp;mail=on&amp;phone=on&amp;address=on"'
            .' width="242"></iframe>',
            (string) $widget
                ->account('account')
                ->description('description')
                ->sum(1)
                ->type(Catharsis\Web\YandexMoneyButtonType::CARD)
                ->text(Catharsis\Web\YandexMoneyButtonText::TRANSFER)
                ->size(Catharsis\Web\YandexMoneyButtonSize::MEDIUM)
                ->color(Catharsis\Web\YandexMoneyButtonColor::WHITE)
                ->askPayerFullName(true)
                ->askPayerEmail(true)
                ->askPayerPhone(true)
                ->askPayerAddress(true)
        );
    }
}

?>
