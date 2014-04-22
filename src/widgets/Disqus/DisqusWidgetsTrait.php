<?php
namespace Catharsis\Web;

/**
 * Disqus widgets helpers trait.
 */
trait DisqusWidgetsTrait
{
  private static $disqus;

  /**
   * Returns factory class instance for rendering Disqus widgets.
   * @return \Catharsis\Web\DisqusWidgetsFactory
   */
  public static function disqus()
  {
    return empty(self::$disqus) ? (self::$disqus = new DisqusWidgetsFactory()) : self::$disqus;
  }
}