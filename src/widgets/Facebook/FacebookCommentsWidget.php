<?php
namespace Catharsis\Web;

/**
 * Renders Facebook comments widget.
 * Requires Facebook JavaScript initialization to be performed first.
 * @link https://developers.facebook.com/docs/plugins/comments
 */
class FacebookCommentsWidget extends HtmlWidget
{
    private $_colorScheme;
    private $_mobile;
    private $_order;
    private $_posts;
    private $_url;
    private $_width;

    /**
     * The color scheme used by the widget.
     * @param string $colorScheme Color scheme of widget.
     * @return \Catharsis\Web\FacebookCommentsWidget Reference to the current widget.
     */
    public function colorScheme($colorScheme)
    {
        $this->_colorScheme = (string) $colorScheme;
        return $this;
    }

    /**
     * A boolean value that specifies whether to show the mobile-optimized version or not. If not specified, auto-detection is used.
     * @param boolean $mobile TRUE to use mobile-optimized version, FALSE otherwise.
     * @return \Catharsis\Web\FacebookCommentsWidget Reference to the current widget.
     */
    public function mobile($mobile = true)
    {
        $this->_mobile = (bool) $mobile;
        return $this;
    }

    /**
     * The order to use when displaying comments.
     * @param string $order Order of comments.
     * @return \Catharsis\Web\FacebookCommentsWidget Reference to the current widget.
     */
    public function order($order)
    {
        $this->_order = (string) $order;
        return $this;
    }

    /**
     * The number of comments to show by default. The minimum value is 1. Default is 10.
     * @param integer $posts Number of comments to show.
     * @return \Catharsis\Web\FacebookCommentsWidget Reference to the current widget.
     */
    public function posts($posts)
    {
        $this->_posts = (int) $posts;
        return $this;
    }

    /**
     * The absolute URL that comments posted in the widget will be permanently associated with. Stories on Facebook about comments posted in the plugin will link to this URL. Default is current page URL.
     * @param string $url URL of the page for comments.
     * @return \Catharsis\Web\FacebookCommentsWidget Reference to the current widget.
     */
    public function url($url)
    {
        $this->_url = (string) $url;
        return $this;
    }

    /**
     * The width of the widget. The mobile version of the Comments widget ignores the width parameter, and instead has a fluid width of 100%.
     * @param string $width Width of widget.
     * @return \Catharsis\Web\FacebookCommentsWidget Reference to the current widget.
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
        return self::htmlTag("div", array(
            "class" => "fb-comments",
            "data-colorscheme" => $this->_colorScheme,
            "data-href" => $this->_url,
            "data-mobile" => $this->_mobile,
            "data-num-posts" => $this->_posts,
            "data-order-by" => $this->_order,
            "data-width" => $this->_width
        ));
    }
}

?>
