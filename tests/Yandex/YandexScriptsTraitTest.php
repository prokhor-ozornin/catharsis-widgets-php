<?php

/**
 * Tests set for class {@link Catharsis\Web\YandexScriptsTrait}
 */
final class YandexScriptsTraitTest extends PHPUnit_Framework_TestCase
{
  use
  Catharsis\Web\HtmlHelpersTrait,
  Catharsis\Web\YandexScriptsTrait;

  /**
   * Performs testing of {@link Catharsis\Web\YandexScriptsTrait::yandex()} method.
   */
  public function test_yandex_method()
  {
    $this->assertEquals('<script src="http://yandex.st/share/share.js" type="text/javascript"></script>', self::yandex());
  }
}