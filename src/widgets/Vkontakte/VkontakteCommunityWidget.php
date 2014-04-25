<?php
namespace Catharsis\Web;

/**
 * Renders VKontakte community widget.
 * Requires {@link WidgetsScripts::vkontakte} script to be included.
 * @link http://vk.com/dev/Community
 */
class VkontakteCommunityWidget extends HtmlWidget
{
    private $_account;
    private $_height;
    private $_mode = VkontakteCommunityMode::Participants;
    private $_width;

    /**
     * Identifier or VKontakte public group/community.
     * This attribute is required.
     * @param string $account Group identifier.
     * @return \Catharsis\Web\VkontakteCommunityWidget Reference to the current widget.
     */
    public function account($account)
    {
        $this->_account = (string) $account;
        return $this;
    }

    /**
     * Vertical height of widget.
     * @param string $height Height of widget.
     * @return \Catharsis\Web\VkontakteCommunityWidget Reference to the current widget.
     */
    public function height($height)
    {
        $this->_height = (string) $height;
        return $this;
    }

    /**
     * Type of information to be displayed about given community.
     * @param integer $mode Community's info type.
     * @return \Catharsis\Web\VkontakteCommunityWidget Reference to the current widget.
     */
    public function mode($mode)
    {
        $this->_mode = (int) $mode;
        return $this;
    }

    /**
     * Horizontal width of widget.
     * @param string $width Width of widget.
     * @return \Catharsis\Web\VkontakteCommunityWidget Reference to the current widget.
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

        $config = array("mode" => $this->_mode);
        if ($this->_mode == VkontakteCommunityMode::News) {
            $config["wide"] = 1;
        }
        if (!empty($this->_width)) {
            $config["width"] = $this->_width;
        }
        if (!empty($this->_height)) {
            $config["height"] = $this->_height;
        }

        $config_json = json_encode($config, JSON_FORCE_OBJECT);
        return self::htmlTag("div", array("id" => "vk_groups"))
               .self::javascriptInline("VK.Widgets.Group(\"vk_groups\", $config_json, \"$this->_account\");");
    }
}

?>
