<?php

/**
 * Tests set for class {@link Catharsis\Web\PinterestScriptsTrait}
 */
final class PinterestScriptsTraitTest extends PHPUnit_Framework_TestCase
{
  use
  Catharsis\Web\HtmlHelpersTrait,
  Catharsis\Web\PinterestScriptsTrait;

  /**
   * Performs testing of {@link Catharsis\Web\PinterestScriptsTrait::pinterest()} method.
   */
  public function test_pinterest_method()
  {
    $this->assertEquals('<script src="http://assets.pinterest.com/js/pinit.js" type="text/javascript"></script>', self::pinterest());
  }
}