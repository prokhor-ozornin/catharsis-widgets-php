<?php
namespace Catharsis\Web;

/**
 * Scripts bundles manager to render JavaScript code, required by Yandex widgets.
 */
trait YandexScriptsTrait
{
  /**
   * Renders required JavaScript <script> tags.
   * @return string JavaScript code.
   */
  public static function yandex()
  {
    return self::javascript_link("http://yandex.st/share/share.js");
  }
}