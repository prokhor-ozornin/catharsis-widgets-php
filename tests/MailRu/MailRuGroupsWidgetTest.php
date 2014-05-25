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
 * Tests set for class {@link \Catharsis\Web\MailRuGroupsWidget}
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class MailRuGroupsWidgetTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of class constructor(s).
     * @link \Catharsis\Web\MailRuGroupsWidget::__construct()
     * @return void
     */
    public function testConstructors()
    {
        $widget = new Catharsis\Web\MailRuGroupsWidget();
        $this->assertEmpty($widget->getAccount());
        $this->assertEmpty($widget->getBackgroundColor());
        $this->assertEmpty($widget->getButtonColor());
        $this->assertEmpty($widget->getDomain());
        $this->assertEmpty($widget->getHeight());
        $this->assertTrue($widget->getSubscribers());
        $this->assertEmpty($widget->getTextColor());
        $this->assertEmpty($widget->getWidth());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\MailRuGroupsWidget::account(string $account)}
     * method.
     * @return void
     */
    public function testAccountMethod()
    {
        $widget = new Catharsis\Web\MailRuGroupsWidget();
        $this->assertEmpty($widget->getAccount());
        $this->assertSame($widget, $widget->account('account'));
        $this->assertEquals('account', $widget->getAccount());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\MailRuGroupsWidget::backgroundColor(string $color)}
     * method.
     * @return void
     */
    public function testBackgroundColorMethod()
    {
        $widget = new Catharsis\Web\MailRuGroupsWidget();
        $this->assertEmpty($widget->getBackgroundColor());
        $this->assertSame($widget, $widget->backgroundColor('backgroundColor'));
        $this->assertEquals('backgroundColor', $widget->getBackgroundColor());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\MailRuGroupsWidget::buttonColor(string $color)}
     * method.
     * @return void
     */
    public function testButtonColorMethod()
    {
        $widget = new Catharsis\Web\MailRuGroupsWidget();
        $this->assertEmpty($widget->getButtonColor());
        $this->assertSame($widget, $widget->buttonColor('buttonColor'));
        $this->assertEquals('buttonColor', $widget->getButtonColor());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\MailRuGroupsWidget::domain(string $domain)}
     * method.
     * @return void
     */
    public function testDomainMethod()
    {
        $widget = new Catharsis\Web\MailRuGroupsWidget();
        $this->assertEmpty($widget->getDomain());
        $this->assertSame($widget, $widget->domain('domain'));
        $this->assertEquals('domain', $widget->getDomain());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\MailRuGroupsWidget::height(string $height)}
     * method.
     * @return void
     */
    public function testHeightMethod()
    {
        $widget = new Catharsis\Web\MailRuGroupsWidget();
        $this->assertEmpty($widget->getHeight());
        $this->assertSame($widget, $widget->height('height'));
        $this->assertEquals('height', $widget->getHeight());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\MailRuGroupsWidget::subscribers(boolean $show)}
     * method.
     * @return void
     */
    public function testSubscribersMethod()
    {
        $widget = new Catharsis\Web\MailRuGroupsWidget();
        $this->assertTrue($widget->getSubscribers());
        $this->assertSame($widget, $widget->subscribers(false));
        $this->assertFalse($widget->getSubscribers());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\MailRuGroupsWidget::textColor(string $color)}
     * method.
     * @return void
     */
    public function testTextColorMethod()
    {
        $widget = new Catharsis\Web\MailRuGroupsWidget();
        $this->assertEmpty($widget->getTextColor());
        $this->assertSame($widget, $widget->textColor('textColor'));
        $this->assertEquals('textColor', $widget->getTextColor());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\MailRuGroupsWidget::width(string $width)}
     * method.
     * @return void
     */
    public function testWidthMethod()
    {
        $widget = new Catharsis\Web\MailRuGroupsWidget();
        $this->assertEmpty($widget->getWidth());
        $this->assertSame($widget, $widget->width('width'));
        $this->assertEquals('width', $widget->getWidth());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\MailRuGroupsWidget::__toString()}
     * method.
     * @return void
     */
    public function testToStringMethod()
    {
        $widget = new Catharsis\Web\MailRuGroupsWidget();
        $this->assertEmpty((string) $widget);

        $widget = new Catharsis\Web\MailRuGroupsWidget();
        $this->assertEmpty((string) $widget->account('account')->width('width'));

        $widget = new Catharsis\Web\MailRuGroupsWidget();
        $this->assertEmpty((string) $widget->account('account')->height('height'));

        $widget = new Catharsis\Web\MailRuGroupsWidget();
        $this->assertEmpty((string) $widget->width('width')->height('height'));

        $widget = new Catharsis\Web\MailRuGroupsWidget();
        $this->assertEquals(
            '<a class="mrc__plugin_groups_widget"'
            .' href="http://connect.mail.ru/groups_widget?group=account&amp;max_sub=50&amp;width=width&amp;height=height&amp;show_subscribers=true"'
            .' rel="{&quot;group&quot;:&quot;account&quot;,&quot;max_sub&quot;:50,&quot;width&quot;:&quot;width&quot;,&quot;height&quot;:&quot;height&quot;,&quot;show_subscribers&quot;:&quot;true&quot;}"'
            .' target="_blank">'
            .'Группы</a>',
            (string) $widget->account('account')->width('width')->height('height')
        );

        $widget = new Catharsis\Web\MailRuGroupsWidget();
        $this->assertEquals(
            '<a class="mrc__plugin_groups_widget"'
            .' href="http://connect.mail.ru/groups_widget?group=account&amp;max_sub=50&amp;width=width&amp;height=height&amp;background=background_color&amp;color=text_color&amp;button_background=button_color&amp;domain=domain"'
            .' rel="{&quot;group&quot;:&quot;account&quot;,&quot;max_sub&quot;:50,&quot;width&quot;:&quot;width&quot;,&quot;height&quot;:&quot;height&quot;,&quot;background&quot;:&quot;background_color&quot;,&quot;color&quot;:&quot;text_color&quot;,&quot;button_background&quot;:&quot;button_color&quot;,&quot;domain&quot;:&quot;domain&quot;}"'
            .' target="_blank">'
            .'Группы</a>',
            (string) $widget
                ->account('account')
                ->width('width')
                ->height('height')
                ->subscribers(false)
                ->backgroundColor('background_color')
                ->textColor('text_color')
                ->buttonColor('button_color')
                ->domain('domain')
        );
    }
}

?>
