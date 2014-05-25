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
 * Tests set for class {@link \Catharsis\Web\MailRuFacesWidget}
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class MailRuFacesWidgetTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of class constructor(s).
     * @link \Catharsis\Web\MailRuFacesWidget::__construct()
     * @return void
     */
    public function testConstructors()
    {
        $widget = new Catharsis\Web\MailRuFacesWidget();
        $this->assertEmpty($widget->getBackgroundColor());
        $this->assertEmpty($widget->getBorderColor());
        $this->assertEmpty($widget->getDomain());
        $this->assertEquals(Catharsis\Web\MailRuFacesFont::ARIAL, $widget->getFont());
        $this->assertEmpty($widget->getHeight());
        $this->assertEmpty($widget->getHyperlinkColor());
        $this->assertEmpty($widget->getTextColor());
        $this->assertTrue($widget->getTitle());
        $this->assertEmpty($widget->getTitleColor());
        $this->assertEmpty($widget->getTitleText());
        $this->assertEmpty($widget->getWidth());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\MailRuFacesWidget::backgroundColor(string $color)}
     * method.
     * @return void
     */
    public function testBackgroundColorMethod()
    {
        $widget = new Catharsis\Web\MailRuFacesWidget();
        $this->assertEmpty($widget->getBackgroundColor());
        $this->assertSame($widget, $widget->backgroundColor('backgroundColor'));
        $this->assertEquals('backgroundColor', $widget->getBackgroundColor());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\MailRuFacesWidget::borderColor(string $color)}
     * method.
     * @return void
     */
    public function testBorderColorMethod()
    {
        $widget = new Catharsis\Web\MailRuFacesWidget();
        $this->assertEmpty($widget->getBorderColor());
        $this->assertSame($widget, $widget->borderColor('borderColor'));
        $this->assertEquals('borderColor', $widget->getBorderColor());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\MailRuFacesWidget::domain(string $domain)}
     * method.
     * @return void
     */
    public function testDomainMethod()
    {
        $widget = new Catharsis\Web\MailRuFacesWidget();
        $this->assertEmpty($widget->getDomain());
        $this->assertSame($widget, $widget->domain('domain'));
        $this->assertEquals('domain', $widget->getDomain());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\MailRuFacesWidget::font(string $font)}
     * method.
     * @return void
     */
    public function testFontMethod()
    {
        $widget = new Catharsis\Web\MailRuFacesWidget();
        $this->assertEquals(Catharsis\Web\MailRuFacesFont::ARIAL, $widget->getFont());
        $this->assertSame($widget, $widget->font("font"));
        $this->assertEquals('font', $widget->getFont());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\MailRuFacesWidget::height(string $height)}
     * method.
     * @return void
     */
    public function testHeightMethod()
    {
        $widget = new Catharsis\Web\MailRuFacesWidget();
        $this->assertEmpty($widget->getHeight());
        $this->assertSame($widget, $widget->height('height'));
        $this->assertEquals('height', $widget->getHeight());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\MailRuFacesWidget::hyperlinkColor(string $color)}
     * method.
     * @return void
     */
    public function testHyperlinkColorMethod()
    {
        $widget = new Catharsis\Web\MailRuFacesWidget();
        $this->assertEmpty($widget->getHyperlinkColor());
        $this->assertSame($widget, $widget->hyperlinkColor('hyperlinkColor'));
        $this->assertEquals('hyperlinkColor', $widget->getHyperlinkColor());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\MailRuFacesWidget::textColor(string $color)}
     * method.
     * @return void
     */
    public function testTextColorMethod()
    {
        $widget = new Catharsis\Web\MailRuFacesWidget();
        $this->assertEmpty($widget->getTextColor());
        $this->assertSame($widget, $widget->textColor('textColor'));
        $this->assertEquals('textColor', $widget->getTextColor());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\MailRuFacesWidget::title(boolean $show)}
     * method.
     * @return void
     */
    public function testTitleMethod()
    {
        $widget = new Catharsis\Web\MailRuFacesWidget();
        $this->assertTrue($widget->getTitle());
        $this->assertSame($widget, $widget->title(false));
        $this->assertFalse($widget->getTitle());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\MailRuFacesWidget::titleColor(string $color)}
     * method.
     * @return void
     */
    public function testTitleColorMethod()
    {
        $widget = new Catharsis\Web\MailRuFacesWidget();
        $this->assertEmpty($widget->getTitleColor());
        $this->assertSame($widget, $widget->titleColor('titleColor'));
        $this->assertEquals('titleColor', $widget->getTitleColor());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\MailRuFacesWidget::titleText(string $title)}
     * method.
     * @return void
     */
    public function testTitleTextMethod()
    {
        $widget = new Catharsis\Web\MailRuFacesWidget();
        $this->assertEmpty($widget->getTitleText());
        $this->assertSame($widget, $widget->titleText('titleText'));
        $this->assertEquals('titleText', $widget->getTitleText());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\MailRuFacesWidget::width(string $width)}
     * method.
     * @return void
     */
    public function testWidthMethod()
    {
        $widget = new Catharsis\Web\MailRuFacesWidget();
        $this->assertEmpty($widget->getWidth());
        $this->assertSame($widget, $widget->width('width'));
        $this->assertEquals('width', $widget->getWidth());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\MailRuFacesWidget::__toString()}
     * method.
     * @return void
     */
    public function testToStringMethod()
    {
        $widget = new Catharsis\Web\MailRuFacesWidget();
        $this->assertEmpty((string) $widget);

        $widget = new Catharsis\Web\MailRuFacesWidget();
        $this->assertEmpty((string) $widget->domain('domain')->width('width'));

        $widget = new Catharsis\Web\MailRuFacesWidget();
        $this->assertEmpty((string) $widget->domain('domain')->height('height'));

        $widget = new Catharsis\Web\MailRuFacesWidget();
        $this->assertEmpty((string) $widget->width('width')->height('height'));

        $widget = new Catharsis\Web\MailRuFacesWidget();
        $this->assertEquals(
            '<a class="mrc__plugin_share_friends"'
            .' href="http://connect.mail.ru/share_friends?domain=domain&amp;font=Arial&amp;width=width&amp;height=height"'
            .' rel="{&quot;domain&quot;:&quot;domain&quot;,&quot;font&quot;:&quot;Arial&quot;,&quot;width&quot;:&quot;width&quot;,&quot;height&quot;:&quot;height&quot;}">'
            .'Друзья</a>',
            (string) $widget->domain('domain')->width('width')->height('height')
        );

        $widget = new Catharsis\Web\MailRuFacesWidget();
        $this->assertEquals(
            '<a class="mrc__plugin_share_friends"'
            .' href="http://connect.mail.ru/share_friends?domain=domain&amp;font=Arial&amp;width=width&amp;height=height&amp;title=title&amp;notitle=true&amp;title-color=title_color&amp;background=background_color&amp;border=border_color&amp;color=text_color&amp;link-color=hyperlink_color"'
            .' rel="{&quot;domain&quot;:&quot;domain&quot;,&quot;font&quot;:&quot;Arial&quot;,&quot;width&quot;:&quot;width&quot;,&quot;height&quot;:&quot;height&quot;,&quot;title&quot;:&quot;title&quot;,&quot;notitle&quot;:&quot;true&quot;,&quot;title-color&quot;:&quot;title_color&quot;,&quot;background&quot;:&quot;background_color&quot;,&quot;border&quot;:&quot;border_color&quot;,&quot;color&quot;:&quot;text_color&quot;,&quot;link-color&quot;:&quot;hyperlink_color&quot;}">'
            .'Друзья</a>',
            (string) $widget
                ->domain('domain')
                ->width('width')
                ->height('height')
                ->titleText('title')
                ->title(false)
                ->titleColor('title_color')
                ->backgroundColor('background_color')
                ->borderColor('border_color')
                ->textColor('text_color')
                ->hyperlinkColor('hyperlink_color')
        );
    }
}

?>
