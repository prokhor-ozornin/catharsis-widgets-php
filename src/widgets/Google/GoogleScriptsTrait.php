<?php
namespace Catharsis\Web;

/**
 * Scripts bundles manager to render JavaScript code, required by Google widgets.
 */
trait GoogleScriptsTrait
{
  /**
   * Renders required JavaScript <script> tags.
   * @return string JavaScript code.
   */
  public static function google()
  {
    return self::javascript_link(Widgets::scripts_path()."/google_analytics.js").
           self::javascript_link(Widgets::scripts_path()."/google_plusone.js");
  }
}