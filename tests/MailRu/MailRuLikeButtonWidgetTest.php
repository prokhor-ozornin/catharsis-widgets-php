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
    $this->assertAttributeEquals(true, "counter", $widget);
    $this->assertAttributeEquals(Catharsis\Web\MailRuLikeButtonCounterPosition::Right, "counter_position", $widget);
    $this->assertAttributeEquals(Catharsis\Web\MailRuLikeButtonLayout::First, "layout", $widget);
    $this->assertAttributeEquals(Catharsis\Web\MailRuLikeButtonSize::Size20, "size", $widget);
    $this->assertAttributeEquals(true, "text", $widget);
    $this->assertAttributeEquals(Catharsis\Web\MailRuLikeButtonTextType::First, "text_type", $widget);
    $this->assertAttributeEquals(Catharsis\Web\MailRuLikeButtonType::All, "type", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\MailRuLikeButtonWidget::counter(boolean $counter)} method.
   */
  public function test_counter_method()
  {
    $widget = new Catharsis\Web\MailRuLikeButtonWidget();
    $this->assertAttributeEquals(true, "counter", $widget);
    $this->assertSame($widget, $widget->counter(false));
    $this->assertAttributeEquals(false, "counter", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\MailRuLikeButtonWidget::counter_position(string $position)} method.
   */
  public function test_counter_position_method()
  {
    $widget = new Catharsis\Web\MailRuLikeButtonWidget();
    $this->assertAttributeEquals(Catharsis\Web\MailRuLikeButtonCounterPosition::Right, "counter_position", $widget);
    $this->assertSame($widget, $widget->counter_position("counter_position"));
    $this->assertAttributeEquals("counter_position", "counter_position", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\MailRuLikeButtonWidget::layout(integer $layout)} method.
   */
  public function test_layout_method()
  {
    $widget = new Catharsis\Web\MailRuLikeButtonWidget();
    $this->assertAttributeEquals(Catharsis\Web\MailRuLikeButtonLayout::First, "layout", $widget);
    $this->assertSame($widget, $widget->layout(0));
    $this->assertAttributeEquals(0, "layout", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\MailRuLikeButtonWidget::size(string $size)} method.
   */
  public function test_size_method()
  {
    $widget = new Catharsis\Web\MailRuLikeButtonWidget();
    $this->assertAttributeEquals(Catharsis\Web\MailRuLikeButtonSize::Size20, "size", $widget);
    $this->assertSame($widget, $widget->size("size"));
    $this->assertAttributeEquals("size", "size", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\MailRuLikeButtonWidget::text(boolean $text)} method.
   */
  public function test_text_method()
  {
    $widget = new Catharsis\Web\MailRuLikeButtonWidget();
    $this->assertAttributeEquals(true, "text", $widget);
    $this->assertSame($widget, $widget->text(false));
    $this->assertAttributeEquals(false, "text", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\MailRuLikeButtonWidget::text_type(integer $type)} method.
   */
  public function test_text_type_method()
  {
    $widget = new Catharsis\Web\MailRuLikeButtonWidget();
    $this->assertAttributeEquals(Catharsis\Web\MailRuLikeButtonTextType::First, "text_type", $widget);
    $this->assertSame($widget, $widget->text_type(0));
    $this->assertAttributeEquals(0, "text_type", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\MailRuLikeButtonWidget::__toString()} method.
   */
  public function test_toString_method()
  {
    $widget = new Catharsis\Web\MailRuLikeButtonWidget();
    $this->assertEquals('<a class="mrc__plugin_uber_like_button" data-mrc-config="{&quot;sz&quot;:&quot;20&quot;,&quot;st&quot;:1,&quot;tp&quot;:&quot;combo&quot;,&quot;cm&quot;:1,&quot;ck&quot;:1}" href="http://connect.mail.ru/share" target="_blank">Нравится</a>', (string) $widget);

    $widget = new Catharsis\Web\MailRuLikeButtonWidget();
    $this->assertEquals('<a class="mrc__plugin_uber_like_button" data-mrc-config="{&quot;sz&quot;:&quot;30&quot;,&quot;st&quot;:2,&quot;tp&quot;:&quot;mm&quot;,&quot;vt&quot;:1,&quot;nt&quot;:1}" href="http://connect.mail.ru/share" target="_blank">Нравится</a>', (string) $widget->size(Catharsis\Web\MailRuLikeButtonSize::Size30)->layout(Catharsis\Web\MailRuLikeButtonLayout::Second)->type(Catharsis\Web\MailRuLikeButtonType::MailRu)->counter()->counter_position(Catharsis\Web\MailRuLikeButtonCounterPosition::Upper)->text(false));
  }
}