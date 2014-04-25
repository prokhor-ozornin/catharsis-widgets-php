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
        $this->assertAttributeEmpty("_counterPosition", $widget);
        $this->assertAttributeEmpty("_countUrl", $widget);
        $this->assertAttributeEmpty("_language", $widget);
        $this->assertAttributeEmpty("_relatedAccounts", $widget);
        $this->assertAttributeEmpty("_size", $widget);
        $this->assertAttributeEmpty("_suggestions", $widget);
        $this->assertAttributeEmpty("_tags", $widget);
        $this->assertAttributeEmpty("_text", $widget);
        $this->assertAttributeEmpty("_url", $widget);
        $this->assertAttributeEmpty("_via", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\TwitterTweetButtonWidget::counterPosition(string $position)} method.
     */
    public function test_counterPosition_method()
    {
        $widget = new Catharsis\Web\TwitterTweetButtonWidget();
        $this->assertAttributeEmpty("_counterPosition", $widget);
        $this->assertSame($widget, $widget->counterPosition("counterPosition"));
        $this->assertAttributeEquals("counterPosition", "_counterPosition", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\TwitterTweetButtonWidget::countUrl(string $url)} method.
     */
    public function test_countUrl_method()
    {
        $widget = new Catharsis\Web\TwitterTweetButtonWidget();
        $this->assertAttributeEmpty("_countUrl", $widget);
        $this->assertSame($widget, $widget->countUrl("countUrl"));
        $this->assertAttributeEquals("countUrl", "_countUrl", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\TwitterTweetButtonWidget::hashTags(array $tags)} method.
     */
    public function test_hashTags_method()
    {
        $widget = new Catharsis\Web\TwitterTweetButtonWidget();
        $this->assertAttributeEmpty("_tags", $widget);
        $this->assertSame($widget, $widget->hashTags(array("tag")));
        $this->assertAttributeEquals(array("tag"), "_tags", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\TwitterTweetButtonWidget::language(string $language)} method.
     */
    public function test_language_method()
    {
        $widget = new Catharsis\Web\TwitterTweetButtonWidget();
        $this->assertAttributeEmpty("_language", $widget);
        $this->assertSame($widget, $widget->language("language"));
        $this->assertAttributeEquals("language", "_language", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\TwitterTweetButtonWidget::relatedAccounts(array $accounts)} method.
     */
    public function test_relatedAccounts_method()
    {
        $widget = new Catharsis\Web\TwitterTweetButtonWidget();
        $this->assertAttributeEmpty("_relatedAccounts", $widget);
        $this->assertSame($widget, $widget->relatedAccounts(array("account")));
        $this->assertAttributeEquals(array("account"), "_relatedAccounts", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\TwitterTweetButtonWidget::size(string $size)} method.
     */
    public function test_size_method()
    {
        $widget = new Catharsis\Web\TwitterTweetButtonWidget();
        $this->assertAttributeEmpty("_size", $widget);
        $this->assertSame($widget, $widget->size("size"));
        $this->assertAttributeEquals("size", "_size", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\TwitterTweetButtonWidget::suggestions(boolean $optOut)} method.
     */
    public function test_suggestions_method()
    {
        $widget = new Catharsis\Web\TwitterTweetButtonWidget();
        $this->assertAttributeEmpty("_suggestions", $widget);
        $this->assertSame($widget, $widget->suggestions());
        $this->assertAttributeEquals(true, "_suggestions", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\TwitterTweetButtonWidget::text(string $text)} method.
     */
    public function test_text_method()
    {
        $widget = new Catharsis\Web\TwitterTweetButtonWidget();
        $this->assertAttributeEmpty("_text", $widget);
        $this->assertSame($widget, $widget->text("text"));
        $this->assertAttributeEquals("text", "_text", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\TwitterTweetButtonWidget::url(string $url)} method.
     */
    public function test_url_method()
    {
        $widget = new Catharsis\Web\TwitterTweetButtonWidget();
        $this->assertAttributeEmpty("_url", $widget);
        $this->assertSame($widget, $widget->url("url"));
        $this->assertAttributeEquals("url", "_url", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\TwitterTweetButtonWidget::via(string $via)} method.
     */
    public function test_via_method()
    {
        $widget = new Catharsis\Web\TwitterTweetButtonWidget();
        $this->assertAttributeEmpty("_via", $widget);
        $this->assertSame($widget, $widget->via("via"));
        $this->assertAttributeEquals("via", "_via", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\TwitterTweetButtonWidget::__toString()} method.
     */
    public function test_toString_method()
    {
        $widget = new Catharsis\Web\TwitterTweetButtonWidget();
        $this->assertEquals("<a class=\"twitter-share-button\" data-lang=\"{$widget->userLanguage()}\" href=\"https://twitter.com/share\"></a>",
                            (string) $widget);

        $widget = new Catharsis\Web\TwitterTweetButtonWidget();
        $this->assertEquals('<a class="twitter-hashtag-button" data-count="counter_position" data-counturl="count_url" data-dnt="true" data-hashtags="tags" data-lang="en" data-related="related" data-size="size" data-text="text" data-url="url" data-via="via" href="https://twitter.com/share"></a>',
                            (string) $widget->language("en")->url("url")->via("via")->text("text")->relatedAccounts("related")->counterPosition("counter_position")->countUrl("count_url")->hashTags("tags")->size("size")->suggestions(false));
    }
}

?>
