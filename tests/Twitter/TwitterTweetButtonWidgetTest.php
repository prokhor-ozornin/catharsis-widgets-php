<?php

/**
 * Tests set for class {@link Catharsis\Web\TwitterTweetButtonWidget}
 */
final class TwitterTweetButtonWidgetTest extends PHPUnit_Framework_TestCase
{
  /**
   * Performs testing of class constructor(s).
   * @link Catharsis\Web\TwitterTweetButtonWidget::__construct()
   */
  public function test_constructors()
  {
    $widget = new Catharsis\Web\TwitterTweetButtonWidget();
    $this->assertAttributeEmpty("count_position", $widget);
    $this->assertAttributeEmpty("count_url", $widget);
    $this->assertAttributeEmpty("language", $widget);
    $this->assertAttributeEmpty("opt_out", $widget);
    $this->assertAttributeEmpty("related_accounts", $widget);
    $this->assertAttributeEmpty("size", $widget);
    $this->assertAttributeEmpty("tags", $widget);
    $this->assertAttributeEmpty("text", $widget);
    $this->assertAttributeEmpty("url", $widget);
    $this->assertAttributeEmpty("via", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\TwitterTweetButtonWidget::counter_position(string $position)} method.
   */
  public function test_count_position_method()
  {
    $widget = new Catharsis\Web\TwitterTweetButtonWidget();
    $this->assertAttributeEmpty("count_position", $widget);
    $this->assertSame($widget, $widget->count_position("count_position"));
    $this->assertAttributeEquals("count_position", "count_position", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\TwitterTweetButtonWidget::count_url(string $url)} method.
   */
  public function test_count_url_method()
  {
    $widget = new Catharsis\Web\TwitterTweetButtonWidget();
    $this->assertAttributeEmpty("count_url", $widget);
    $this->assertSame($widget, $widget->count_url("count_url"));
    $this->assertAttributeEquals("count_url", "count_url", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\TwitterTweetButtonWidget::hash_tags(array $tags)} method.
   */
  public function test_hash_tags_method()
  {
    $widget = new Catharsis\Web\TwitterTweetButtonWidget();
    $this->assertAttributeEmpty("tags", $widget);
    $this->assertSame($widget, $widget->hash_tags(array("tag")));
    $this->assertAttributeEquals(array("tag"), "tags", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\TwitterTweetButtonWidget::language(string $language)} method.
   */
  public function test_language_method()
  {
    $widget = new Catharsis\Web\TwitterTweetButtonWidget();
    $this->assertAttributeEmpty("language", $widget);
    $this->assertSame($widget, $widget->language("language"));
    $this->assertAttributeEquals("language", "language", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\TwitterTweetButtonWidget::opt_out(boolean $opt_out)} method.
   */
  public function test_opt_out_method()
  {
    $widget = new Catharsis\Web\TwitterTweetButtonWidget();
    $this->assertAttributeEmpty("opt_out", $widget);
    $this->assertSame($widget, $widget->opt_out());
    $this->assertAttributeEquals(true, "opt_out", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\TwitterTweetButtonWidget::related_accounts(array $accounts)} method.
   */
  public function test_related_accounts_method()
  {
    $widget = new Catharsis\Web\TwitterTweetButtonWidget();
    $this->assertAttributeEmpty("related_accounts", $widget);
    $this->assertSame($widget, $widget->related_accounts(array("account")));
    $this->assertAttributeEquals(array("account"), "related_accounts", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\TwitterTweetButtonWidget::size(string $size)} method.
   */
  public function test_size_method()
  {
    $widget = new Catharsis\Web\TwitterTweetButtonWidget();
    $this->assertAttributeEmpty("size", $widget);
    $this->assertSame($widget, $widget->size("size"));
    $this->assertAttributeEquals("size", "size", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\TwitterTweetButtonWidget::text(string $text)} method.
   */
  public function test_text_method()
  {
    $widget = new Catharsis\Web\TwitterTweetButtonWidget();
    $this->assertAttributeEmpty("text", $widget);
    $this->assertSame($widget, $widget->text("text"));
    $this->assertAttributeEquals("text", "text", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\TwitterTweetButtonWidget::url(string $url)} method.
   */
  public function test_url_method()
  {
    $widget = new Catharsis\Web\TwitterTweetButtonWidget();
    $this->assertAttributeEmpty("url", $widget);
    $this->assertSame($widget, $widget->url("url"));
    $this->assertAttributeEquals("url", "url", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\TwitterTweetButtonWidget::via(string $via)} method.
   */
  public function test_via_method()
  {
    $widget = new Catharsis\Web\TwitterTweetButtonWidget();
    $this->assertAttributeEmpty("via", $widget);
    $this->assertSame($widget, $widget->via("via"));
    $this->assertAttributeEquals("via", "via", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\TwitterTweetButtonWidget::__toString()} method.
   */
  public function test_toString_method()
  {
    $widget = new Catharsis\Web\TwitterTweetButtonWidget();
    $this->assertEquals("<a class=\"twitter-share-button\" data-lang=\"{$widget->user_language()}\" href=\"https://twitter.com/share\"></a>", (string) $widget);

    $widget = new Catharsis\Web\TwitterTweetButtonWidget();
    $this->assertEquals('<a class="twitter-hashtag-button" data-count="count" data-counturl="count_url" data-dnt="true" data-hashtags="tags" data-lang="en" data-related="related" data-size="size" data-text="text" data-url="url" data-via="via" href="https://twitter.com/share"></a>', (string) $widget->language("en")->url("url")->via("via")->text("text")->related_accounts("related")->count_position("count")->count_url("count_url")->hash_tags("tags")->size("size")->opt_out());
  }
}