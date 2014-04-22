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
    $this->assertAttributeEmpty("color_scheme", $widget);
    $this->assertAttributeEmpty("faces", $widget);
    $this->assertAttributeEmpty("kids", $widget);
    $this->assertAttributeEmpty("layout", $widget);
    $this->assertAttributeEmpty("track_label", $widget);
    $this->assertAttributeEmpty("url", $widget);
    $this->assertAttributeEmpty("verb", $widget);
    $this->assertAttributeEmpty("width", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\FacebookLikeButtonWidget::color_scheme(string $color_scheme)} method.
   */
  public function test_color_scheme_method()
  {
    $widget = new Catharsis\Web\FacebookLikeButtonWidget();
    $this->assertAttributeEmpty("color_scheme", $widget);
    $this->assertSame($widget, $widget->color_scheme("color_scheme"));
    $this->assertAttributeEquals("color_scheme", "color_scheme", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\FacebookLikeButtonWidget::faces(boolean $faces)} method.
   */
  public function test_faces_method()
  {
    $widget = new Catharsis\Web\FacebookLikeButtonWidget();
    $this->assertAttributeEmpty("faces", $widget);
    $this->assertSame($widget, $widget->faces());
    $this->assertAttributeEquals(true, "faces", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\FacebookLikeButtonWidget::kids(boolean $kids)} method.
   */
  public function test_kids_method()
  {
    $widget = new Catharsis\Web\FacebookLikeButtonWidget();
    $this->assertAttributeEmpty("kids", $widget);
    $this->assertSame($widget, $widget->kids());
    $this->assertAttributeEquals(true, "kids", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\FacebookLikeButtonWidget::layout(string $layout)} method.
   */
  public function test_layout_method()
  {
    $widget = new Catharsis\Web\FacebookLikeButtonWidget();
    $this->assertAttributeEmpty("layout", $widget);
    $this->assertSame($widget, $widget->layout("layout"));
    $this->assertAttributeEquals("layout", "layout", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\FacebookLikeButtonWidget::track_label(string $track_label)} method.
   */
  public function test_track_label_method()
  {
    $widget = new Catharsis\Web\FacebookLikeButtonWidget();
    $this->assertAttributeEmpty("track_label", $widget);
    $this->assertSame($widget, $widget->track_label("track_label"));
    $this->assertAttributeEquals("track_label", "track_label", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\FacebookLikeButtonWidget::url(string $url)} method.
   */
  public function test_url_method()
  {
    $widget = new Catharsis\Web\FacebookLikeButtonWidget();
    $this->assertAttributeEmpty("url", $widget);
    $this->assertSame($widget, $widget->url("url"));
    $this->assertAttributeEquals("url", "url", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\FacebookLikeButtonWidget::verb(string $verb)} method.
   */
  public function test_verb_method()
  {
    $widget = new Catharsis\Web\FacebookLikeButtonWidget();
    $this->assertAttributeEmpty("verb", $widget);
    $this->assertSame($widget, $widget->verb("verb"));
    $this->assertAttributeEquals("verb", "verb", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\FacebookLikeButtonWidget::width(string $width)} method.
   */
  public function test_width_method()
  {
    $widget = new Catharsis\Web\FacebookLikeButtonWidget();
    $this->assertAttributeEmpty("width", $widget);
    $this->assertSame($widget, $widget->width("width"));
    $this->assertAttributeEquals("width", "width", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\FacebookLikeButtonWidget::__toString()} method.
   */
  public function test_toString_method()
  {
    $widget = new Catharsis\Web\FacebookLikeButtonWidget();
    $this->assertEquals('<div class="fb-like"></div>', (string) $widget);

    $widget = new Catharsis\Web\FacebookLikeButtonWidget();
    $this->assertEquals('<div class="fb-like" data-href="url"></div>', (string) $widget->url("url"));

    $widget = new Catharsis\Web\FacebookLikeButtonWidget();
    $this->assertEquals('<div class="fb-like" data-action="recommend" data-colorscheme="dark" data-href="url" data-kid-directed-site="true" data-layout="box_count" data-ref="track_label" data-show-faces="true" data-width="width"></div>', (string) $widget->verb(Catharsis\Web\FacebookLikeButtonVerb::Recommend)->color_scheme(Catharsis\Web\FacebookColorScheme::Dark)->url("url")->kids()->layout(Catharsis\Web\FacebookButtonLayout::BoxCount)->track_label("track_label")->faces()->width("width"));
  }
}