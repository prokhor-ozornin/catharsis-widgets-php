<?php
/**
 * MailRuFacesWidget class.
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
 * Renders Mail.ru Faces (People On Site) widget.
 * Requires {@link WidgetsScripts::mailru} script to be included.</para>
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 * @link      http://api.mail.ru/sites/plugins/faces
 */
class MailRuFacesWidget extends HtmlWidget
{
    private $_backgroundColor;
    private $_borderColor;
    private $_domain;
    private $_font = MailRuFacesFont::ARIAL;
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
     * @return \Catharsis\Web\MailRuFacesWidget
     *         Reference to the current widget.
     */
    public function backgroundColor($color)
    {
        $this->_backgroundColor = (string) $color;
        return $this;
    }

    /**
     * Color of Faces box background.
     * @return string Background color.
     */
    public function getBackgroundColor()
    {
        return $this->_backgroundColor;
    }

    /**
     * Color of Faces box border.
     * @param string $color Border color.
     * @return \Catharsis\Web\MailRuFacesWidget
     *         Reference to the current widget.
     */
    public function borderColor($color)
    {
        $this->_borderColor = (string) $color;
        return $this;
    }

    /**
     * Color of Faces box border.
     * @return string Border color.
     */
    public function getBorderColor()
    {
        return $this->_borderColor;
    }

    /**
     * Domain of target site with which users have interacted.
     * This attribute is required.
     * @param string $domain Target site domain.
     * @return \Catharsis\Web\MailRuFacesWidget
     *         Reference to the current widget.
     */
    public function domain($domain)
    {
        $this->_domain = (string) $domain;
        return $this;
    }

    /**
     * Domain of target site with which users have interacted.
     * @return string Target site domain.
     */
    public function getDomain()
    {
        return $this->_domain;
    }

    /**
     * Name of font, used for text labels.
     * @param string $font Font name.
     * @return \Catharsis\Web\MailRuFacesWidget
     *         Reference to the current widget.
     */
    public function font($font)
    {
        $this->_font = (string) $font;
        return $this;
    }

    /**
     * Name of font, used for text labels.
     * @return string Font name.
     */
    public function getFont()
    {
        return $this->_font;
    }

    /**
     * Height of Faces box area.
     * This attribute is required.
     * @param string $height Area height.
     * @return \Catharsis\Web\MailRuFacesWidget
     *         Reference to the current widget.
     */
    public function height($height)
    {
        $this->_height = (string) $height;
        return $this;
    }

    /**
     * Height of Faces box area.
     * @return string Area height.
     */
    public function getHeight()
    {
        return $this->_height;
    }

    /**
     * Color of Faces box hyperlinks.
     * @param string $color Hyperlinks color.
     * @return \Catharsis\Web\MailRuFacesWidget
     *         Reference to the current widget.
     */
    public function hyperlinkColor($color)
    {
        $this->_hyperlinkColor = (string) $color;
        return $this;
    }

    /**
     * Color of Faces box hyperlinks.
     * @return string Hyperlinks color.
     */
    public function getHyperlinkColor()
    {
        return $this->_hyperlinkColor;
    }

    /**
     * Color of Faces box text labels.
     * @param string $color Text color.
     * @return \Catharsis\Web\MailRuFacesWidget
     *         Reference to the current widget.
     */
    public function textColor($color)
    {
        $this->_textColor = (string) $color;
        return $this;
    }

    /**
     * Color of Faces box text labels.
     * @return string Text color.
     */
    public function getTextColor()
    {
        return $this->_textColor;
    }

    /**
     * Whether to show or hide Faces box title.
     * @param boolean $show TRUE to show title, FALSE to hide.
     * @return \Catharsis\Web\MailRuFacesWidget
     *         Reference to the current widget.
     */
    public function title($show)
    {
        $this->_title = (bool) $show;
        return $this;
    }

    /**
     * Whether to show or hide Faces box title.
     * @return string TRUE to show title, FALSE to hide.
     */
    public function getTitle()
    {
        return $this->_title;
    }

    /**
     * Color of Faces box title.
     * @param string $color Title color.
     * @return \Catharsis\Web\MailRuFacesWidget
     *         Reference to the current widget.
     */
    public function titleColor($color)
    {
        $this->_titleColor = (string) $color;
        return $this;
    }

    /**
     * Color of Faces box title.
     * @return string Title color.
     */
    public function getTitleColor()
    {
        return $this->_titleColor;
    }

    /**
     * Title text label of Faces box.
     * @param string $title Title text.
     * @return \Catharsis\Web\MailRuFacesWidget
     *         Reference to the current widget.
     */
    public function titleText($title)
    {
        $this->_titleText = (string) $title;
        return $this;
    }

    /**
     * Title text label of Faces box.
     * @return string Title text.
     */
    public function getTitleText()
    {
        return $this->_titleText;
    }

    /**
     * Width of Faces box area.
     * This attribute is required.
     * @param string $width Area width.
     * @return \Catharsis\Web\MailRuFacesWidget
     *         Reference to the current widget.
     */
    public function width($width)
    {
        $this->_width = (string) $width;
        return $this;
    }

    /**
     * Width of Faces box area.
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
        if (empty($this->getDomain())
            || empty($this->getWidth())
            || empty($this->getHeight())
        ) {
            return '';
        }

        $config = array(
            'domain' => $this->getDomain(),
            'font' => $this->getFont(),
            'width' => $this->getWidth(),
            'height' => $this->getHeight()
        );
        if (!empty($this->getTitleText())) {
            $config['title'] = $this->getTitleText();
        }
        if (!$this->getTitle()) {
            $config['notitle'] = 'true';
        }
        if (!empty($this->getTitleColor())) {
            $config['title-color'] = $this->getTitleColor();
        }
        if (!empty($this->getBackgroundColor())) {
            $config['background'] = $this->getBackgroundColor();
        }
        if (!empty($this->getBorderColor())) {
            $config['border'] = $this->getBorderColor();
        }
        if (!empty($this->getTextColor())) {
            $config['color'] = $this->getTextColor();
        }
        if (!empty($this->getHyperlinkColor())) {
            $config['link-color'] = $this->getHyperlinkColor();
        }

        $query = self::urlQuery($config);

        return self::htmlTag(
            'a',
            array(
                'class' => 'mrc__plugin_share_friends',
                'href' => "http://connect.mail.ru/share_friends?{$query}",
                'rel' => json_encode($config, JSON_FORCE_OBJECT),
            ),
            'Друзья'
        );
    }
}

?>
