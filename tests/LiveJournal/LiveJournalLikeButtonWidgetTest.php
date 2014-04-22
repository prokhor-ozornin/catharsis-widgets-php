<?php

/**
 * Tests set for class {@link Catharsis\Web\LiveJournalLikeButtonWidget}
 */
final class LiveJournalLikeButtonWidgetTest extends PHPUnit_Framework_TestCase
{
  /**
   * Performs testing of {@link Catharsis\Web\LiveJournalLikeButtonWidget::__toString()} method.
   */
  public function test_toString_method()
  {
    $widget = new Catharsis\Web\LiveJournalLikeButtonWidget();
    $this->assertEquals('<lj-like buttons="repost"/>', (string) $widget);
  }
}