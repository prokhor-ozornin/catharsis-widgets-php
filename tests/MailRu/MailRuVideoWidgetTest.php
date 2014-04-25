<?php

/**
 * Tests set for class {@link Catharsis\Web\MailRuVideoWidget}
 */
final class MailRuVideoWidgetTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of class constructor(s).
     * @link Catharsis\Web\MailRuVideoWidget::__construct()
     */
    public function test_constructors()
    {
        $widget = new Catharsis\Web\MailRuVideoWidget();
        $this->assertAttributeEmpty("_height", $widget);
        $this->assertAttributeEmpty("_id", $widget);
        $this->assertAttributeEmpty("_width", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\MailRuVideoWidget::height(string $height)} method.
     */
    public function test_height_method()
    {
        $widget = new Catharsis\Web\MailRuVideoWidget();
        $this->assertAttributeEmpty("_height", $widget);
        $this->assertSame($widget, $widget->height("height"));
        $this->assertAttributeEquals("height", "_height", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\MailRuVideoWidget::id(string $id)} method.
     */
    public function test_id_method()
    {
        $widget = new Catharsis\Web\MailRuVideoWidget();
        $this->assertAttributeEmpty("_id", $widget);
        $this->assertSame($widget, $widget->id("id"));
        $this->assertAttributeEquals("id", "_id", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\MailRuVideoWidget::width(string $width)} method.
     */
    public function test_width_method()
    {
        $widget = new Catharsis\Web\MailRuVideoWidget();
        $this->assertAttributeEmpty("_width", $widget);
        $this->assertSame($widget, $widget->width("width"));
        $this->assertAttributeEquals("width", "_width", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\MailRuVideoWidget::__toString()} method.
     */
    public function test_toString_method()
    {
        $widget = new Catharsis\Web\MailRuVideoWidget();
        $this->assertEmpty((string) $widget);

        $widget = new Catharsis\Web\MailRuVideoWidget();
        $this->assertEmpty((string) $widget->id("id")->height("height"));

        $widget = new Catharsis\Web\MailRuVideoWidget();
        $this->assertEmpty((string) $widget->id("id")->width("width"));

        $widget = new Catharsis\Web\MailRuVideoWidget();
        $this->assertEmpty((string) $widget->height("height")->width("width"));

        $widget = new Catharsis\Web\MailRuVideoWidget();
        $this->assertEquals('<iframe allowfullscreen="true" frameborder="0" height="height" mozallowfullscreen="true" src="http://api.video.mail.ru/videos/embed/mail/id" webkitallowfullscreen="true" width="width"></iframe>',
                            (string) $widget->id("id")->height("height")->width("width"));
    }
}

?>
