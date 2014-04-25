<?php

/**
 * Tests set for class {@link Catharsis\Web\FacebookFollowButtonWidget}
 */
final class FacebookFollowButtonWidgetTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of class constructor(s).
     * @link Catharsis\Web\FacebookFollowButtonWidget::__construct()
     */
    public function test_constructors()
    {
        $widget = new Catharsis\Web\FacebookFollowButtonWidget();
        $this->assertAttributeEmpty("_colorScheme", $widget);
        $this->assertAttributeEmpty("_faces", $widget);
        $this->assertAttributeEmpty("_height", $widget);
        $this->assertAttributeEmpty("_kidsMode", $widget);
        $this->assertAttributeEmpty("_layout", $widget);
        $this->assertAttributeEmpty("_url", $widget);
        $this->assertAttributeEmpty("_width", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\FacebookFollowButtonWidget::colorScheme(string $colorScheme)} method.
     */
    public function test_colorScheme_method()
    {
        $widget = new Catharsis\Web\FacebookFollowButtonWidget();
        $this->assertAttributeEmpty("_colorScheme", $widget);
        $this->assertSame($widget, $widget->colorScheme("colorScheme"));
        $this->assertAttributeEquals("colorScheme", "_colorScheme", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\FacebookFollowButtonWidget::faces(boolean $show)} method.
     */
    public function test_faces_method()
    {
        $widget = new Catharsis\Web\FacebookFollowButtonWidget();
        $this->assertAttributeEmpty("_faces", $widget);
        $this->assertSame($widget, $widget->faces());
        $this->assertAttributeEquals(true, "_faces", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\FacebookFollowButtonWidget::height(string $height)} method.
     */
    public function test_height_method()
    {
        $widget = new Catharsis\Web\FacebookFollowButtonWidget();
        $this->assertAttributeEmpty("_height", $widget);
        $this->assertSame($widget, $widget->height("height"));
        $this->assertAttributeEquals("height", "_height", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\FacebookFollowButtonWidget::kidsMode(boolean $enabled)} method.
     */
    public function test_kidsMode_method()
    {
        $widget = new Catharsis\Web\FacebookFollowButtonWidget();
        $this->assertAttributeEmpty("_kidsMode", $widget);
        $this->assertSame($widget, $widget->kidsMode());
        $this->assertAttributeEquals(true, "_kidsMode", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\FacebookFollowButtonWidget::layout(string $layout)} method.
     */
    public function test_layout_method()
    {
        $widget = new Catharsis\Web\FacebookFollowButtonWidget();
        $this->assertAttributeEmpty("_layout", $widget);
        $this->assertSame($widget, $widget->layout("layout"));
        $this->assertAttributeEquals("layout", "_layout", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\FacebookFollowButtonWidget::url(string $url)} method.
     */
    public function test_url_method()
    {
        $widget = new Catharsis\Web\FacebookFollowButtonWidget();
        $this->assertAttributeEmpty("_url", $widget);
        $this->assertSame($widget, $widget->url("url"));
        $this->assertAttributeEquals("url", "_url", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\FacebookFollowButtonWidget::width(string $width)} method.
     */
    public function test_width_method()
    {
        $widget = new Catharsis\Web\FacebookFollowButtonWidget();
        $this->assertAttributeEmpty("_width", $widget);
        $this->assertSame($widget, $widget->width("width"));
        $this->assertAttributeEquals("width", "_width", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\FacebookFollowButtonWidget::__toString()} method.
     */
    public function test_toString_method()
    {
        $widget = new Catharsis\Web\FacebookFollowButtonWidget();
        $this->assertEmpty((string) $widget);

        $widget = new Catharsis\Web\FacebookFollowButtonWidget();
        $this->assertEquals('<div class="fb-follow" data-href="url"></div>',
                            (string) $widget->url("url"));

        $widget = new Catharsis\Web\FacebookFollowButtonWidget();
        $this->assertEquals('<div class="fb-follow" data-colorscheme="dark" data-height="height" data-href="url" data-kid-directed-site="true" data-layout="box_count" data-show-faces="true" data-width="width"></div>',
                            (string) $widget->url("url")->colorScheme(Catharsis\Web\FacebookColorScheme::Dark)->kidsMode()->layout(Catharsis\Web\FacebookButtonLayout::BoxCount)->faces()->width("width")->height("height"));
    }
}

?>
