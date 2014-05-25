<?php
/**
 * VkontakteCommunityWidget class.
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
 * Renders VKontakte community widget.
 * Requires Vkontakte JavaScript initialization to be performed first.
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 * @link      http://vk.com/dev/Community
 */
class VkontakteCommunityWidget extends HtmlWidget
{
    private $_account;
    private $_backgroundColor;
    private $_buttonColor;
    private $_elementId;
    private $_height;
    private $_mode = VkontakteCommunityMode::PARTICIPANTS;
    private $_textColor;
    private $_width;

    /**
     * Identifier or VKontakte public group/community.
     * This attribute is required.
     * @param string $account Group identifier.
     * @return \Catharsis\Web\VkontakteCommunityWidget
     *         Reference to the current widget.
     */
    public function account($account)
    {
        $this->_account = (string) $account;
        return $this;
    }

    /**
     * Identifier or VKontakte public group/community.
     * @return string Group identifier.
     */
    public function getAccount()
    {
        return $this->_account;
    }

    /**
     * Background color of widget.
     * @param string $color Widget's background color in RRGGBB format.
     * @return \Catharsis\Web\VkontakteCommunityWidget
     *         Reference to the current widget.
     */
    public function backgroundColor($color)
    {
        $this->_backgroundColor = (string) $color;
        return $this;
    }

    /**
     * Background color of widget.
     * @return string Widget's background color in RRGGBB format.
     */
    public function getBackgroundColor()
    {
        return $this->_backgroundColor;
    }

    /**
     * Button color of widget.
     * @param string $color Widget's button color in RRGGBB format.
     * @return \Catharsis\Web\VkontakteCommunityWidget
     *         Reference to the current widget.
     */
    public function buttonColor($color)
    {
        $this->_buttonColor = (string) $color;
        return $this;
    }

    /**
     * Button color of widget.
     * @return string Widget's button color in RRGGBB format.
     */
    public function getButtonColor()
    {
        return $this->_buttonColor;
    }

    /**
     * Identifier of HTML container for the widget.
     * @param string $id HTML element's identifier.
     * @return \Catharsis\Web\VkontakteCommunityWidget
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
     * Vertical height of widget.
     * @param string $height Height of widget.
     * @return \Catharsis\Web\VkontakteCommunityWidget
     *         Reference to the current widget.
     */
    public function height($height)
    {
        $this->_height = (string) $height;
        return $this;
    }

    /**
     * Vertical height of widget.
     * @return string Height of widget.
     */
    public function getHeight()
    {
        return $this->_height;
    }

    /**
     * Type of information to be displayed about given community.
     * @param integer $mode Community's info type.
     * @return \Catharsis\Web\VkontakteCommunityWidget
     *         Reference to the current widget.
     */
    public function mode($mode)
    {
        $this->_mode = (int) $mode;
        return $this;
    }

    /**
     * Type of information to be displayed about given community.
     * @return integer Community's info type.
     */
    public function getMode()
    {
        return $this->_mode;
    }

    /**
     * Text color of widget.
     * @param string $color Widget's text color in RRGGBB format.
     * @return \Catharsis\Web\VkontakteCommunityWidget
     *         Reference to the current widget.
     */
    public function textColor($color)
    {
        $this->_textColor = (string) $color;
        return $this;
    }

    /**
     * Text color of widget.
     * @return string Widget's text color in RRGGBB format.
     */
    public function getTextColor()
    {
        return $this->_textColor;
    }

    /**
     * Horizontal width of widget.
     * @param string $width Width of widget.
     * @return \Catharsis\Web\VkontakteCommunityWidget
     *         Reference to the current widget.
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
        if (empty($this->getAccount())) {
            return '';
        }

        $config = array('mode' => $this->getMode());
        if ($this->getMode() === VkontakteCommunityMode::NEWS) {
            $config['wide'] = 1;
        }
        if (!empty($this->getWidth())) {
            $config['width'] = $this->getWidth();
        }
        if (!empty($this->getHeight())) {
            $config['height'] = $this->getHeight();
        }
        if (!empty($this->getBackgroundColor())) {
            $config['color1'] = $this->getBackgroundColor();
        }
        if (!empty($this->getTextColor())) {
            $config['color2'] = $this->getTextColor();
        }
        if (!empty($this->getButtonColor())) {
            $config['color3'] = $this->getButtonColor();
        }
        $config_json = json_encode($config, JSON_FORCE_OBJECT);

        $element_id = empty($this->getElementId()) ? "vk_groups_{$this->getAccount()}" : $this->getElementId();

        return
            self::htmlTag('div', array('id' => $element_id))
            .self::javascriptInline("VK.Widgets.Group(\"${element_id}\", {$config_json}, \"{$this->getAccount()}\");");
    }
}

?>
