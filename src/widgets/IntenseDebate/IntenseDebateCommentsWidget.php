<?php
namespace Catharsis\Web;

/**
 * Renders IntenseDebate comments widget for registered website.
 * @link http://intensedebate.com
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
     * @return \Catharsis\Web\IntenseDebateCommentsWidget Reference to the current widget.
     */
    public function account($account)
    {
        $this->_account = (string) $account;
        return $this;
    }

    /**
     * This is the unique identifier of the post or page. This is what keeps the comments set on this page different than comments set on another page. The default value is the URL of the page.
     * @param string $_postId Identifier of post or page.
     * @return \Catharsis\Web\IntenseDebateCommentsWidget Reference to the current widget.
     */
    public function postId($_postId)
    {
        $this->_postId = (string) $_postId;
        return $this;
    }

    /**
     * This is title of the post or page. This is the title that will be displayed in RSS feeds and on IntenseDebate.com. The default value is the title of the current page.
     * @param string $postTitle Title of post or page.
     * @return \Catharsis\Web\IntenseDebateCommentsWidget Reference to the current widget.
     */
    public function postTitle($postTitle)
    {
        $this->_postTitle = (string) $postTitle;
        return $this;
    }

    /**
     * This is the url of the post or page. This is url Intense Debate will link to in RSS feeds and on IntenseDebate.com. The default is the current page's URL.
     * @param string $postUrl URL of post or page.
     * @return \Catharsis\Web\IntenseDebateCommentsWidget Reference to the current widget.
     */
    public function postUrl($postUrl)
    {
        $this->_postUrl = (string) $postUrl;
        return $this;
    }

    /**
     * Returns HTML markup text of widget.
     */
    public function __toString()
    {
        if (empty($this->_account)) {
            return "";
        }

        return "<script type=\"text/javascript\">var idcomments_acct = \"{$this->_account}\"; var idcomments_post_id = \"{$this->_postId}\"; var idcomments_post_url = \"{$this->_postUrl}\"; var idcomments_post_title = \"{$this->_postTitle}\";</script><span id=\"IDCommentsPostTitle\" style=\"display:none\"></span><script src=\"http://www.intensedebate.com/js/genericCommentWrapperV2.js\" type=\"text/javascript\"></script>";
    }
}

?>
