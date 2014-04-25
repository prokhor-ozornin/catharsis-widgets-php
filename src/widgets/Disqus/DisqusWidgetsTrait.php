<?php
namespace Catharsis\Web;

/**
 * Disqus widgets helpers trait.
 */
trait DisqusWidgetsTrait
{
    private static $_disqus;
    
    /**
     * Returns factory class instance for rendering Disqus widgets.
     * @return \Catharsis\Web\DisqusWidgetsFactory
     */
    public static function disqus()
    {
        return empty(self::$_disqus)
            ? (self::$_disqus = new DisqusWidgetsFactory())
            : self::$_disqus;
    }
}

?>
