<?php
namespace Catharsis\Web;

/**
 * Twitter widgets helpers trait.
 */
trait TwitterWidgetsTrait
{
    private static $_twitter;

    /**
     * Returns factory class instance for rendering Twitter widgets.
     * @return \Catharsis\Web\TwitterWidgetsFactory
     */
    public static function twitter()
    {
        return empty(self::$_twitter)
            ? (self::$_twitter = new TwitterWidgetsFactory())
            : self::$_twitter;
    }
}

?>
