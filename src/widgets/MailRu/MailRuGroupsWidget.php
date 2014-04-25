<?php
namespace Catharsis\Web;

/**
 * Renders Mail.ru Group (People In Group) widget.
 * Requires {@link WidgetsScripts::mailru} script to be included.
 * @link http://api.mail.ru/sites/plugins/groups
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
     * @return \Catharsis\Web\MailRuGroupsWidget Reference to the current widget.
     */
    public function account($account)
    {
        $this->_account = (string) $account;
        return $this;
    }

    /**
     * Color of Groups box background.
     * @param string $color Background color.
     * @return \Catharsis\Web\MailRuGroupsWidget Reference to the current widget.
     */
    public function backgroundColor($color)
    {
        $this->_backgroundColor = (string) $color;
        return $this;
    }

    /**
     * Color of "Subscribe" button in Groups box.
     * @param string $color Button color.<
     * @return \Catharsis\Web\MailRuGroupsWidget Reference to the current widget.
     */
    public function buttonColor($color)
    {
        $this->_buttonColor = (string) $color;
        return $this;
    }

    /**
     * Target site domain.
     * @param string $domain Target domain.
     * @return \Catharsis\Web\MailRuGroupsWidget Reference to the current widget.
     */
    public function domain($domain)
    {
        $this->_domain = (string) $domain;
        return $this;
    }

    /**
     * Height of Groups box area.
     * This attribute is required.
     * @param string $height Area height.
     * @return \Catharsis\Web\MailRuGroupsWidget Reference to the current widget.
     */
    public function height($height)
    {
        $this->_height = (string) $height;
        return $this;
    }

    /**
     * Whether to show portraits of group's subscribers or not.
     * @param boolean $show TRUE to show subscribers, FALSE to hide.
     * @return \Catharsis\Web\MailRuGroupsWidget Reference to the current widget.
     */
    public function subscribers($show = true)
    {
        $this->_subscribers = (bool) $show;
        return $this;
    }

    /**
     * Color of Groups box text labels.
     * @param string $color Text color.
     * @return \Catharsis\Web\MailRuGroupsWidget Reference to the current widget.
     */
    public function textColor($color)
    {
        $this->_textColor = (string) $color;
        return $this;
    }

    /**
     * Width of Groups box area.
     * This attribute is required.
     * @param string $width Area width.
     * @return \Catharsis\Web\MailRuGroupsWidget Reference to the current widget.
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
        if (empty($this->_account) || empty($this->_width) || empty($this->_height)) {
            return "";
        }

        $config = array("group" => $this->_account, "max_sub" => 50, "width" => $this->_width,
            "height" => $this->_height);
        if ($this->_subscribers) {
            $config["show_subscribers"] = "true";
        }
        if (!empty($this->_backgroundColor)) {
            $config["background"] = $this->_backgroundColor;
        }
        if (!empty($this->_textColor)) {
            $config["color"] = $this->_textColor;
        }
        if (!empty($this->_buttonColor)) {
            $config["button_background"] = $this->_buttonColor;
        }
        if (!empty($this->_domain)) {
            $config["domain"] = $this->_domain;
        }

        $query = self::urlQuery($config);
        $config_json = htmlentities(json_encode($config, JSON_FORCE_OBJECT),
                                    ENT_HTML401 | ENT_QUOTES);

        return "<a target=\"_blank\" class=\"mrc__plugin_groups_widget\" href=\"http://connect.mail.ru/groups_widget?{$query}\" rel=\"{$config_json}\">Группы</a>";
    }
}

?>
