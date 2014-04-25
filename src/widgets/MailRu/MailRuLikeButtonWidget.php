<?php
namespace Catharsis\Web;

/**
 * Renders Mail.ru "Like" button on web page.
 * Requires {@link WidgetsScripts::mailru} script to be included.
 * @link http://api.mail.ru/sites/plugins/share
 */
class MailRuLikeButtonWidget extends HtmlWidget
{
    private $_counter = true;
    private $_counterPosition = MailRuLikeButtonCounterPosition::Right;
    private $_layout = MailRuLikeButtonLayout::First;
    private $_size = MailRuLikeButtonSize::Size20;
    private $_text = true;
    private $_textType = MailRuLikeButtonTextType::First;
    private $_type = MailRuLikeButtonType::All;

    /**
     * Whether to render share counter next to a button. Default is TRUE.
     * @param boolean $show TRUE to show share counter, FALSE to hide.
     * @return \Catharsis\Web\MailRuLikeButtonWidget Reference to the current widget.
     */
    public function counter($show = true)
    {
        $this->_counter = (bool) $show;
        return $this;
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
     * Whether to show text label on button. Default is TRUE.
     * @param boolean $text TRUE to show text label, FALSE to hide.
     * @return \Catharsis\Web\MailRuLikeButtonWidget Reference to the current widget.
     */
    public function text($text = true)
    {
        $this->_text = (bool) $text;
        return $this;
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
     * Returns HTML markup text of widget.
     */
    public function __toString()
    {
        $config = array(
            "sz" => $this->_size,
            "st" => $this->_layout,
            "tp" => $this->_type
        );

        if (!$this->_counter) {
            $config["nc"] = 1;
        }
        else if (!empty($this->_counterPosition) && strtolower($this->_counterPosition)
            == MailRuLikeButtonCounterPosition::Upper) {
            $config["vt"] = 1;
        }

        if (!$this->_text) {
            $config["nt"] = 1;
        }
        else {
            $config["cm"] = $this->_textType;
            $config["ck"] = $this->_textType;
        }

        return self::htmlTag("a", array(
            "class" => "mrc__plugin_uber_like_button",
            "data-mrc-config" => json_encode($config, JSON_FORCE_OBJECT),
            "href" => "http://connect.mail.ru/share",
            "target" => "_blank"), "Нравится");
    }
}

?>
