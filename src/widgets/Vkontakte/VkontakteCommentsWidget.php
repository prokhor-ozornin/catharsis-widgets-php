<?php
/**
 * VkontakteCommentsWidget class.
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
 * Renders VKontakte comments widget.
 * Requires Vkontakte JavaScript initialization to be performed first.
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 * @link      http://vk.com/dev/Comments
 */
class VkontakteCommentsWidget extends HtmlWidget
{
    private $_attach = array();
    private $_autoPublish;
    private $_autoUpdate;
    private $_elementId;
    private $_limit = VkontakteCommentsLimit::LIMIT_5;
    private $_mini;
    private $_width;

    /**
     * Collection of attachment types, which are allowed in comment posts.
     * @param array $types Allowed types of post attachments.
     * @return \Catharsis\Web\VkontakteCommentsWidget
     *         Reference to the current widget.
     */
    public function attach($types)
    {
        $this->_attach = (array) $types;
        return $this;
    }

    /**
     * Collection of attachment types, which are allowed in comment posts.
     * @return array Allowed types of post attachments.
     */
    public function getAttach()
    {
        return $this->_attach;
    }

    /**
     * Whether to automatically publish user's comment to his status.
     * Default is TRUE.
     * @param boolean $enabled TRUE to enable auto-publishing, FALSE to disable it.
     * @return \Catharsis\Web\VkontakteCommentsWidget
     *         Reference to the current widget.
     */
    public function autoPublish($enabled)
    {
        $this->_autoPublish = (bool) $enabled;
        return $this;
    }

    /**
     * Whether to automatically publish user's comment to his status.
     * Default is TRUE.
     * @return boolean TRUE to enable auto-publishing, FALSE to disable it.
     */
    public function getAutoPublish()
    {
        return $this->_autoPublish;
    }

    /**
     * Whether to enable automatic update of comments in realtime.
     * Default is TRUE.
     * @param boolean $enabled TRUE to enable realtime update, FALSE to disable it.
     * @return \Catharsis\Web\VkontakteCommentsWidget
     *         Reference to the current widget.
     */
    public function autoUpdate($enabled)
    {
        $this->_autoUpdate = (bool) $enabled;
        return $this;
    }

    /**
     * Whether to enable automatic update of comments in realtime.
     * Default is TRUE.
     * @return bool TRUE to enable realtime update, FALSE to disable it.
     */
    public function getAutoUpdate()
    {
        return $this->_autoUpdate;
    }

    /**
     * Identifier of HTML container for the widget.
     * @param string $id HTML element's identifier.
     * @return \Catharsis\Web\VkontakteCommentsWidget
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
     * Maximum number of comments to display.
     * @param integer $limit Maximum number of comments.
     * @return \Catharsis\Web\VkontakteCommentsWidget
     *         Reference to the current widget.
     */
    public function limit($limit)
    {
        $this->_limit = (int) $limit;
        return $this;
    }

    /**
     * Maximum number of comments to display.
     * @return integer Maximum number of comments.
     */
    public function getLimit()
    {
        return $this->_limit;
    }

    /**
     * Whether to use minimalistic mode of widget (small fonts, images, etc.).
     * Default is to use auto mode (determine automatically).
     * @param boolean $enabled TRUE to enable minimalistic mode, FALSE to disable it.
     * @return \Catharsis\Web\VkontakteCommentsWidget
     *         Reference to the current widget.
     */
    public function mini($enabled)
    {
        $this->_mini = (bool) $enabled;
        return $this;
    }

    /**
     * Whether to use minimalistic mode of widget (small fonts, images, etc.).
     * Default is to use auto mode (determine automatically).
     * @return boolean TRUE to enable minimalistic mode, FALSE to disable it.
     */
    public function getMini()
    {
        return $this->_mini;
    }

    /**
     * Horizontal width of comment area.
     * @param string $width Width of comments widget.
     * @return \Catharsis\Web\VkontakteCommentsWidget
     *         Reference to the current widget.
     */
    public function width($width)
    {
        $this->_width = (string) $width;
        return $this;
    }

    /**
     * Horizontal width of comment area.
     * @return string Width of comments widget.
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
        $config = array('limit' => $this->getLimit());
        if (!empty($this->getAttach())) {
            $config['attach'] = implode(',', $this->getAttach());
        } else {
            $config['attach'] = false;
        }
        if (!empty($this->getWidth())) {
            $config['width'] = $this->getWidth();
        }
        if (!empty($this->getAutoPublish())) {
            $config['autoPublish'] = $this->getAutoPublish() ? 1 : 0;
        }
        if (!empty($this->getAutoUpdate())) {
            $config['norealtime'] = $this->getAutoUpdate() ? 0 : 1;
        }
        if (!empty($this->getMini())) {
            $config['mini'] = $this->getMini() ? 1 : 0;
        }
        $config_json = json_encode($config, JSON_FORCE_OBJECT);

        $element_id = empty($this->getElementId()) ? 'vk_comments' : $this->getElementId();

        return
            self::htmlTag('div', array('id' => $element_id))
            .self::javascriptInline("VK.Widgets.Comments(\"${element_id}\", {$config_json});");
    }
}

?>
