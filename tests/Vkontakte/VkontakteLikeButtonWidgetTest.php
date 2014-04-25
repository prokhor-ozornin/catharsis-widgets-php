<?php

/**
 * Tests set for class {@link Catharsis\Web\VkontakteLikeButtonWidget}
 */
final class VkontakteLikeButtonWidgetTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of class constructor(s).
     * @link Catharsis\Web\VkontakteLikeButtonWidget::__construct()
     */
    public function test_constructors()
    {
        $widget = new Catharsis\Web\VkontakteLikeButtonWidget();
        $this->assertAttributeEmpty("_description", $widget);
        $this->assertAttributeEmpty("_height", $widget);
        $this->assertAttributeEmpty("_image", $widget);
        $this->assertAttributeEmpty("_layout", $widget);
        $this->assertAttributeEmpty("_text", $widget);
        $this->assertAttributeEmpty("_title", $widget);
        $this->assertAttributeEmpty("_url", $widget);
        $this->assertAttributeEmpty("_verb", $widget);
        $this->assertAttributeEmpty("_width", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\VkontakteLikeButtonWidget::description(string $description)} method.
     */
    public function test_description_method()
    {
        $widget = new Catharsis\Web\VkontakteLikeButtonWidget();
        $this->assertAttributeEmpty("_description", $widget);
        $this->assertSame($widget, $widget->description("description"));
        $this->assertAttributeEquals("description", "_description", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\VkontakteLikeButtonWidget::height(string $height)} method.
     */
    public function test_height_method()
    {
        $widget = new Catharsis\Web\VkontakteLikeButtonWidget();
        $this->assertAttributeEmpty("_height", $widget);
        $this->assertSame($widget, $widget->height("height"));
        $this->assertAttributeEquals("height", "_height", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\VkontakteLikeButtonWidget::image(string $url)} method.
     */
    public function test_image_method()
    {
        $widget = new Catharsis\Web\VkontakteLikeButtonWidget();
        $this->assertAttributeEmpty("_image", $widget);
        $this->assertSame($widget, $widget->image("url"));
        $this->assertAttributeEquals("url", "_image", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\VkontakteLikeButtonWidget::layout(string $layout)} method.
     */
    public function test_layout_method()
    {
        $widget = new Catharsis\Web\VkontakteLikeButtonWidget();
        $this->assertAttributeEmpty("_layout", $widget);
        $this->assertSame($widget, $widget->layout("layout"));
        $this->assertAttributeEquals("layout", "_layout", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\VkontakteLikeButtonWidget::text(string $text)} method.
     */
    public function test_text_method()
    {
        $widget = new Catharsis\Web\VkontakteLikeButtonWidget();
        $this->assertAttributeEmpty("_text", $widget);
        $this->assertSame($widget, $widget->text("text"));
        $this->assertAttributeEquals("text", "_text", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\VkontakteLikeButtonWidget::title(string $title)} method.
     */
    public function test_title_method()
    {
        $widget = new Catharsis\Web\VkontakteLikeButtonWidget();
        $this->assertAttributeEmpty("_title", $widget);
        $this->assertSame($widget, $widget->title("title"));
        $this->assertAttributeEquals("title", "_title", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\VkontakteLikeButtonWidget::url(string $url)} method.
     */
    public function test_url_method()
    {
        $widget = new Catharsis\Web\VkontakteLikeButtonWidget();
        $this->assertAttributeEmpty("_url", $widget);
        $this->assertSame($widget, $widget->url("url"));
        $this->assertAttributeEquals("url", "_url", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\VkontakteLikeButtonWidget::verb(integer $verb)} method.
     */
    public function test_verb_method()
    {
        $widget = new Catharsis\Web\VkontakteLikeButtonWidget();
        $this->assertAttributeEmpty("_verb", $widget);
        $this->assertSame($widget, $widget->verb(0));
        $this->assertAttributeEquals(0, "_verb", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\VkontakteLikeButtonWidget::width(string $width)} method.
     */
    public function test_width_method()
    {
        $widget = new Catharsis\Web\VkontakteLikeButtonWidget();
        $this->assertAttributeEmpty("_width", $widget);
        $this->assertSame($widget, $widget->width("width"));
        $this->assertAttributeEquals("width", "_width", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\VkontakteLikeButtonWidget::__toString()} method.
     */
    public function test_toString_method()
    {
        $widget = new Catharsis\Web\VkontakteLikeButtonWidget();
        $html = (string) $widget;
        $this->assertContains('<div id="vk_like"></div>', $html);
        $this->assertContains('<script type="text/javascript">', $html);
        $this->assertContains('VK.Widgets.Like("vk_like", {});', $html);

        $widget = new Catharsis\Web\VkontakteLikeButtonWidget();
        $html = (string) $widget->layout(Catharsis\Web\VkontakteLikeButtonLayout::Button)->width("width")->title("title")->description("description")->url("url")->image("image")->text("text")->height("height")->verb(1);
        $this->assertContains('<div id="vk_like"></div>', $html);
        $this->assertContains('<script type="text/javascript">', $html);
        $this->assertContains('VK.Widgets.Like("vk_like", {"type":"button","width":"width","pageTitle":"title","pageDescription":"description","pageUrl":"url","pageImage":"image","text":"text","height":"height","verb":1});', $html);
    }
}

?>
