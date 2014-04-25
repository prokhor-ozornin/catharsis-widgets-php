<?php

/**
 * Tests set for class {@link Catharsis\Web\SoundCloudProfileIconWidget}
 */
final class SoundCloudProfileIconWidgetTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of class constructor(s).
     * @link Catharsis\Web\SoundCloudProfileIconWidget::__construct()
     */
    public function test_constructors()
    {
        $widget = new Catharsis\Web\SoundCloudProfileIconWidget();
        $this->assertAttributeEmpty("_account", $widget);
        $this->assertAttributeEquals("orange_white", "_color", $widget);
        $this->assertAttributeEquals(Catharsis\Web\SoundCloudProfileIconSize::Size32, "_size", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\SoundcloudProfileIconWidget::account(string $account)} method.
     */
    public function test_account_method()
    {
        $widget = new Catharsis\Web\SoundCloudProfileIconWidget();
        $this->assertAttributeEmpty("_account", $widget);
        $this->assertSame($widget, $widget->account("account"));
        $this->assertAttributeEquals("account", "_account", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\SoundcloudProfileIconWidget::blackWhite()} method.
     */
    public function test_blackWhite_method()
    {
        $widget = new Catharsis\Web\SoundCloudProfileIconWidget();
        $this->assertAttributeEquals("orange_white", "_color", $widget);
        $this->assertSame($widget, $widget->blackWhite());
        $this->assertAttributeEquals("black_white", "_color", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\SoundcloudProfileIconWidget::color(string $color)} method.
     */
    public function test_color_method()
    {
        $widget = new Catharsis\Web\SoundCloudProfileIconWidget();
        $this->assertAttributeEquals("orange_white", "_color", $widget);
        $this->assertSame($widget, $widget->color("color"));
        $this->assertAttributeEquals("color", "_color", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\SoundcloudProfileIconWidget::orangeTransparent()} method.
     */
    public function test_orangeTransparent_method()
    {
        $widget = new Catharsis\Web\SoundCloudProfileIconWidget();
        $this->assertAttributeEquals("orange_white", "_color", $widget);
        $this->assertSame($widget, $widget->orangeTransparent());
        $this->assertAttributeEquals("orange_transparent", "_color", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\SoundcloudProfileIconWidget::orangeWhite()} method.
     */
    public function test_orangeWhite_method()
    {
        $widget = new Catharsis\Web\SoundCloudProfileIconWidget();
        $this->assertAttributeEquals("orange_white", "_color", $widget);
        $this->assertSame($widget, $widget->orangeWhite());
        $this->assertAttributeEquals("orange_white", "_color", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\SoundcloudProfileIconWidget::size(integer $size)} method.
     */
    public function test_size_method()
    {
        $widget = new Catharsis\Web\SoundCloudProfileIconWidget();
        $this->assertAttributeEquals(Catharsis\Web\SoundCloudProfileIconSize::Size32, "_size", $widget);
        $this->assertSame($widget, $widget->size(0));
        $this->assertAttributeEquals(0, "_size", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\SoundcloudProfileIconWidget::whiteOrange()} method.
     */
    public function test_whiteOrange_method()
    {
        $widget = new Catharsis\Web\SoundCloudProfileIconWidget();
        $this->assertAttributeEquals("orange_white", "_color", $widget);
        $this->assertSame($widget, $widget->whiteOrange());
        $this->assertAttributeEquals("white_orange", "_color", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\SoundcloudProfileIconWidget::whiteTransparent()} method.
     */
    public function test_whiteTransparent_method()
    {
        $widget = new Catharsis\Web\SoundCloudProfileIconWidget();
        $this->assertAttributeEquals("orange_white", "_color", $widget);
        $this->assertSame($widget, $widget->whiteTransparent());
        $this->assertAttributeEquals("white_transparent", "_color", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\SoundcloudProfileIconWidget::__toString()} method.
     */
    public function test_toString_method()
    {
        $widget = new Catharsis\Web\SoundCloudProfileIconWidget();
        $this->assertEmpty((string) $widget);

        $widget = new Catharsis\Web\SoundCloudProfileIconWidget();
        $this->assertEquals("<iframe allowtransparency=\"true\" frameborder=\"0\" scrolling=\"no\" src=\"https://w.soundcloud.com/icon/?url=http://soundcloud.com/account&amp;color=orange_white&amp;size=32\" style=\"width: 32px; height: 32px;\"></iframe>",
                            (string) $widget->account("account"));

        $widget = new Catharsis\Web\SoundCloudProfileIconWidget();
        $this->assertEquals("<iframe allowtransparency=\"true\" frameborder=\"0\" scrolling=\"no\" src=\"https://w.soundcloud.com/icon/?url=http://soundcloud.com/account&amp;color=color&amp;size=1\" style=\"width: 1px; height: 1px;\"></iframe>",
                            (string) $widget->account("account")->color("color")->size(1));
    }
}

?>
