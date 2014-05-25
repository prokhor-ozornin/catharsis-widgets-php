<?php
/**
 * PinterestProfileWidget class.
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
 * Renders Pinterest Profile widget with user's latest pins.
 * Requires {@link WidgetsScripts::pinterest} script to be included.
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 * @link      http://business.pinterest.com/widget-builder/#do_embed_user
 */
class PinterestProfileWidget extends HtmlWidget
{
    private $_account;
    private $_height;
    private $_image;
    private $_width;

    /**
     * Pinterest user account.
     * This attribute is required.
     * @param string $account Account name.
     * @return \Catharsis\Web\PinterestProfileWidget
     *         Reference to the current widget.
     */
    public function account($account)
    {
        $this->_account = (string) $account;
        return $this;
    }

    /**
     * Pinterest user account.
     * @return string Account name.
     */
    public function getAccount()
    {
        return $this->_account;
    }

    /**
     * Total height of profile area in pixels.
     * Min: 60; leave blank for 175.
     * @param string $height Areas's height.
     * @return \Catharsis\Web\PinterestProfileWidget
     *         Reference to the current widget.
     */
    public function height($height)
    {
        $this->_height = (string) $height;
        return $this;
    }

    /**
     * Total height of profile area in pixels.
     * Min: 60; leave blank for 175.
     * @return string Areas's height.
     */
    public function getHeight()
    {
        return $this->_height;
    }

    /**
     * Sets predefined dimensions of area and images to make it look like a site's header.
     * @return \Catharsis\Web\PinterestProfileWidget
     *         Reference to the current widget.
     */
    public function header()
    {
        return $this->image(115)->height(120)->width(900);
    }

    /**
     * Width of profile area's image in pixels.
     * @param string $width Area's image width.
     * @return \Catharsis\Web\PinterestProfileWidget
     *         Reference to the current widget.
     */
    public function image($width)
    {
        $this->_image = (string) $width;
        return $this;
    }

    /**
     * Width of profile area's image in pixels.
     * @return string Area's image width.
     */
    public function getImage()
    {
        return $this->_image;
    }

    /**
     * Sets predefined dimensions of area and images to make it look like a site's sidebar.
     * @return \Catharsis\Web\PinterestProfileWidget
     *         Reference to the current widget.
     */
    public function sidebar()
    {
        return $this->image(60)->height(800)->width(150);
    }

    /**
     * Sets predefined dimensions of area and images to make it look like a site's square.
     * @return \Catharsis\Web\PinterestProfileWidget
     *         Reference to the current widget.
     */
    public function square()
    {
        return $this->image(80)->height(320)->width(400);
    }

    /**
     * Total width of profile area in pixels.
     * Min: 130; leave blank for auto.
     * @param string $width Area's width.
     * @return \Catharsis\Web\PinterestProfileWidget
     *         Reference to the current widget.
     */
    public function width($width)
    {
        $this->_width = (string) $width;
        return $this;
    }

    /**
     * Total width of profile area in pixels.
     * Min: 130; leave blank for auto.
     * @return string Area's width.
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
        if (empty($this->getAccount())) {
            return '';
        }

        return self::htmlTag(
            'a',
            array(
                'data-pin-board-width' => $this->getWidth(),
                'data-pin-do' => 'embedUser',
                'data-pin-scale-height' => $this->getHeight(),
                'data-pin-scale-width' => $this->getImage(),
                'href' => "http://www.pinterest.com/{$this->getAccount()}"
            )
        );
    }
}

?>
