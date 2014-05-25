<?php
/**
 * TwitterFollowButtonWidget class.
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
 * Renders Twitter "Follow" button.
 * Requires {@link WidgetsScriptsBundles::twitter()} scripts bundle to be included.
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 * @link      https://dev.twitter.com/docs/follow-button
 */
class TwitterFollowButtonWidget extends HtmlWidget
{
    private $_account;
    private $_alignment;
    private $_counter;
    private $_language;
    private $_screenName;
    private $_size;
    private $_suggestions;
    private $_width;

    /**
     * Twitter account name.
     * This attribute is required.
     * @param string $account Account name.
     * @return \Catharsis\Web\TwitterFollowButtonWidget
     *         Reference to the current widget.
     */
    public function account($account)
    {
        $this->_account = (string) $account;
        return $this;
    }

    /**
     * Twitter account name.
     * @return string Account name.
     */
    public function getAccount()
    {
        return $this->_account;
    }

    /**
     * Horizontal alignment of the button.
     * @param string $alignment Horizontal alignment of button.
     * @return \Catharsis\Web\TwitterFollowButtonWidget
     *         Reference to the current widget.
     */
    public function alignment($alignment)
    {
        $this->_alignment = (string) $alignment;
        return $this;
    }

    /**
     * Horizontal alignment of the button.
     * @return string Horizontal alignment of button.
     */
    public function getAlignment()
    {
        return $this->_alignment;
    }

    /**
     * Whether to display user's followers count.
     * Default is FALSE.
     * @param boolean $show TRUE to show followers count, FALSE to hide.
     * @return \Catharsis\Web\TwitterFollowButtonWidget
     *         Reference to the current widget.
     */
    public function counter($show)
    {
        $this->_counter = (bool) $show;
        return $this;
    }

    /**
     * Whether to display user's followers count.
     * Default is FALSE.
     * @return boolean TRUE to show followers count, FALSE to hide.
     */
    public function getCounter()
    {
        return $this->_counter;
    }

    /**
     * Language for the "Follow" button.
     * Default is either request locale's language or language of the current thread.
     * @param string $language Interface language for button.
     * @return \Catharsis\Web\TwitterFollowButtonWidget
     *         Reference to the current widget.
     */
    public function language($language)
    {
        $this->_language = (string) $language;
        return $this;
    }

    /**
     * Language for the "Follow" button.
     * Default is either request locale's language or language of the current thread.
     * @return string Interface language for button.
     */
    public function getLanguage()
    {
        return $this->_language;
    }

    /**
     * Whether to show user's screen name.
     * Default is TRUE.
     * @param boolean $screenName TRUE to show screen name, FALSE to hide.
     * @return \Catharsis\Web\TwitterFollowButtonWidget
     *         Reference to the current widget.
     */
    public function screenName($screenName)
    {
        $this->_screenName = (bool) $screenName;
        return $this;
    }

    /**
     * Whether to show user's screen name.
     * Default is TRUE.
     * @return boolean TRUE to show screen name, FALSE to hide.
     */
    public function getScreenName()
    {
        return $this->_screenName;
    }

    /**
     * The size of the rendered button.
     * Default is "medium".
     * @param string $size Size of button.
     * @return \Catharsis\Web\TwitterFollowButtonWidget
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
     * @return \Catharsis\Web\TwitterFollowButtonWidget
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
     * Width of the button.
     * @param string $width Width of button.
     * @return \Catharsis\Web\TwitterFollowButtonWidget
     *         Reference to the current widget.
     */
    public function width($width)
    {
        $this->_width = (string) $width;
        return $this;
    }

    /**
     * Width of the button.
     * @return string Width of button.
     */
    public function getWidth()
    {
        return $this->_width;
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

        return self::htmlTag(
            'a',
            array(
                'class' => 'twitter-follow-button',
                'data-align' => $this->getAlignment(),
                'data-dnt' => $this->getSuggestions() !== null ? !$this->getSuggestions() : null,
                'data-lang' => empty($this->getLanguage()) ? $this->userLanguage() : $this->getLanguage(),
                'data-show-count' => $this->getCounter(),
                'data-show-screen-name' => $this->getScreenName(),
                'data-size' => $this->getSize(),
                'data-width' => $this->getWidth(),
                'href' => "https://twitter.com/{$this->getAccount()}"
            )
        );
    }
}

?>
