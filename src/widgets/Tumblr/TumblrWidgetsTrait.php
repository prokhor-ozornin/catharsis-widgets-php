<?php
namespace Catharsis\Web;

/**
 * Tumblr widgets helpers trait.
 */
trait TumblrWidgetsTrait
{
    private static $_tumblr;

    /**
     * Returns factory class instance for rendering Tumblr widgets.
     * @return \Catharsis\Web\TumblrWidgetsFactory
     */
    public static function tumblr()
    {
        return empty(self::$_tumblr)
            ? (self::$_tumblr = new TumblrWidgetsFactory())
            : self::$_tumblr;
    }
}

?>
