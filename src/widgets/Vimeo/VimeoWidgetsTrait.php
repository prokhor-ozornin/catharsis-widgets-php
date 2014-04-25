<?php
namespace Catharsis\Web;

/**
 * Vimeo widgets helpers trait.
 */
trait VimeoWidgetsTrait
{
    private static $_vimeo;

    /**
     *
     * @return \Catharsis\Web\VimeoWidgetsFactory
     */
    public static function vimeo()
    {
        return empty(self::$_vimeo)
            ? (self::$_vimeo = new VimeoWidgetsFactory())
            : self::$_vimeo;
    }
}

?>
