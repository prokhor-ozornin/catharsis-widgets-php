<?php

/**
 * Tests set for class {@link Catharsis\Web\IntenseDebateCommentsLinkWidget}
 */
final class IntenseDebateCommentsLinkWidgetTest extends PHPUnit_Framework_TestCase
{
  /**
   * Performs testing of class constructor(s).
   * @link Catharsis\Web\IntenseDebateCommentsLinkWidget::__construct()
   */
  public function test_constructors()
  {
    $widget = new Catharsis\Web\IntenseDebateLinkWidget();
    $this->assertAttributeEmpty("account", $widget);
    $this->assertAttributeEmpty("post_id", $widget);
    $this->assertAttributeEmpty("post_title", $widget);
    $this->assertAttributeEmpty("post_url", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\IntenseDebateCommentsLinkWidget::account(string $account)} method.
   */
  public function test_account_method()
  {
    $widget = new Catharsis\Web\IntenseDebateLinkWidget();
    $this->assertAttributeEmpty("account", $widget);
    $this->assertSame($widget, $widget->account("account"));
    $this->assertAttributeEquals("account", "account", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\IntenseDebateCommentsLinkWidget::post_id(string $post_id)} method.
   */
  public function test_post_id_method()
  {
    $widget = new Catharsis\Web\IntenseDebateLinkWidget();
    $this->assertAttributeEmpty("post_id", $widget);
    $this->assertSame($widget, $widget->post_id("post_id"));
    $this->assertAttributeEquals("post_id", "post_id", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\IntenseDebateCommentsLinkWidget::post_url(string $post_url)} method.
   */
  public function test_post_url_method()
  {
    $widget = new Catharsis\Web\IntenseDebateLinkWidget();
    $this->assertAttributeEmpty("post_url", $widget);
    $this->assertSame($widget, $widget->post_url("post_url"));
    $this->assertAttributeEquals("post_url", "post_url", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\IntenseDebateCommentsLinkWidget::post_title(string $post_title)} method.
   */
  public function test_post_title_method()
  {
    $widget = new Catharsis\Web\IntenseDebateLinkWidget();
    $this->assertAttributeEmpty("post_title", $widget);
    $this->assertSame($widget, $widget->post_title("post_title"));
    $this->assertAttributeEquals("post_title", "post_title", $widget);
  }

  /**
   * Performs testing of {@link Catharsis\Web\IntenseDebateCommentsLinkWidget::__toString()} method.
   */
  public function test_toString_method()
  {
    $widget = new Catharsis\Web\IntenseDebateLinkWidget();
    $this->assertEmpty((string) $widget);

    $widget = new Catharsis\Web\IntenseDebateLinkWidget();
    $html = (string) $widget->account("account");
    $this->assertContains('<script type="text/javascript">', $html);
    $this->assertContains('var idcomments_acct = "account";', $html);
    $this->assertContains('var idcomments_post_id = ""', $html);
    $this->assertContains('var idcomments_post_url = ""', $html);
    $this->assertContains('var idcomments_post_title = ""', $html);

    $widget = new Catharsis\Web\IntenseDebateLinkWidget();
    $html = (string) $widget->account("account")->post_id("post_id")->post_url("post_url")->post_title("post_title");
    $this->assertContains('<script type="text/javascript">', $html);
    $this->assertContains('var idcomments_acct = "account";', $html);
    $this->assertContains('var idcomments_post_id = "post_id"', $html);
    $this->assertContains('var idcomments_post_url = "post_url"', $html);
    $this->assertContains('var idcomments_post_title = "post_title"', $html);
  }
}