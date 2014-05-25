<?php
/**
 * GooglePlusOneButtonWidget class.
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
 * Renders Google "+1" button.
 * Requires {@link WidgetsScriptsBundles::google()} scripts bundle to be included.
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 * @link      https://developers.google.com/+/web/+1button
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
     * @return \Catharsis\Web\GooglePlusOneButtonWidget
     *         Reference to the current widget.
     */
    public function alignment($alignment)
    {
        $this->_alignment = (string) $alignment;
        return $this;
    }

    /**
     * Horizontal alignment of the button assets within its frame.
     * @return string Horizontal alignment of the button.
     */
    public function getAlignment()
    {
        return $this->_alignment;
    }

    /**
     * Annotation to display next to the button.
     * @param string $annotation Annotation for the button.
     * @return \Catharsis\Web\GooglePlusOneButtonWidget
     *         Reference to the current widget.
     */
    public function annotation($annotation)
    {
        $this->_annotation = (string) $annotation;
        return $this;
    }

    /**
     * Annotation to display next to the button.
     * @return string Annotation for the button.
     */
    public function getAnnotation()
    {
        return $this->_annotation;
    }

    /**
     * Callback JavaScript function that is called after the user clicks the +1 button.
     * @param string $callback Callback JavaScript function.
     * @return \Catharsis\Web\GooglePlusOneButtonWidget
     *         Reference to the current widget.
     */
    public function callback($callback)
    {
        $this->_callback = (string) $callback;
        return $this;
    }

    /**
     * Callback JavaScript function that is called after the user clicks the +1 button.
     * @return string JavaScript function.
     */
    public function getCallback()
    {
        return $this->_callback;
    }

    /**
     * Whether to show recommendations within the +1 hover bubble.
     * Default is TRUE.
     * @param boolean $show TRUE to show recommendations, FALSE to hide.
     * @return \Catharsis\Web\GooglePlusOneButtonWidget
     *         Reference to the current widget.
     */
    public function recommendations($show)
    {
        $this->_recommendations = (bool) $show;
        return $this;
    }

    /**
     * Whether to show recommendations within the +1 hover bubble.
     * Default is TRUE.
     * @return boolean TRUE to show recommendations, FALSE to hide.
     */
    public function getRecommendations()
    {
        return $this->_recommendations;
    }

    /**
     * Size of the button.
     * @param string $size Size of the button.
     * @return \Catharsis\Web\GooglePlusOneButtonWidget
     *         Reference to the current widget.
     */
    public function size($size)
    {
        $this->_size = (string) $size;
        return $this;
    }

    /**
     * Size of the button.
     * @return string Size of the button.
     */
    public function getSize()
    {
        return $this->_size;
    }

    /**
     * URL for the button.
     * Default is current page's URL.
     * @param string $url URL for the button.
     * @return \Catharsis\Web\GooglePlusOneButtonWidget
     *         Reference to the current widget.
     */
    public function url($url)
    {
        $this->_url = (string) $url;
        return $this;
    }

    /**
     * URL for the button.
     * Default is current page's URL.
     * @return string URL for the button.
     */
    public function getUrl()
    {
        return $this->_url;
    }

    /**
     * If annotation is set to "inline", this parameter sets the width in pixels to use for the button and its inline annotation.
     * If the width is omitted, a button and its inline annotation use 450px.
     * @param string $width Width of the button.
     * @return \Catharsis\Web\GooglePlusOneButtonWidget
     *         Reference to the current widget.
     */
    public function width($width)
    {
        $this->_width = (string) $width;
        return $this;
    }

    /**
     * If annotation is set to "inline", this parameter sets the width in pixels to use for the button and its inline annotation.
     * If the width is omitted, a button and its inline annotation use 450px.
     * @return string Width of the button.
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
            'g:plusone',
            array(
                'align' => $this->getAlignment(),
                'annotation' => $this->getAnnotation(),
                'data-callback' => $this->getCallback(),
                'data-recommendations' => $this->getRecommendations(),
                'href' => $this->getUrl(),
                'size' => $this->getSize(),
                'width' => $this->getWidth()
            )
        );
    }
}

?>
