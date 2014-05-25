<?php
/**
 * PinterestPinWidget class.
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
 * Renders Pinterest embedded pin widget.
 * Requires {@link WidgetsScripts::pinterest} script to be included.
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 * @link      http://business.pinterest.com/widget-builder/#do_embed_pin
 */
class PinterestPinWidget extends HtmlWidget
{
    private $_id;

    /**
     * Unique identifier of Pinterest Pin.
     * @param string $id Identifier of pin.
     * @return \Catharsis\Web\PinterestPinWidget
     *         Reference to the current widget.
     */
    public function id($id)
    {
        $this->_id = (string) $id;
        return $this;
    }

    /**
     * Unique identifier of Pinterest Pin.
     * @return string Identifier of pin.
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * Returns HTML markup text of widget.
     * @return string Widget's HTML markup.
     */
    public function __toString()
    {
        if (empty($this->getId())) {
            return '';
        }

        return self::htmlTag(
            'a',
            array(
                'data-pin-do' => 'embedPin',
                'href' => "http://www.pinterest.com/pin/{$this->getId()}"
            )
        );
    }
}

?>
