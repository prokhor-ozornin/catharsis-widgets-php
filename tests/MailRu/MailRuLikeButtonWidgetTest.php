<?php

/**
 * Tests set for class {@link Catharsis\Web\MailRuLikeButtonWidget}
 */
final class MailRuLikeButtonWidgetTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of class constructor(s).
     * @link Catharsis\Web\MailRuLikeButtonWidget::__construct()
     */
    public function test_constructors()
    {
        $widget = new Catharsis\Web\MailRuLikeButtonWidget();
        $this->assertAttributeEquals(true, "_counter", $widget);
        $this->assertAttributeEquals(Catharsis\Web\MailRuLikeButtonCounterPosition::Right, "_counterPosition", $widget);
        $this->assertAttributeEquals(Catharsis\Web\MailRuLikeButtonLayout::First, "_layout", $widget);
        $this->assertAttributeEquals(Catharsis\Web\MailRuLikeButtonSize::Size20, "_size", $widget);
        $this->assertAttributeEquals(true, "_text", $widget);
        $this->assertAttributeEquals(Catharsis\Web\MailRuLikeButtonTextType::First, "_textType", $widget);
        $this->assertAttributeEquals(Catharsis\Web\MailRuLikeButtonType::All, "_type", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\MailRuLikeButtonWidget::counter(boolean $show)} method.
     */
    public function test_counter_method()
    {
        $widget = new Catharsis\Web\MailRuLikeButtonWidget();
        $this->assertAttributeEquals(true, "_counter", $widget);
        $this->assertSame($widget, $widget->counter(false));
        $this->assertAttributeEquals(false, "_counter", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\MailRuLikeButtonWidget::counterPosition(string $position)} method.
     */
    public function test_counterPosition_method()
    {
        $widget = new Catharsis\Web\MailRuLikeButtonWidget();
        $this->assertAttributeEquals(Catharsis\Web\MailRuLikeButtonCounterPosition::Right, "_counterPosition", $widget);
        $this->assertSame($widget, $widget->counterPosition("counterPosition"));
        $this->assertAttributeEquals("counterPosition", "_counterPosition", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\MailRuLikeButtonWidget::layout(integer $layout)} method.
     */
    public function test_layout_method()
    {
        $widget = new Catharsis\Web\MailRuLikeButtonWidget();
        $this->assertAttributeEquals(Catharsis\Web\MailRuLikeButtonLayout::First, "_layout", $widget);
        $this->assertSame($widget, $widget->layout(0));
        $this->assertAttributeEquals(0, "_layout", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\MailRuLikeButtonWidget::size(string $size)} method.
     */
    public function test_size_method()
    {
        $widget = new Catharsis\Web\MailRuLikeButtonWidget();
        $this->assertAttributeEquals(Catharsis\Web\MailRuLikeButtonSize::Size20, "_size", $widget);
        $this->assertSame($widget, $widget->size("size"));
        $this->assertAttributeEquals("size", "_size", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\MailRuLikeButtonWidget::text(boolean $text)} method.
     */
    public function test_text_method()
    {
        $widget = new Catharsis\Web\MailRuLikeButtonWidget();
        $this->assertAttributeEquals(true, "_text", $widget);
        $this->assertSame($widget, $widget->text(false));
        $this->assertAttributeEquals(false, "_text", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\MailRuLikeButtonWidget::textType(integer $type)} method.
     */
    public function test_textType_method()
    {
        $widget = new Catharsis\Web\MailRuLikeButtonWidget();
        $this->assertAttributeEquals(Catharsis\Web\MailRuLikeButtonTextType::First, "_textType", $widget);
        $this->assertSame($widget, $widget->textType(0));
        $this->assertAttributeEquals(0, "_textType", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\MailRuLikeButtonWidget::__toString()} method.
     */
    public function test_toString_method()
    {
        $widget = new Catharsis\Web\MailRuLikeButtonWidget();
        $this->assertEquals('<a class="mrc__plugin_uber_like_button" data-mrc-config="{&quot;sz&quot;:&quot;20&quot;,&quot;st&quot;:1,&quot;tp&quot;:&quot;combo&quot;,&quot;cm&quot;:1,&quot;ck&quot;:1}" href="http://connect.mail.ru/share" target="_blank">Нравится</a>',
                            (string) $widget);

        $widget = new Catharsis\Web\MailRuLikeButtonWidget();
        $this->assertEquals('<a class="mrc__plugin_uber_like_button" data-mrc-config="{&quot;sz&quot;:&quot;30&quot;,&quot;st&quot;:2,&quot;tp&quot;:&quot;mm&quot;,&quot;vt&quot;:1,&quot;nt&quot;:1}" href="http://connect.mail.ru/share" target="_blank">Нравится</a>',
                            (string) $widget->size(Catharsis\Web\MailRuLikeButtonSize::Size30)->layout(Catharsis\Web\MailRuLikeButtonLayout::Second)->type(Catharsis\Web\MailRuLikeButtonType::MailRu)->counter()->counterPosition(Catharsis\Web\MailRuLikeButtonCounterPosition::Upper)->text(false));
    }
}

?>
