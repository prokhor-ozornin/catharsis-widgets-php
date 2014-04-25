<?php
namespace Catharsis\Web;

/**
 * Scripts bundles manager to render JavaScript code, required by VideoJS widgets.
 */
trait VideoJSScriptsTrait
{
    /**
     * Renders required JavaScript <script> tags.
     * @return string JavaScript code.
     */
    public static function videojs()
    {
        return self::javascriptLink("http://vjs.zencdn.net/4.3/video.js");
    }
}

?>
