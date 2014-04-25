<?php
namespace Catharsis\Web;

/**
 * IntenseDebate widgets helpers trait.
 */
trait IntenseDebateWidgetsTrait
{
    private static $_intensedebate;
    /**
     * Returns factory class instance for rendering IntenseDebate widgets.
     * @return \Catharsis\Web\IntensedebateWidgetsFactory
     */
    public static function intensedebate()
    {
        return empty(self::$_intensedebate)
            ? (self::$_intensedebate = new IntenseDebateWidgetsFactory())
            : self::$_intensedebate;
    }
}

?>
