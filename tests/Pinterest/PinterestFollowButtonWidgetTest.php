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
 * Tests set for class {@link \Catharsis\Web\PinterestFollowButtonWidget}
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class PinterestFollowButtonWidgetTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of class constructor(s).
     * @link \Catharsis\Web\PinterestFollowButtonWidget::__construct()
     * @return void
     */
    public function testConstructors()
    {
        $widget = new Catharsis\Web\PinterestFollowButtonWidget();
        $this->assertEmpty($widget->getAccount());
        $this->assertEquals('Follow', $widget->getLabel());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\PinterestFollowButtonWidget::account(string $account)}
     * method.
     * @return void
     */
    public function testAccountMethod()
    {
        $widget = new Catharsis\Web\PinterestFollowButtonWidget();
        $this->assertEmpty($widget->getAccount());
        $this->assertSame($widget, $widget->account('account'));
        $this->assertEquals('account', $widget->getAccount());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\PinterestFollowButtonWidget::label(string $label)}
     * method.
     * @return void
     */
    public function testLabelMethod()
    {
        $widget = new Catharsis\Web\PinterestFollowButtonWidget();
        $this->assertEquals('Follow', $widget->getLabel());
        $this->assertSame($widget, $widget->label('label'));
        $this->assertEquals('label', $widget->getLabel());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\PinterestFollowButtonWidget::__toString()}
     * method.
     * @return void
     */
    public function testToStringMethod()
    {
        $widget = new Catharsis\Web\PinterestFollowButtonWidget();
        $this->assertEmpty((string) $widget);

        $widget = new Catharsis\Web\PinterestFollowButtonWidget();
        $this->assertEquals(
            '<a data-pin-do="buttonFollow" href="http://www.pinterest.com/account">Follow</a>',
            (string) $widget->account('account')
        );

        $widget = new Catharsis\Web\PinterestFollowButtonWidget();
        $this->assertEquals(
            '<a data-pin-do="buttonFollow" href="http://www.pinterest.com/account">label</a>',
            (string) $widget->account('account')->label('label')
        );
    }
}

?>
