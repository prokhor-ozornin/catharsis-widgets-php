<?php
namespace Catharsis\Web;

/**
 * Renders Twitter "Tweet" button.
 * Requires {@link WidgetsScriptsBundles::twitter()} scripts bundle to be included.
 * @link https://dev.twitter.com/docs/tweet-button
 */
class TwitterTweetButtonWidget extends HtmlWidgetBase
{
  private $count_position;
  private $count_url;
  private $language;
  private $opt_out;
  private $related_accounts = array();
  private $size;
  private $tags = array();
  private $text;
  private $url;
  private $via;

  /**
   * Count box position. Default is "horizontal".
   * @param string $position Count box position.
   * @return \Catharsis\Web\TwitterTweetButtonWidget Reference to the current widget.
   */
  public function count_position($position)
  {
    $this->count_position = (string) $position;
    return $this;
  }

  /**
   * The URL to which your shared URL resolves. Default is the URL being shared.
   * @param string $url Resolved URL of shared post.
   * @return \Catharsis\Web\TwitterTweetButtonWidget Reference to the current widget.
   */
  public function count_url($url)
  {
    $this->count_url = (string) $url;
    return $this;
  }

  /**
   * Collection of hashtags which are to be appended to tweet text.
   * @param array $tags Collection of tags for post.
   * @return \Catharsis\Web\TwitterTweetButtonWidget Reference to the current widget.
   */
  public function hash_tags($tags)
  {
    $this->tags = (array) $tags;
    return $this;
  }

  /**
   * Language for the "Tweet" button. Default is either request locale's language or language of the current thread.
   * @param string $language Interface language for button.
   * @return \Catharsis\Web\TwitterTweetButtonWidget Reference to the current widget.
   */
  public function language($language)
  {
    $this->language = (string) $language;
    return $this;
  }

  /**
   * Whether to opt-out of twitter suggestions. Default is FALSE.
   * @param boolean $opt_out TRUE to opt-out, FALSE to opt-in.
   * @return \Catharsis\Web\TwitterTweetButtonWidget Reference to the current widget.
   */
  public function opt_out($opt_out = true)
  {
    $this->opt_out = (bool) $opt_out;
    return $this;
  }

  /**
   * Collection of related accounts.
   * @param array $accounts Collection of related accounts.
   * @return \Catharsis\Web\TwitterTweetButtonWidget Reference to the current widget.
   */
  public function related_accounts($accounts)
  {
    $this->related_accounts = (array) $accounts;
    return $this;
  }

  /**
   * The size of the rendered button. Default is "medium".
   * @param string $size Size of button.
   * @return \Catharsis\Web\TwitterTweetButtonWidget Reference to the current widget.
   */
  public function size($size)
  {
    $this->size = (string) $size;
    return $this;
  }

  /**
   * Tweet text. Default is content of the "title" tag.
   * @param string $text Tweet text.
   * @return \Catharsis\Web\TwitterTweetButtonWidget Reference to the current widget.
   */
  public function text($text)
  {
    $this->text = (string) $text;
    return $this;
  }

  /**
   * URL of the page to share. Default is contents of HTTP "Referrer" header.
   * @param string $url URL of shared web page.
   * @return \Catharsis\Web\TwitterTweetButtonWidget Reference to the current widget.
   */
  public function url($url)
  {
    $this->url = (string) $url;
    return $this;
  }

  /**
   * Screen name of the user to attribute the Tweet to.
   * @param string $via Screen name of tweet's author.
   * @return \Catharsis\Web\TwitterTweetButtonWidget Reference to the current widget.
   */
  public function via($via)
  {
    $this->via = (string) $via;
    return $this;
  }

  /**
   * Returns HTML markup text of widget.
   */
  public function __toString()
  {
    return self::html_tag("a", array(
     "class" => empty($this->tags) ? "twitter-share-button" : "twitter-hashtag-button",
     "data-count" => $this->count_position,
     "data-counturl" => $this->count_url,
     "data-dnt" => $this->opt_out,
     "data-hashtags" => implode(" ", $this->tags),
     "data-lang" => empty($this->language) ? $this->user_language() : $this->language,
     "data-related" => implode(",", $this->related_accounts),
     "data-size" => $this->size,
     "data-text" => $this->text,
     "data-url" => $this->url,
     "data-via" => $this->via,
     "href" => "https://twitter.com/share"));
  }
}