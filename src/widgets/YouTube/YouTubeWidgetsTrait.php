<?php
namespace Catharsis\Web;

/**
 * YouTube widgets helpers trait.
 */
trait YouTubeWidgetsTrait
{
    private static $_youtube;

    /**
     * Returns factory class instance for rendering YouTube widgets.
     * @return \Catharsis\Web\YouTubeWidgetsFactory
     */
    public static function youtube()
    {
        return empty(self::$_youtube)
            ? (self::$_youtube = new YouTubeWidgetsFactory())
            : self::$_youtube;
    }
}

?>
