<?php
/**
 * VkontakteSubscriptionWidget class.
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
 * Renders VKontakte page subscription widget.
 * Requires Vkontakte JavaScript initialization to be performed first.
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 * @link      http://vk.com/dev/Subscribe
 */
class VkontakteSubscriptionWidget extends HtmlWidget
{
    private $_account;
    private $_elementId;
    private $_layout = VkontakteSubscriptionButtonLayout::BUTTON;
    private $_onlyButton = false;

    /**
     * Identifier of user/group to subscribe to.
     * This attribute is required.
     * @param string $account Account to subscribe to.
     * @return \Catharsis\Web\VkontakteSubscriptionWidget
     *         Reference to the current widget.
     */
    public function account($account)
    {
        $this->_account = (string) $account;
        return $this;
    }

    /**
     * Identifier of user/group to subscribe to.
     * @return string Account to subscribe to.
     */
    public function getAccount()
    {
        return $this->_account;
    }

    /**
     * Identifier of HTML container for the widget.
     * @param string $id HTML element's identifier.
     * @return \Catharsis\Web\VkontakteSubscriptionWidget
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
     * Visual layout/appearance of the button.
     * @param integer $layout Layout of button.
     * @return \Catharsis\Web\VkontakteSubscriptionWidget
     *         Reference to the current widget.
     */
    public function layout($layout)
    {
        $this->_layout = (int) $layout;
        return $this;
    }

    /**
     * Visual layout/appearance of the button.
     * @return integer Layout of button.
     */
    public function getLayout()
    {
        return $this->_layout;
    }

    /**
     * Whether to display both author and button or button only.
     * @param boolean $onlyButton FALSE to display both author/button,
     *                            TRUE to display only button.
     * @return \Catharsis\Web\VkontakteSubscriptionWidget
     *         Reference to the current widget.
     */
    public function onlyButton($onlyButton)
    {
        $this->_onlyButton = (bool) $onlyButton;
        return $this;
    }

    /**
     * Whether to display both author and button or button only.
     * @return boolean FALSE to display both author/button,
     *                 TRUE to display only button.
     */
    public function getOnlyButton()
    {
        return $this->_onlyButton;
    }

    /**
     * Returns HTML markup text of widget.
     * @return string Widget's HTML markup.
     */
    public function __toString()
    {
        if (empty($this->getAccount())) {
            return '';
        }

        $config = array('mode' => $this->getLayout());
        if ($this->getOnlyButton()) {
            $config['soft'] = 1;
        }
        $config_json = json_encode($config, JSON_FORCE_OBJECT);

        $element_id = empty($this->getElementId()) ? "vk_subscribe_{$this->getAccount()}" : $this->getElementId();

        return
            self::htmlTag('div', array('id' => $element_id))
            .self::javascriptInline("VK.Widgets.Subscribe(\"${element_id}\", {$config_json}, \"{$this->getAccount()}\");");
    }
}

?>
