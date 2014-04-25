<?php

/**
 * Tests set for class {@link Catharsis\Web\FacebookCommentsWidget}
 */
final class FacebookCommentsWidgetTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of class constructor(s).
     * @link Catharsis\Web\FacebookCommentsWidget::__construct()
     */
    public function test_constructors()
    {
        $widget = new Catharsis\Web\FacebookCommentsWidget();
        $this->assertAttributeEmpty("_colorScheme", $widget);
        $this->assertAttributeEmpty("_mobile", $widget);
        $this->assertAttributeEmpty("_order", $widget);
        $this->assertAttributeEmpty("_posts", $widget);
        $this->assertAttributeEmpty("_url", $widget);
        $this->assertAttributeEmpty("_width", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\FacebookCommentsWidget::colorScheme(string $colorScheme)} method.
     */
    public function test_colorScheme_method()
    {
        $widget = new Catharsis\Web\FacebookCommentsWidget();
        $this->assertAttributeEmpty("_colorScheme", $widget);
        $this->assertSame($widget, $widget->colorScheme("colorScheme"));
        $this->assertAttributeEquals("colorScheme", "_colorScheme", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\FacebookCommentsWidget::mobile(boolean $mobile)} method.
     */
    public function test_mobile_method()
    {
        $widget = new Catharsis\Web\FacebookCommentsWidget();
        $this->assertAttributeEmpty("_mobile", $widget);
        $this->assertSame($widget, $widget->mobile());
        $this->assertAttributeEquals(true, "_mobile", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\FacebookCommentsWidget::order(string $order)} method.
     */
    public function test_order_method()
    {
        $widget = new Catharsis\Web\FacebookCommentsWidget();
        $this->assertAttributeEmpty("_order", $widget);
        $this->assertSame($widget, $widget->order("order"));
        $this->assertAttributeEquals("order", "_order", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\FacebookCommentsWidget::posts(integer $posts)} method.
     */
    public function test_posts_method()
    {
        $widget = new Catharsis\Web\FacebookCommentsWidget();
        $this->assertAttributeEmpty("_posts", $widget);
        $this->assertSame($widget, $widget->posts(1));
        $this->assertAttributeEquals(1, "_posts", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\FacebookCommentsWidget::url(string $url)} method.
     */
    public function test_url_method()
    {
        $widget = new Catharsis\Web\FacebookCommentsWidget();
        $this->assertAttributeEmpty("_url", $widget);
        $this->assertSame($widget, $widget->url("url"));
        $this->assertAttributeEquals("url", "_url", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\FacebookCommentsWidget::width(string $width)} method.
     */
    public function test_width_method()
    {
        $widget = new Catharsis\Web\FacebookCommentsWidget();
        $this->assertAttributeEmpty("_width", $widget);
        $this->assertSame($widget, $widget->width("width"));
        $this->assertAttributeEquals("width", "_width", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\FacebookCommentsWidget::__toString()} method.
     */
    public function test_toString_method()
    {
        $widget = new Catharsis\Web\FacebookCommentsWidget();
        $this->assertEquals('<div class="fb-comments"></div>', (string) $widget);

        $widget = new Catharsis\Web\FacebookCommentsWidget();
        $this->assertEquals('<div class="fb-comments" data-colorscheme="dark" data-href="url" data-mobile="true" data-num-posts="1" data-order-by="reverse_time" data-width="width"></div>',
                            (string) $widget->url("url")->posts(1)->width("width")->colorScheme(Catharsis\Web\FacebookColorScheme::Dark)->mobile()->order(Catharsis\Web\FacebookCommentsOrder::ReverseTime));
    }
}

?>
