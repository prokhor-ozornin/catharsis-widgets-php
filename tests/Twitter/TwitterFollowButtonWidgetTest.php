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
 * Tests set for class {@link \Catharsis\Web\TwitterFollowButtonWidget}
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class TwitterFollowButtonWidgetTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of class constructor(s).
     * @link \Catharsis\Web\TwitterFollowButtonWidget::__construct()
     * @return void
     */
    public function testConstructors()
    {
        $widget = new Catharsis\Web\TwitterFollowButtonWidget();
        $this->assertEmpty($widget->getAccount());
        $this->assertEmpty($widget->getAlignment());
        $this->assertEmpty($widget->getCounter());
        $this->assertEmpty($widget->getLanguage());
        $this->assertEmpty($widget->getScreenName());
        $this->assertEmpty($widget->getSize());
        $this->assertEmpty($widget->getSuggestions());
        $this->assertEmpty($widget->getWidth());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\TwitterFollowButtonWidget::account(string $account)}
     * method.
     * @return void
     */
    public function testAccountMethod()
    {
        $widget = new Catharsis\Web\TwitterFollowButtonWidget();
        $this->assertEmpty($widget->getAccount());
        $this->assertSame($widget, $widget->account('account'));
        $this->assertEquals('account', $widget->getAccount());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\TwitterFollowButtonWidget::alignment(string $alignment)}
     * method.
     * @return void
     */
    public function testAlignmentMethod()
    {
        $widget = new Catharsis\Web\TwitterFollowButtonWidget();
        $this->assertEmpty($widget->getAlignment());
        $this->assertSame($widget, $widget->alignment('alignment'));
        $this->assertEquals('alignment', $widget->getAlignment());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\TwitterFollowButtonWidget::counter(boolean $show)}
     * method.
     * @return void
     */
    public function testCounterMethod()
    {
        $widget = new Catharsis\Web\TwitterFollowButtonWidget();
        $this->assertEmpty($widget->getCounter());
        $this->assertSame($widget, $widget->counter(true));
        $this->assertTrue($widget->getCounter());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\TwitterFollowButtonWidget::language(string $language)}
     * method.
     * @return void
     */
    public function testLanguageMethod()
    {
        $widget = new Catharsis\Web\TwitterFollowButtonWidget();
        $this->assertEmpty($widget->getLanguage());
        $this->assertSame($widget, $widget->language('language'));
        $this->assertEquals('language', $widget->getLanguage());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\TwitterFollowButtonWidget::screenName(boolean $screenName)}
     * method.
     * @return void
     */
    public function testScreenNameMethod()
    {
        $widget = new Catharsis\Web\TwitterFollowButtonWidget();
        $this->assertEmpty($widget->getScreenName());
        $this->assertSame($widget, $widget->screenName(true));
        $this->assertTrue($widget->getScreenName());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\TwitterFollowButtonWidget::size(string $size)}
     * method.
     * @return void
     */
    public function testSizeMethod()
    {
        $widget = new Catharsis\Web\TwitterFollowButtonWidget();
        $this->assertEmpty($widget->getSize());
        $this->assertSame($widget, $widget->size('size'));
        $this->assertEquals('size', $widget->getSize());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\TwitterFollowButtonWidget::suggestions(boolean $enabled)}
     * method.
     * @return void
     */
    public function testSuggestionsMethod()
    {
        $widget = new Catharsis\Web\TwitterFollowButtonWidget();
        $this->assertEmpty($widget->getSuggestions());
        $this->assertSame($widget, $widget->suggestions(false));
        $this->assertFalse($widget->getSuggestions());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\TwitterFollowButtonWidget::width(string $width)}
     * method.
     * @return void
     */
    public function testWidthMethod()
    {
        $widget = new Catharsis\Web\TwitterFollowButtonWidget();
        $this->assertEmpty($widget->getWidth());
        $this->assertSame($widget, $widget->width('width'));
        $this->assertEquals('width', $widget->getWidth());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\TwitterFollowButtonWidget::__toString()}
     * method.
     * @return void
     */
    public function testToStringMethod()
    {
        $widget = new Catharsis\Web\TwitterFollowButtonWidget();
        $this->assertEquals(
            "<a class=\"twitter-follow-button\" data-lang=\"{$widget->userLanguage()}\""
            . ' href="https://twitter.com/account"></a>',
            (string) $widget->account('account')
        );

        $widget = new Catharsis\Web\TwitterFollowButtonWidget();
        $this->assertEquals(
            '<a class="twitter-follow-button" data-align="align" data-dnt="true"'
            . ' data-lang="en" data-show-count="true" data-show-screen-name="true"'
            .' data-size="size" data-width="width" href="https://twitter.com/account"></a>',
            (string) $widget
                ->account('account')
                ->language('en')
                ->counter(true)
                ->size('size')
                ->width('width')
                ->alignment('align')
                ->screenName(true)
                ->suggestions(false)
        );
    }
}

?>
