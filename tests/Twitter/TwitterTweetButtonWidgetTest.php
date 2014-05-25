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
 * Tests set for class {@link \Catharsis\Web\TwitterTweetButtonWidget}
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class TwitterTweetButtonWidgetTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of class constructor(s).
     * @link \Catharsis\Web\TwitterTweetButtonWidget::__construct()
     * @return void
     */
    public function testConstructors()
    {
        $widget = new Catharsis\Web\TwitterTweetButtonWidget();
        $this->assertEmpty($widget->getCounterPosition());
        $this->assertEmpty($widget->getCountUrl());
        $this->assertEmpty($widget->getLanguage());
        $this->assertEmpty($widget->getRelatedAccounts());
        $this->assertEmpty($widget->getSize());
        $this->assertEmpty($widget->getSuggestions());
        $this->assertEmpty($widget->getHashTags());
        $this->assertEmpty($widget->getText());
        $this->assertEmpty($widget->getUrl());
        $this->assertEmpty($widget->getVia());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\TwitterTweetButtonWidget::counterPosition(string $position)}
     * method.
     * @return void
     */
    public function testCounterPositionMethod()
    {
        $widget = new Catharsis\Web\TwitterTweetButtonWidget();
        $this->assertEmpty($widget->getCounterPosition());
        $this->assertSame($widget, $widget->counterPosition('counterPosition'));
        $this->assertEquals('counterPosition', $widget->getCounterPosition());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\TwitterTweetButtonWidget::countUrl(string $url)}
     * method.
     * @return void
     */
    public function testCountUrlMethod()
    {
        $widget = new Catharsis\Web\TwitterTweetButtonWidget();
        $this->assertEmpty($widget->getCountUrl());
        $this->assertSame($widget, $widget->countUrl('countUrl'));
        $this->assertEquals('countUrl', $widget->getCountUrl());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\TwitterTweetButtonWidget::hashTags(array $tags)}
     * method.
     * @return void
     */
    public function testHashTagsMethod()
    {
        $widget = new Catharsis\Web\TwitterTweetButtonWidget();
        $this->assertEmpty($widget->getHashTags());
        $this->assertSame($widget, $widget->hashTags(array('tag')));
        $this->assertEquals(array('tag'), $widget->getHashTags());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\TwitterTweetButtonWidget::language(string $language)}
     * method.
     * @return void
     */
    public function testLanguageMethod()
    {
        $widget = new Catharsis\Web\TwitterTweetButtonWidget();
        $this->assertEmpty($widget->getLanguage());
        $this->assertSame($widget, $widget->language('language'));
        $this->assertEquals('language', $widget->getLanguage());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\TwitterTweetButtonWidget::relatedAccounts(array $accounts)}
     * method.
     * @return void
     */
    public function testRelatedAccountsMethod()
    {
        $widget = new Catharsis\Web\TwitterTweetButtonWidget();
        $this->assertAttributeEmpty('_relatedAccounts', $widget);
        $this->assertSame($widget, $widget->relatedAccounts(array('account')));
        $this->assertAttributeEquals(array('account'), '_relatedAccounts', $widget);
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\TwitterTweetButtonWidget::size(string $size)}
     * method.
     * @return void
     */
    public function testSizeMethod()
    {
        $widget = new Catharsis\Web\TwitterTweetButtonWidget();
        $this->assertEmpty($widget->getSize());
        $this->assertSame($widget, $widget->size('size'));
        $this->assertEquals('size', $widget->getSize());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\TwitterTweetButtonWidget::suggestions(boolean $optOut)}
     * method.
     * @return void
     */
    public function testSuggestionsMethod()
    {
        $widget = new Catharsis\Web\TwitterTweetButtonWidget();
        $this->assertEmpty($widget->getSuggestions());
        $this->assertSame($widget, $widget->suggestions(true));
        $this->assertTrue($widget->getSuggestions());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\TwitterTweetButtonWidget::text(string $text)}
     * method.
     * @return void
     */
    public function testTextMethod()
    {
        $widget = new Catharsis\Web\TwitterTweetButtonWidget();
        $this->assertEmpty($widget->getText());
        $this->assertSame($widget, $widget->text('text'));
        $this->assertEquals('text', $widget->getText());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\TwitterTweetButtonWidget::url(string $url)}
     * method.
     * @return void
     */
    public function testUrlMethod()
    {
        $widget = new Catharsis\Web\TwitterTweetButtonWidget();
        $this->assertEmpty($widget->getUrl());
        $this->assertSame($widget, $widget->url('url'));
        $this->assertEquals('url', $widget->getUrl());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\TwitterTweetButtonWidget::via(string $via)}
     * method.
     * @return void
     */
    public function testViaMethod()
    {
        $widget = new Catharsis\Web\TwitterTweetButtonWidget();
        $this->assertEmpty($widget->getVia());
        $this->assertSame($widget, $widget->via('via'));
        $this->assertEquals('via', $widget->getVia());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\TwitterTweetButtonWidget::__toString()}
     * method.
     * @return void
     */
    public function testToStringMethod()
    {
        $widget = new Catharsis\Web\TwitterTweetButtonWidget();
        $this->assertEquals(
            "<a class=\"twitter-share-button\" data-lang=\"{$widget->userLanguage()}\""
            . ' href="https://twitter.com/share"></a>',
            (string) $widget
        );

        $widget = new Catharsis\Web\TwitterTweetButtonWidget();
        $this->assertEquals(
            '<a class="twitter-hashtag-button" data-count="counter_position" data-counturl="count_url"'
            .' data-dnt="true" data-hashtags="tags" data-lang="en" data-related="related" data-size="size"'
            .' data-text="text" data-url="url" data-via="via" href="https://twitter.com/share"></a>',
            (string) $widget
                ->language('en')
                ->url('url')
                ->via('via')
                ->text('text')
                ->relatedAccounts('related')
                ->counterPosition('counter_position')
                ->countUrl('count_url')
                ->hashTags('tags')
                ->size('size')
                ->suggestions(false)
        );
    }
}

?>
