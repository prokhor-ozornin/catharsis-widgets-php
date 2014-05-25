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
 * Tests set for class {@link \Catharsis\Web\YandexMoneyDonateFormWidget}
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class YandexMoneyDonateFormWidgetTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of class constructor(s).
     * @link \Catharsis\Web\YandexMoneyDonateFormWidget::__construct()
     * @return void
     */
    public function testConstructors()
    {
        $widget = new Catharsis\Web\YandexMoneyDonateFormWidget();
        $this->assertEmpty($widget->getAccount());
        $this->assertFalse($widget->getAskPayerComment());
        $this->assertFalse($widget->getAskPayerEmail());
        $this->assertFalse($widget->getAskPayerFullName());
        $this->assertFalse($widget->getAskPayerPhone());
        $this->assertTrue($widget->getCards());
        $this->assertEmpty($widget->getCommentHint());
        $this->assertFalse($widget->getDescription());
        $this->assertEmpty($widget->getDescriptionText());
        $this->assertEmpty($widget->getProjectName());
        $this->assertEmpty($widget->getProjectSite());
        $this->assertEmpty($widget->getSum());
        $this->assertEquals(Catharsis\Web\YandexMoneyDonateFormText::DONATE, $widget->getText());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\YandexMoneyDonateFormWidget::account(string $account)}
     * method.
     * @return void
     */
    public function testAccountMethod()
    {
        $widget = new Catharsis\Web\YandexMoneyDonateFormWidget();
        $this->assertEmpty($widget->getAccount());
        $this->assertSame($widget, $widget->account('account'));
        $this->assertEquals('account', $widget->getAccount());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\YandexMoneyDonateFormWidget::askPayerComment(boolean $ask)}
     * method.
     * @return void
     */
    public function testAskPayerCommentMethod()
    {
        $widget = new Catharsis\Web\YandexMoneyDonateFormWidget();
        $this->assertFalse($widget->getAskPayerComment());
        $this->assertSame($widget, $widget->askPayerComment(true));
        $this->assertTrue($widget->getAskPayerComment());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\YandexMoneyDonateFormWidget::askPayerEmail(boolean $ask)}
     * method.
     * @return void
     */
    public function testAskPayerEmailMethod()
    {
        $widget = new Catharsis\Web\YandexMoneyDonateFormWidget();
        $this->assertFalse($widget->getAskPayerEmail());
        $this->assertSame($widget, $widget->askPayerEmail(true));
        $this->assertTrue($widget->getAskPayerEmail());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\YandexMoneyDonateFormWidget::askPayerFullName(boolean $ask)}
     * method.
     * @return void
     */
    public function testAskPayerFullNameMethod()
    {
        $widget = new Catharsis\Web\YandexMoneyDonateFormWidget();
        $this->assertFalse($widget->getAskPayerFullName());
        $this->assertSame($widget, $widget->askPayerFullName(true));
        $this->assertTrue($widget->getAskPayerFullName());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\YandexMoneyDonateFormWidget::askPayerPhone(boolean $ask)}
     * method.
     * @return void
     */
    public function testAskPayerPhoneMethod()
    {
        $widget = new Catharsis\Web\YandexMoneyDonateFormWidget();
        $this->assertFalse($widget->getAskPayerPhone());
        $this->assertSame($widget, $widget->askPayerPhone(true));
        $this->assertTrue($widget->getAskPayerPhone());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\YandexMoneyDonateFormWidget::cards(boolean $accept)}
     * method.
     * @return void
     */
    public function testCardsMethod()
    {
        $widget = new Catharsis\Web\YandexMoneyDonateFormWidget();
        $this->assertTrue($widget->getCards());
        $this->assertSame($widget, $widget->cards(false));
        $this->assertFalse($widget->getCards());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\YandexMoneyDonateFormWidget::payerCommentHint(string $hint)}
     * method.
     * @return void
     */
    public function testCommentHintMethod()
    {
        $widget = new Catharsis\Web\YandexMoneyDonateFormWidget();
        $this->assertEmpty($widget->getCommentHint());
        $this->assertSame($widget, $widget->commentHint('commentHint'));
        $this->assertEquals('commentHint', $widget->getCommentHint());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\YandexMoneyDonateFormWidget::description(boolean $show)}
     * method.
     * @return void
     */
    public function testDescriptionMethod()
    {
        $widget = new Catharsis\Web\YandexMoneyDonateFormWidget();
        $this->assertFalse($widget->getDescription());
        $this->assertSame($widget, $widget->description(true));
        $this->assertTrue($widget->getDescription());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\YandexMoneyDonateFormWidget::descriptiontext(string $description)}
     * method.
     * @return void
     */
    public function testDescriptionTextMethod()
    {
        $widget = new Catharsis\Web\YandexMoneyDonateFormWidget();
        $this->assertEmpty($widget->getDescriptionText());
        $this->assertSame($widget, $widget->descriptionText('description'));
        $this->assertEquals('description', $widget->getDescriptionText());
    }

    /**
     * Performs testing of
     * {@link\Catharsis\Web\YandexMoneyDonateFormWidget::projectName(string $name)}
     * method.
     * @return void
     */
    public function testProjectNameMethod()
    {
        $widget = new Catharsis\Web\YandexMoneyDonateFormWidget();
        $this->assertEmpty($widget->getProjectName());
        $this->assertSame($widget, $widget->projectName('projectName'));
        $this->assertEquals('projectName', $widget->getProjectName());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\YandexMoneyDonateFormWidget::projectSite(string $url)}
     * method.
     * @return void
     */
    public function testProjectSiteMethod()
    {
        $widget = new Catharsis\Web\YandexMoneyDonateFormWidget();
        $this->assertEmpty($widget->getProjectSite());
        $this->assertSame($widget, $widget->projectSite('projectSite'));
        $this->assertEquals('projectSite', $widget->getProjectSite());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\YandexMoneyDonateFormWidget::sum(float $sum)}
     * method.
     * @return void
     */
    public function testSumMethod()
    {
        $widget = new Catharsis\Web\YandexMoneyDonateFormWidget();
        $this->assertEmpty($widget->getSum());
        $this->assertSame($widget, $widget->sum(1));
        $this->assertEquals(1, $widget->getSum());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\YandexMoneyDonateFormWidget::text(integer $text)}
     * method.
     * @return void
     */
    public function testTextMethod()
    {
        $widget = new Catharsis\Web\YandexMoneyDonateFormWidget();
        $this->assertEquals(Catharsis\Web\YandexMoneyDonateFormText::DONATE, $widget->getText());
        $this->assertSame($widget, $widget->text(0));
        $this->assertEquals(0, $widget->getText());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\YandexMoneyDonateFormWidget::__toString()}
     * method.
     * @return void
     */
    public function testToStringMethod()
    {
        $widget = new Catharsis\Web\YandexMoneyDonateFormWidget();
        $this->assertEmpty((string) $widget);

        $widget = new Catharsis\Web\YandexMoneyDonateFormWidget();
        $this->assertEmpty((string) $widget->descriptionText('description'));

        $widget = new Catharsis\Web\YandexMoneyDonateFormWidget();
        $this->assertEmpty((string) $widget->account('account'));

        $widget = new Catharsis\Web\YandexMoneyDonateFormWidget();
        $this->assertEquals(
            '<iframe allowtransparency="true" frameborder="0" height="133" scrolling="no"'
            .' src="https://money.yandex.ru/embed/donate.xml?account=account&amp;quickpay=donate&amp;payment-type-choice=on&amp;default-sum=&amp;targets=description&amp;project-name=&amp;project-site=&amp;button-text=01"'
            .' width="523"></iframe>',
            (string) $widget
                ->account('account')
                ->descriptionText('description')
        );

        $widget = new Catharsis\Web\YandexMoneyDonateFormWidget();
        $this->assertEquals(
            '<iframe allowtransparency="true" frameborder="0" height="210" scrolling="no"'
            .' src="https://money.yandex.ru/embed/donate.xml?account=account&amp;quickpay=donate&amp;default-sum=1&amp;targets=description&amp;target-visibility=on&amp;project-name=project_name&amp;project-site=project_site&amp;button-text=03&amp;comment=on&amp;hint=comment_hint&amp;fio=on&amp;mail=on&amp;phone=on"'
            .' width="426"></iframe>',
            (string) $widget
                ->account('account')
                ->descriptionText('description')
                ->description(true)
                ->sum(1)
                ->cards(false)
                ->text(Catharsis\Web\YandexMoneyDonateFormText::TRANSFER)
                ->projectName('project_name')
                ->projectSite('project_site')
                ->askPayerComment(true)
                ->commentHint('comment_hint')
                ->askPayerFullName(true)
                ->askPayerEmail(true)
                ->askPayerPhone(true)
        );
    }
}

?>
