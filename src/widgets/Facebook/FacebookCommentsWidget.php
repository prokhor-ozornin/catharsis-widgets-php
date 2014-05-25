<?php
/**
 * FacebookCommentsWidget class.
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
 * Renders Facebook comments widget.
 * Requires Facebook JavaScript initialization to be performed first.
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 * @link      https://developers.facebook.com/docs/plugins/comments
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
     * @return \Catharsis\Web\FacebookCommentsWidget
     *         Reference to the current widget.
     */
    public function colorScheme($colorScheme)
    {
        $this->_colorScheme = (string) $colorScheme;
        return $this;
    }

    /**
     * The color scheme used by the widget.
     * @return string Color scheme of widget.
     */
    public function getColorScheme()
    {
        return $this->_colorScheme;
    }

    /**
     * A boolean value that specifies whether to show the mobile-optimized version or not.
     * If not specified, auto-detection is used.
     * @param boolean $mobile TRUE to use mobile-optimized version, FALSE otherwise.
     * @return \Catharsis\Web\FacebookCommentsWidget
     *         Reference to the current widget.
     */
    public function mobile($mobile)
    {
        $this->_mobile = (bool) $mobile;
        return $this;
    }

    /**
     * A boolean value that specifies whether to show the mobile-optimized version or not.
     * If not specified, auto-detection is used.
     * @return boolean TRUE to use mobile-optimized version, FALSE otherwise.
     */
    public function getMobile()
    {
        return $this->_mobile;
    }

    /**
     * The order to use when displaying comments.
     * @param string $order Order of comments.
     * @return \Catharsis\Web\FacebookCommentsWidget
     *         Reference to the current widget.
     */
    public function order($order)
    {
        $this->_order = (string) $order;
        return $this;
    }

    /**
     * The order to use when displaying comments.
     * @return string Order of comments.
     */
    public function getOrder()
    {
        return $this->_order;
    }

    /**
     * The number of comments to show by default.
     * The minimum value is 1.
     * Default is 10.
     * @param integer $posts Number of comments to show.
     * @return \Catharsis\Web\FacebookCommentsWidget
     *         Reference to the current widget.
     */
    public function posts($posts)
    {
        $this->_posts = (int) $posts;
        return $this;
    }

    /**
     * The number of comments to show by default.
     * The minimum value is 1.
     * Default is 10.
     * @return integer Number of comments to show.
     */
    public function getPosts()
    {
        return $this->_posts;
    }

    /**
     * The absolute URL that comments posted in the widget will be permanently associated with.
     * Stories on Facebook about comments posted in the plugin will link to this URL.
     * Default is current page URL.
     * @param string $url URL of the page for comments.
     * @return \Catharsis\Web\FacebookCommentsWidget
     *         Reference to the current widget.
     */
    public function url($url)
    {
        $this->_url = (string) $url;
        return $this;
    }

    /**
     * The absolute URL that comments posted in the widget will be permanently associated with.
     * Stories on Facebook about comments posted in the plugin will link to this URL.
     * Default is current page URL.
     * @return string URL of the page for comments.
     */
    public function getUrl()
    {
        return $this->_url;
    }

    /**
     * The width of the widget.
     * The mobile version of the Comments widget ignores the width parameter, and instead has a fluid width of 100%.
     * @param string $width Width of widget.
     * @return \Catharsis\Web\FacebookCommentsWidget
     *         Reference to the current widget.
     */
    public function width($width)
    {
        $this->_width = (string) $width;
        return $this;
    }

    /**
     * The width of the widget.
     * The mobile version of the Comments widget ignores the width parameter, and instead has a fluid width of 100%.
     * @return string Width of widget.
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
        return self::htmlTag(
            'div',
            array(
                'class' => 'fb-comments',
                'data-colorscheme' => $this->getColorScheme(),
                'data-href' => $this->getUrl(),
                'data-mobile' => $this->getMobile(),
                'data-num-posts' => $this->getPosts(),
                'data-order-by' => $this->getOrder(),
                'data-width' => $this->getWidth()
            )
        );
    }
}

?>
