<?php
namespace Catharsis\Web;

/**
 * Renders Twitter "Tweet" button.
 * Requires {@link WidgetsScriptsBundles::twitter()} scripts bundle to be included.
 * @link https://dev.twitter.com/docs/tweet-button
 */
class TwitterTweetButtonWidget extends HtmlWidget
{
    private $_counterPosition;
    private $_countUrl;
    private $_language;
    private $_relatedAccounts = array();
    private $_size;
    private $_suggestions;
    private $_tags = array();
    private $_text;
    private $_url;
    private $_via;

    /**
     * Count box position. Default is "horizontal".
     * @param string $position Count box position.
     * @return \Catharsis\Web\TwitterTweetButtonWidget Reference to the current widget.
     */
    public function counterPosition($position)
    {
        $this->_counterPosition = (string) $position;
        return $this;
    }

    /**
     * The URL to which your shared URL resolves. Default is the URL being shared.
     * @param string $url Resolved URL of shared post.
     * @return \Catharsis\Web\TwitterTweetButtonWidget Reference to the current widget.
     */
    public function countUrl($url)
    {
        $this->_countUrl = (string) $url;
        return $this;
    }

    /**
     * Collection of hashtags which are to be appended to tweet text.
     * @param array $tags Collection of tags for post.
     * @return \Catharsis\Web\TwitterTweetButtonWidget Reference to the current widget.
     */
    public function hashTags($tags)
    {
        $this->_tags = (array) $tags;
        return $this;
    }

    /**
     * Language for the "Tweet" button. Default is either request locale's language or language of the current thread.
     * @param string $language Interface language for button.
     * @return \Catharsis\Web\TwitterTweetButtonWidget Reference to the current widget.
     */
    public function language($language)
    {
        $this->_language = (string) $language;
        return $this;
    }

    /**
     * Collection of related accounts.
     * @param array $accounts Collection of related accounts.
     * @return \Catharsis\Web\TwitterTweetButtonWidget Reference to the current widget.
     */
    public function relatedAccounts($accounts)
    {
        $this->_relatedAccounts = (array) $accounts;
        return $this;
    }

    /**
     * The size of the rendered button. Default is "medium".
     * @param string $size Size of button.
     * @return \Catharsis\Web\TwitterTweetButtonWidget Reference to the current widget.
     */
    public function size($size)
    {
        $this->_size = (string) $size;
        return $this;
    }

    /**
     * Whether to enable twitter suggestions. Default is TRUE.
     * @param boolean $enabled TRUE to not opt-out of suggestions, FALSE to opt-in.
     * @return \Catharsis\Web\TwitterTweetButtonWidget Reference to the current widget.
     */
    public function suggestions($enabled = true)
    {
        $this->_suggestions = (bool) $enabled;
        return $this;
    }

    /**
     * Tweet text. Default is content of the "title" tag.
     * @param string $text Tweet text.
     * @return \Catharsis\Web\TwitterTweetButtonWidget Reference to the current widget.
     */
    public function text($text)
    {
        $this->_text = (string) $text;
        return $this;
    }

    /**
     * URL of the page to share. Default is contents of HTTP "Referrer" header.
     * @param string $url URL of shared web page.
     * @return \Catharsis\Web\TwitterTweetButtonWidget Reference to the current widget.
     */
    public function url($url)
    {
        $this->_url = (string) $url;
        return $this;
    }

    /**
     * Screen name of the user to attribute the Tweet to.
     * @param string $via Screen name of tweet's author.
     * @return \Catharsis\Web\TwitterTweetButtonWidget Reference to the current widget.
     */
    public function via($via)
    {
        $this->_via = (string) $via;
        return $this;
    }

    /**
     * Returns HTML markup text of widget.
     */
    public function __toString()
    {
        return self::htmlTag("a", array(
            "class" => empty($this->_tags) ? "twitter-share-button" : "twitter-hashtag-button",
            "data-count" => $this->_counterPosition,
            "data-counturl" => $this->_countUrl,
            "data-dnt" => isset($this->_suggestions) ? !$this->_suggestions : null,
            "data-hashtags" => implode(" ", $this->_tags),
            "data-lang" => empty($this->_language) ? $this->userLanguage() : $this->_language,
            "data-related" => implode(",", $this->_relatedAccounts),
            "data-size" => $this->_size,
            "data-text" => $this->_text,
            "data-url" => $this->_url,
            "data-via" => $this->_via,
            "href" => "https://twitter.com/share"
        ));
    }
}

?>
