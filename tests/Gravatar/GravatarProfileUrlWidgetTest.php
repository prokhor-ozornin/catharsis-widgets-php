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
 * Tests set for class {@link \Catharsis\Web\GravatarProfileUrlWidget}
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class GravatarProfileUrlWidgetTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of class constructor(s).
     * @link \Catharsis\Web\GravatarProfileUrlWidget::__construct()
     * @return void
     */
    public function testConstructors()
    {
        $widget = new Catharsis\Web\GravatarProfileUrlWidget();
        $this->assertEmpty($widget->getFormat());
        $this->assertEmpty($widget->getHash());
        $this->assertAttributeEmpty('_parameters', $widget);
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\GravatarProfileUrlWidget::email(string $email)}
     * method.
     * @return void
     */
    public function testEmailMethod()
    {
        $widget = new Catharsis\Web\GravatarProfileUrlWidget();
        $this->assertEmpty($widget->getHash());
        $this->assertSame($widget, $widget->email('email'));
        $this->assertEquals(md5('email'), $widget->getHash());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\GravatarProfileUrlWidget::format(string $format)}
     * method.
     * @return void
     */
    public function testFormatMethod()
    {
        $widget = new Catharsis\Web\GravatarProfileUrlWidget();
        $this->assertEmpty($widget->getFormat());
        $this->assertSame($widget, $widget->format('format'));
        $this->assertEquals('format', $widget->getFormat());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\GravatarProfileUrlWidget::hash(string $hash)}
     * method.
     * @return void
     */
    public function testHashMethod()
    {
        $widget = new Catharsis\Web\GravatarProfileUrlWidget();
        $this->assertEmpty($widget->getHash());
        $this->assertSame($widget, $widget->hash('hash'));
        $this->assertEquals('hash', $widget->getHash());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\GravatarProfileUrlWidget::json(string $callback)}
     * method.
     * @return void
     */
    public function testJsonMethod()
    {
        $widget = new Catharsis\Web\GravatarProfileUrlWidget();
        $this->assertEmpty($widget->getFormat());

        $widget = new Catharsis\Web\GravatarProfileUrlWidget();
        $this->assertSame($widget, $widget->json());
        $this->assertEquals('json', $widget->getFormat());
        $this->assertAttributeEmpty('_parameters', $widget);

        $widget = new Catharsis\Web\GravatarProfileUrlWidget();
        $this->assertSame($widget, $widget->json('callback'));
        $this->assertEquals('json', $widget->getFormat());
        $this->assertAttributeEquals(array('callback' => 'callback'), '_parameters', $widget);
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\GravatarProfileUrlWidget::parameter(string $name, mixed $value)}
     * method.
     * @return void
     */
    public function testParameterMethod()
    {
        $widget = new Catharsis\Web\GravatarProfileUrlWidget();
        $this->assertAttributeEmpty('_parameters', $widget);
        $this->assertSame($widget, $widget->parameter('name', 'value'));
        $this->assertAttributeEquals(array('name' => 'value'), '_parameters', $widget);
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\GravatarProfileUrlWidget::php()}
     * method.
     * @return void
     */
    public function testPhpMethod()
    {
        $widget = new Catharsis\Web\GravatarProfileUrlWidget();
        $this->assertEmpty($widget->getFormat());
        $this->assertSame($widget, $widget->php());
        $this->assertEquals('php', $widget->getFormat());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\GravatarProfileUrlWidget::qr()}
     * method.
     * @return void
     */
    public function testQrMethod()
    {
        $widget = new Catharsis\Web\GravatarProfileUrlWidget();
        $this->assertEmpty($widget->getFormat());

        $widget = new Catharsis\Web\GravatarProfileUrlWidget();
        $this->assertSame($widget, $widget->qr());
        $this->assertEquals('qr', $widget->getFormat());
        $this->assertAttributeEmpty('_parameters', $widget);

        $widget = new Catharsis\Web\GravatarProfileUrlWidget();
        $this->assertSame($widget, $widget->qr(1));
        $this->assertEquals('qr', $widget->getFormat());
        $this->assertAttributeEquals(array('size' => 1), '_parameters', $widget);
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\GravatarProfileUrlWidget::vcf()}
     * method.
     * @return void
     */
    public function testVcfMethod()
    {
        $widget = new Catharsis\Web\GravatarProfileUrlWidget();
        $this->assertEmpty($widget->getFormat());
        $this->assertSame($widget, $widget->vcf());
        $this->assertEquals('vcf', $widget->getFormat());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\GravatarProfileUrlWidget::xml()}
     * method.
     * @return void
     */
    public function testXmlMethod()
    {
        $widget = new Catharsis\Web\GravatarProfileUrlWidget();
        $this->assertEmpty($widget->getFormat());
        $this->assertSame($widget, $widget->xml());
        $this->assertEquals("xml", $widget->getFormat());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\GravatarProfileUrlWidget::__toString()}
     * method.
     * @return void
     */
    public function testToStringMethod()
    {
        $widget = new Catharsis\Web\GravatarProfileUrlWidget();
        $this->assertEmpty((string) $widget);

        $widget = new Catharsis\Web\GravatarProfileUrlWidget();
        $this->assertEquals(
            'http://www.gravatar.com/hash',
            (string) $widget->hash('hash')
        );

        $widget = new Catharsis\Web\GravatarProfileUrlWidget();
        $this->assertEquals(
            'http://www.gravatar.com/hash?name=value',
            (string) $widget->hash('hash')->parameter('name', 'value')
        );

        $widget = new Catharsis\Web\GravatarProfileUrlWidget();
        $this->assertEquals(
            'http://www.gravatar.com/hash.format?first=1&second=2',
            (string) $widget
                ->hash('hash')
                ->format('format')
                ->parameter('first', 1)
                ->parameter('second', 2)
        );
    }
}

?>
