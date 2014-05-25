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
 * Tests set for class {@link \Catharsis\Web\CackleLatestCommentsWidget}
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class CackleLatestCommentsWidgetTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of class constructor(s).
     * @link \Catharsis\Web\CackleLatestCommentsWidget::__construct()
     * @return void
     */
    public function testConstructors()
    {
        $widget = new Catharsis\Web\CackleLatestCommentsWidget();
        $this->assertEmpty($widget->getAccount());
        $this->assertEquals(32, $widget->getAvatarSize());
        $this->assertEquals(5, $widget->getMax());
        $this->assertEquals(150, $widget->getTextSize());
        $this->assertEquals(40, $widget->getTitleSize());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\CackleLatestCommentsWidget::account(string $account)}
     * method.
     * @return void
     */
    public function testAccountMethod()
    {
        $widget = new Catharsis\Web\CackleLatestCommentsWidget();
        $this->assertEmpty($widget->getAccount());
        $this->assertSame($widget, $widget->account('account'));
        $this->assertEquals('account', $widget->getAccount());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\CackleLatestCommentsWidget::avatar_size(integer $size)}
     * method.
     * @return void
     */
    public function testAvatarSizeMethod()
    {
        $widget = new Catharsis\Web\CackleLatestCommentsWidget();
        $this->assertEquals(32, $widget->getAvatarSize());
        $this->assertSame($widget, $widget->avatarSize(1));
        $this->assertEquals(1, $widget->getAvatarSize());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\CackleLatestCommentsWidget::max(integer $max)}
     * method.
     * @return void
     */
    public function testMaxMethod()
    {
        $widget = new Catharsis\Web\CackleLatestCommentsWidget();
        $this->assertEquals(5, $widget->getMax());
        $this->assertSame($widget, $widget->max(1));
        $this->assertEquals(1, $widget->getMax());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\CackleLatestCommentsWidget::text_size(integer $size)}
     * method.
     * @return void
     */
    public function testTextSizeMethod()
    {
        $widget = new Catharsis\Web\CackleLatestCommentsWidget();
        $this->assertEquals(150, $widget->getTextSize());
        $this->assertSame($widget, $widget->textSize(1));
        $this->assertEquals(1, $widget->getTextSize());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\CackleLatestCommentsWidget::title_size(integer $size)}
     * method.
     * @return void
     */
    public function testTitleSizeMethod()
    {
        $widget = new Catharsis\Web\CackleLatestCommentsWidget();
        $this->assertEquals(40, $widget->getTitleSize());
        $this->assertSame($widget, $widget->titleSize(1));
        $this->assertEquals(1, $widget->getTitleSize());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\CackleLatestCommentsWidget::__toString()}
     * method.
     * @return void
     */
    public function testToStringMethod()
    {
        $widget = new Catharsis\Web\CackleLatestCommentsWidget();
        $this->assertEmpty((string) $widget);

        $widget = new Catharsis\Web\CackleLatestCommentsWidget();
        $html = (string) $widget->account('account');
        $this->assertContains('<div id="mc-last"></div>', $html);
        $this->assertContains(
            '{"widget":"CommentRecent","id":"account","size":5,"avatarSize":32,"textSize":150,"titleSize":40}',
            $html
        );

        $widget = new Catharsis\Web\CackleLatestCommentsWidget();
        $html = (string) $widget->account('account')->max(1)->avatarSize(2)->textSize(3)->titleSize(4);
        $this->assertContains('<div id="mc-last"></div>', $html);
        $this->assertContains(
            '{"widget":"CommentRecent","id":"account","size":1,"avatarSize":2,"textSize":3,"titleSize":4}',
            $html
        );
    }
}

?>
