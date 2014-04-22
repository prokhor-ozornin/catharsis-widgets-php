<?php
namespace Catharsis\Web;

/**
 * Renders Video.JS web player widget.
 * Requires {@link WidgetsScripts::videojs} script and {@link WidgetsStyles::videojs} style to be included.
 * @link http://www.videojs.com
 */
class VideoJSPlayerWidget extends HtmlWidgetBase
{
  private $extra;
  private $height;
  private $videos = array();
  private $width;

  /**
   * Custom HTML code to be part of video tag.
   * @param string $extra Additional HTML code fragment.
   * @return \Catharsis\Web\VideoJSPlayerWidget Reference to the current widget.
   */
  public function extra($extra)
  {
    $this->extra = (string) $extra;
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
    $this->height = (string) $height;
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
    $this->videos = (array) $videos;
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
    $this->width = (string) $width;
    return $this;
  }

  /**
   * Returns HTML markup text of widget.
   */
  public function __toString()
  {
    if (empty($this->videos) || empty($this->width) || empty($this->height))
    {
      return "";
    }

    $videos = array();
    foreach ($this->videos as $video_url => $video_content_type)
    {
      $videos[] = self::html_tag("source", array("src" => $video_url, "type" => $video_content_type), null);
    }

    return self::html_tag("video", array(
      "class" => "video-js vjs-default-skin",
      "controls" => "controls",
      "data-setup" => "{}",
      "height" => $this->height,
      "preload" => "auto",
      "width" => $this->width),
      implode($videos).$this->extra);
  }
}