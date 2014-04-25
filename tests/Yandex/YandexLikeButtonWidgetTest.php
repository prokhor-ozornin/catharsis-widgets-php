<?php

/**
 * Tests set for class {@link Catharsis\Web\YandexLikeButtonWidget}
 */
final class YandexLikeButtonWidgetTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of class constructor(s).
     * @link Catharsis\Web\YandexLikeButtonWidget::__construct()
     */
    public function test_constructors()
    {
        $widget = new Catharsis\Web\YandexLikeButtonWidget();
        $this->assertAttributeEquals(Catharsis\Web\YandexLikeButtonLayout::Button, "_layout", $widget);
        $this->assertAttributeEquals(Catharsis\Web\YandexLikeButtonSize::Large, "_size", $widget);
        $this->assertAttributeEmpty("_text", $widget);
        $this->assertAttributeEmpty("_title", $widget);
        $this->assertAttributeEmpty("_url", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\YandexLikeButtonWidget::layout(string $layout)} method.
     */
    public function test_layout_method()
    {
        $widget = new Catharsis\Web\YandexLikeButtonWidget();
        $this->assertAttributeEquals(Catharsis\Web\YandexLikeButtonLayout::Button, "_layout", $widget);
        $this->assertSame($widget, $widget->layout("layout"));
        $this->assertAttributeEquals("layout", "_layout", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\YandexLikeButtonWidget::size(string $size)} method.
     */
    public function test_size_method()
    {
        $widget = new Catharsis\Web\YandexLikeButtonWidget();
        $this->assertAttributeEquals(Catharsis\Web\YandexLikeButtonSize::Large, "_size", $widget);
        $this->assertSame($widget, $widget->size("size"));
        $this->assertAttributeEquals("size", "_size", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\YandexLikeButtonWidget::text(string $text)} method.
     */
    public function test_text_method()
    {
        $widget = new Catharsis\Web\YandexLikeButtonWidget();
        $this->assertAttributeEmpty("_text", $widget);
        $this->assertSame($widget, $widget->text("text"));
        $this->assertAttributeEquals("text", "_text", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\YandexLikeButtonWidget::title(string $title)} method.
     */
    public function test_title_method()
    {
        $widget = new Catharsis\Web\YandexLikeButtonWidget();
        $this->assertAttributeEmpty("_title", $widget);
        $this->assertSame($widget, $widget->title("title"));
        $this->assertAttributeEquals("title", "_title", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\YandexLikeButtonWidget::url(string $url)} method.
     */
    public function test_url_method()
    {
        $widget = new Catharsis\Web\YandexLikeButtonWidget();
        $this->assertAttributeEmpty("_url", $widget);
        $this->assertSame($widget, $widget->url("url"));
        $this->assertAttributeEquals("url", "_url", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\YandexLikeButtonWidget::__toString()} method.
     */
    public function test_toString_method()
    {
        $widget = new Catharsis\Web\YandexLikeButtonWidget();
        $this->assertContains('<a name="ya-share" size="large" type="button"></a>',
                              (string) $widget);

        $widget = new Catharsis\Web\YandexLikeButtonWidget();
        $this->assertContains('<a name="ya-share" share_text="text" share_title="title" share_url="url" size="small" type="icon"></a>',
                              (string) $widget->layout("icon")->size("small")->text("text")->url("url")->title("title"));
    }
}

?>
