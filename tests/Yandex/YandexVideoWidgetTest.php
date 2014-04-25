<?php

/**
 * Tests set for class {@link Catharsis\Web\YandexVideoWidget}
 */
final class YandexVideoWidgetTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of class constructor(s).
     * @link Catharsis\Web\YandexVideoWidget::__construct()
     */
    public function test_constructors()
    {
        $widget = new Catharsis\Web\YandexVideoWidget();
        $this->assertAttributeEmpty("_height", $widget);
        $this->assertAttributeEmpty("_id", $widget);
        $this->assertAttributeEmpty("_user", $widget);
        $this->assertAttributeEmpty("_width", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\YandexVideoWidget::height(string $height)} method.
     */
    public function test_height_method()
    {
        $widget = new Catharsis\Web\YandexVideoWidget();
        $this->assertAttributeEmpty("_height", $widget);
        $this->assertSame($widget, $widget->height("height"));
        $this->assertAttributeEquals("height", "_height", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\YandexVideoWidget::id(string id)} method.
     */
    public function test_id_method()
    {
        $widget = new Catharsis\Web\YandexVideoWidget();
        $this->assertAttributeEmpty("_id", $widget);
        $this->assertSame($widget, $widget->id("id"));
        $this->assertAttributeEquals("id", "_id", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\YandexVideoWidget::user(string $user)} method.
     */
    public function test_user_method()
    {
        $widget = new Catharsis\Web\YandexVideoWidget();
        $this->assertAttributeEmpty("_user", $widget);
        $this->assertSame($widget, $widget->user("user"));
        $this->assertAttributeEquals("user", "_user", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\YandexVideoWidget::width(string $width)} method.
     */
    public function test_width_method()
    {
        $widget = new Catharsis\Web\YandexVideoWidget();
        $this->assertAttributeEmpty("_width", $widget);
        $this->assertSame($widget, $widget->width("width"));
        $this->assertAttributeEquals("width", "_width", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\YandexVideoWidget::__toString()} method.
     */
    public function test_toString_method()
    {
        $widget = new Catharsis\Web\YandexVideoWidget();
        $this->assertEmpty((string) $widget);

        $widget = new Catharsis\Web\YandexVideoWidget();
        $this->assertEmpty((string) $widget->id("id")->user("user")->width("width"));

        $widget = new Catharsis\Web\YandexVideoWidget();
        $this->assertEmpty((string) $widget->id("id")->user("user")->height("height"));

        $widget = new Catharsis\Web\YandexVideoWidget();
        $this->assertEmpty((string) $widget->id("id")->width("width")->height("height"));

        $widget = new Catharsis\Web\YandexVideoWidget();
        $this->assertEmpty((string) $widget->user("user")->width("width")->height("height"));

        $widget = new Catharsis\Web\YandexVideoWidget();
        $this->assertEquals('<iframe allowfullscreen="true" frameborder="0" height="height" mozallowfullscreen="true" src="http://video.yandex.ru/iframe/user/id" webkitallowfullscreen="true" width="width"></iframe>',
                            (string) $widget->id("id")->height("height")->width("width")->user("user"));
    }
}

?>
