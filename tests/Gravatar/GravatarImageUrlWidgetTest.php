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
 * Tests set for class {@link \Catharsis\Web\GravatarImageUrlWidget}
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class GravatarImageUrlWidgetTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of class constructor(s).
     * @link \Catharsis\Web\GravatarImageUrlWidget::__construct()
     * @return void
     */
    public function testConstructors()
    {
        $widget = new Catharsis\Web\GravatarImageUrlWidget();
        $this->assertEmpty($widget->getExtension());
        $this->assertEmpty($widget->getHash());
        $this->assertAttributeEmpty('_parameters', $widget);
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\GravatarImageUrlWidget::defaultImage(string $url)}
     * method.
     * @return void
     */
    public function testDefaultImageMethod()
    {
        $widget = new Catharsis\Web\GravatarImageUrlWidget();
        $this->assertAttributeEmpty('_parameters', $widget);
        $this->assertSame($widget, $widget->defaultImage('default_image'));
        $this->assertAttributeEquals(array('default' => 'default_image'), '_parameters', $widget);
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\GravatarImageUrlWidget::email(string $email)}
     * method.
     * @return void
     */
    public function testEmailMethod()
    {
        $widget = new Catharsis\Web\GravatarImageUrlWidget();
        $this->assertEmpty($widget->getHash());
        $this->assertSame($widget, $widget->email('email'));
        $this->assertEquals(md5('email'), $widget->getHash());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\GravatarImageUrlWidget::extension(string $extension)}
     * method.
     * @return void
     */
    public function testExtensionMethod()
    {
        $widget = new Catharsis\Web\GravatarImageUrlWidget();
        $this->assertEmpty($widget->getExtension());
        $this->assertSame($widget, $widget->extension('extension'));
        $this->assertEquals('extension', $widget->getExtension());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\GravatarImageUrlWidget::forceDefault()}
     * method.
     * @return void
     */
    public function testForceDefaultMethod()
    {
        $widget = new Catharsis\Web\GravatarImageUrlWidget();
        $this->assertAttributeEmpty('_parameters', $widget);
        $this->assertSame($widget, $widget->forceDefault());
        $this->assertAttributeEquals(array('forcedefault' => 'y'), '_parameters', $widget);
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\GravatarImageUrlWidget::hash(string $hash)}
     * method.
     * @return void
     */
    public function testHashMethod()
    {
        $widget = new Catharsis\Web\GravatarImageUrlWidget();
        $this->assertAttributeEmpty('_parameters', $widget);
        $this->assertSame($widget, $widget->hash('hash'));
        $this->assertEquals('hash', $widget->getHash());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\GravatarImageUrlWidget::parameter(string $name, mixed $value)}
     * method.
     * @return void
     */
    public function testParameterMethod()
    {
        $widget = new Catharsis\Web\GravatarImageUrlWidget();
        $this->assertAttributeEmpty('_parameters', $widget);
        $this->assertSame($widget, $widget->parameter('name', 'value'));
        $this->assertAttributeEquals(array('name' => 'value'), '_parameters', $widget);
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\GravatarImageUrlWidget::rating(string $rating)}
     * method.
     * @return void
     */
    public function testRatingMethod()
    {
        $widget = new Catharsis\Web\GravatarImageUrlWidget();
        $this->assertAttributeEmpty('_parameters', $widget);
        $this->assertSame($widget, $widget->rating('rating'));
        $this->assertAttributeEquals(array('rating' => 'rating'), '_parameters', $widget);
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\GravatarImageUrlWidget::size(string $size)}
     * method.
     * @return void
     */
    public function testSizeMethod()
    {
        $widget = new Catharsis\Web\GravatarImageUrlWidget();
        $this->assertAttributeEmpty('_parameters', $widget);
        $this->assertSame($widget, $widget->size('size'));
        $this->assertAttributeEquals(array('size' => 'size'), '_parameters', $widget);
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\GravatarImageUrlWidget::__toString()}
     * method.
     * @return void
     */
    public function testToStringMethod()
    {
        $widget = new Catharsis\Web\GravatarImageUrlWidget();
        $this->assertEmpty((string) $widget);

        $widget = new Catharsis\Web\GravatarImageUrlWidget();
        $this->assertEquals(
            'http://www.gravatar.com/avatar/hash',
            (string) $widget->hash('hash')
        );

        $widget = new Catharsis\Web\GravatarImageUrlWidget();
        $this->assertEquals(
            'http://www.gravatar.com/avatar/hash?name=value',
            (string) $widget->hash('hash')->parameter('name', 'value')
        );

        $widget = new Catharsis\Web\GravatarImageUrlWidget();
        $this->assertEquals(
            'http://www.gravatar.com/avatar/hash.extension?first=1&second=2',
            (string) $widget
                ->hash('hash')
                ->extension('extension')
                ->parameter('first', 1)
                ->parameter('second', 2)
        );
    }
}

?>
