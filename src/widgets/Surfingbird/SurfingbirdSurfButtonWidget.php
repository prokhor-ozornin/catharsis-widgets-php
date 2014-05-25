<?php
/**
 * SurfingbirdSurfButtonWidget class.
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
 * Renders Surfingbird "Surf" button.
 * Requires {@link WidgetsScripts::surfingbird_surf} script to be included.
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 * @link      http://surfingbird.ru/publishers/surfbutton
 */
class SurfingbirdSurfButtonWidget extends HtmlWidget
{
    private $_color;
    private $_counter = false;
    private $_height;
    private $_label = 'Surf';
    private $_layout = SurfingbirdSurfButtonLayout::COMMON;
    private $_url;
    private $_width;

    /**
     * Text label's color. If not specified, default color combination is used.
     * @param string $color Label's color.
     * @return \Catharsis\Web\SurfingbirdSurfButtonWidget
     *         Reference to the current widget.
     */
    public function color($color)
    {
        $this->_color = (string) $color;
        return $this;
    }

    /**
     * Text label's color. If not specified, default color combination is used.
     * @return string Label's color.
     */
    public function getColor()
    {
        return $this->_color;
    }

    /**
     * Whether to render share counter next to a button.
     * Default is FALSE.
     * @param boolean $show TRUE to show counter, FALSE to hide.
     * @return \Catharsis\Web\SurfingbirdSurfButtonWidget
     *         Reference to the current widget.
     */
    public function counter($show)
    {
        $this->_counter = (bool) $show;
        return $this;
    }

    /**
     * Whether to render share counter next to a button.
     * Default is FALSE.
     * @return boolean TRUE to show counter, FALSE to hide.
     */
    public function getCounter()
    {
        return $this->_counter;
    }

    /**
     * Vertical height of the button.
     * Default is 25px.
     * @param string $height Height of button.
     * @return \Catharsis\Web\SurfingbirdSurfButtonWidget
     *         Reference to the current widget.
     */
    public function height($height)
    {
        $this->_height = (string) $height;
        return $this;
    }

    /**
     * Vertical height of the button.
     * Default is 25px.
     * @return string Height of button.
     */
    public function getHeight()
    {
        return $this->_height;
    }

    /**
     * Text label to show on button.
     * Default is "Surf".
     * @param string $label Text label on button.
     * @return \Catharsis\Web\SurfingbirdSurfButtonWidget
     *         Reference to the current widget.
     */
    public function label($label)
    {
        $this->_label = (string) $label;
        return $this;
    }

    /**
     * Text label to show on button.
     * Default is "Surf".
     * @return string Text label on button.
     */
    public function getLabel()
    {
        return $this->_label;
    }

    /**
     * Layout/appearance of the button.
     * @param string $layout Layout of button.
     * @return \Catharsis\Web\SurfingbirdSurfButtonWidget
     *         Reference to the current widget.
     */
    public function layout($layout)
    {
        $this->_layout = (string) $layout;
        return $this;
    }

    /**
     * Layout/appearance of the button.
     * @return string Layout of button.
     */
    public function getLayout()
    {
        return $this->_layout;
    }

    /**
     * Specifies URL address of web page to "like".
     * Default is current web page.
     * @param string $url URL of web page.
     * @return \Catharsis\Web\SurfingbirdSurfButtonWidget
     *         Reference to the current widget.
     */
    public function url($url)
    {
        $this->_url = (string) $url;
        return $this;
    }

    /**
     * Specifies URL address of web page to "like".
     * Default is current web page.
     * @return string URL of web page.
     */
    public function getUrl()
    {
        return $this->_url;
    }

    /**
     * Horizontal width of the button.
     * Default is 500px.
     * @param string $width Width of button.
     * @return \Catharsis\Web\SurfingbirdSurfButtonWidget
     *         Reference to the current widget.
     */
    public function width($width)
    {
        $this->_width = (string) $width;
        return $this;
    }

    /**
     * Horizontal width of the button.
     * Default is 500px.
     * @return string Width of button.
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
        $counter = $this->getCounter() ? '' : '-nocount';
        $color = empty($this->getColor()) ? '' : '-' . $this->getColor();

        $config = array('layout' => "{$this->getLayout()}{$counter}{$color}");
        if (!empty($this->getUrl())) {
            $config['url'] = $this->getUrl();
        }
        if (!empty($this->getWidth())) {
            $config['width'] = $this->getWidth();
        }
        if (!empty($this->getHeight())) {
            $config['height'] = $this->getHeight();
        }

        return self::htmlTag(
            'a',
            array(
                'class' => 'surfinbird__like_button',
                'data-surf-config' => json_encode($config, JSON_FORCE_OBJECT),
                'href' => 'http://surfingbird.ru/share',
                'target' => '_blank'
            ),
            $this->getLabel()
        );
    }
}

?>
