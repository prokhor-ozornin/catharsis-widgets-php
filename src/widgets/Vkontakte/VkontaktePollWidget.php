<?php
/**
 * VkontaktePollWidget class.
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
 * Renders Vkontakte Poll widget.
 * Requires Vkontakte JavaScript initialization to be performed first.
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 * @link      http://vk.com/dev/Poll
 */
class VkontaktePollWidget extends HtmlWidget
{
    private $_elementId;
    private $_id;
    private $_url;
    private $_width;

    /**
     * Identifier of HTML container for the widget.
     * @param string $id HTML element's identifier.
     * @return \Catharsis\Web\VkontaktePollWidget
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
     * Unique identifier of poll.
     * This attribute is required.
     * @param string $id Identifier of poll.
     * @return \Catharsis\Web\VkontaktePollWidget
     *         Reference to the current widget.
     */
    public function id($id)
    {
        $this->_id = (string) $id;
        return $this;
    }

    /**
     * Unique identifier of poll.
     * @return string Identifier of poll.
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * URL address of poll's web page, if it differs from the current one.
     * @param string $url Poll's web page URL.
     * @return \Catharsis\Web\VkontaktePollWidget
     *         Reference to the current widget.
     */
    public function url($url)
    {
        $this->_url = (string) $url;
        return $this;
    }

    /**
     * URL address of poll's web page, if it differs from the current one.
     * @return string Poll's web page URL.
     */
    public function getUrl()
    {
        return $this->_url;
    }

    /**
     * Horizontal width of widget.
     * @param string $width Width of widget.
     * @return \Catharsis\Web\VkontaktePollWidget
     */
    public function width($width)
    {
        $this->_width = (string) $width;
        return $this;
    }

    /**
     * Horizontal width of widget.
     * @return string Width of widget.
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
        if (empty($this->getId())) {
            return '';
        }

        $config = array();
        if (!empty($this->getUrl())) {
            $config['pageUrl'] = $this->getUrl();
        }
        if (!empty($this->getWidth())) {
            $config['width'] = $this->getWidth();
        }
        $config_json = json_encode($config, JSON_FORCE_OBJECT);

        $element_id = empty($this->getElementId()) ? "vk_poll_{$this->getId()}" : $this->getElementId();

        return
            self::htmlTag('div', array('id' => $element_id))
            .self::javascriptInline("VK.Widgets.Poll(\"${element_id}\", {$config_json}, \"{$this->getId()}\");");
    }
}

?>
