<?php
namespace Catharsis\Web;

/**
 * SoundCloud widgets helpers trait.
 */
trait SoundCloudWidgetsTrait
{
    private static $_soundcloud;
    /**
     * Returns factory class instance for rendering SoundCloud widgets.
     * @return \Catharsis\Web\SoundCloudWidgetsFactory
     */
    public static function soundcloud()
    {
        return empty(self::$_soundcloud)
            ? (self::$_soundcloud = new SoundCloudWidgetsFactory())
            : self::$_soundcloud;
    }
}

?>
