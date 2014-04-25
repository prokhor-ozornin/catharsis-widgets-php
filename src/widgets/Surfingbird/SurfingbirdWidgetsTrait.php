<?php
namespace Catharsis\Web;

/**
 * Surfingbird widgets helpers trait.
 */
trait SurfingbirdWidgetsTrait
{
    private static $_surfingbird;

    /**
     * Returns factory class instance for rendering Surfingbird widgets.
     * @return \Catharsis\Web\SurfingbirdWidgetsFactory
     */
    public static function surfingbird()
    {
        return empty(self::$_surfingbird)
            ? (self::$_surfingbird = new SurfingbirdWidgetsFactory())
            : self::$_surfingbird;
    }
}

?>
