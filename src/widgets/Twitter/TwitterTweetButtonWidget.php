<?php
/**
 * TwitterTweetButtonWidget class.
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
 * Renders Twitter "Tweet" button.
 * Requires {@link WidgetsScriptsBundles::twitter()} scripts bundle to be included.
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 * @link      https://dev.twitter.com/docs/tweet-button
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
     * Count box position.
     * Default is "horizontal".
     * @param string $position Count box position.
     * @return \Catharsis\Web\TwitterTweetButtonWidget
     *         Reference to the current widget.
     */
    public function counterPosition($position)
    {
        $this->_counterPosition = (string) $position;
        return $this;
    }

    /**
     * Count box position.
     * Default is "horizontal".
     * @return string Count box position.
     */
    public function getCounterPosition()
    {
        return $this->_counterPosition;
    }

    /**
     * The URL to which your shared URL resolves.
     * Default is the URL being shared.
     * @param string $url Resolved URL of shared post.
     * @return \Catharsis\Web\TwitterTweetButtonWidget
     *         Reference to the current widget.
     */
    public function countUrl($url)
    {
        $this->_countUrl = (string) $url;
        return $this;
    }

    /**
     * The URL to which your shared URL resolves.
     * Default is the URL being shared.
     * @return string Resolved URL of shared post.
     */
    public function getCountUrl()
    {
        return $this->_countUrl;
    }

    /**
     * Collection of hashtags which are to be appended to tweet text.
     * @param array $tags Collection of tags for post.
     * @return \Catharsis\Web\TwitterTweetButtonWidget
     *         Reference to the current widget.
     */
    public function hashTags($tags)
    {
        $this->_tags = (array) $tags;
        return $this;
    }

    /**
     * Collection of hashtags which are to be appended to tweet text.
     * @return array Collection of tags for post.
     */
    public function getHashTags()
    {
        return $this->_tags;
    }

    /**
     * Language for the "Tweet" button.
     * Default is either request locale's language or language of the current thread.
     * @param string $language Interface language for button.
     * @return \Catharsis\Web\TwitterTweetButtonWidget
     *         Reference to the current widget.
     */
    public function language($language)
    {
        $this->_language = (string) $language;
        return $this;
    }

    /**
     * Language for the "Tweet" button.
     * Default is either request locale's language or language of the current thread.
     * @return string Interface language for button.
     */
    public function getLanguage()
    {
        return $this->_language;
    }

    /**
     * Collection of related accounts.
     * @param array $accounts Collection of related accounts.
     * @return \Catharsis\Web\TwitterTweetButtonWidget
     *         Reference to the current widget.
     */
    public function relatedAccounts($accounts)
    {
        $this->_relatedAccounts = (array) $accounts;
        return $this;
    }

    /**
     * Collection of related accounts.
     * @return array Collection of related accounts.
     */
    public function getRelatedAccounts()
    {
        return $this->_relatedAccounts;
    }

    /**
     * The size of the rendered button.
     * Default is "medium".
     * @param string $size Size of button.
     * @return \Catharsis\Web\TwitterTweetButtonWidget
     *         Reference to the current widget.
     */
    public function size($size)
    {
        $this->_size = (string) $size;
        return $this;
    }

    /**
     * The size of the rendered button.
     * Default is "medium".
     * @return string Size of button.
     */
    public function getSize()
    {
        return $this->_size;
    }

    /**
     * Whether to enable twitter suggestions.
     * Default is TRUE.
     * @param boolean $enabled TRUE to not opt-out of suggestions, FALSE to opt-in.
     * @return \Catharsis\Web\TwitterTweetButtonWidget
     *         Reference to the current widget.
     */
    public function suggestions($enabled)
    {
        $this->_suggestions = (bool) $enabled;
        return $this;
    }

    /**
     * Whether to enable twitter suggestions.
     * Default is TRUE.
     * @return boolean TRUE to not opt-out of suggestions, FALSE to opt-in.
     */
    public function getSuggestions()
    {
        return $this->_suggestions;
    }

    /**
     * Tweet text.
     * Default is content of the "title" tag.
     * @param string $text Tweet text.
     * @return \Catharsis\Web\TwitterTweetButtonWidget
     *         Reference to the current widget.
     */
    public function text($text)
    {
        $this->_text = (string) $text;
        return $this;
    }

    /**
     * Tweet text.
     * Default is content of the "title" tag.
     * @return string Tweet text.
     */
    public function getText()
    {
        return $this->_text;
    }

    /**
     * URL of the page to share.
     * Default is contents of HTTP "Referrer" header.
     * @param string $url URL of shared web page.
     * @return \Catharsis\Web\TwitterTweetButtonWidget
     *         Reference to the current widget.
     */
    public function url($url)
    {
        $this->_url = (string) $url;
        return $this;
    }

    /**
     * URL of the page to share.
     * Default is contents of HTTP "Referrer" header.
     * @return string URL of shared web page.
     */
    public function getUrl()
    {
        return $this->_url;
    }

    /**
     * Screen name of the user to attribute the Tweet to.
     * @param string $via Screen name of tweet's author.
     * @return \Catharsis\Web\TwitterTweetButtonWidget
     *         Reference to the current widget.
     */
    public function via($via)
    {
        $this->_via = (string) $via;
        return $this;
    }

    /**
     * Screen name of the user to attribute the Tweet to.
     * @return string Screen name of tweet's author.
     */
    public function getVia()
    {
        return $this->_via;
    }

    /**
     * Returns HTML markup text of widget.
     * @return string Widget's HTML markup.
     */
    public function __toString()
    {
        return self::htmlTag(
            'a',
            array(
                'class' => empty($this->getHashTags()) ? 'twitter-share-button' : 'twitter-hashtag-button',
                'data-count' => $this->getCounterPosition(),
                'data-counturl' => $this->getCountUrl(),
                'data-dnt' => $this->getSuggestions() !== null ? !$this->getSuggestions() : null,
                'data-hashtags' => implode(' ', $this->getHashTags()),
                'data-lang' => empty($this->getLanguage()) ? $this->userLanguage() : $this->getLanguage(),
                'data-related' => implode(',', $this->getRelatedAccounts()),
                'data-size' => $this->getSize(),
                'data-text' => $this->getText(),
                'data-url' => $this->getUrl(),
                'data-via' => $this->getVia(),
                'href' => 'https://twitter.com/share'
            )
        );
    }
}

?>
