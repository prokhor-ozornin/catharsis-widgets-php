<?php
/**
 * VideoJSPlayerWidget class.
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
 * Renders Video.JS web player widget.
 * Requires {@link WidgetsScripts::videojs} script and {@link WidgetsStyles::videojs} style to be included.
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 * @link      http://www.videojs.com
 */
class VideoJSPlayerWidget extends HtmlWidget
{
    private $_extra;
    private $_height;
    private $_videos = array();
    private $_width;

    /**
     * Custom HTML code to be part of video tag.
     * @param string $extra Additional HTML code fragment.
     * @return \Catharsis\Web\VideoJSPlayerWidget
     *         Reference to the current widget.
     */
    public function extra($extra)
    {
        $this->_extra = (string) $extra;
        return $this;
    }

    /**
     * Custom HTML code to be part of video tag.
     * @return string Additional HTML code fragment.
     */
    public function getExtra()
    {
        return $this->_extra;
    }

    /**
     * Vertical height of video.
     * This attribute is required.
     * @param string $height Height of video.
     * @return \Catharsis\Web\VideoJSPlayerWidget
     *         Reference to the current widget.
     */
    public function height($height)
    {
        $this->_height = (string) $height;
        return $this;
    }

    /**
     * Vertical height of video.
     * @return string Height of video.
     */
    public function getHeight()
    {
        return $this->_height;
    }

    /**
     * Collection of video sources to use.
     * This attribute is required.
     * @param array $videos Collection of videos.
     * @return \Catharsis\Web\VideoJSPlayerWidget
     *         Reference to the current widget.
     */
    public function videos($videos)
    {
        $this->_videos = (array) $videos;
        return $this;
    }

    /**
     * Collection of video sources to use.
     * @return array Collection of videos.
     */
    public function getVideos()
    {
        return $this->_videos;
    }

    /**
     * Horizontal width of video.
     * This attribute is required.
     * @param string $width Width of video.
     * @return \Catharsis\Web\VideoJSPlayerWidget
     *         Reference to the current widget.
     */
    public function width($width)
    {
        $this->_width = (string) $width;
        return $this;
    }

    /**
     * Horizontal width of video.
     * @return string Width of video.
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
        if (empty($this->getVideos())
            || empty($this->getWidth())
            || empty($this->getHeight())
        ) {
            return '';
        }

        $videos = array();
        foreach ($this->getVideos() as $video_url => $video_content_type) {
            $videos[] = self::htmlTag(
                'source',
                array('src' => $video_url, 'type' => $video_content_type),
                null
            );
        }

        return self::htmlTag(
            'video',
            array(
                'class' => 'video-js vjs-default-skin',
                'controls' => 'controls',
                'data-setup' => '{}',
                'height' => $this->getHeight(),
                'preload' => 'auto',
                'width' => $this->getWidth()
            ),
            implode($videos) . $this->getExtra()
        );
    }
}

?>
