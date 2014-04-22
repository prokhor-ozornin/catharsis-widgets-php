<?php
namespace Catharsis\Web;

/**
 * Renders IntenseDebate hyperlink with current comment count for registered website.
 * @link http://intensedebate.com
 */
class IntenseDebateLinkWidget extends HtmlWidgetBase
{
  private $account;
  private $post_id;
  private $post_title;
  private $post_url;

  /**
   * Identifier of registered website in the "IntenseDebate" comments system.
   * @param type $account Identifier of website.
   * @return \Catharsis\Web\IntenseDebateLinkWidget Reference to the current widget.
   */
  public function account($account)
  {
    $this->account = (string) $account;
    return $this;
  }

  /**
   * This is the unique identifier of the post or page. This is what keeps the comments set on this page different than comments set on another page. The default value is the URL of the page.
   * @param type $post_id Identifier of post or page.
   * @return \Catharsis\Web\IntenseDebateLinkWidget Reference to the current widget.
   */
  public function post_id($post_id)
  {
    $this->post_id = (string) $post_id;
    return $this;
  }

  /**
   * This is the url of the post or page. This is url Intense Debate will link to in RSS feeds and on IntenseDebate.com. The default is the current page's URL.
   * @param type $post_url URL of post or page.
   * @return \Catharsis\Web\IntenseDebateLinkWidget Reference to the current widget.
   */
  public function post_url($post_url)
  {
    $this->post_url = (string) $post_url;
    return $this;
  }

  /**
   * This is title of the post or page. This is the title that will be displayed in RSS feeds and on IntenseDebate.com. The default value is the title of the current page.
   * @param type $post_title Title of post or page.
   * @return \Catharsis\Web\IntenseDebateLinkWidget Reference to the current widget.
   */
  public function post_title($post_title)
  {
    $this->post_title = (string) $post_title;
    return $this;
  }

  /**
   * Returns HTML markup text of widget.
   */
  public function __toString()
  {
    if (empty($this->account))
    {
      return "";
    }

    return "<script type=\"text/javascript\">var idcomments_acct = \"{$this->account}\"; var idcomments_post_id = \"{$this->post_id}\"; var idcomments_post_url = \"{$this->post_url}\"; var idcomments_post_title = \"{$this->post_title}\";</script><span id=\"IDCommentsPostTitle\" style=\"display:none\"></span><script src=\"http://www.intensedebate.com/js/genericLinkWrapperV2.js\" type=\"text/javascript\"></script>";
  }
}