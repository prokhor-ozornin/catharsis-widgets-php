<?php
namespace Catharsis\Web;

/**
 * VideoJS widgets helpers trait.
 */
trait VideoJSWidgetsTrait
{
    private static $_videojs;

    /**
     * Returns factory class instance for rendering VideoJS widgets.
     * @return \Catharsis\Web\VideoJSWidgetsFactory
     */
    public static function videojs()
    {
        return empty(self::$_videojs)
            ? (self::$_videojs = new VideoJSWidgetsFactory())
            : self::$_videojs;
    }
}

?>
