<?php
namespace Catharsis\Web;

/**
 * Scripts bundles manager to render JavaScript code, required by Disqus widgets.
 */
trait DisqusScriptsTrait
{
  /**
   * Renders required JavaScript <script> tags.
   * @return string JavaScript code.
   */
  public static function disqus()
  {
    return self::javascript_link(Widgets::scripts_path()."/disqus.js");
  }
}