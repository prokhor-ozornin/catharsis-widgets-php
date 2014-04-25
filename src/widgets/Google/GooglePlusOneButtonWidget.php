<?php
namespace Catharsis\Web;

/**
 * Renders Google "+1" button.
 * Requires {@link WidgetsScriptsBundles::google()} scripts bundle to be included.
 * @link https://developers.google.com/+/web/+1button
 */
class GooglePlusOneButtonWidget extends HtmlWidget
{
    private $_alignment;
    private $_annotation;
    private $_callback;
    private $_recommendations;
    private $_size;
    private $_url;
    private $_width;

    /**
     * Horizontal alignment of the button assets within its frame.
     * @param string $alignment Horizontal alignment of the button.
     * @return \Catharsis\Web\GooglePlusOneButtonWidget Reference to the current widget.
     */
    public function alignment($alignment)
    {
        $this->_alignment = (string) $alignment;
        return $this;
    }

    /**
     * Annotation to display next to the button.
     * @param string $annotation Annotation for the button.
     * @return \Catharsis\Web\GooglePlusOneButtonWidget Reference to the current widget.
     */
    public function annotation($annotation)
    {
        $this->_annotation = (string) $annotation;
        return $this;
    }

    /**
     * Callback JavaScript function that is called after the user clicks the +1 button.
     * @param string $callback Callback JavaScript function.
     * @return \Catharsis\Web\GooglePlusOneButtonWidget Reference to the current widget.
     */
    public function callback($callback)
    {
        $this->_callback = (string) $callback;
        return $this;
    }

    /**
     * Whether to show recommendations within the +1 hover bubble. Default is TRUE.
     * @param boolean $show TRUE to show recommendations, FALSE to hide.
     * @return \Catharsis\Web\GooglePlusOneButtonWidget Reference to the current widget.
     */
    public function recommendations($show = true)
    {
        $this->_recommendations = (bool) $show;
        return $this;
    }

    /**
     * Size of the button.
     * @param string $size Size of the button.
     * @return \Catharsis\Web\GooglePlusOneButtonWidget Reference to the current widget.
     */
    public function size($size)
    {
        $this->_size = (string) $size;
        return $this;
    }

    /**
     * URL for the button. Default is current page's URL.
     * @param string $url URL for the button.
     * @return \Catharsis\Web\GooglePlusOneButtonWidget Reference to the current widget.
     */
    public function url($url)
    {
        $this->_url = (string) $url;
        return $this;
    }

    /**
     * If annotation is set to "inline", this parameter sets the width in pixels to use for the button and its inline annotation. If the width is omitted, a button and its inline annotation use 450px.
     * @param string $width Width of the button.
     * @return \Catharsis\Web\GooglePlusOneButtonWidget Reference to the current widget.
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
        return self::htmlTag("g:plusone", array(
            "align" => $this->_alignment,
            "annotation" => $this->_annotation,
            "data-callback" => $this->_callback,
            "data-recommendations" => $this->_recommendations,
            "href" => $this->_url,
            "size" => $this->_size,
            "width" => $this->_width));
    }
}

?>
