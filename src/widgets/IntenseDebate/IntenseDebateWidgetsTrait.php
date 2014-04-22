<?php
namespace Catharsis\Web;

/**
 * IntenseDebate widgets helpers trait.
 */
trait IntenseDebateWidgetsTrait
{
  private static $intensedebate;

  /**
   * Returns factory class instance for rendering IntenseDebate widgets.
   * @return \Catharsis\Web\IntensedebateWidgetsFactory
   */
  public static function intensedebate()
  {
    return empty(self::$intensedebate) ? (self::$intensedebate = new IntenseDebateWidgetsFactory()) : self::$intensedebate;
  }
}