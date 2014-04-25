<?php

/**
 * Tests set for class {@link Catharsis\Web\FacebookLikeButtonWidget}
 */
final class FacebookLikeButtonWidgetTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of class constructor(s).
     * @link Catharsis\Web\FacebookLikeButtonWidget::__construct()
     */
    public function test_constructors()
    {
        $widget = new Catharsis\Web\FacebookLikeButtonWidget();
        $this->assertAttributeEmpty("_colorScheme", $widget);
        $this->assertAttributeEmpty("_faces", $widget);
        $this->assertAttributeEmpty("_kidsMode", $widget);
        $this->assertAttributeEmpty("_layout", $widget);
        $this->assertAttributeEmpty("_trackLabel", $widget);
        $this->assertAttributeEmpty("_url", $widget);
        $this->assertAttributeEmpty("_verb", $widget);
        $this->assertAttributeEmpty("_width", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\FacebookLikeButtonWidget::colorScheme(string $color_scheme)} method.
     */
    public function test_color_scheme_method()
    {
        $widget = new Catharsis\Web\FacebookLikeButtonWidget();
        $this->assertAttributeEmpty("_colorScheme", $widget);
        $this->assertSame($widget, $widget->colorScheme("colorScheme"));
        $this->assertAttributeEquals("colorScheme", "_colorScheme", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\FacebookLikeButtonWidget::faces(boolean $show)} method.
     */
    public function test_faces_method()
    {
        $widget = new Catharsis\Web\FacebookLikeButtonWidget();
        $this->assertAttributeEmpty("_faces", $widget);
        $this->assertSame($widget, $widget->faces());
        $this->assertAttributeEquals(true, "_faces", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\FacebookLikeButtonWidget::kidsMode(boolean $enabled)} method.
     */
    public function test_kidsMode_method()
    {
        $widget = new Catharsis\Web\FacebookLikeButtonWidget();
        $this->assertAttributeEmpty("_kidsMode", $widget);
        $this->assertSame($widget, $widget->kidsMode());
        $this->assertAttributeEquals(true, "_kidsMode", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\FacebookLikeButtonWidget::layout(string $layout)} method.
     */
    public function test_layout_method()
    {
        $widget = new Catharsis\Web\FacebookLikeButtonWidget();
        $this->assertAttributeEmpty("_layout", $widget);
        $this->assertSame($widget, $widget->layout("layout"));
        $this->assertAttributeEquals("layout", "_layout", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\FacebookLikeButtonWidget::trackLabel(string $label)} method.
     */
    public function test_trackLabel_method()
    {
        $widget = new Catharsis\Web\FacebookLikeButtonWidget();
        $this->assertAttributeEmpty("_trackLabel", $widget);
        $this->assertSame($widget, $widget->trackLabel("trackLabel"));
        $this->assertAttributeEquals("trackLabel", "_trackLabel", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\FacebookLikeButtonWidget::url(string $url)} method.
     */
    public function test_url_method()
    {
        $widget = new Catharsis\Web\FacebookLikeButtonWidget();
        $this->assertAttributeEmpty("_url", $widget);
        $this->assertSame($widget, $widget->url("url"));
        $this->assertAttributeEquals("url", "_url", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\FacebookLikeButtonWidget::verb(string $verb)} method.
     */
    public function test_verb_method()
    {
        $widget = new Catharsis\Web\FacebookLikeButtonWidget();
        $this->assertAttributeEmpty("_verb", $widget);
        $this->assertSame($widget, $widget->verb("verb"));
        $this->assertAttributeEquals("verb", "_verb", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\FacebookLikeButtonWidget::width(string $width)} method.
     */
    public function test_width_method()
    {
        $widget = new Catharsis\Web\FacebookLikeButtonWidget();
        $this->assertAttributeEmpty("_width", $widget);
        $this->assertSame($widget, $widget->width("width"));
        $this->assertAttributeEquals("width", "_width", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\FacebookLikeButtonWidget::__toString()} method.
     */
    public function test_toString_method()
    {
        $widget = new Catharsis\Web\FacebookLikeButtonWidget();
        $this->assertEquals('<div class="fb-like"></div>', (string) $widget);

        $widget = new Catharsis\Web\FacebookLikeButtonWidget();
        $this->assertEquals('<div class="fb-like" data-href="url"></div>',
                            (string) $widget->url("url"));

        $widget = new Catharsis\Web\FacebookLikeButtonWidget();
        $this->assertEquals('<div class="fb-like" data-action="recommend" data-colorscheme="dark" data-href="url" data-kid-directed-site="true" data-layout="box_count" data-ref="track_label" data-show-faces="true" data-width="width"></div>',
                            (string) $widget->verb(Catharsis\Web\FacebookLikeButtonVerb::Recommend)->colorScheme(Catharsis\Web\FacebookColorScheme::Dark)->url("url")->kidsMode()->layout(Catharsis\Web\FacebookButtonLayout::BoxCount)->trackLabel("track_label")->faces()->width("width"));
    }
}

?>
