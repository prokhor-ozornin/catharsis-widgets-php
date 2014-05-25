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
 * Tests set for class {@link \Catharsis\Web\MailRuLikeButtonWidget}
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class MailRuLikeButtonWidgetTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of class constructor(s).
     * @link \Catharsis\Web\MailRuLikeButtonWidget::__construct()
     * @return void
     */
    public function testConstructors()
    {
        $widget = new Catharsis\Web\MailRuLikeButtonWidget();
        $this->assertTrue($widget->getCounter());
        $this->assertEquals(Catharsis\Web\MailRuLikeButtonCounterPosition::RIGHT, $widget->getCounterPosition());
        $this->assertEquals(Catharsis\Web\MailRuLikeButtonLayout::FIRST, $widget->getLayout());
        $this->assertEquals(Catharsis\Web\MailRuLikeButtonSize::SIZE_20, $widget->getSize());
        $this->assertTrue($widget->getText());
        $this->assertEquals(Catharsis\Web\MailRuLikeButtonTextType::FIRST, $widget->getTextType());
        $this->assertEquals(Catharsis\Web\MailRuLikeButtonType::ALL, $widget->getType());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\MailRuLikeButtonWidget::counter(boolean $show)}
     * method.
     * @return void
     */
    public function testCounterMethod()
    {
        $widget = new Catharsis\Web\MailRuLikeButtonWidget();
        $this->assertTrue($widget->getCounter());
        $this->assertSame($widget, $widget->counter(false));
        $this->assertFalse($widget->getCounter());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\MailRuLikeButtonWidget::counterPosition(string $position)}
     * method.
     * @return void
     */
    public function testCounterPositionMethod()
    {
        $widget = new Catharsis\Web\MailRuLikeButtonWidget();
        $this->assertEquals(Catharsis\Web\MailRuLikeButtonCounterPosition::RIGHT, $widget->getCounterPosition());
        $this->assertSame($widget, $widget->counterPosition('counterPosition'));
        $this->assertEquals('counterPosition', $widget->getCounterPosition());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\MailRuLikeButtonWidget::layout(integer $layout)}
     * method.
     * @return void
     */
    public function testLayoutMethod()
    {
        $widget = new Catharsis\Web\MailRuLikeButtonWidget();
        $this->assertEquals(Catharsis\Web\MailRuLikeButtonLayout::FIRST, $widget->getLayout());
        $this->assertSame($widget, $widget->layout(0));
        $this->assertEquals(0, $widget->getLayout());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\MailRuLikeButtonWidget::size(string $size)}
     * method.
     * @return void
     */
    public function testSizeMethod()
    {
        $widget = new Catharsis\Web\MailRuLikeButtonWidget();
        $this->assertEquals(Catharsis\Web\MailRuLikeButtonSize::SIZE_20, $widget->getSize());
        $this->assertSame($widget, $widget->size('size'));
        $this->assertEquals('size', $widget->getSize());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\MailRuLikeButtonWidget::text(boolean $text)}
     * method.
     * @return void
     */
    public function testTextMethod()
    {
        $widget = new Catharsis\Web\MailRuLikeButtonWidget();
        $this->assertTrue($widget->getText());
        $this->assertSame($widget, $widget->text(false));
        $this->assertFalse($widget->getText());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\MailRuLikeButtonWidget::textType(integer $type)}
     * method.
     * @return void
     */
    public function testTextTypeMethod()
    {
        $widget = new Catharsis\Web\MailRuLikeButtonWidget();
        $this->assertEquals(Catharsis\Web\MailRuLikeButtonTextType::FIRST, $widget->getTextType());
        $this->assertSame($widget, $widget->textType(0));
        $this->assertEquals(0, $widget->getTextType());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\MailRuLikeButtonWidget::__toString()}
     * method.
     * @return void
     */
    public function testToStringMethod()
    {
        $widget = new Catharsis\Web\MailRuLikeButtonWidget();
        $this->assertEquals(
            '<a class="mrc__plugin_uber_like_button" data-mrc-config="{&quot;sz&quot;:&quot;20&quot;,&quot;st&quot;:1,&quot;tp&quot;:&quot;combo&quot;,&quot;cm&quot;:1,&quot;ck&quot;:1}"'
            .' href="http://connect.mail.ru/share" target="_blank">Нравится</a>',
            (string) $widget
        );

        $widget = new Catharsis\Web\MailRuLikeButtonWidget();
        $this->assertEquals(
            '<a class="mrc__plugin_uber_like_button"'
            .' data-mrc-config="{&quot;sz&quot;:&quot;30&quot;,&quot;st&quot;:2,&quot;tp&quot;:&quot;mm&quot;,&quot;vt&quot;:1,&quot;nt&quot;:1}"'
            .' href="http://connect.mail.ru/share" target="_blank">'
            .'Нравится</a>',
            (string) $widget
                ->size(Catharsis\Web\MailRuLikeButtonSize::SIZE_30)
                ->layout(Catharsis\Web\MailRuLikeButtonLayout::SECOND)
                ->type(Catharsis\Web\MailRuLikeButtonType::MAILRU)
                ->counter(true)
                ->counterPosition(Catharsis\Web\MailRuLikeButtonCounterPosition::UPPER)
                ->text(false)
        );
    }
}

?>
