<?php
/**
 * VkontakteLikeButtonWidget class.
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
 * Renders VKontakte "Like" button widget.
 * Requires Vkontakte JavaScript initialization to be performed first.
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 * @link      http://vk.com/dev/Like
 */
class VkontakteLikeButtonWidget extends HtmlWidget
{
    private $_description;
    private $_elementId;
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
     * @return \Catharsis\Web\VkontakteLikeButtonWidget
     *         Reference to the current widget.
     */
    public function description($description)
    {
        $this->_description = (string) $description;
        return $this;
    }

    /**
     * Description of the page (to display in preview mode for record on the wall).
     * @return string Description of the page.
     */
    public function getDescription()
    {
        return $this->_description;
    }

    /**
     * Identifier of HTML container for the widget.
     * @param string $id HTML element's identifier.
     * @return \Catharsis\Web\VkontakteLikeButtonWidget
     *         Reference to the current widget.
     */
    public function elementId($id)
    {
        $this->_elementId = (string) $id;
        return $this;
    }

    /**
     * Identifier of HTML container for the widget.
     * @return string HTML element's identifier.
     */
    public function getElementId()
    {
        return $this->_elementId;
    }

    /**
     * Vertical height of the button in pixels.
     * Default value is "22".
     * @param string $height Height of button.
     * @return \Catharsis\Web\VkontakteLikeButtonWidget
     *         Reference to the current widget.
     */
    public function height($height)
    {
        $this->_height = (string) $height;
        return $this;
    }

    /**
     * Vertical height of the button in pixels.
     * Default value is "22".
     * @return string Height of button.
     */
    public function getHeight()
    {
        return $this->_height;
    }

    /**
     * URL of the thumbnail image (to display in preview mode for record on the wall).
     * @param string $url URL of post's thumbnail image.
     * @return \Catharsis\Web\VkontakteLikeButtonWidget
     *         Reference to the current widget.
     */
    public function image($url)
    {
        $this->_image = (string) $url;
        return $this;
    }

    /**
     * URL of the thumbnail image (to display in preview mode for record on the wall).
     * @return string URL of post's thumbnail image.
     */
    public function getImage()
    {
        return $this->_image;
    }

    /**
     * Visual layout/appearance of the button.
     * @param string $layout Layout of button.
     * @return \Catharsis\Web\VkontakteLikeButtonWidget
     *         Reference to the current widget.
     */
    public function layout($layout)
    {
        $this->_layout = (string) $layout;
        return $this;
    }

    /**
     * Visual layout/appearance of the button.
     * @return string Layout of button.
     */
    public function getLayout()
    {
        return $this->_layout;
    }

    /**
     * Text to be published on the wall when "Tell to friends" is pressed.
     * Maximum length is 140 characters.
     * Default value equals to page's title.
     * @param string $text Text for publishing.
     * @return \Catharsis\Web\VkontakteLikeButtonWidget
     *         Reference to the current widget.
     */
    public function text($text)
    {
        $this->_text = (string) $text;
        return $this;
    }

    /**
     * Text to be published on the wall when "Tell to friends" is pressed.
     * Maximum length is 140 characters.
     * Default value equals to page's title.
     * @return string Text for publishing.
     */
    public function getText()
    {
        return $this->_text;
    }

    /**
     * Title of the page (to display in preview mode for record on the wall).
     * @param string $title Title of the page.
     * @return \Catharsis\Web\VkontakteLikeButtonWidget
     *         Reference to the current widget.
     */
    public function title($title)
    {
        $this->_title = (string) $title;
        return $this;
    }

    /**
     * Title of the page (to display in preview mode for record on the wall).
     * @return string Title of the page.
     */
    public function getTitle()
    {
        return $this->_title;
    }

    /**
     * URL of the page to "like" (this URL will be shown in a record on the wall).
     * Default is URL of the current page.
     * @param string $url URL of target web page.
     * @return \Catharsis\Web\VkontakteLikeButtonWidget
     *         Reference to the current widget.
     */
    public function url($url)
    {
        $this->_url = (string) $url;
        return $this;
    }

    /**
     * URL of the page to "like" (this URL will be shown in a record on the wall).
     * Default is URL of the current page.
     * @return string URL of target web page.
     */
    public function getUrl()
    {
        return $this->_url;
    }

    /**
     * Type of text to display on the button.
     * @param integer $verb Displayed button's verb.
     * @return \Catharsis\Web\VkontakteLikeButtonWidget
     *         Reference to the current widget.
     */
    public function verb($verb)
    {
        $this->_verb = (int) $verb;
        return $this;
    }

    /**
     * Type of text to display on the button.
     * @return integer Displayed button's verb.
     */
    public function getVerb()
    {
        return $this->_verb;
    }

    /**
     * Width of button in pixels (integer value > 200, default value is 350).
     * Parameter value has meaning only for a button with a text counter (layout = "full").
     * @param string $width Width of button.
     * @return \Catharsis\Web\VkontakteLikeButtonWidget
     *         Reference to the current widget.
     */
    public function width($width)
    {
        $this->_width = (string) $width;
        return $this;
    }

    /**
     * Width of button in pixels (integer value > 200, default value is 350).
     * Parameter value has meaning only for a button with a text counter (layout = "full").
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
        $config = array();
        if (!empty($this->getLayout())) {
            $config['type'] = $this->getLayout();
        }
        if (!empty($this->getWidth())) {
            $config['width'] = $this->getWidth();
        }
        if (!empty($this->getTitle())) {
            $config['pageTitle'] = $this->getTitle();
        }
        if (!empty($this->getDescription())) {
            $config['pageDescription'] = $this->getDescription();
        }
        if (!empty($this->getUrl())) {
            $config['pageUrl'] = $this->getUrl();
        }
        if (!empty($this->getImage())) {
            $config['pageImage'] = $this->getImage();
        }
        if (!empty($this->getText())) {
            $config['text'] = $this->getText();
        }
        if (!empty($this->getHeight())) {
            $config['height'] = $this->getHeight();
        }
        if ($this->getVerb() !== null) {
            $config['verb'] = $this->getVerb();
        }
        $config_json = json_encode($config, JSON_FORCE_OBJECT);

        $element_id = empty($this->getElementId()) ? 'vk_like' : $this->getElementId();

        return
            self::htmlTag('div', array('id' => $element_id))
            .self::javascriptInline("VK.Widgets.Like(\"${element_id}\", {$config_json});");
    }
}

?>
