<?php
namespace Catharsis\Web;

/**
 * Renders Twitter "Follow" button.
 * Requires {@link WidgetsScriptsBundles::twitter()} scripts bundle to be included.
 * @link https://dev.twitter.com/docs/follow-button
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
     * @return \Catharsis\Web\TwitterFollowButtonWidget Reference to the current widget.
     */
    public function account($account)
    {
        $this->_account = (string) $account;
        return $this;
    }

    /**
     * Horizontal alignment of the button.
     * @param string $alignment Horizontal alignment of button.
     * @return \Catharsis\Web\TwitterFollowButtonWidget Reference to the current widget.
     */
    public function alignment($alignment)
    {
        $this->_alignment = (string) $alignment;
        return $this;
    }

    /**
     * Whether to display user's followers count. Default is FALSE.
     * @param boolean $show TRUE to show followers count, FALSE to hide.
     * @return \Catharsis\Web\TwitterFollowButtonWidget Reference to the current widget.
     */
    public function counter($show = true)
    {
        $this->_counter = (bool) $show;
        return $this;
    }

    /**
     * Language for the "Follow" button. Default is either request locale's language or language of the current thread.
     * @param string $language Interface language for button.
     * @return \Catharsis\Web\TwitterFollowButtonWidget Reference to the current widget.
     */
    public function language($language)
    {
        $this->_language = (string) $language;
        return $this;
    }

    /**
     * Whether to show user's screen name. Default is TRUE.
     * @param boolean $screenName TRUE to show screen name, FALSE to hide.
     * @return \Catharsis\Web\TwitterFollowButtonWidget Reference to the current widget.
     */
    public function screenName($screenName = true)
    {
        $this->_screenName = (bool) $screenName;
        return $this;
    }

    /**
     * The size of the rendered button. Default is "medium".
     * @param string $size Size of button.
     * @return \Catharsis\Web\TwitterFollowButtonWidget Reference to the current widget.
     */
    public function size($size)
    {
        $this->_size = (string) $size;
        return $this;
    }

    /**
     * Whether to enable twitter suggestions. Default is TRUE.
     * @param boolean $enabled TRUE to not opt-out of suggestions, FALSE to opt-in.
     * @return \Catharsis\Web\TwitterFollowButtonWidget Reference to the current widget.
     */
    public function suggestions($enabled = true)
    {
        $this->_suggestions = (bool) $enabled;
        return $this;
    }

    /**
     * Width of the button.
     * @param string $width Width of button.
     * @return \Catharsis\Web\TwitterFollowButtonWidget Reference to the current widget.
     */
    public function width($width)
    {
        $this->_width = (string) $width;
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

        return self::htmlTag("a", array(
            "class" => "twitter-follow-button",
            "data-align" => $this->_alignment,
            "data-dnt" => isset($this->_suggestions) ? !$this->_suggestions : null,
            "data-lang" => empty($this->_language) ? $this->userLanguage() : $this->_language,
            "data-show-count" => $this->_counter,
            "data-show-screen-name" => $this->_screenName,
            "data-size" => $this->_size,
            "data-width" => $this->_width,
            "href" => "https://twitter.com/{$this->_account}"
        ));
    }
}

?>
