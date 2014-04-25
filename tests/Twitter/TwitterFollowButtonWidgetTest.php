<?php

/**
 * Tests set for class {@link Catharsis\Web\TwitterFollowButtonWidget}
 */
final class TwitterFollowButtonWidgetTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of class constructor(s).
     * @link Catharsis\Web\TwitterFollowButtonWidget::__construct()
     */
    public function test_constructors()
    {
        $widget = new Catharsis\Web\TwitterFollowButtonWidget();
        $this->assertAttributeEmpty("_account", $widget);
        $this->assertAttributeEmpty("_alignment", $widget);
        $this->assertAttributeEmpty("_counter", $widget);
        $this->assertAttributeEmpty("_language", $widget);
        $this->assertAttributeEmpty("_screenName", $widget);
        $this->assertAttributeEmpty("_size", $widget);
        $this->assertAttributeEmpty("_suggestions", $widget);
        $this->assertAttributeEmpty("_width", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\TwitterFollowButtonWidget::account(string $account)} method.
     */
    public function test_account_method()
    {
        $widget = new Catharsis\Web\TwitterFollowButtonWidget();
        $this->assertAttributeEmpty("_account", $widget);
        $this->assertSame($widget, $widget->account("account"));
        $this->assertAttributeEquals("account", "_account", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\TwitterFollowButtonWidget::alignment(string $alignment)} method.
     */
    public function test_alignment_method()
    {
        $widget = new Catharsis\Web\TwitterFollowButtonWidget();
        $this->assertAttributeEmpty("_alignment", $widget);
        $this->assertSame($widget, $widget->alignment("alignment"));
        $this->assertAttributeEquals("alignment", "_alignment", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\TwitterFollowButtonWidget::counter(boolean $show)} method.
     */
    public function test_counter_method()
    {
        $widget = new Catharsis\Web\TwitterFollowButtonWidget();
        $this->assertAttributeEmpty("_counter", $widget);
        $this->assertSame($widget, $widget->counter());
        $this->assertAttributeEquals(true, "_counter", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\TwitterFollowButtonWidget::language(string $language)} method.
     */
    public function test_language_method()
    {
        $widget = new Catharsis\Web\TwitterFollowButtonWidget();
        $this->assertAttributeEmpty("_language", $widget);
        $this->assertSame($widget, $widget->language("language"));
        $this->assertAttributeEquals("language", "_language", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\TwitterFollowButtonWidget::screenName(boolean $screenName)} method.
     */
    public function test_screenName_method()
    {
        $widget = new Catharsis\Web\TwitterFollowButtonWidget();
        $this->assertAttributeEmpty("_screenName", $widget);
        $this->assertSame($widget, $widget->screenName());
        $this->assertAttributeEquals(true, "_screenName", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\TwitterFollowButtonWidget::size(string $size)} method.
     */
    public function test_size_method()
    {
        $widget = new Catharsis\Web\TwitterFollowButtonWidget();
        $this->assertAttributeEmpty("_size", $widget);
        $this->assertSame($widget, $widget->size("size"));
        $this->assertAttributeEquals("size", "_size", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\TwitterFollowButtonWidget::suggestions(boolean $enabled)} method.
     */
    public function test_suggestions_method()
    {
        $widget = new Catharsis\Web\TwitterFollowButtonWidget();
        $this->assertAttributeEmpty("_suggestions", $widget);
        $this->assertSame($widget, $widget->suggestions(false));
        $this->assertAttributeEquals(false, "_suggestions", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\TwitterFollowButtonWidget::width(string $width)} method.
     */
    public function test_width_method()
    {
        $widget = new Catharsis\Web\TwitterFollowButtonWidget();
        $this->assertAttributeEmpty("_width", $widget);
        $this->assertSame($widget, $widget->width("width"));
        $this->assertAttributeEquals("width", "_width", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\TwitterFollowButtonWidget::__toString()} method.
     */
    public function test_toString_method()
    {
        $widget = new Catharsis\Web\TwitterFollowButtonWidget();
        $this->assertEquals("<a class=\"twitter-follow-button\" data-lang=\"{$widget->userLanguage()}\" href=\"https://twitter.com/account\"></a>",
                            (string) $widget->account("account"));

        $widget = new Catharsis\Web\TwitterFollowButtonWidget();
        $this->assertEquals('<a class="twitter-follow-button" data-align="align" data-dnt="true" data-lang="en" data-show-count="true" data-show-screen-name="true" data-size="size" data-width="width" href="https://twitter.com/account"></a>',
                            (string) $widget->account("account")->language("en")->counter()->size("size")->width("width")->alignment("align")->screenName()->suggestions(false));
    }
}

?>
