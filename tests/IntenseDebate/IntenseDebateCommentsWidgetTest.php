<?php
/**
 * PHP version 5
 *
 * @category HTML
 * @package  WebWidgets
 * @author   Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @license  LGPL https://www.gnu.org/licenses/lgpl.html
 * @link     http://pear.php.net/package/HTML_WebWidgets
 */

/**
 * Tests set for class {@link \Catharsis\Web\IntenseDebateCommentsWidget}
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class IntenseDebateCommentsWidgetTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of class constructor(s).
     * @link \Catharsis\Web\IntenseDebateCommentsWidget::__construct()
     * @return void
     */
    public function testConstructors()
    {
        $widget = new Catharsis\Web\IntenseDebateCommentsWidget();
        $this->assertEmpty($widget->getAccount());
        $this->assertEmpty($widget->getPostId());
        $this->assertEmpty($widget->getPostTitle());
        $this->assertEmpty($widget->getPostUrl());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\IntenseDebateCommentsWidget::account(string $account)}
     * method.
     * @return void
     */
    public function testAccountMethod()
    {
        $widget = new Catharsis\Web\IntenseDebateCommentsWidget();
        $this->assertEmpty($widget->getAccount());
        $this->assertSame($widget, $widget->account('account'));
        $this->assertEquals('account', $widget->getAccount());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\IntenseDebateCommentsWidget::postId(string $postId)}
     * method.
     * @return void
     */
    public function testPostIdMethod()
    {
        $widget = new Catharsis\Web\IntenseDebateCommentsWidget();
        $this->assertEmpty($widget->getPostId());
        $this->assertSame($widget, $widget->postId('postId'));
        $this->assertEquals('postId', $widget->getPostId());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\IntenseDebateCommentsWidget::postUrl(string $postUrl)}
     * method.
     * @return void
     */
    public function testPostUrlMethod()
    {
        $widget = new Catharsis\Web\IntenseDebateCommentsWidget();
        $this->assertEmpty($widget->getPostUrl());
        $this->assertSame($widget, $widget->postUrl('postUrl'));
        $this->assertEquals('postUrl', $widget->getPostUrl());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\IntenseDebateCommentsWidget::postTitle(string $postTitle)}
     * method.
     * @return void
     */
    public function testPostTitleMethod()
    {
        $widget = new Catharsis\Web\IntenseDebateCommentsWidget();
        $this->assertEmpty($widget->getPostTitle());
        $this->assertSame($widget, $widget->postTitle('postTitle'));
        $this->assertEquals('postTitle', $widget->getPostTitle());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\IntenseDebateCommentsWidget::__toString()}
     * method.
     * @return void
     */
    public function testToStringMethod()
    {
        $widget = new Catharsis\Web\IntenseDebateCommentsWidget();
        $this->assertEmpty((string) $widget);

        $widget = new Catharsis\Web\IntenseDebateCommentsWidget();
        $html = (string) $widget->account('account');
        $this->assertContains('<script type="text/javascript">', $html);
        $this->assertContains('var idcomments_acct = "account";', $html);
        $this->assertContains('var idcomments_post_id = ""', $html);
        $this->assertContains('var idcomments_post_url = ""', $html);
        $this->assertContains('var idcomments_post_title = ""', $html);

        $widget = new Catharsis\Web\IntenseDebateCommentsWidget();
        $html = (string) $widget
            ->account('account')
            ->postId('post_id')
            ->postUrl('post_url')
            ->postTitle('post_title');
        $this->assertContains('<script type="text/javascript">', $html);
        $this->assertContains('var idcomments_acct = "account";', $html);
        $this->assertContains('var idcomments_post_id = "post_id"', $html);
        $this->assertContains('var idcomments_post_url = "post_url"', $html);
        $this->assertContains('var idcomments_post_title = "post_title"', $html);
    }
}

?>
