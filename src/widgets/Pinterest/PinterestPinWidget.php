<?php
namespace Catharsis\Web;

/**
 * Renders Pinterest embedded pin widget.
 * Requires {@link WidgetsScripts::pinterest} script to be included.
 * @link http://business.pinterest.com/widget-builder/#do_embed_pin
 */
class PinterestPinWidget extends HtmlWidget
{
    private $_id;

    /**
     * Unique identifier of Pinterest Pin.
     * @param string $id Identifier of pin.
     * @return \Catharsis\Web\PinterestPinWidget Reference to the current widget.
     */
    public function id($id)
    {
        $this->_id = (string) $id;
        return $this;
    }

    /**
     * Returns HTML markup text of widget.
     */
    public function __toString()
    {
        if (empty($this->_id)) {
            return "";
        }

        return self::htmlTag("a", array(
            "data-pin-do" => "embedPin",
            "href" => "http://www.pinterest.com/pin/$this->_id"
        ));
    }
}

?>
