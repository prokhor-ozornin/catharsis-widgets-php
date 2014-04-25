<?php

/**
 * Tests set for class {@link Catharsis\Web\CackleLatestCommentsWidget}
 */
final class CackleLatestCommentsWidgetTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of class constructor(s).
     * @link Catharsis\Web\CackleLatestCommentsWidget::__construct()
     */
    public function test_constructors()
    {
        $widget = new Catharsis\Web\CackleLatestCommentsWidget();
        $this->assertAttributeEmpty("_account", $widget);
        $this->assertAttributeEquals(32, "_avatarSize", $widget);
        $this->assertAttributeEquals(5, "_max", $widget);
        $this->assertAttributeEquals(150, "_textSize", $widget);
        $this->assertAttributeEquals(40, "_titleSize", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\CackleLatestCommentsWidget::account(string $account)} method.
     */
    public function test_account_method()
    {
        $widget = new Catharsis\Web\CackleLatestCommentsWidget();
        $this->assertAttributeEmpty("_account", $widget);
        $this->assertSame($widget, $widget->account("account"));
        $this->assertAttributeEquals("account", "_account", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\CackleLatestCommentsWidget::avatar_size(integer $size)} method.
     */
    public function test_avatar_size_method()
    {
        $widget = new Catharsis\Web\CackleLatestCommentsWidget();
        $this->assertAttributeEquals(32, "_avatarSize", $widget);
        $this->assertSame($widget, $widget->avatarSize(1));
        $this->assertAttributeEquals(1, "_avatarSize", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\CackleLatestCommentsWidget::max(integer $max)} method.
     */
    public function test_max_method()
    {
        $widget = new Catharsis\Web\CackleLatestCommentsWidget();
        $this->assertAttributeEquals(5, "_max", $widget);
        $this->assertSame($widget, $widget->max(1));
        $this->assertAttributeEquals(1, "_max", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\CackleLatestCommentsWidget::text_size(integer $size)} method.
     */
    public function test_text_size_method()
    {
        $widget = new Catharsis\Web\CackleLatestCommentsWidget();
        $this->assertAttributeEquals(150, "_textSize", $widget);
        $this->assertSame($widget, $widget->textSize(1));
        $this->assertAttributeEquals(1, "_textSize", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\CackleLatestCommentsWidget::title_size(integer $size)} method.
     */
    public function test_title_size_method()
    {
        $widget = new Catharsis\Web\CackleLatestCommentsWidget();
        $this->assertAttributeEquals(40, "_titleSize", $widget);
        $this->assertSame($widget, $widget->titleSize(1));
        $this->assertAttributeEquals(1, "_titleSize", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\CackleLatestCommentsWidget::__toString()} method.
     */
    public function test_toString_method()
    {
        $widget = new Catharsis\Web\CackleLatestCommentsWidget();
        $this->assertEmpty((string) $widget);

        $widget = new Catharsis\Web\CackleLatestCommentsWidget();
        $html = (string) $widget->account("account");
        $this->assertContains('<div id="mc-last"></div>', $html);
        $this->assertContains('{"widget":"CommentRecent","id":"account","size":5,"avatarSize":32,"textSize":150,"titleSize":40}',
            $html);

        $widget = new Catharsis\Web\CackleLatestCommentsWidget();
        $html = (string) $widget->account("account")->max(1)->avatarSize(2)->textSize(3)->titleSize(4);
        $this->assertContains('<div id="mc-last"></div>', $html);
        $this->assertContains('{"widget":"CommentRecent","id":"account","size":1,"avatarSize":2,"textSize":3,"titleSize":4}',
            $html);
    }
}

?>
