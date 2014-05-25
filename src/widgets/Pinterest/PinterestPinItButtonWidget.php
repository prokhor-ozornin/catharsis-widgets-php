<?php
/**
 * PinterestPinItButtonWidget class.
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
 * Renders Pinterest "Pin It" button widget.
 * Requires {@link WidgetsScripts::pinterest} script to be included.
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 * @link      http://business.pinterest.com/widget-builder/#do_pin_it_button
 */
class PinterestPinItButtonWidget extends HtmlWidget
{
    private $_color = 'gray';
    private $_counter = PinterestPinItButtonPinCountPosition::NONE;
    private $_description;
    private $_image;
    private $_language = 'en';
    private $_shape = PinterestPinItButtonShape::RECTANGULAR;
    private $_size = PinterestPinItButtonSize::SMALL;
    private $_url;

    /**
     * Background color of the button.
     * @param string $color Button's color.
     * @return \Catharsis\Web\PinterestPinItButtonWidget
     *         Reference to the current widget.
     */
    public function color($color)
    {
        $this->_color = (string) $color;
        return $this;
    }

    /**
     * Background color of the button.
     * @return string Button's color.
     */
    public function getColor()
    {
        return $this->_color;
    }

    /**
     * Position of button's pin counter.
     * @param string $position Pin counter's position.
     * @return \Catharsis\Web\PinterestPinItButtonWidget
     *         Reference to the current widget.
     */
    public function counter($position)
    {
        $this->_counter = (string) $position;
        return $this;
    }

    /**
     * Position of button's pin counter.
     * @return string Pin counter's position.
     */
    public function getCounter()
    {
        return $this->_counter;
    }

    /**
     * Description of the "pinned" image.
     * @param string $description Pin's description.
     * @return \Catharsis\Web\PinterestPinItButtonWidget
     *         Reference to the current widget.
     */
    public function description($description)
    {
        $this->_description = (string) $description;
        return $this;
    }

    /**
     * Description of the "pinned" image.
     * @return string Pin's description.
     */
    public function getDescription()
    {
        return $this->_description;
    }

    /**
     * Sets color of the button to gray.
     * @return \Catharsis\Web\PinterestPinItButtonWidget
     *         Reference to the current widget.
     */
    public function gray()
    {
        return $this->color('gray');
    }

    /**
     * URL address of the "pinned" image.
     * @param string $image Pin's image URL.
     * @return \Catharsis\Web\PinterestPinItButtonWidget
     *         Reference to the current widget.
     */
    public function image($image)
    {
        $this->_image = (string) $image;
        return $this;
    }

    /**
     * URL address of the "pinned" image.
     * @return string Pin's image URL.
     */
    public function getImage()
    {
        return $this->_image;
    }

    /**
     * Language of button's label.
     * @param string $language Button's text language.
     * @return \Catharsis\Web\PinterestPinItButtonWidget
     *         Reference to the current widget.
     */
    public function language($language)
    {
        $this->_language = (string) $language;
        return $this;
    }

    /**
     * Language of button's label.
     * @return string Button's text language.
     */
    public function getLanguage()
    {
        return $this->_language;
    }

    /**
     * Sets color of the button to red.
     * @return \Catharsis\Web\PinterestPinItButtonWidget
     *         Reference to the current widget.
     */
    public function red()
    {
        return $this->color('red');
    }

    /**
     * Shape of the button.
     * @param string $shape Button's shape.
     * @return \Catharsis\Web\PinterestPinItButtonWidget
     *         Reference to the current widget.
     */
    public function shape($shape)
    {
        $this->_shape = (string) $shape;
        return $this;
    }

    /**
     * Shape of the button.
     * @return string Button's shape.
     */
    public function getShape()
    {
        return $this->_shape;
    }

    /**
     * Size of the button.
     * @param type $size Button's size.
     * @return \Catharsis\Web\PinterestPinItButtonWidget
     *         Reference to the current widget.
     */
    public function size($size)
    {
        $this->_size = (string) $size;
        return $this;
    }

    /**
     * Size of the button.
     * @return string Button's size.
     */
    public function getSize()
    {
        return $this->_size;
    }

    /**
     * URL address of target web page for the button.
     * @param string $url Button's target web page.
     * @return \Catharsis\Web\PinterestPinItButtonWidget
     *         Reference to the current widget.
     */
    public function url($url)
    {
        $this->_url = (string) $url;
        return $this;
    }

    /**
     * URL address of target web page for the button.
     * @return string Button's target web page.
     */
    public function getUrl()
    {
        return $this->_url;
    }

    /**
     * Sets color of the button to white.
     * @return \Catharsis\Web\PinterestPinItButtonWidget
     *         Reference to the current widget.
     */
    public function white()
    {
        return $this->color('white');
    }

    /**
     * Returns HTML markup text of widget.
     * @return string Widget's HTML markup.
     */
    public function __toString()
    {
        if (empty($this->getUrl())
            || empty($this->getImage())
            || empty($this->getDescription())
        ) {
            return '';
        }

        $height = 0;
        switch ($this->getSize()) {
        case PinterestPinItButtonSize::LARGE :
            switch ($this->getShape()) {
            case PinterestPinItButtonShape::CIRCULAR :
                $height = 32;
                break;

            default :
                $height = 28;
                break;
            }
            break;

        case PinterestPinItButtonSize::SMALL :
            switch ($this->getShape()) {
            case PinterestPinItButtonShape::CIRCULAR:
                $height = 16;
                break;

            default:
                $height = 20;
                break;
            }
            break;
        }

        $shape = '';
        switch ($this->getShape()) {
        case PinterestPinItButtonShape::CIRCULAR :
            $shape = 'round';
            break;

        default :
            $shape = 'rect';
            break;
        }

        $url = urlencode($this->getUrl());
        $image = urlencode($this->getImage());
        $description = urlencode($this->getDescription());

        return self::htmlTag(
            'a',
            array(
                'data-pin-color' => $this->getShape() == PinterestPinItButtonShape::RECTANGULAR ? $this->getColor() : null,
                'data-pin-config' => $this->getShape() == PinterestPinItButtonShape::RECTANGULAR ? $this->getCounter() : null,
                'data-pin-do' => 'buttonPin',
                'data-pin-height' => $height,
                'data-pin-lang' => $this->getShape() == PinterestPinItButtonShape::RECTANGULAR ? $this->getLanguage() : null,
                'data-pin-shape' => $shape,
                'href' => "http://www.pinterest.com/pin/create/button/?url={$url}&media={$image}&description={$description}"
            ),
            "<img src=\"http://assets.pinterest.com/images/pidgets/pinit_fg_{$this->getLanguage()}_{$shape}_{$this->getColor()}_{$height}.png\"/>"
        );
    }
}

?>
