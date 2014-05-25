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
 * Tests set for class {@link \Catharsis\Web\MailRuVideoWidget}
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class MailRuVideoWidgetTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of class constructor(s).
     * @link \Catharsis\Web\MailRuVideoWidget::__construct()
     * @return void
     */
    public function testConstructors()
    {
        $widget = new Catharsis\Web\MailRuVideoWidget();
        $this->assertEmpty($widget->getHeight());
        $this->assertEmpty($widget->getId());
        $this->assertEmpty($widget->getWidth());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\MailRuVideoWidget::height(string $height)}
     * method.
     * @return void
     */
    public function testHeightMethod()
    {
        $widget = new Catharsis\Web\MailRuVideoWidget();
        $this->assertEmpty($widget->getHeight());
        $this->assertSame($widget, $widget->height('height'));
        $this->assertEquals('height', $widget->getHeight());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\MailRuVideoWidget::id(string $id)}
     * method.
     * @return void
     */
    public function testIdMethod()
    {
        $widget = new Catharsis\Web\MailRuVideoWidget();
        $this->assertEmpty($widget->getId());
        $this->assertSame($widget, $widget->id('id'));
        $this->assertEquals('id', $widget->getId());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\MailRuVideoWidget::width(string $width)}
     * method.
     * @return void
     */
    public function testWidthMethod()
    {
        $widget = new Catharsis\Web\MailRuVideoWidget();
        $this->assertEmpty($widget->getWidth());
        $this->assertSame($widget, $widget->width('width'));
        $this->assertEquals('width', $widget->getWidth());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\MailRuVideoWidget::__toString()}
     * method.
     * @return void
     */
    public function testToStringMethod()
    {
        $widget = new Catharsis\Web\MailRuVideoWidget();
        $this->assertEmpty((string) $widget);

        $widget = new Catharsis\Web\MailRuVideoWidget();
        $this->assertEmpty((string) $widget->id('id')->height('height'));

        $widget = new Catharsis\Web\MailRuVideoWidget();
        $this->assertEmpty((string) $widget->id('id')->width('width'));

        $widget = new Catharsis\Web\MailRuVideoWidget();
        $this->assertEmpty((string) $widget->height('height')->width('width'));

        $widget = new Catharsis\Web\MailRuVideoWidget();
        $this->assertEquals(
            '<iframe allowfullscreen="true" frameborder="0" height="height" mozallowfullscreen="true"'
            .' src="http://api.video.mail.ru/videos/embed/mail/id" webkitallowfullscreen="true" width="width"></iframe>',
            (string) $widget->id('id')->height('height')->width('width')
        );
    }
}

?>
