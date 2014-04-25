<?php
namespace Catharsis\Web;

/**
 * Renders embedded Facebook post on web page.
 * Requires Facebook JavaScript initialization to be performed first.
 * @link https://developers.facebook.com/docs/plugins/embedded-posts
 */
class FacebookPostWidget extends HtmlWidget
{
    private $_url;
    private $_width;

    /**
     * Specified URL address of Facebook post to embed.
     * This attribute is required.
     * @param string $url URL of Facebook post.
     * @return \Catharsis\Web\FacebookPostWidget Reference to the current widget.
     */
    public function url($url)
    {
        $this->_url = (string) $url;
        return $this;
    }

    /**
     * Specifies width of Facebook post area on page.
     * @param string $width Width of post.
     * @return \Catharsis\Web\FacebookPostWidget Reference to the current widget.
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
            "class" => "fb-post",
            "data-href" => $this->_url,
            "data-width" => $this->_width
        ));
    }
}

?>
