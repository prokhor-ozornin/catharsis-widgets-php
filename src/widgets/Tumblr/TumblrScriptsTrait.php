<?php
namespace Catharsis\Web;

/**
 * Scripts bundles manager to render JavaScript code, required by Tumblr widgets.
 */
trait TumblrScriptsTrait
{
  /**
   * Renders required JavaScript <script> tags.
   * @return string JavaScript code.
   */
  public static function tumblr()
  {
    return self::javascript_link("http://platform.tumblr.com/v1/share.js");
  }
}