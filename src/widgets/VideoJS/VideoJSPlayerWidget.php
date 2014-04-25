<?php
namespace Catharsis\Web;

/**
 * Renders Video.JS web player widget.
 * Requires {@link WidgetsScripts::videojs} script and {@link WidgetsStyles::videojs} style to be included.
 * @link http://www.videojs.com
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
     * @return \Catharsis\Web\VideoJSPlayerWidget Reference to the current widget.
     */
    public function extra($extra)
    {
        $this->_extra = (string) $extra;
        return $this;
    }

    /**
     * Vertical height of video.
     * This attribute is required.
     * @param string $height Height of video.
     * @return \Catharsis\Web\VideoJSPlayerWidget Reference to the current widget.
     */
    public function height($height)
    {
        $this->_height = (string) $height;
        return $this;
    }

    /**
     * Collection of video sources to use.
     * This attribute is required.
     * @param array $videos Collection of videos.
     * @return \Catharsis\Web\VideoJSPlayerWidget Reference to the current widget.
     */
    public function videos($videos)
    {
        $this->_videos = (array) $videos;
        return $this;
    }

    /**
     * Horizontal width of video.
     * This attribute is required.
     * @param string $width >Width of video.
     * @return \Catharsis\Web\VideoJSPlayerWidget Reference to the current widget.
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
        if (empty($this->_videos) || empty($this->_width) || empty($this->_height)) {
            return "";
        }

        $videos = array();
        foreach ($this->_videos as $video_url => $video_content_type) {
            $videos[] = self::htmlTag("source", array("src" => $video_url, "type" => $video_content_type), null);
        }

        return self::htmlTag("video", array(
            "class" => "video-js vjs-default-skin",
            "controls" => "controls",
            "data-setup" => "{}",
            "height" => $this->_height,
            "preload" => "auto",
            "width" => $this->_width), implode($videos) . $this->_extra);
    }
}

?>
