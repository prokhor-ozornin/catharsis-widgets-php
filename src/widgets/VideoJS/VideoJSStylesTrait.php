<?php
namespace Catharsis\Web;

/**
 * Styles bundles manager to render CSS code, required by VideoJS widgets.
 */
trait VideoJSStylesTrait
{
  /**
   * Renders required CSS <link> tags.
   * @return string CSS code.
   */
  public static function videojs()
  {
    return self::css_link("http://vjs.zencdn.net/4.3/video-js.css");
  }
}