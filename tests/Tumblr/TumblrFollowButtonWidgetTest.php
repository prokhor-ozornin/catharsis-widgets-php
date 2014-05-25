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
 * Tests set for class {@link \Catharsis\Web\TumblrFollowButtonWidget}
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class TumblrFollowButtonWidgetTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of class constructor(s).
     * @link \Catharsis\Web\TumblrFollowButtonWidget::__construct()
     * @return void
     */
    public function testConstructors()
    {
        $widget = new Catharsis\Web\TumblrFollowButtonWidget();
        $this->assertEmpty($widget->getAccount());
        $this->assertEquals(Catharsis\Web\TumblrFollowButtonColorScheme::LIGHT, $widget->getColorScheme());
        $this->assertEquals(Catharsis\Web\TumblrFollowButtonType::FIRST, $widget->getType());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\TumblrFollowButtonWidget::account(string $account)}
     * method.
     * @return void
     */
    public function testAccountMethod()
    {
        $widget = new Catharsis\Web\TumblrFollowButtonWidget();
        $this->assertEmpty($widget->getAccount());
        $this->assertSame($widget, $widget->account('account'));
        $this->assertEquals('account', $widget->getAccount());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\TumblrFollowButtonWidget::colorScheme(string $colorScheme)}
     * method.
     * @return void
     */
    public function testColorSchemeMethod()
    {
        $widget = new Catharsis\Web\TumblrFollowButtonWidget();
        $this->assertEquals(Catharsis\Web\TumblrFollowButtonColorScheme::LIGHT, $widget->getColorScheme());
        $this->assertSame($widget, $widget->colorScheme('colorScheme'));
        $this->assertEquals('colorScheme', $widget->getColorScheme());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\TumblrFollowButtonWidget::type(string $type)}
     * method.
     * @return void
     */
    public function testTypeMethod()
    {
        $widget = new Catharsis\Web\TumblrFollowButtonWidget();
        $this->assertEquals(Catharsis\Web\TumblrFollowButtonType::FIRST, $widget->getType());
        $this->assertSame($widget, $widget->type('type'));
        $this->assertEquals('type', $widget->getType());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\TumblrFollowButtonWidget::__toString()}
     * method.
     * @return void
     */
    public function testToStringMethod()
    {
        $widget = new Catharsis\Web\TumblrFollowButtonWidget();
        $this->assertEmpty((string) $widget);

        $widget = new Catharsis\Web\TumblrFollowButtonWidget();
        $this->assertEquals(
            '<iframe allowtransparency="true" border="0" class="btn" frameborder="0" height="25" scrolling="no"'
            .' src="http://platform.tumblr.com/v1/follow_button.html?button_type=1&amp;tumblelog=account&amp;color_scheme=light"'
            .' width="189"></iframe>',
            (string) $widget->account('account')
        );

        $widget = new Catharsis\Web\TumblrFollowButtonWidget();
        $this->assertEquals(
            '<iframe allowtransparency="true" border="0" class="btn" frameborder="0" height="25" scrolling="no"'
            .' src="http://platform.tumblr.com/v1/follow_button.html?button_type=2&amp;tumblelog=account&amp;color_scheme=dark"'
            .' width="113"></iframe>',
            (string) $widget
                ->account('account')
                ->type(Catharsis\Web\TumblrFollowButtonType::SECOND)
                ->colorScheme(Catharsis\Web\TumblrFollowButtonColorScheme::DARK)
        );
    }
}

?>
