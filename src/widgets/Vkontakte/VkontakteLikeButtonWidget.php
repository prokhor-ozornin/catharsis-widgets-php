<?php
namespace Catharsis\Web;

/**
 * Renders VKontakte "Like" button widget.
 * Requires {@link WidgetsScripts::vkontakte} script to be included.
 * @link http://vk.com/dev/Like
 */
class VkontakteLikeButtonWidget extends HtmlWidget
{
    private $_description;
    private $_height;
    private $_image;
    private $_layout;
    private $_text;
    private $_title;
    private $_url;
    private $_verb;
    private $_width;

    /**
     * Description of the page (to display in preview mode for record on the wall).
     * @param string $description Description of the page.
     * @return \Catharsis\Web\VkontakteLikeButtonWidget Reference to the current widget.
     */
    public function description($description)
    {
        $this->_description = (string) $description;
        return $this;
    }

    /**
     * Vertical height of the button in pixels. Default value is "22".
     * @param string $height Height of button.
     * @return \Catharsis\Web\VkontakteLikeButtonWidget Reference to the current widget.
     */
    public function height($height)
    {
        $this->_height = (string) $height;
        return $this;
    }

    /**
     * URL of the thumbnail image (to display in preview mode for record on the wall).
     * @param string $url URL of post's thumbnail image.
     * @return \Catharsis\Web\VkontakteLikeButtonWidget Reference to the current widget.
     */
    public function image($url)
    {
        $this->_image = (string) $url;
        return $this;
    }

    /**
     * Visual layout/appearance of the button.
     * @param string $layout Layout of button.
     * @return \Catharsis\Web\VkontakteLikeButtonWidget Reference to the current widget.
     */
    public function layout($layout)
    {
        $this->_layout = (string) $layout;
        return $this;
    }

    /**
     * Text to be published on the wall when "Tell to friends" is pressed. Maximum length is 140 characters. Default value equals to page's title.
     * @param string $text Text for publishing.
     * @return \Catharsis\Web\VkontakteLikeButtonWidget Reference to the current widget.
     */
    public function text($text)
    {
        $this->_text = (string) $text;
        return $this;
    }

    /**
     * Title of the page (to display in preview mode for record on the wall).
     * @param string $title Title of the page.
     * @return \Catharsis\Web\VkontakteLikeButtonWidget Reference to the current widget.
     */
    public function title($title)
    {
        $this->_title = (string) $title;
        return $this;
    }

    /**
     * URL of the page to "like" (this URL will be shown in a record on the wall). Default is URL of the current page.
     * @param string $url URL of target web page.
     * @return \Catharsis\Web\VkontakteLikeButtonWidget Reference to the current widget.
     */
    public function url($url)
    {
        $this->_url = (string) $url;
        return $this;
    }

    /**
     * Type of text to display on the button.
     * @param integer $verb Displayed button's verb.
     * @return \Catharsis\Web\VkontakteLikeButtonWidget Reference to the current widget.
     */
    public function verb($verb)
    {
        $this->_verb = (int) $verb;
        return $this;
    }

    /**
     * Width of button in pixels (integer value > 200, default value is 350). Parameter value has meaning only for a button with a text counter (layout = "full").
     * @param string $width Width of button.
     * @return \Catharsis\Web\VkontakteLikeButtonWidget Reference to the current widget.
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
        $config = array();
        if (!empty($this->_layout)) {
            $config["type"] = $this->_layout;
        }
        if (!empty($this->_width)) {
            $config["width"] = $this->_width;
        }
        if (!empty($this->_title)) {
            $config["pageTitle"] = $this->_title;
        }
        if (!empty($this->_description)) {
            $config["pageDescription"] = $this->_description;
        }
        if (!empty($this->_url)) {
            $config["pageUrl"] = $this->_url;
        }
        if (!empty($this->_image)) {
            $config["pageImage"] = $this->_image;
        }
        if (!empty($this->_text)) {
            $config["text"] = $this->_text;
        }
        if (!empty($this->_height)) {
            $config["height"] = $this->_height;
        }
        if (!empty($this->_verb)) {
            $config["verb"] = $this->_verb;
        }

        $config_json = json_encode($config, JSON_FORCE_OBJECT);

        return self::htmlTag("div", array("id" => "vk_like"))
               .self::javascriptInline("VK.Widgets.Like(\"vk_like\", $config_json);");
    }
}

?>
