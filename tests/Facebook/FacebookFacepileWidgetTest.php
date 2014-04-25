<?php

/**
 * Tests set for class {@link Catharsis\Web\FacebookFacepileWidget}
 */
final class FacebookFacepileWidgetTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of class constructor(s).
     * @link Catharsis\Web\FacebookFacepileWidget::__construct()
     */
    public function test_constructors()
    {
        $widget = new Catharsis\Web\FacebookFacepileWidget();
        $this->assertAttributeEmpty("_actions", $widget);
        $this->assertAttributeEmpty("_colorScheme", $widget);
        $this->assertAttributeEmpty("_height", $widget);
        $this->assertAttributeEmpty("_maxRows", $widget);
        $this->assertAttributeEmpty("_photoSize", $widget);
        $this->assertAttributeEmpty("_url", $widget);
        $this->assertAttributeEmpty("_width", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\FacebookFacepileWidget::actions(array $actions)} method.
     */
    public function test_actions_method()
    {
        $widget = new Catharsis\Web\FacebookFacepileWidget();
        $this->assertAttributeEmpty("_actions", $widget);
        $this->assertSame($widget, $widget->actions(array("action")));
        $this->assertAttributeEquals(array("action"), "_actions", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\FacebookFacepileWidget::colorScheme(string $color_scheme)} method.
     */
    public function test_colorScheme_method()
    {
        $widget = new Catharsis\Web\FacebookFacepileWidget();
        $this->assertAttributeEmpty("_colorScheme", $widget);
        $this->assertSame($widget, $widget->colorScheme("colorScheme"));
        $this->assertAttributeEquals("colorScheme", "_colorScheme", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\FacebookFacepileWidget::height(string $height)} method.
     */
    public function test_height_method()
    {
        $widget = new Catharsis\Web\FacebookFacepileWidget();
        $this->assertAttributeEmpty("_height", $widget);
        $this->assertSame($widget, $widget->height("height"));
        $this->assertAttributeEquals("height", "_height", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\FacebookFacepileWidget::maxRows(integer $maxRows)} method.
     */
    public function test_maxRows_method()
    {
        $widget = new Catharsis\Web\FacebookFacepileWidget();
        $this->assertAttributeEmpty("_maxRows", $widget);
        $this->assertSame($widget, $widget->maxRows(1));
        $this->assertAttributeEquals(1, "_maxRows", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\FacebookFacepileWidget::photoSize(string $size)} method.
     */
    public function test_photoSize_method()
    {
        $widget = new Catharsis\Web\FacebookFacepileWidget();
        $this->assertAttributeEmpty("_photoSize", $widget);
        $this->assertSame($widget, $widget->photoSize("photoSize"));
        $this->assertAttributeEquals("photoSize", "_photoSize", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\FacebookFacepileWidget::url(string $url)} method.
     */
    public function test_url_method()
    {
        $widget = new Catharsis\Web\FacebookFacepileWidget();
        $this->assertAttributeEmpty("_url", $widget);
        $this->assertSame($widget, $widget->url("url"));
        $this->assertAttributeEquals("url", "_url", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\FacebookFacepileWidget::width(string $width)} method.
     */
    public function test_width_method()
    {
        $widget = new Catharsis\Web\FacebookFacepileWidget();
        $this->assertAttributeEmpty("_width", $widget);
        $this->assertSame($widget, $widget->width("width"));
        $this->assertAttributeEquals("width", "_width", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\FacebookFacepileWidget::__toString()} method.
     */
    public function test_toString_method()
    {
        $widget = new Catharsis\Web\FacebookFacepileWidget();
        $this->assertEquals('<div class="fb-facepile"></div>', (string) $widget);

        $widget = new Catharsis\Web\FacebookFacepileWidget();
        $this->assertEquals('<div class="fb-facepile" data-action="actions" data-colorscheme="dark" data-height="height" data-href="url" data-max-rows="10" data-size="large" data-width="width"></div>',
                            (string) $widget->url("url")->actions("actions")->photoSize(Catharsis\Web\FacebookFacepilePhotoSize::Large)->width("width")->height("height")->maxRows(10)->colorScheme(Catharsis\Web\FacebookColorScheme::Dark));
    }
}

?>
