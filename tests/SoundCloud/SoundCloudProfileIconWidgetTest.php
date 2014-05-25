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
 * Tests set for class {@link \Catharsis\Web\SoundCloudProfileIconWidget}
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class SoundCloudProfileIconWidgetTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of class constructor(s).
     * @link \Catharsis\Web\SoundCloudProfileIconWidget::__construct()
     * @return void
     */
    public function testConstructors()
    {
        $widget = new Catharsis\Web\SoundCloudProfileIconWidget();
        $this->assertEmpty($widget->getAccount());
        $this->assertEquals('orange_white', $widget->getColor());
        $this->assertEquals(Catharsis\Web\SoundCloudProfileIconSize::SIZE_32, $widget->getSize());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\SoundcloudProfileIconWidget::account(string $account)}
     * method.
     * @return void
     */
    public function testAccountMethod()
    {
        $widget = new Catharsis\Web\SoundCloudProfileIconWidget();
        $this->assertEmpty($widget->getAccount());
        $this->assertSame($widget, $widget->account('account'));
        $this->assertEquals('account', $widget->getAccount());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\SoundcloudProfileIconWidget::blackWhite()}
     * method.
     * @return void
     */
    public function testBlackWhiteMethod()
    {
        $widget = new Catharsis\Web\SoundCloudProfileIconWidget();
        $this->assertEquals('orange_white', $widget->getColor());
        $this->assertSame($widget, $widget->blackWhite());
        $this->assertEquals('black_white', $widget->getColor());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\SoundcloudProfileIconWidget::color(string $color)}
     * method.
     * @return void
     */
    public function testColorMethod()
    {
        $widget = new Catharsis\Web\SoundCloudProfileIconWidget();
        $this->assertEquals('orange_white', $widget->getColor());
        $this->assertSame($widget, $widget->color('color'));
        $this->assertEquals('color', $widget->getColor());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\SoundcloudProfileIconWidget::orangeTransparent()}
     * method.
     * @return void
     */
    public function testOrangeTransparentMethod()
    {
        $widget = new Catharsis\Web\SoundCloudProfileIconWidget();
        $this->assertEquals('orange_white', $widget->getColor());
        $this->assertSame($widget, $widget->orangeTransparent());
        $this->assertEquals('orange_transparent', $widget->getColor());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\SoundcloudProfileIconWidget::orangeWhite()}
     * method.
     * @return void
     */
    public function testOrangeWhiteMethod()
    {
        $widget = new Catharsis\Web\SoundCloudProfileIconWidget();
        $this->assertEquals('orange_white', $widget->getColor());
        $this->assertSame($widget, $widget->orangeWhite());
        $this->assertEquals('orange_white', $widget->getColor());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\SoundcloudProfileIconWidget::size(integer $size)}
     * method.
     * @return void
     */
    public function testSizeMethod()
    {
        $widget = new Catharsis\Web\SoundCloudProfileIconWidget();
        $this->assertEquals(Catharsis\Web\SoundCloudProfileIconSize::SIZE_32, $widget->getSize());
        $this->assertSame($widget, $widget->size(0));
        $this->assertEquals(0, $widget->getSize());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\SoundcloudProfileIconWidget::whiteOrange()}
     * method.
     * @return void
     */
    public function testWhiteOrangeMethod()
    {
        $widget = new Catharsis\Web\SoundCloudProfileIconWidget();
        $this->assertEquals('orange_white', $widget->getColor());
        $this->assertSame($widget, $widget->whiteOrange());
        $this->assertEquals('white_orange', $widget->getColor());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\SoundcloudProfileIconWidget::whiteTransparent()}
     * method.
     * @return void
     */
    public function testWhiteTransparentMethod()
    {
        $widget = new Catharsis\Web\SoundCloudProfileIconWidget();
        $this->assertEquals('orange_white', $widget->getColor());
        $this->assertSame($widget, $widget->whiteTransparent());
        $this->assertEquals('white_transparent', $widget->getColor());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\SoundcloudProfileIconWidget::__toString()}
     * method.
     * @return void
     */
    public function testToStringMethod()
    {
        $widget = new Catharsis\Web\SoundCloudProfileIconWidget();
        $this->assertEmpty((string) $widget);

        $widget = new Catharsis\Web\SoundCloudProfileIconWidget();
        $this->assertEquals(
            '<iframe allowtransparency="true" frameborder="0" scrolling="no"'
            .' src="https://w.soundcloud.com/icon/?url=http://soundcloud.com/account&amp;color=orange_white&amp;size=32"'
            .' style="width: 32px; height: 32px;"></iframe>',
            (string) $widget->account('account')
        );

        $widget = new Catharsis\Web\SoundCloudProfileIconWidget();
        $this->assertEquals(
            '<iframe allowtransparency="true" frameborder="0" scrolling="no"'
            .' src="https://w.soundcloud.com/icon/?url=http://soundcloud.com/account&amp;color=color&amp;size=1"'
            .' style="width: 1px; height: 1px;"></iframe>',
            (string) $widget
                ->account('account')
                ->color('color')->size(1)
        );
    }
}

?>
