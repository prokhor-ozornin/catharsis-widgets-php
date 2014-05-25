<?php
/**
 * VkontakteAuthButtonWidget class.
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
 * Renders VKontakte OAuth button widget.
 * Requires Vkontakte JavaScript initialization to be performed first.
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 * @link      http://vk.com/dev/Auth
 */
class VkontakteAuthButtonWidget extends HtmlWidget
{
    private $_callback;
    private $_elementId;
    private $_type = VkontakteAuthButtonType::STANDARD;
    private $_url;
    private $_width;

    /**
     * Name of JavaScript function to be called after successful authentication, if using dynamic mode.
     * @param string $callback JavaScript callback function.
     * @return \Catharsis\Web\VkontakteAuthButtonWidget
     *         Reference to the current widget.
     */
    public function callback($callback)
    {
        $this->_callback = (string) $callback;
        return $this;
    }

    /**
     * Name of JavaScript function to be called after successful authentication, if using dynamic mode.
     * @return string JavaScript callback function.
     */
    public function getCallback()
    {
        return $this->_callback;
    }

    /**
     * Uses "dynamic" authentication mode with JavaScript callback function.
     * @param string $callback JavaScript callback function.
     * @return \Catharsis\Web\VkontakteAuthButtonWidget
     *         Reference to the current widget.
     */
    public function dynamic($callback)
    {
        return $this->type(VkontakteAuthButtonType::DYNAMIC)->callback($callback);
    }

    /**
     * Identifier of HTML container for the widget.
     * @param string $id HTML element's identifier.
     * @return \Catharsis\Web\VkontakteAuthButtonWidget
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
     * Uses "standard" authentication mode with URL redirection.
     * @param string $url URL to be redirected to.
     * @return \Catharsis\Web\VkontakteAuthButtonWidget
     *         Reference to the current widget.
     */
    public function standard($url)
    {
        return $this->type(VkontakteAuthButtonType::STANDARD)->url($url);
    }

    /**
     * Type of authentication mode to use.
     * @param string $type Authentication mode.
     * @return \Catharsis\Web\VkontakteAuthButtonWidget
     *         Reference to the current widget.
     */
    public function type($type)
    {
        $this->_type = (string) $type;
        return $this;
    }

    /**
     * Type of authentication mode to use.
     * @return string Authentication mode.
     */
    public function getType()
    {
        return $this->_type;
    }

    /**
     * URL address of web page to be redirected to, if using standard mode.
     * @param string $url Target URL web page.
     * @return \Catharsis\Web\VkontakteAuthButtonWidget
     *         Reference to the current widget.
     */
    public function url($url)
    {
        $this->_url = (string) $url;
        return $this;
    }

    /**
     * URL address of web page to be redirected to, if using standard mode.
     * @return string Target URL web page.
     */
    public function getUrl()
    {
        return $this->_url;
    }

    /**
     * Horizontal width of button.
     * @param string $width Width of button.
     * @return \Catharsis\Web\VkontakteAuthButtonWidget
     *         Reference to the current widget.
     */
    public function width($width)
    {
        $this->_width = (string) $width;
        return $this;
    }

    /**
     * Horizontal width of button.
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
        if ($this->getType() === VkontakteAuthButtonType::DYNAMIC && empty($this->getCallback())) {
            return '';
        }

        if ($this->getType() === VkontakteAuthButtonType::STANDARD && empty($this->getUrl())) {
            return '';
        }

        $config = array();
        if (!empty($this->getCallback())) {
            $config['onAuth'] = $this->getCallback();
        }
        if (!empty($this->getUrl())) {
            $config['authUrl'] = $this->getUrl();
        }
        if (!empty($this->getWidth())) {
            $config['width'] = $this->getWidth();
        }
        $config_json = json_encode($config, JSON_FORCE_OBJECT);

        $element_id = empty($this->getElementId()) ? 'vk_auth' : $this->getElementId();

        return
            self::htmlTag('div', array('id' => $element_id))
           .self::javascriptInline("VK.Widgets.Auth(\"${element_id}\", {$config_json});");
    }
}

?>
