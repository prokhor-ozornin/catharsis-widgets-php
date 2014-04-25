<?php
namespace Catharsis\Web;

/**
 * Renders VKontakte comments widget.
 * Requires {@link WidgetsScripts::vkontakte} script to be included.
 * @link http://vk.com/dev/Comments
 */
class VkontakteCommentsWidget extends HtmlWidget
{
    private $_attach = array();
    private $_limit = VkontakteCommentsLimit::Limit5;
    private $_width;

    /**
     * Collection of attachment types, which are allowed in comment posts.
     * @param array $types Allowed types of post attachments.
     * @return \Catharsis\Web\VkontakteCommentsWidget Reference to the current widget.
     */
    public function attach($types)
    {
        $this->_attach = (array) $types;
        return $this;
    }

    /**
     * Maximum number of comments to display.
     * @param integer $limit Maximum number of comments.
     * @return \Catharsis\Web\VkontakteCommentsWidget Reference to the current widget.
     */
    public function limit($limit)
    {
        $this->_limit = (int) $limit;
        return $this;
    }

    /**
     * Horizontal width of comment area.
     * @param string $width Width of comments widget.
     * @return \Catharsis\Web\VkontakteCommentsWidget Reference to the current widget.
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
        $config = array("limit" => $this->_limit);
        if (!empty($this->_attach)) {
            $config["attach"] = implode(",", $this->_attach);
        }
        else {
            $config["attach"] = false;
        }
        if (!empty($this->_width)) {
            $config["width"] = $this->_width;
        }
        $config_json = json_encode($config, JSON_FORCE_OBJECT);

        return self::htmlTag("div", array("id" => "vk_comments"))
               .self::javascriptInline("VK.Widgets.Comments(\"vk_comments\", $config_json);");
    }
}

?>
