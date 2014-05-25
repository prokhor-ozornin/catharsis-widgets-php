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
 * Tests set for class {@link \Catharsis\Web\LiveJournalRepostButtonWidget}
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class LiveJournalRepostButtonWidgetTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of class constructor(s).
     * @link \Catharsis\Web\LiveJournalRepostButtonWidget::__construct()
     * @return void
     */
    public function testConstructors()
    {
        $widget = new Catharsis\Web\LiveJournalRepostButtonWidget();
        $this->assertEmpty($widget->getText());
        $this->assertEmpty($widget->getTitle());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\LiveJournalRepostButtonWidget::text(string $text)}
     * method.
     * @return void
     */
    public function testTextMethod()
    {
        $widget = new Catharsis\Web\LiveJournalRepostButtonWidget();
        $this->assertEmpty($widget->getText());
        $this->assertSame($widget, $widget->text('text'));
        $this->assertEquals('text', $widget->getText());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\LiveJournalRepostButtonWidget::title(string $title)}
     * method.
     * @return void
     */
    public function testTitleMethod()
    {
        $widget = new Catharsis\Web\LiveJournalRepostButtonWidget();
        $this->assertEmpty($widget->getTitle());
        $this->assertSame($widget, $widget->title('title'));
        $this->assertEquals('title', $widget->getTitle());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\LiveJournalRepostButtonWidget::__toString()}
     * method.
     * @return void
     */
    public function testToStringMethod()
    {
        $widget = new Catharsis\Web\LiveJournalRepostButtonWidget();
        $this->assertEquals('<lj-repost></lj-repost>', (string) $widget);

        $widget = new Catharsis\Web\LiveJournalRepostButtonWidget();
        $this->assertEquals(
            '<lj-repost button="title"></lj-repost>',
            (string) $widget->title('title')
        );

        $widget = new Catharsis\Web\LiveJournalRepostButtonWidget();
        $this->assertEquals(
            '<lj-repost button="title">text</lj-repost>',
            (string) $widget->title('title')->text('text')
        );
    }
}

?>
