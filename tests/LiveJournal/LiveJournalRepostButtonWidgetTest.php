<?php

/**
 * Tests set for class {@link Catharsis\Web\LiveJournalRepostButtonWidget}
 */
final class LiveJournalRepostButtonWidgetTest extends PHPUnit_Framework_TestCase
{
  /**
   * Performs testing of class constructor(s).
   * @link Catharsis\Web\LiveJournalRepostButtonWidget::__construct()
   */
  public function test_constructors()
  {
    $widget = new Catharsis\Web\LiveJournalRepostButtonWidget();
    $this->assertAttributeEmpty("text", $widget);
    $this->assertAttributeEmpty("title", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\LiveJournalRepostButtonWidget::text(string $text)} method.
   */
  public function test_text_method()
  {
    $widget = new Catharsis\Web\LiveJournalRepostButtonWidget();
    $this->assertAttributeEmpty("text", $widget);
    $this->assertSame($widget, $widget->text("text"));
    $this->assertAttributeEquals("text", "text", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\LiveJournalRepostButtonWidget::title(string $title)} method.
   */
  public function test_title_method()
  {
    $widget = new Catharsis\Web\LiveJournalRepostButtonWidget();
    $this->assertAttributeEmpty("title", $widget);
    $this->assertSame($widget, $widget->title("title"));
    $this->assertAttributeEquals("title", "title", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\LiveJournalRepostButtonWidget::__toString()} method.
   */
  public function test_toString_method()
  {
    $widget = new Catharsis\Web\LiveJournalRepostButtonWidget();
    $this->assertEquals("<lj-repost></lj-repost>", (string) $widget);

    $widget = new Catharsis\Web\LiveJournalRepostButtonWidget();
    $this->assertEquals('<lj-repost button="title"></lj-repost>', (string) $widget->title("title"));

    $widget = new Catharsis\Web\LiveJournalRepostButtonWidget();
    $this->assertEquals('<lj-repost button="title">text</lj-repost>', (string) $widget->title("title")->text("text"));
  }
}