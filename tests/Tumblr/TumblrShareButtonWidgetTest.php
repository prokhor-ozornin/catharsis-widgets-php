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
 * Tests set for class {@link \Catharsis\Web\TumblrShareButtonWidget}
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class TumblrShareButtonWidgetTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of class constructor(s).
     * @link \Catharsis\Web\TumblrShareButtonWidget::__construct()
     * @return void
     */
    public function testConstructors()
    {
        $widget = new Catharsis\Web\TumblrShareButtonWidget();
        $this->assertEmpty($widget->getColorScheme());
        $this->assertEquals(Catharsis\Web\TumblrShareButtonType::FIRST, $widget->getType());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\TumblrShareButtonWidget::color_scheme(string $color_scheme)}
     * method.
     * @return void
     */
    public function testColorSchemeMethod()
    {
        $widget = new Catharsis\Web\TumblrShareButtonWidget();
        $this->assertEmpty($widget->getColorScheme());
        $this->assertSame($widget, $widget->colorScheme('colorScheme'));
        $this->assertEquals('colorScheme', $widget->getColorScheme());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\TumblrShareButtonWidget::type(integer $type)}
     * method.
     * @return void
     */
    public function testTypeMethod()
    {
        $widget = new Catharsis\Web\TumblrShareButtonWidget();
        $this->assertEquals(Catharsis\Web\TumblrShareButtonType::FIRST, $widget->getType());
        $this->assertSame($widget, $widget->type(0));
        $this->assertEquals(0, $widget->getType());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\TumblrShareButtonWidget::__toString()}
     * method.
     * @return void
     */
    public function testToStringMethod()
    {
        $widget = new Catharsis\Web\TumblrShareButtonWidget();
        $this->assertEquals(
            '<a href="http://www.tumblr.com/share" style="display:inline-block;'
            .' text-indent:-9999px; overflow:hidden; width:80px; height:20px;'
            .' background:url(&#039;http://platform.tumblr.com/v1/share_1.png&#039;)'
            .' top left no-repeat transparent;" title="Share on Tumblr">Share on Tumblr</a>',
            (string) $widget
        );

        $widget = new Catharsis\Web\TumblrShareButtonWidget();
        $this->assertEquals(
            '<a href="http://www.tumblr.com/share" style="display:inline-block;'
            .' text-indent:-9999px; overflow:hidden; width:70px; height:20px;'
            .' background:url(&#039;http://platform.tumblr.com/v1/share_2T.png&#039;)'
            .' top left no-repeat transparent;" title="Share on Tumblr">Share on Tumblr</a>',
            (string) $widget
                ->type(Catharsis\Web\TumblrShareButtonType::SECOND)
                ->colorScheme(Catharsis\Web\TumblrShareButtonColorScheme::GRAY)
        );
    }
}

?>
