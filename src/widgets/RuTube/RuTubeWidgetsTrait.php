<?php
namespace Catharsis\Web;

/**
 * RuTube widgets helpers trait.
 */
trait RuTubeWidgetsTrait
{
    private static $_rutube;

    /**
     * Returns factory class instance for rendering RuTube widgets.
     * @return \Catharsis\Web\RuTubeWidgetsFactory
     */
    public static function rutube()
    {
        return empty(self::$_rutube)
            ? (self::$_rutube = new RuTubeWidgetsFactory())
            : self::$_rutube;
    }
}

?>
