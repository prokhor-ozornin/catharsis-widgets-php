<?php
namespace Catharsis\Web;

/**
 * Cackle widgets helpers trait.
 */
trait CackleWidgetsTrait
{
    private static $_cackle;

    /**
     * Returns factory class instance for rendering Cackle widgets.
     * @return \Catharsis\Web\CackleWidgetsFactory
     */
    public static function cackle()
    {
        return empty(self::$_cackle)
            ? (self::$_cackle = new CackleWidgetsFactory())
            : self::$_cackle;
    }
}

?>
