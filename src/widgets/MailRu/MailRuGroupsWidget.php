<?php
/**
 * MailRuGroupsWidget class.
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
 * Renders Mail.ru Group (People In Group) widget.
 * Requires {@link WidgetsScripts::mailru} script to be included.
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 * @link      http://api.mail.ru/sites/plugins/groups
 */
class MailRuGroupsWidget extends HtmlWidget
{
    private $_account;
    private $_backgroundColor;
    private $_buttonColor;
    private $_domain;
    private $_height;
    private $_subscribers = true;
    private $_textColor;
    private $_width;

    /**
     * Account name of Mail.ru group.
     * This attribute is required.
     * @param string $account Group name.
     * @return \Catharsis\Web\MailRuGroupsWidget
     *         Reference to the current widget.
     */
    public function account($account)
    {
        $this->_account = (string) $account;
        return $this;
    }

    /**
     * Account name of Mail.ru group.
     * @return string Group name.
     */
    public function getAccount()
    {
        return $this->_account;
    }

    /**
     * Color of Groups box background.
     * @param string $color Background color.
     * @return \Catharsis\Web\MailRuGroupsWidget
     *         Reference to the current widget.
     */
    public function backgroundColor($color)
    {
        $this->_backgroundColor = (string) $color;
        return $this;
    }

    /**
     * Color of Groups box background.
     * @return string Background color.
     */
    public function getBackgroundColor()
    {
        return $this->_backgroundColor;
    }

    /**
     * Color of "Subscribe" button in Groups box.
     * @param string $color Button color.
     * @return \Catharsis\Web\MailRuGroupsWidget
     *         Reference to the current widget.
     */
    public function buttonColor($color)
    {
        $this->_buttonColor = (string) $color;
        return $this;
    }

    /**
     * Color of "Subscribe" button in Groups box.
     * @return string Button color.
     */
    public function getButtonColor()
    {
        return $this->_buttonColor;
    }

    /**
     * Target site domain.
     * @param string $domain Target domain.
     * @return \Catharsis\Web\MailRuGroupsWidget
     *         Reference to the current widget.
     */
    public function domain($domain)
    {
        $this->_domain = (string) $domain;
        return $this;
    }

    /**
     * Target site domain.
     * @return string Target domain.
     */
    public function getDomain()
    {
        return $this->_domain;
    }

    /**
     * Height of Groups box area.
     * This attribute is required.
     * @param string $height Area height.
     * @return \Catharsis\Web\MailRuGroupsWidget
     *         Reference to the current widget.
     */
    public function height($height)
    {
        $this->_height = (string) $height;
        return $this;
    }

    /**
     * Height of Groups box area.
     * @return string Area height.
     */
    public function getHeight()
    {
        return $this->_height;
    }

    /**
     * Whether to show portraits of group's subscribers or not.
     * @param boolean $show TRUE to show subscribers, FALSE to hide.
     * @return \Catharsis\Web\MailRuGroupsWidget
     *         Reference to the current widget.
     */
    public function subscribers($show)
    {
        $this->_subscribers = (bool) $show;
        return $this;
    }

    /**
     * Whether to show portraits of group's subscribers or not.
     * @return boolean TRUE to show subscribers, FALSE to hide.
     */
    public function getSubscribers()
    {
        return $this->_subscribers;
    }

    /**
     * Color of Groups box text labels.
     * @param string $color Text color.
     * @return \Catharsis\Web\MailRuGroupsWidget
     *         Reference to the current widget.
     */
    public function textColor($color)
    {
        $this->_textColor = (string) $color;
        return $this;
    }

    /**
     * Color of Groups box text labels.
     * @return string Text color.
     */
    public function getTextColor()
    {
        return $this->_textColor;
    }

    /**
     * Width of Groups box area.
     * This attribute is required.
     * @param string $width Area width.
     * @return \Catharsis\Web\MailRuGroupsWidget
     *         Reference to the current widget.
     */
    public function width($width)
    {
        $this->_width = (string) $width;
        return $this;
    }

    /**
     * Width of Groups box area.
     * @return string Area width.
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
        if (empty($this->getAccount())
            || empty($this->getWidth())
            || empty($this->getHeight())
        ) {
            return '';
        }

        $config = array(
            'group' => $this->getAccount(),
            'max_sub' => 50,
            'width' => $this->getWidth(),
            'height' => $this->getHeight()
        );
        if ($this->getSubscribers()) {
            $config['show_subscribers'] = 'true';
        }
        if (!empty($this->getBackgroundColor())) {
            $config['background'] = $this->getBackgroundColor();
        }
        if (!empty($this->getTextColor())) {
            $config['color'] = $this->getTextColor();
        }
        if (!empty($this->getButtonColor())) {
            $config['button_background'] = $this->getButtonColor();
        }
        if (!empty($this->getDomain())) {
            $config['domain'] = $this->getDomain();
        }

        $query = self::urlQuery($config);

        return self::htmlTag(
            'a',
            array(
                'class' => 'mrc__plugin_groups_widget',
                'href' => "http://connect.mail.ru/groups_widget?{$query}",
                'rel' => json_encode($config, JSON_FORCE_OBJECT),
                'target' => '_blank'
            ),
        'Группы');
    }
}

?>
