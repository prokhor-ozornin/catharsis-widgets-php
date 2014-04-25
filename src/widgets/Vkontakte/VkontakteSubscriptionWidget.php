<?php
namespace Catharsis\Web;

/**
 * Renders VKontakte page subscription widget.
 * Requires {@link WidgetsScripts::vkontakte} script to be included.
 * @link http://vk.com/dev/Subscribe
 */
class VkontakteSubscriptionWidget extends HtmlWidget
{
    private $_account;
    private $_layout = VkontakteSubscriptionButtonLayout::First;
    private $_onlyButton = false;

    /**
     * Identifier of user/group to subscribe to.
     * This attribute is required.
     * @param string $account Account to subscribe to.
     * @return \Catharsis\Web\VkontakteSubscriptionWidget Reference to the current widget.
     */
    public function account($account)
    {
        $this->_account = (string) $account;
        return $this;
    }

    /**
     * Visual layout/appearance of the button.
     * @param integer $layout Layout of button.
     * @return \Catharsis\Web\VkontakteSubscriptionWidget Reference to the current widget.
     */
    public function layout($layout)
    {
        $this->_layout = (int) $layout;
        return $this;
    }

    /**
     * Whether to display both author and button or button only.
     * @param boolean $onlyButton FALSE to display both author/button, TRUE to display only button.
     * @return \Catharsis\Web\VkontakteSubscriptionWidget Reference to the current widget.
     */
    public function onlyButton($onlyButton = true)
    {
        $this->_onlyButton = (bool) $onlyButton;
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

        $config = array("mode" => $this->_layout);
        if ($this->_onlyButton) {
            $config["soft"] = 1;
        }

        $config_json = json_encode($config, JSON_FORCE_OBJECT);

        return self::htmlTag("div", array("id" => "vk_subscribe"))
               .self::javascriptInline("VK.Widgets.Subscribe(\"vk_subscribe\", $config_json, \"{$this->_account}\");");
    }
}

?>
