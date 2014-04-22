<?php

/**
 * Tests set for class {@link Catharsis\Web\CackleLatestCommentsWidget}
 */
final class CackleLatestCommentsWidgetTest extends PHPUnit_Framework_TestCase
{
  /**
   * Performs testing of class constructor(s).
   * @link Catharsis\Web\CackleLatestCommentsWidget::__construct()
   */
  public function test_constructors()
  {
    $widget = new Catharsis\Web\CackleLatestCommentsWidget();
    $this->assertAttributeEmpty("account", $widget);
    $this->assertAttributeEquals(32, "avatar_size", $widget);
    $this->assertAttributeEquals(5, "max", $widget);
    $this->assertAttributeEquals(150, "text_size", $widget);
    $this->assertAttributeEquals(40, "title_size", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\CackleLatestCommentsWidget::account(string $account)} method.
   */
  public function test_account_method()
  {
    $widget = new Catharsis\Web\CackleLatestCommentsWidget();
    $this->assertAttributeEmpty("account", $widget);
    $this->assertSame($widget, $widget->account("account"));
    $this->assertAttributeEquals("account", "account", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\CackleLatestCommentsWidget::avatar_size(integer $size)} method.
   */
  public function test_avatar_size_method()
  {
    $widget = new Catharsis\Web\CackleLatestCommentsWidget();
    $this->assertAttributeEquals(32, "avatar_size", $widget);
    $this->assertSame($widget, $widget->avatar_size(1));
    $this->assertAttributeEquals(1, "avatar_size", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\CackleLatestCommentsWidget::max(integer $max)} method.
   */
  public function test_max_method()
  {
    $widget = new Catharsis\Web\CackleLatestCommentsWidget();
    $this->assertAttributeEquals(5, "max", $widget);
    $this->assertSame($widget, $widget->max(1));
    $this->assertAttributeEquals(1, "max", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\CackleLatestCommentsWidget::text_size(integer $size)} method.
   */
  public function test_text_size_method()
  {
    $widget = new Catharsis\Web\CackleLatestCommentsWidget();
    $this->assertAttributeEquals(150, "text_size", $widget);
    $this->assertSame($widget, $widget->text_size(1));
    $this->assertAttributeEquals(1, "text_size", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\CackleLatestCommentsWidget::title_size(integer $size)} method.
   */
  public function test_title_size_method()
  {
    $widget = new Catharsis\Web\CackleLatestCommentsWidget();
    $this->assertAttributeEquals(40, "title_size", $widget);
    $this->assertSame($widget, $widget->title_size(1));
    $this->assertAttributeEquals(1, "title_size", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\CackleLatestCommentsWidget::__toString()} method.
   */
  public function test_toString_method()
  {
    $widget = new Catharsis\Web\CackleLatestCommentsWidget();
    $this->assertEmpty((string) $widget);

    $widget = new Catharsis\Web\CackleLatestCommentsWidget();
    $html = (string) $widget->account("account");
    $this->assertContains('<div id="mc-last"></div>', $html);
    $this->assertContains('{"widget":"CommentRecent","id":"account","size":5,"avatarSize":32,"textSize":150,"titleSize":40}', $html);

    $widget = new Catharsis\Web\CackleLatestCommentsWidget();
    $html = (string) $widget->account("account")->max(1)->avatar_size(2)->text_size(3)->title_size(4);
    $this->assertContains('<div id="mc-last"></div>', $html);
    $this->assertContains('{"widget":"CommentRecent","id":"account","size":1,"avatarSize":2,"textSize":3,"titleSize":4}', $html);
  }
}