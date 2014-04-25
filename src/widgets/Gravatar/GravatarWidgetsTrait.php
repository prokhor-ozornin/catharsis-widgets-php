<?php
namespace Catharsis\Web;

/**
 * Gravatar widgets helpers trait.
 */
trait GravatarWidgetsTrait
{
    private static $_gravatar;
    
    /**
     * Returns factory class instance for rendering Gravatar widgets.
     * @return \Catharsis\Web\GravatarWidgetsFactory
     */
    public static function gravatar()
    {
        return empty(self::$_gravatar)
            ? (self::$_gravatar = new GravatarWidgetsFactory())
            : self::$_gravatar;
    }
}

?>
