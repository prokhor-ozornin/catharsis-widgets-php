<?php
/**
 * VkontaktePostWidget class.
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
 * Renders VKontakte Wall Post widget.
 * Requires Vkontakte JavaScript initialization to be performed first.
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 * @link      http://vk.com/dev/Post
 */
class VkontaktePostWidget extends HtmlWidget
{
    private $_elementId;
    private $_hash;
    private $_id;
    private $_owner;
    private $_width;

    /**
     * Identifier of HTML container for the widget.
     * @param string $id HTML element's identifier.
     * @return \Catharsis\Web\VkontaktePostWidget
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
     * Unique hash code of wall's post.
     * This attribute is required.
     * @param string $hash Hash code of post.
     * @return \Catharsis\Web\VkontaktePostWidget
     */
    public function hash($hash)
    {
        $this->_hash = (string) $hash;
        return $this;
    }

    /**
     * Unique hash code of wall's post.
     * @return string Hash code of post.
     */
    public function getHash()
    {
        return $this->_hash;
    }

    /**
     * Unique identifier of wall's post.
     * This attribute is required.
     * @param string $id Identifier of post.
     * @return \Catharsis\Web\VkontaktePostWidget
     */
    public function id($id)
    {
        $this->_id = (string) $id;
        return $this;
    }

    /**
     * Unique identifier of wall's post.
     * @return string Identifier of post.
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * Unique identifier of Vkontakte wall's owner.
     * This attribute is required.
     * @param string $id Identifier of wall's owner.
     * @return \Catharsis\Web\VkontaktePostWidget
     */
    public function owner($id)
    {
        $this->_owner = (string) $id;
        return $this;
    }

    /**
     * Unique identifier of Vkontakte wall's owner.
     * @return string Identifier of wall's owner.
     */
    public function getOwner()
    {
        return $this->_owner;
    }

    /**
     * Width of wall's post.
     * Default is the width of entire screen.
     * @param string $width Width of post
     * @return \Catharsis\Web\VkontaktePostWidget
     */
    public function width($width)
    {
        $this->_width = (string) $width;
        return $this;
    }

    /**
     * Width of wall's post.
     * Default is the width of entire screen.
     * @return string Width of post
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
        if (empty($this->getId()) || empty($this->getOwner()) || empty($this->getHash())) {
            return '';
        }

        $config = array();
        if (!empty($this->getWidth())) {
            $config['width'] = $this->getWidth();
        }
        $config_json = json_encode($config, JSON_FORCE_OBJECT);

        $element_id = empty($this->getElementId()) ? "vk_post_{$this->getOwner()}_{$this->getId()}" : $this->getElementId();

        return
            self::htmlTag('div', array('id' => $element_id))
            .self::javascriptInline("(function() { window.VK && VK.Widgets && VK.Widgets.Post && VK.Widgets.Post(\"{$element_id}\", {$this->getOwner()}, {$this->getId()}, \"{$this->getHash()}\", ${config_json}) || setTimeout(arguments.callee, 50); }());");
    }
}

?>
