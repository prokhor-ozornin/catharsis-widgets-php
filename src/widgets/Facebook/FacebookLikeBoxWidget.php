<?php
/**
 * FacebookLikeBoxWidget class.
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
 * Renders Facebook Like Box.
 * Requires Facebook JavaScript initialization to be performed first.
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 * @link      https://developers.facebook.com/docs/plugins/like-box-for-pages
 */
class FacebookLikeBoxWidget extends HtmlWidget
{
    private $_border;
    private $_colorScheme;
    private $_faces;
    private $_header;
    private $_height;
    private $_stream;
    private $_url;
    private $_wall;
    private $_width;

    /**
     * Specifies whether or not to show a border around the plugin.
     * Default is TRUE.
     * @param boolean $show TRUE to show border, FALSE to hide.
     * @return \Catharsis\Web\FacebookLikeBoxWidget
     *         Reference to the current widget.
     */
    public function border($show)
    {
        $this->_border = (bool) $show;
        return $this;
    }

    /**
     * Specifies whether or not to show a border around the plugin.
     * Default is TRUE.
     * @return boolean TRUE to show border, FALSE to hide.
     */
    public function getBorder()
    {
        return $this->_border;
    }

    /**
     * The color scheme used by the widget.
     * Default is "light".
     * @param string $colorScheme Color scheme of widget.
     * @return \Catharsis\Web\FacebookLikeBoxWidget
     *         Reference to the current widget.
     */
    public function colorScheme($colorScheme)
    {
        $this->_colorScheme = (string) $colorScheme;
        return $this;
    }

    /**
     * The color scheme used by the widget.
     * Default is "light".
     * @return string Color scheme of widget.
     */
    public function getColorScheme()
    {
        return $this->_colorScheme;
    }

    /**
     * Whether to display profile photos of people who like the page.
     * Default is TRUE.
     * @param boolean $show TRUE to show profile photos, FALSE to hide.
     * @return \Catharsis\Web\FacebookLikeBoxWidget
     *         Reference to the current widget.
     */
    public function faces($show)
    {
        $this->_faces = (bool) $show;
        return $this;
    }

    /**
     * Whether to display profile photos of people who like the page.
     * Default is TRUE.
     * @return boolean TRUE to show profile photos, FALSE to hide.
     */
    public function getFaces()
    {
        return $this->_faces;
    }

    /**
     * Whether to display the Facebook header at the top of the widget.
     * Default is TRUE.
     * @param boolean $show TRUE to show header, FALSE to hide.
     * @return \Catharsis\Web\FacebookLikeBoxWidget
     *         Reference to the current widget.
     */
    public function header($show)
    {
        $this->_header = (bool) $show;
        return $this;
    }

    /**
     * Whether to display the Facebook header at the top of the widget.
     * Default is TRUE.
     * @return boolean TRUE to show header, FALSE to hide.
     */
    public function getHeader()
    {
        return $this->_header;
    }

    /**
     * The height of the widget in pixels.
     * The default height varies based on number of faces to display, and whether the stream is displayed.
     * With stream set to true and 10 photos displayed (via showFaces) the default height is 556px. With stream and show_faces both false, the default height is 63px.
     * @param string $height Height of widget.
     * @return \Catharsis\Web\FacebookLikeBoxWidget
     *         Reference to the current widget.
     */
    public function height($height)
    {
        $this->_height = (string) $height;
        return $this;
    }

    /**
     * The height of the widget in pixels.
     * The default height varies based on number of faces to display, and whether the stream is displayed.
     * With stream set to true and 10 photos displayed (via showFaces) the default height is 556px. With stream and show_faces both false, the default height is 63px.
     * @return string Height of widget.
     */
    public function getHeight()
    {
        return $this->_height;
    }

    /**
     * Specifies whether to display a stream of the latest posts by the Page.
     * Default is TRUE.
     * @param boolean $show TRUE to show stream of posts, FALSE to hide.
     * @return \Catharsis\Web\FacebookLikeBoxWidget
     *         Reference to the current widget.
     */
    public function stream($show)
    {
        $this->_stream = (bool) $show;
        return $this;
    }

    /**
     * Specifies whether to display a stream of the latest posts by the Page.
     * Default is TRUE.
     * @return boolean TRUE to show stream of posts, FALSE to hide.
     */
    public function getStream()
    {
        return $this->_stream;
    }

    /**
     * The absolute URL of the Facebook Page that will be liked.
     * This attribute is required.
     * @param string $url URL of target web page.
     * @return \Catharsis\Web\FacebookLikeBoxWidget
     *         Reference to the current widget.
     */
    public function url($url)
    {
        $this->_url = (string) $url;
        return $this;
    }

    /**
     * The absolute URL of the Facebook Page that will be liked.
     * @return string URL of target web page.
     */
    public function getUrl()
    {
        return $this->_url;
    }

    /**
     * For "place" Pages (Pages that have a physical location that can be used with check-ins),
     * this specifies whether the stream contains posts by the Page or just check-ins from friends.
     * Default is FALSE.
     * @param boolean $include TRUE to include page's posts in the stream, FALSE to exclude.
     * @return \Catharsis\Web\FacebookLikeBoxWidget
     *         Reference to the current widget.
     */
    public function wall($include)
    {
        $this->_wall = (bool) $include;
        return $this;
    }

    /**
     * For "place" Pages (Pages that have a physical location that can be used with check-ins),
     * this specifies whether the stream contains posts by the Page or just check-ins from friends.
     * Default is FALSE.
     * @return boolean TRUE to include page's posts in the stream, FALSE to exclude.
     */
    public function getWall()
    {
        return $this->_wall;
    }

    /**
     * The width of the widget in pixels.
     * Minimum is 292.
     * Default is 300.
     * @param string $width Width of button.
     * @return \Catharsis\Web\FacebookLikeBoxWidget
     *         Reference to the current widget.
     */
    public function width($width)
    {
        $this->_width = (string) $width;
        return $this;
    }

    /**
     * The width of the widget in pixels.
     * Minimum is 292.
     * Default is 300.
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
        if (empty($this->getUrl())) {
            return '';
        }

        return self::htmlTag(
            'div',
            array(
                'class' => 'fb-like-box',
                'data-colorscheme' => $this->getColorScheme(),
                'data-force-wall' => $this->getWall(),
                'data-header' => $this->getHeader(),
                'data-height' => $this->getHeight(),
                'data-href' => $this->getUrl(),
                'data-show-border' => $this->getBorder(),
                'data-show-faces' => $this->getFaces(),
                'data-stream' => $this->getStream(),
                'data-width' => $this->getWidth()
            )
        );
    }
}

?>
