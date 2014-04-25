<?php

/**
 * Tests set for class {@link Catharsis\Web\FacebookSendButtonWidget}
 */
final class FacebookSendButtonWidgetTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of class constructor(s).
     * @link Catharsis\Web\FacebookSendButtonWidget::__construct()
     */
    public function test_constructors()
    {
        $widget = new Catharsis\Web\FacebookSendButtonWidget();
        $this->assertAttributeEmpty("_colorScheme", $widget);
        $this->assertAttributeEmpty("_height", $widget);
        $this->assertAttributeEmpty("_kidsMode", $widget);
        $this->assertAttributeEmpty("_trackLabel", $widget);
        $this->assertAttributeEmpty("_url", $widget);
        $this->assertAttributeEmpty("_width", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\FacebookSendButtonWidget::colorScheme(string $colorScheme)} method.
     */
    public function test_colorScheme_method()
    {
        $widget = new Catharsis\Web\FacebookSendButtonWidget();
        $this->assertAttributeEmpty("_colorScheme", $widget);
        $this->assertSame($widget, $widget->colorScheme("colorScheme"));
        $this->assertAttributeEquals("colorScheme", "_colorScheme", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\FacebookSendButtonWidget::height(string $height)} method.
     */
    public function test_height_method()
    {
        $widget = new Catharsis\Web\FacebookSendButtonWidget();
        $this->assertAttributeEmpty("_height", $widget);
        $this->assertSame($widget, $widget->height("height"));
        $this->assertAttributeEquals("height", "_height", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\FacebookSendButtonWidget::kidsMode(boolean $enabled)} method.
     */
    public function test_kidsMode_method()
    {
        $widget = new Catharsis\Web\FacebookSendButtonWidget();
        $this->assertAttributeEmpty("_kidsMode", $widget);
        $this->assertSame($widget, $widget->kidsMode());
        $this->assertAttributeEquals(true, "_kidsMode", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\FacebookSendButtonWidget::trackLabel(string $label)} method.
     */
    public function test_trackLabel_method()
    {
        $widget = new Catharsis\Web\FacebookSendButtonWidget();
        $this->assertAttributeEmpty("_trackLabel", $widget);
        $this->assertSame($widget, $widget->trackLabel("trackLabel"));
        $this->assertAttributeEquals("trackLabel", "_trackLabel", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\FacebookSendButtonWidget::url(string $url)} method.
     */
    public function test_url_method()
    {
        $widget = new Catharsis\Web\FacebookSendButtonWidget();
        $this->assertAttributeEmpty("_url", $widget);
        $this->assertSame($widget, $widget->url("url"));
        $this->assertAttributeEquals("url", "_url", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\FacebookSendButtonWidget::width(string $width)} method.
     */
    public function test_width_method()
    {
        $widget = new Catharsis\Web\FacebookSendButtonWidget();
        $this->assertAttributeEmpty("_width", $widget);
        $this->assertSame($widget, $widget->width("width"));
        $this->assertAttributeEquals("width", "_width", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\FacebookSendButtonWidget::__toString()} method.
     */
    public function test_toString_method()
    {
        $widget = new Catharsis\Web\FacebookSendButtonWidget();
        $this->assertEquals('<div class="fb-send"></div>', (string) $widget);

        $widget = new Catharsis\Web\FacebookSendButtonWidget();
        $this->assertEquals('<div class="fb-send" data-colorscheme="dark" data-height="height" data-href="url" data-kid-directed-site="true" data-ref="track_label" data-width="width"></div>',
                            (string) $widget->url("url")->colorScheme(Catharsis\Web\FacebookColorScheme::Dark)->kidsMode()->width("width")->height("height")->trackLabel("track_label"));
    }
}

?>
