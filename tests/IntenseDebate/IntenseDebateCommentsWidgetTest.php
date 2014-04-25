<?php

/**
 * Tests set for class {@link Catharsis\Web\IntenseDebateCommentsWidget}
 */
final class IntenseDebateCommentsWidgetTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of class constructor(s).
     * @link Catharsis\Web\IntenseDebateCommentsWidget::__construct()
     */
    public function test_constructors()
    {
        $widget = new Catharsis\Web\IntenseDebateCommentsWidget();
        $this->assertAttributeEmpty("_account", $widget);
        $this->assertAttributeEmpty("_postId", $widget);
        $this->assertAttributeEmpty("_postTitle", $widget);
        $this->assertAttributeEmpty("_postUrl", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\IntenseDebateCommentsWidget::account(string $account)} method.
     */
    public function test_account_method()
    {
        $widget = new Catharsis\Web\IntenseDebateCommentsWidget();
        $this->assertAttributeEmpty("_account", $widget);
        $this->assertSame($widget, $widget->account("account"));
        $this->assertAttributeEquals("account", "_account", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\IntenseDebateCommentsWidget::postId(string $postId)} method.
     */
    public function test_postId_method()
    {
        $widget = new Catharsis\Web\IntenseDebateCommentsWidget();
        $this->assertAttributeEmpty("_postId", $widget);
        $this->assertSame($widget, $widget->postId("postId"));
        $this->assertAttributeEquals("postId", "_postId", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\IntenseDebateCommentsWidget::postUrl(string $postUrl)} method.
     */
    public function test_postUrl_method()
    {
        $widget = new Catharsis\Web\IntenseDebateCommentsWidget();
        $this->assertAttributeEmpty("_postUrl", $widget);
        $this->assertSame($widget, $widget->postUrl("postUrl"));
        $this->assertAttributeEquals("postUrl", "_postUrl", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\IntenseDebateCommentsWidget::postTitle(string $postTitle)} method.
     */
    public function test_postTitle_method()
    {
        $widget = new Catharsis\Web\IntenseDebateCommentsWidget();
        $this->assertAttributeEmpty("_postTitle", $widget);
        $this->assertSame($widget, $widget->postTitle("postTitle"));
        $this->assertAttributeEquals("postTitle", "_postTitle", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\IntenseDebateCommentsWidget::__toString()} method.
     */
    public function test_toString_method()
    {
        $widget = new Catharsis\Web\IntenseDebateCommentsWidget();
        $this->assertEmpty((string) $widget);

        $widget = new Catharsis\Web\IntenseDebateCommentsWidget();
        $html = (string) $widget->account("account");
        $this->assertContains('<script type="text/javascript">', $html);
        $this->assertContains('var idcomments_acct = "account";', $html);
        $this->assertContains('var idcomments_post_id = ""', $html);
        $this->assertContains('var idcomments_post_url = ""', $html);
        $this->assertContains('var idcomments_post_title = ""', $html);

        $widget = new Catharsis\Web\IntenseDebateCommentsWidget();
        $html = (string) $widget->account("account")->postId("post_id")->postUrl("post_url")->postTitle("post_title");
        $this->assertContains('<script type="text/javascript">', $html);
        $this->assertContains('var idcomments_acct = "account";', $html);
        $this->assertContains('var idcomments_post_id = "post_id"', $html);
        $this->assertContains('var idcomments_post_url = "post_url"', $html);
        $this->assertContains('var idcomments_post_title = "post_title"', $html);
    }
}

?>
