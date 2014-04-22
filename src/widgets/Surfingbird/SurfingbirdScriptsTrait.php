<?php
namespace Catharsis\Web;

/**
 * Scripts bundles manager to render JavaScript code, required by Surfingbird widgets.
 */
trait SurfingbirdScriptsTrait
{
  /**
   * Renders required JavaScript <script> tags.
   * @return string JavaScript code.
   */
  public static function surfingbird()
  {
    return self::javascript_link("http://surfingbird.ru/share/share.min.js");
  }
}