<?php
namespace Catharsis\Web;

/**
 * Renders Surfingbird "Surf" button.
 * Requires {@link WidgetsScripts::surfingbird_surf} script to be included.
 * @link http://surfingbird.ru/publishers/surfbutton
 */
class SurfingbirdSurfButtonWidget extends HtmlWidget
{
    private $_color;
    private $_counter = false;
    private $_height;
    private $_label = "Surf";
    private $_layout = SurfingbirdSurfButtonLayout::Common;
    private $_url;
    private $_width;

    /**
     * Text label's color. If not specified, default color combination is used.
     * @param string $color Label's color.
     * @return \Catharsis\Web\SurfingbirdSurfButtonWidget Reference to the current widget.
     */
    public function color($color)
    {
        $this->_color = (string) $color;
        return $this;
    }

    /**
     * Whether to render share counter next to a button. Default is FALSE.
     * @param boolean $show TRUE to show counter, FALSE to hide.
     * @return \Catharsis\Web\SurfingbirdSurfButtonWidget Reference to the current widget.
     */
    public function counter($show = true)
    {
        $this->_counter = (bool) $show;
        return $this;
    }

    /**
     * Vertical height of the button. Default is 25px.
     * @param string $height Height of button.
     * @return \Catharsis\Web\SurfingbirdSurfButtonWidget Reference to the current widget.
     */
    public function height($height)
    {
        $this->_height = (string) $height;
        return $this;
    }

    /**
     * Text label to show on button. Default is "Surf".
     * @param string $label Text label on button.
     * @return \Catharsis\Web\SurfingbirdSurfButtonWidget Reference to the current widget.
     */
    public function label($label)
    {
        $this->_label = (string) $label;
        return $this;
    }

    /**
     * Layout/appearance of the button.
     * @param string $layout Layout of button.
     * @return \Catharsis\Web\SurfingbirdSurfButtonWidget Reference to the current widget.
     */
    public function layout($layout)
    {
        $this->_layout = (string) $layout;
        return $this;
    }

    /**
     * Specifies URL address of web page to "like". Default is current web page.
     * @param string $url URL of web page.
     * @return \Catharsis\Web\SurfingbirdSurfButtonWidget Reference to the current widget.
     */
    public function url($url)
    {
        $this->_url = (string) $url;
        return $this;
    }

    /**
     * Horizontal width of the button. Default is 500px.
     * @param string $width Width of button.
     * @return \Catharsis\Web\SurfingbirdSurfButtonWidget Reference to the current widget.
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
        $counter = $this->_counter ? "" : "-nocount";
        $color = empty($this->_color) ? "" : "-" . $this->_color;

        $config = array("layout" => "{$this->_layout}{$counter}{$color}");
        if (!empty($this->_url)) {
            $config["url"] = $this->_url;
        }
        if (!empty($this->_width)) {
            $config["width"] = $this->_width;
        }
        if (!empty($this->_height)) {
            $config["height"] = $this->_height;
        }

        return self::htmlTag("a", array(
           "class" => "surfinbird__like_button",
            "data-surf-config" => json_encode($config, JSON_FORCE_OBJECT),
            "href" => "http://surfingbird.ru/share",
            "target" => "_blank"), $this->_label
        );
    }
}

?>
