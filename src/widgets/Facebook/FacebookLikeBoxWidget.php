<?php
namespace Catharsis\Web;

/**
 * Renders Facebook Like Box.
 * Requires Facebook JavaScript initialization to be performed first.
 * @link https://developers.facebook.com/docs/plugins/like-box-for-pages
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
     * Specifies whether or not to show a border around the plugin. Default is TRUE.
     * @param boolean $border TRUE to show border, FALSE to hide.
     * @return \Catharsis\Web\FacebookLikeBoxWidget Reference to the current widget.
     */
    public function border($border = true)
    {
        $this->_border = (bool) $border;
        return $this;
    }

    /**
     * The color scheme used by the widget. Default is "light".
     * @param string $colorScheme Color scheme of widget.
     * @return \Catharsis\Web\FacebookLikeBoxWidget Reference to the current widget.
     */
    public function colorScheme($colorScheme)
    {
        $this->_colorScheme = (string) $colorScheme;
        return $this;
    }

    /**
     * Specifies whether to display profile photos of people who like the page. Default is TRUE.
     * @param boolean $show TRUE to show profile photos, FALSE to hide.
     * @return \Catharsis\Web\FacebookLikeBoxWidget Reference to the current widget.
     */
    public function faces($show = true)
    {
        $this->_faces = (bool) $show;
        return $this;
    }

    /**
     * Specifies whether to display the Facebook header at the top of the widget. Default is TRUE.
     * @param boolean $$show TRUE to show header, FALSE to hide.
     * @return \Catharsis\Web\FacebookLikeBoxWidget Reference to the current widget.
     */
    public function header($show = true)
    {
        $this->_header = (bool) $show;
        return $this;
    }

    /**
     * The height of the widget in pixels. The default height varies based on number of faces to display, and whether the stream is displayed. With stream set to true and 10 photos displayed (via showFaces) the default height is 556px. With stream and show_faces both false, the default height is 63px.
     * @param string $height Height of widget.
     * @return \Catharsis\Web\FacebookLikeBoxWidget Reference to the current widget.
     */
    public function height($height)
    {
        $this->_height = (string) $height;
        return $this;
    }

    /**
     * Specifies whether to display a stream of the latest posts by the Page. Default is TRUE.
     * @param boolean $show TRUE to show stream of posts, FALSE to hide.
     * @return \Catharsis\Web\FacebookLikeBoxWidget Reference to the current widget.
     */
    public function stream($show = true)
    {
        $this->_stream = (bool) $show;
        return $this;
    }

    /**
     * The absolute URL of the Facebook Page that will be liked.
     * This attribute is required.
     * @param string $url URL of target web page.
     * @return \Catharsis\Web\FacebookLikeBoxWidget Reference to the current widget.
     */
    public function url($url)
    {
        $this->_url = (string) $url;
        return $this;
    }

    /**
     * For "place" Pages (Pages that have a physical location that can be used with check-ins), this specifies whether the stream contains posts by the Page or just check-ins from friends. Default is FALSE.
     * @param boolean $include TRUE to include page's posts in the stream, FALSE to exclude.
     * @return \Catharsis\Web\FacebookLikeBoxWidget Reference to the current widget.
     */
    public function wall($include = true)
    {
        $this->_wall = (bool) $include;
        return $this;
    }

    /**
     * The width of the widget in pixels. Minimum is 292. Default is 300.
     * @param string $width Width of button.
     * @return \Catharsis\Web\FacebookLikeBoxWidget Reference to the current widget.
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
        if (empty($this->_url)) {
            return "";
        }

        return self::htmlTag("div", array(
            "class" => "fb-like-box",
            "data-colorscheme" => $this->_colorScheme,
            "data-force-wall" => $this->_wall,
            "data-header" => $this->_header,
            "data-height" => $this->_height,
            "data-href" => $this->_url,
            "data-show-border" => $this->_border,
            "data-show-faces" => $this->_faces,
            "data-stream" => $this->_stream,
            "data-width" => $this->_width
        ));
    }
}

?>
