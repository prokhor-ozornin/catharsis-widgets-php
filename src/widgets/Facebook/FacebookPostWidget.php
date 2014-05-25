<?php
/**
 * FacebookPostWidget class.
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
 * Renders embedded Facebook post on web page.
 * Requires Facebook JavaScript initialization to be performed first.
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 * @link      https://developers.facebook.com/docs/plugins/embedded-posts
 */
class FacebookPostWidget extends HtmlWidget
{
    private $_url;
    private $_width;

    /**
     * Specified URL address of Facebook post to embed.
     * This attribute is required.
     * @param string $url URL of Facebook post.
     * @return \Catharsis\Web\FacebookPostWidget
     *         Reference to the current widget.
     */
    public function url($url)
    {
        $this->_url = (string) $url;
        return $this;
    }

    /**
     * Specified URL address of Facebook post to embed.
     * @return string URL of Facebook post.
     */
    public function getUrl()
    {
        return $this->_url;
    }

    /**
     * Specifies width of Facebook post area on page.
     * @param string $width Width of post.
     * @return \Catharsis\Web\FacebookPostWidget
     *         Reference to the current widget.
     */
    public function width($width)
    {
        $this->_width = (string) $width;
        return $this;
    }

    /**
     * Specifies width of Facebook post area on page.
     * @return string Width of post.
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
                'class' => 'fb-post',
                'data-href' => $this->getUrl(),
                'data-width' => $this->getWidth()
            )
        );
    }
}

?>
