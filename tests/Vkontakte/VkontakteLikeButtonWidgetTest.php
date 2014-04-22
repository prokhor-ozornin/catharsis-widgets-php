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
    $this->assertAttributeEmpty("height", $widget);
    $this->assertAttributeEmpty("layout", $widget);
    $this->assertAttributeEmpty("page_description", $widget);
    $this->assertAttributeEmpty("page_image_url", $widget);
    $this->assertAttributeEmpty("page_title", $widget);
    $this->assertAttributeEmpty("page_url", $widget);
    $this->assertAttributeEmpty("text", $widget);
    $this->assertAttributeEmpty("verb", $widget);
    $this->assertAttributeEmpty("width", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\VkontakteLikeButtonWidget::height(string $height)} method.
   */
  public function test_height_method()
  {
    $widget = new Catharsis\Web\VkontakteLikeButtonWidget();
    $this->assertAttributeEmpty("height", $widget);
    $this->assertSame($widget, $widget->height("height"));
    $this->assertAttributeEquals("height", "height", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\VkontakteLikeButtonWidget::layout(string $layout)} method.
   */
  public function test_layout_method()
  {
    $widget = new Catharsis\Web\VkontakteLikeButtonWidget();
    $this->assertAttributeEmpty("layout", $widget);
    $this->assertSame($widget, $widget->layout("layout"));
    $this->assertAttributeEquals("layout", "layout", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\VkontakteLikeButtonWidget::page_description(string $description)} method.
   */
  public function test_page_description_method()
  {
    $widget = new Catharsis\Web\VkontakteLikeButtonWidget();
    $this->assertAttributeEmpty("page_description", $widget);
    $this->assertSame($widget, $widget->page_description("page_description"));
    $this->assertAttributeEquals("page_description", "page_description", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\VkontakteLikeButtonWidget::page_image_url(string $url)} method.
   */
  public function test_page_image_url_method()
  {
    $widget = new Catharsis\Web\VkontakteLikeButtonWidget();
    $this->assertAttributeEmpty("page_image_url", $widget);
    $this->assertSame($widget, $widget->page_image_url("page_image_url"));
    $this->assertAttributeEquals("page_image_url", "page_image_url", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\VkontakteLikeButtonWidget::page_title(string $title)} method.
   */
  public function test_page_title_method()
  {
    $widget = new Catharsis\Web\VkontakteLikeButtonWidget();
    $this->assertAttributeEmpty("page_title", $widget);
    $this->assertSame($widget, $widget->page_title("page_title"));
    $this->assertAttributeEquals("page_title", "page_title", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\VkontakteLikeButtonWidget::page_url(string $url)} method.
   */
  public function test_page_url_method()
  {
    $widget = new Catharsis\Web\VkontakteLikeButtonWidget();
    $this->assertAttributeEmpty("page_url", $widget);
    $this->assertSame($widget, $widget->page_url("page_url"));
    $this->assertAttributeEquals("page_url", "page_url", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\VkontakteLikeButtonWidget::text(string $text)} method.
   */
  public function test_text_method()
  {
    $widget = new Catharsis\Web\VkontakteLikeButtonWidget();
    $this->assertAttributeEmpty("text", $widget);
    $this->assertSame($widget, $widget->text("text"));
    $this->assertAttributeEquals("text", "text", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\VkontakteLikeButtonWidget::verb(integer $verb)} method.
   */
  public function test_verb_method()
  {
    $widget = new Catharsis\Web\VkontakteLikeButtonWidget();
    $this->assertAttributeEmpty("verb", $widget);
    $this->assertSame($widget, $widget->verb(0));
    $this->assertAttributeEquals(0, "verb", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\VkontakteLikeButtonWidget::width(string $width)} method.
   */
  public function test_width_method()
  {
    $widget = new Catharsis\Web\VkontakteLikeButtonWidget();
    $this->assertAttributeEmpty("width", $widget);
    $this->assertSame($widget, $widget->width("width"));
    $this->assertAttributeEquals("width", "width", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\VkontakteLikeButtonWidget::__toString()} method.
   */
  public function test_toString_method()
  {
    $widget = new Catharsis\Web\VkontakteLikeButtonWidget();
    $html = (string) $widget;
    $this->assertContains('<div id="vk_like"></div>', $html);
    $this->assertContains('<script type="text/javascript">', $html);
    $this->assertContains('VK.Widgets.Like("vk_like", {});', $html);

    $widget = new Catharsis\Web\VkontakteLikeButtonWidget();
    $html = (string) $widget->layout(Catharsis\Web\VkontakteLikeButtonLayout::Button)->width("width")->page_title("page_title")->page_description("page_description")->page_url("page_url")->page_image_url("page_image_url")->text("text")->height("height")->verb(1);
    $this->assertContains('<div id="vk_like"></div>', $html);
    $this->assertContains('<script type="text/javascript">', $html);
    $this->assertContains('VK.Widgets.Like("vk_like", {"type":"button","width":"width","pageTitle":"page_title","pageDescription":"page_description","pageUrl":"page_url","pageImage":"page_image_url","text":"text","height":"height","verb":1});', $html);
  }
}