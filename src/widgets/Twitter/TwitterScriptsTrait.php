<?php
namespace Catharsis\Web;

/**
 * Scripts bundles manager to render JavaScript code, required by Twitter widgets.
 */
trait TwitterScriptsTrait
{
  /**
   * Renders required JavaScript <script> tags.
   * @return string JavaScript code.
   */
  public static function twitter()
  {
    return self::javascript_link(Widgets::scripts_path()."/twitter_initialize.js");
  }
}