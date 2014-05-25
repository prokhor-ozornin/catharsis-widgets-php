<?php
/**
 * MailRuLikeButtonWidget class.
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
 * Renders Mail.ru "Like" button on web page.
 * Requires {@link WidgetsScripts::mailru} script to be included.
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 * @link      http://api.mail.ru/sites/plugins/share
 */
class MailRuLikeButtonWidget extends HtmlWidget
{
    private $_counter = true;
    private $_counterPosition = MailRuLikeButtonCounterPosition::RIGHT;
    private $_layout = MailRuLikeButtonLayout::FIRST;
    private $_size = MailRuLikeButtonSize::SIZE_20;
    private $_text = true;
    private $_textType = MailRuLikeButtonTextType::FIRST;
    private $_type = MailRuLikeButtonType::ALL;

    /**
     * Whether to render share counter next to a button.
     * Default is TRUE.
     * @param boolean $show TRUE to show share counter, FALSE to hide.
     * @return \Catharsis\Web\MailRuLikeButtonWidget Reference to the current widget.
     */
    public function counter($show)
    {
        $this->_counter = (bool) $show;
        return $this;
    }

    /**
     * Whether to render share counter next to a button.
     * Default is TRUE.
     * @return boolean TRUE to show share counter, FALSE to hide.
     */
    public function getCounter()
    {
        return $this->_counter;
    }

    /**
     * Position of a share counter.
     * @param string $position Position of a counter.
     * @return \Catharsis\Web\MailRuLikeButtonWidget Reference to the current widget.
     */
    public function counterPosition($position)
    {
        $this->_counterPosition = (string) $position;
        return $this;
    }

    /**
     * Position of a share counter.
     * @return string Position of a counter.
     */
    public function getCounterPosition()
    {
        return $this->_counterPosition;
    }

    /**
     * Visual layout/appearance of button.
     * @param integer $layout Visual layout of button.
     * @return \Catharsis\Web\MailRuLikeButtonWidget Reference to the current widget.
     */
    public function layout($layout)
    {
        $this->_layout = (int) $layout;
        return $this;
    }

    /**
     * Visual layout/appearance of button.
     * @return integer Visual layout of button.
     */
    public function getLayout()
    {
        return $this->_layout;
    }

    /**
     * Vertical size of button.
     * @param string $size Vertical size of button.
     * @return \Catharsis\Web\MailRuLikeButtonWidget Reference to the current widget.
     */
    public function size($size)
    {
        $this->_size = (string) $size;
        return $this;
    }

    /**
     * Vertical size of button.
     * @return string Vertical size of button.
     */
    public function getSize()
    {
        return $this->_size;
    }

    /**
     * Whether to show text label on button.
     * Default is TRUE.
     * @param boolean $text TRUE to show text label, FALSE to hide.
     * @return \Catharsis\Web\MailRuLikeButtonWidget Reference to the current widget.
     */
    public function text($text)
    {
        $this->_text = (bool) $text;
        return $this;
    }

    /**
     * Whether to show text label on button.
     * Default is TRUE.
     * @return boolean TRUE to show text label, FALSE to hide.
     */
    public function getText()
    {
        return $this->_text;
    }

    /**
     * Type of button.
     * @param type $type Type of button.
     * @return \Catharsis\Web\MailRuLikeButtonWidget Reference to the current widget.
     */
    public function type($type)
    {
        $this->_type = (string) $type;
        return $this;
    }

    /**
     * Type of button.
     * @return string Type of button.
     */
    public function getType()
    {
        return $this->_type;
    }

    /**
     * Type of text label to show on button.
     * @param integer $type Type of text label.
     * @return \Catharsis\Web\MailRuLikeButtonWidget Reference to the current widget.
     */
    public function textType($type)
    {
        $this->_textType = (int) $type;
        return $this;
    }

    /**
     * Type of text label to show on button.
     * @return integer Type of text label.
     */
    public function getTextType()
    {
        return $this->_textType;
    }

    /**
     * Returns HTML markup text of widget.
     * @return string Widget's HTML markup.
     */
    public function __toString()
    {
        $config = array(
            'sz' => $this->getSize(),
            'st' => $this->getLayout(),
            'tp' => $this->getType()
        );

        if (!$this->getCounter()) {
            $config['nc'] = 1;
        } else if (!empty($this->getCounterPosition())
            && strtolower($this->getCounterPosition()) === MailRuLikeButtonCounterPosition::UPPER
        ) {
            $config['vt'] = 1;
        }

        if (!$this->getText()) {
            $config['nt'] = 1;
        } else {
            $config['cm'] = $this->getTextType();
            $config['ck'] = $this->getTextType();
        }

        return self::htmlTag(
            'a',
            array(
                'class' => 'mrc__plugin_uber_like_button',
                'data-mrc-config' => json_encode($config, JSON_FORCE_OBJECT),
                'href' => 'http://connect.mail.ru/share',
                'target' => '_blank'),
            'Нравится'
        );
    }
}

?>
