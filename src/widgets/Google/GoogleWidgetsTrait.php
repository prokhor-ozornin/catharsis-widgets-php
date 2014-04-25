<?php
namespace Catharsis\Web;

/**
 * Google widgets helpers trait.
 */
trait GoogleWidgetsTrait
{
    private static $_google;
    
    /**
     * Returns factory class instance for rendering Google widgets.
     * @return \Catharsis\Web\GoogleWidgetsFactory
     */
    public static function google()
    {
        return empty(self::$_google)
            ? (self::$_google = new GoogleWidgetsFactory())
            : self::$_google;
    }
}

?>
