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
    $this->assertAttributeEquals(Catharsis\Web\YandexLikeButtonLayout::Button, "layout", $widget);
    $this->assertAttributeEquals(Catharsis\Web\YandexLikeButtonSize::Large, "size", $widget);
    $this->assertAttributeEmpty("text", $widget);
    $this->assertAttributeEmpty("title", $widget);
    $this->assertAttributeEmpty("url", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\YandexLikeButtonWidget::layout(string $layout)} method.
   */
  public function test_layout_method()
  {
    $widget = new Catharsis\Web\YandexLikeButtonWidget();
    $this->assertAttributeEquals(Catharsis\Web\YandexLikeButtonLayout::Button, "layout", $widget);
    $this->assertSame($widget, $widget->layout("layout"));
    $this->assertAttributeEquals("layout", "layout", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\YandexLikeButtonWidget::size(string $size)} method.
   */
  public function test_size_method()
  {
    $widget = new Catharsis\Web\YandexLikeButtonWidget();
    $this->assertAttributeEquals(Catharsis\Web\YandexLikeButtonSize::Large, "size", $widget);
    $this->assertSame($widget, $widget->size("size"));
    $this->assertAttributeEquals("size", "size", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\YandexLikeButtonWidget::text(string $text)} method.
   */
  public function test_text_method()
  {
    $widget = new Catharsis\Web\YandexLikeButtonWidget();
    $this->assertAttributeEmpty("text", $widget);
    $this->assertSame($widget, $widget->text("text"));
    $this->assertAttributeEquals("text", "text", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\YandexLikeButtonWidget::title(string $title)} method.
   */
  public function test_title_method()
  {
    $widget = new Catharsis\Web\YandexLikeButtonWidget();
    $this->assertAttributeEmpty("title", $widget);
    $this->assertSame($widget, $widget->title("title"));
    $this->assertAttributeEquals("title", "title", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\YandexLikeButtonWidget::url(string $url)} method.
   */
  public function test_url_method()
  {
    $widget = new Catharsis\Web\YandexLikeButtonWidget();
    $this->assertAttributeEmpty("url", $widget);
    $this->assertSame($widget, $widget->url("url"));
    $this->assertAttributeEquals("url", "url", $widget);
  }

  /**
   ** Performs testing of {@link Catharsis\Web\YandexLikeButtonWidget::__toString()} method.
   */
  public function test_toString_method()
  {
    $widget = new Catharsis\Web\YandexLikeButtonWidget();
    $this->assertContains('<a name="ya-share" size="large" type="button"></a>', (string) $widget);

    $widget = new Catharsis\Web\YandexLikeButtonWidget();
    $this->assertContains('<a name="ya-share" share_text="text" share_title="title" share_url="url" size="small" type="icon"></a>', (string) $widget->layout("icon")->size("small")->text("text")->url("url")->title("title"));
  }
}