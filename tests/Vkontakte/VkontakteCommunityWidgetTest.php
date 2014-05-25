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
 * Tests set for class {@link \Catharsis\Web\VkontakteCommunityWidget}
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class VkontakteCommunityWidgetTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of class constructor(s).
     * @link \Catharsis\Web\VkontakteCommunityWidget::__construct()
     * @return void
     */
    public function testConstructors()
    {
        $widget = new Catharsis\Web\VkontakteCommunityWidget();
        $this->assertEmpty($widget->getAccount());
        $this->assertEmpty($widget->getBackgroundColor());
        $this->assertEmpty($widget->getButtonColor());
        $this->assertEmpty($widget->getElementId());
        $this->assertEmpty($widget->getHeight());
        $this->assertEquals(Catharsis\Web\VkontakteCommunityMode::PARTICIPANTS, $widget->getMode());
        $this->assertEmpty($widget->getTextColor());
        $this->assertEmpty($widget->getWidth());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\VkontakteCommunityWidget::account(string $account)}
     * method.
     * @return void
     */
    public function testAccountMethod()
    {
        $widget = new Catharsis\Web\VkontakteCommunityWidget();
        $this->assertEmpty($widget->getAccount());
        $this->assertSame($widget, $widget->account('account'));
        $this->assertEquals('account', $widget->getAccount());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\VkontakteCommunityWidget::backgroundColor(string $color)}
     * method.
     * @return void
     */
    public function testBackgroundColorMethod()
    {
        $widget = new Catharsis\Web\VkontakteCommunityWidget();
        $this->assertEmpty($widget->getBackgroundColor());
        $this->assertSame($widget, $widget->backgroundColor('backgroundColor'));
        $this->assertEquals('backgroundColor', $widget->getBackgroundColor());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\VkontakteCommunityWidget::buttonColor(string $color)}
     * method.
     * @return void
     */
    public function testButtonColorMethod()
    {
        $widget = new Catharsis\Web\VkontakteCommunityWidget();
        $this->assertEmpty($widget->getButtonColor());
        $this->assertSame($widget, $widget->buttonColor('buttonColor'));
        $this->assertEquals('buttonColor', $widget->getButtonColor());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\VkontakteCommunityWidget::elementId(string $id)}
     * method.
     * @return void
     */
    public function testElementIdMethod()
    {
        $widget = new Catharsis\Web\VkontakteCommunityWidget();
        $this->assertEmpty($widget->getElementId());
        $this->assertSame($widget, $widget->elementId('elementId'));
        $this->assertEquals('elementId', $widget->getElementId());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\VkontakteCommunityWidget::height(string $height)}
     * method.
     * @return void
     */
    public function testHeightMethod()
    {
        $widget = new Catharsis\Web\VkontakteCommunityWidget();
        $this->assertEmpty($widget->getHeight());
        $this->assertSame($widget, $widget->height('height'));
        $this->assertEquals('height', $widget->getHeight());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\VkontakteCommunityWidget::mode(integer $mode)}
     * method.
     * @return void
     */
    public function testModeMethod()
    {
        $widget = new Catharsis\Web\VkontakteCommunityWidget();
        $this->assertEquals(Catharsis\Web\VkontakteCommunityMode::PARTICIPANTS, $widget->getMode());
        $this->assertSame($widget, $widget->mode(0));
        $this->assertEquals(0, $widget->getMode());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\VkontakteCommunityWidget::textColor(string $color)}
     * method.
     * @return void
     */
    public function testTextColorMethod()
    {
        $widget = new Catharsis\Web\VkontakteCommunityWidget();
        $this->assertEmpty($widget->getTextColor());
        $this->assertSame($widget, $widget->textColor('textColor'));
        $this->assertEquals('textColor', $widget->getTextColor());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\VkontakteCommunityWidget::width(string $width)}
     * method.
     * @return void
     */
    public function testWidthMethod()
    {
        $widget = new Catharsis\Web\VkontakteCommunityWidget();
        $this->assertEmpty($widget->getWidth());
        $this->assertSame($widget, $widget->width('width'));
        $this->assertEquals('width', $widget->getWidth());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\VkontakteCommunityWidget::__toString()}
     * method.
     * @return void
     */
    public function testToStringMethod()
    {
        $widget = new Catharsis\Web\VkontakteCommunityWidget();
        $this->assertEmpty((string) $widget);

        $widget = new Catharsis\Web\VkontakteCommunityWidget();
        $html = (string) $widget->account('account');
        $this->assertContains('<div id="vk_groups_account"></div>', $html);
        $this->assertContains('<script type="text/javascript">', $html);
        $this->assertContains(
            'VK.Widgets.Group("vk_groups_account", {"mode":0}, "account");',
            $html
        );

        $widget = new Catharsis\Web\VkontakteCommunityWidget();
        $html = (string) $widget
            ->account('account')
            ->account('account')
            ->width('width')
            ->height('height')
            ->mode(Catharsis\Web\VkontakteCommunityMode::NEWS)
            ->elementId('elementId')
            ->backgroundColor('backgroundColor')
            ->textColor('textColor')
            ->buttonColor('buttonColor');
        $this->assertContains('<div id="elementId"></div>', $html);
        $this->assertContains('<script type="text/javascript">', $html);
        $this->assertContains(
            'VK.Widgets.Group("elementId", {"mode":2,"wide":1,"width":"width","height":"height","color1":"backgroundColor","color2":"textColor","color3":"buttonColor"}, "account");',
            $html
        );
    }
}

?>
