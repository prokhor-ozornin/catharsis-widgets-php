<?php
/**
 * IntenseDebateCommentsWidget class.
 *
 * PHP version 5
 *
 * @category HTML
 * @package  WebWidgets
 * @author   Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @license  LGPL https://www.gnu.org/licenses/lgpl.html
 * @link     http://pear.php.net/package/HTML_WebWidgets
 */
namespace Catharsis\Web;

/**
 * Renders IntenseDebate comments widget for registered website.
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 * @link      http://intensedebate.com
 */
class IntenseDebateCommentsWidget extends HtmlWidget
{
    private $_account;
    private $_postId;
    private $_postTitle;
    private $_postUrl;

    /**
     * Identifier of registered website in the "IntenseDebate" comments system.
     * @param string $account Identifier of website.
     * @return \Catharsis\Web\IntenseDebateCommentsWidget
     *         Reference to the current widget.
     */
    public function account($account)
    {
        $this->_account = (string) $account;
        return $this;
    }

    /**
     * Identifier of registered website in the "IntenseDebate" comments system.
     * @return string Identifier of website.
     */
    public function getAccount()
    {
        return $this->_account;
    }

    /**
     * This is the unique identifier of the post or page.
     * This is what keeps the comments set on this page different than comments set on another page.
     * The default value is the URL of the page.
     * @param string $postId Identifier of post or page.
     * @return \Catharsis\Web\IntenseDebateCommentsWidget
     *         Reference to the current widget.
     */
    public function postId($postId)
    {
        $this->_postId = (string) $postId;
        return $this;
    }

    /**
     * This is the unique identifier of the post or page.
     * This is what keeps the comments set on this page different than comments set on another page.
     * The default value is the URL of the page.
     * @return string Identifier of post or page.
     */
    public function getPostId()
    {
        return $this->_postId;
    }

    /**
     * This is title of the post or page.
     * This is the title that will be displayed in RSS feeds and on IntenseDebate.com.
     * The default value is the title of the current page.
     * @param string $postTitle Title of post or page.
     * @return \Catharsis\Web\IntenseDebateCommentsWidget
     *         Reference to the current widget.
     */
    public function postTitle($postTitle)
    {
        $this->_postTitle = (string) $postTitle;
        return $this;
    }

    /**
     * This is title of the post or page.
     * This is the title that will be displayed in RSS feeds and on IntenseDebate.com.
     * The default value is the title of the current page.
     * @return string Title of post or page.
     */
    public function getPostTitle()
    {
        return $this->_postTitle;
    }

    /**
     * This is the url of the post or page.
     * This is url Intense Debate will link to in RSS feeds and on IntenseDebate.com.
     * The default is the current page's URL.
     * @param string $postUrl URL of post or page.
     * @return \Catharsis\Web\IntenseDebateCommentsWidget
     *         Reference to the current widget.
     */
    public function postUrl($postUrl)
    {
        $this->_postUrl = (string) $postUrl;
        return $this;
    }

    /**
     * This is the url of the post or page.
     * This is url Intense Debate will link to in RSS feeds and on IntenseDebate.com.
     * The default is the current page's URL.
     * @return string URL of post or page.
     */
    public function getPostUrl()
    {
        return $this->_postUrl;
    }

    /**
     * Returns HTML markup text of widget.
     * @return string Widget's HTML markup.
     */
    public function __toString()
    {
        if (empty($this->getAccount())) {
            return '';
        }

        return
        '<script type="text/javascript">'
        . "var idcomments_acct = \"{$this->getAccount()}\";"
        . "var idcomments_post_id = \"{$this->getPostId()}\";"
        . "var idcomments_post_url = \"{$this->getPostUrl()}\";"
        . "var idcomments_post_title = \"{$this->getPostTitle()}\";"
        . '</script>'
        . '<span id="IDCommentsPostTitle" style="display:none"></span>'
        . '<script src="http://www.intensedebate.com/js/genericCommentWrapperV2.js type="text/javascript"></script>';
    }
}

?>
