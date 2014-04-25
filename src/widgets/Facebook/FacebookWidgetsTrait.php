<?php
namespace Catharsis\Web;

/**
 * Facebook widgets helpers trait.
 */
trait FacebookWidgetsTrait
{
    private static $_facebook;

    /**
     * Returns factory class instance for rendering Facebook widgets.
     * @return \Catharsis\Web\FacebookWidgetsFactory
     */
    public static function facebook()
    {
        return empty(self::$_facebook)
            ? (self::$_facebook = new FacebookWidgetsFactory())
            : self::$_facebook;
    }
}

?>
