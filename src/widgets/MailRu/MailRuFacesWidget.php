<?php
namespace Catharsis\Web;

/**
 * Renders Mail.ru Faces (People On Site) widget.
 * Requires {@link WidgetsScripts::mailru} script to be included.</para>
 * @link http://api.mail.ru/sites/plugins/faces
 */
class MailRuFacesWidget extends HtmlWidget
{
    private $_backgroundColor;
    private $_borderColor;
    private $_domain;
    private $_font = MailRuFacesFont::Arial;
    private $_height;
    private $_hyperlinkColor;
    private $_textColor;
    private $_title = true;
    private $_titleText;
    private $_titleColor;
    private $_width;

    /**
     * Color of Faces box background.
     * @param string $color Background color.
     * @return \Catharsis\Web\MailRuFacesWidget Reference to the current widget.
     */
    public function backgroundColor($color)
    {
        $this->_backgroundColor = (string) $color;
        return $this;
    }

    /**
     * Color of Faces box border.
     * @param string $color Border color.
     * @return \Catharsis\Web\MailRuFacesWidget Reference to the current widget.
     */
    public function borderColor($color)
    {
        $this->_borderColor = (string) $color;
        return $this;
    }

    /**
     * Domain of target site with which users have interacted.
     * This attribute is required.
     * @param string $domain Target site domain.
     * @return \Catharsis\Web\MailRuFacesWidget Reference to the current widget.
     */
    public function domain($domain)
    {
        $this->_domain = (string) $domain;
        return $this;
    }

    /**
     * Name of font, used for text labels.
     * @param string $font Font name.
     * @return \Catharsis\Web\MailRuFacesWidget Reference to the current widget.
     */
    public function font($font)
    {
        $this->_font = (string) $font;
        return $this;
    }

    /**
     * Height of Faces box area.
     * This attribute is required.
     * @param string $height Area height.
     * @return \Catharsis\Web\MailRuFacesWidget Reference to the current widget.
     */
    public function height($height)
    {
        $this->_height = (string) $height;
        return $this;
    }

    /**
     * Color of Faces box hyperlinks.
     * @param string $color Hyperlinks color.
     * @return \Catharsis\Web\MailRuFacesWidget Reference to the current widget.
     */
    public function hyperlinkColor($color)
    {
        $this->_hyperlinkColor = (string) $color;
        return $this;
    }

    /**
     * Color of Faces box text labels.
     * @param string $color Text color.
     * @return \Catharsis\Web\MailRuFacesWidget Reference to the current widget.
     */
    public function textColor($color)
    {
        $this->_textColor = (string) $color;
        return $this;
    }

    /**
     * Whether to show or hide Faces box title.
     * @param boolean $show TRUE to show title, FALSE to hide.
     * @return \Catharsis\Web\MailRuFacesWidget Reference to the current widget.
     */
    public function title($show = true)
    {
        $this->_title = (bool) $show;
        return $this;
    }

    /**
     * Color of Faces box title.
     * @param string $color Title color.
     * @return \Catharsis\Web\MailRuFacesWidget Reference to the current widget.
     */
    public function titleColor($color)
    {
        $this->_titleColor = (string) $color;
        return $this;
    }

    /**
     * Title text label of Faces box.
     * @param string $title Title text.
     * @return \Catharsis\Web\MailRuFacesWidget Reference to the current widget.
     */
    public function titleText($title)
    {
        $this->_titleText = (string) $title;
        return $this;
    }

    /**
     * Width of Faces box area.
     * This attribute is required.
     * @param string $width Area width.
     * @return \Catharsis\Web\MailRuFacesWidget Reference to the current widget.
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
        if (empty($this->_domain) || empty($this->_width) || empty($this->_height)) {
            return "";
        }

        $config = array(
            "domain" => $this->_domain,
            "font" => $this->_font,
            "width" => $this->_width,
            "height" => $this->_height
        );
        if (!empty($this->_titleText)) {
            $config["title"] = $this->_titleText;
        }
        if (!$this->_title) {
            $config["notitle"] = "true";
        }
        if (!empty($this->_titleColor)) {
            $config["title-color"] = $this->_titleColor;
        }
        if (!empty($this->_backgroundColor)) {
            $config["background"] = $this->_backgroundColor;
        }
        if (!empty($this->_borderColor)) {
            $config["border"] = $this->_borderColor;
        }
        if (!empty($this->_textColor)) {
            $config["color"] = $this->_textColor;
        }
        if (!empty($this->_hyperlinkColor)) {
            $config["link-color"] = $this->_hyperlinkColor;
        }

        $query = self::urlQuery($config);
        $config_json = htmlentities(json_encode($config, JSON_FORCE_OBJECT),
                                    ENT_HTML401 | ENT_QUOTES);

        return "<a class=\"mrc__plugin_share_friends\" href=\"http://connect.mail.ru/share_friends?{$query}\" rel=\"{$config_json}\">Друзья</a>";
    }
}

?>
