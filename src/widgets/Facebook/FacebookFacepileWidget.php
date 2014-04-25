<?php
namespace Catharsis\Web;

/**
 * Renders Facebook Facepile widget.
 * Requires Facebook JavaScript initialization to be performed first.
 * @link https://developers.facebook.com/docs/plugins/facepile
 */
class FacebookFacepileWidget extends HtmlWidget
{
    private $_actions = array();
    private $_colorScheme;
    private $_height;
    private $_maxRows;
    private $_photoSize;
    private $_url;
    private $_width;

    /**
     * Collection of Open Graph action types.
     * @param array $actions Collection of Facebook action types.
     * @return \Catharsis\Web\FacebookFacepileWidget Reference to the current widget.
     */
    public function actions($actions)
    {
        $this->_actions = (array) $actions;
        return $this;
    }

    /**
     * The color scheme used by the widget. Default is "light".
     * @param string $colorScheme Color scheme of widget.
     * @return \Catharsis\Web\FacebookFacepileWidget Reference to the current widget.
     */
    public function colorScheme($colorScheme)
    {
        $this->_colorScheme = (string) $colorScheme;
        return $this;
    }

    /**
     * The height of the widget in pixels.
     * @param string $height Height of widget.
     * @return \Catharsis\Web\FacebookFacepileWidget Reference to the current widget.
     */
    public function height($height)
    {
        $this->_height = (string) $height;
        return $this;
    }

    /**
     * The maximum number of rows of faces to display. Default is 1.
     * @param integer $maxRows Number of rows of faces to display.
     * @return \Catharsis\Web\FacebookFacepileWidget Reference to the current widget.
     */
    public function maxRows($maxRows)
    {
        $this->_maxRows = (int) $maxRows;
        return $this;
    }

    /**
     * Controls the size of the photos shown in the widget. Default is "medium".
     * @param string $size Size of photos.
     * @return \Catharsis\Web\FacebookFacepileWidget Reference to the current widget.
     */
    public function photoSize($size)
    {
        $this->_photoSize = (string) $size;
        return $this;
    }

    /**
     * Display photos of the people who have liked this absolute URL. Default is current page URL.
     * @param string $url Target "liked" URL.
     * @return \Catharsis\Web\FacebookFacepileWidget Reference to the current widget.
     */
    public function url($url)
    {
        $this->_url = (string) $url;
        return $this;
    }

    /**
     * The width of the widget in pixels. Minimum is 200. Default is 300.
     * @param string $width Width of widget.
     * @return \Catharsis\Web\FacebookFacepileWidget Reference to the current widget.
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
            "class" => "fb-facepile",
            "data-action" => implode(",", $this->_actions),
            "data-colorscheme" => $this->_colorScheme,
            "data-height" => $this->_height,
            "data-href" => empty($this->_url)
                ? $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]
                : $this->_url,
            "data-max-rows" => $this->_maxRows,
            "data-size" => $this->_photoSize,
            "data-width" => $this->_width
        ));
    }
}

?>
