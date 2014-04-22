<?php
namespace Catharsis\Web;

/**
 * Scripts bundles manager to render JavaScript code, required by Cackle widgets.
 */
trait CackleScriptsTrait
{
  /**
   * Renders required JavaScript <script> tags.
   * @return string JavaScript code.
   */
  public static function cackle()
  {
    return self::javascript_link(Widgets::scripts_path()."/cackle.js");
  }
}