<?php
namespace Catharsis\Web;

/**
 * Pinterest widgets helpers trait.
 */
trait PinterestWidgetsTrait
{
    private static $_pinterest;

    /**
     * Returns factory class instance for rendering Pinterest widgets.
     * @return \Catharsis\Web\PinterestWidgetsFactory
     */
    public static function pinterest()
    {
        return empty(self::$_pinterest)
            ? (self::$_pinterest = new PinterestWidgetsFactory())
            : self::$_pinterest;
    }
}

?>
