<?php

/**
 * Tests set for class {@link HtmlHelpersTrait}
 */
final class HtmlHelpersTraitTest extends PHPUnit_Framework_TestCase
{
  use Catharsis\Web\HtmlHelpersTrait;

  /**
   * Performs testing of {@link HtmlHelpersTrait::css_inline(string $code)} method.
   */
  public function test_css_inline_method()
  {
    $this->assertEquals('<style type="text/css"></style>', self::css_inline(null));
    $this->assertEquals('<style type="text/css"></style>', self::css_inline(""));
    $this->assertEquals('<style type="text/css">code</style>', self::css_inline("code"));
  }

  /**
   * Performs testing of {@link HtmlHelpersTrait::css_link(string $url)} method.
   */
  public function test_css_link_method()
  {
    $this->assertEmpty(self::css_link(null));
    $this->assertEmpty(self::css_link(""));
    $this->assertEquals('<link href="url" rel="stylesheet" type="text/css"></link>', self::css_link("url"));
  }

  /**
   * Performs testing of {@link HtmlHelpersTrait::html_tag(string $tag, array $attributes, string $body)} method.
   */
  public function test_html_tag_method()
  {
    $this->assertEmpty(self::html_tag(null));
    $this->assertEmpty(self::html_tag(""));
    $this->assertEquals('<tag></tag>', self::html_tag("tag"));
    $this->assertEquals('<tag/>', self::html_tag("tag", null, null));
    $this->assertEquals('<tag first="1"></tag>', self::html_tag("tag", array("first" => 1)));
    $this->assertEquals('<tag first="1" second="true">body</tag>', self::html_tag("tag", array("first" => 1, "second" => true), "body"));
  }

  /**
   * Performs testing of {@link HtmlHelpersTrait::javascript_inline(string $code)} method.
   */
  public function test_javascript_inline_method()
  {
    $this->assertEquals('<script type="text/javascript"></script>', self::javascript_inline(null));
    $this->assertEquals('<script type="text/javascript"></script>', self::javascript_inline(""));
    $this->assertEquals('<script type="text/javascript">code</script>', self::javascript_inline("code"));
  }

  /**
   * Performs testing of {@link HtmlHelpersTrait::javascript_link(string $url)} method.
   */
  public function test_javascript_link_method()
  {
    $this->assertEmpty(self::javascript_link(null));
    $this->assertEmpty(self::javascript_link(""));
    $this->assertEquals('<script src="url" type="text/javascript"></script>', self::javascript_link("url"));
  }

  /**
   * Performs testing of {@link HtmlHelpersTrait::url_query(array $parameters)} method.
   */
  public function test_url_query_method()
  {
    $this->assertEmpty(self::url_query(null));
    $this->assertEmpty(self::url_query(array()));
    $this->assertEquals('first=1', self::url_query(array('first' => 1)));
    $this->assertEquals('first=1&second=true', self::url_query(array('first' => 1, 'second' => true)));
    $this->assertEquals('first=1&second=true&third=spaced+value', self::url_query(array('first' => 1, 'second' => true, 'third' => 'spaced value')));
  }

  /**
   * Performs testing of {@link HtmlHelpersTrait::user_language()} method.
   */
  public function test_user_language_method()
  {
    $_REQUEST["lang"] = "ru";
    $this->assertEquals("ru", self::user_language());
    unset($_REQUEST["lang"]);

    $_REQUEST["language"] = "ru";
    $this->assertEquals("ru", self::user_language());
    unset($_REQUEST["language"]);

    $_SERVER["HTTP_ACCEPT_LANGUAGE"] = "ru";
    $this->assertEquals("ru", self::user_language());
    unset($_SERVER["HTTP_ACCEPT_LANGUAGE"]);

    $_SERVER["HTTP_ACCEPT_LANGUAGE"] = "ru,en";
    $this->assertEquals("ru", self::user_language());
    unset($_SERVER["HTTP_ACCEPT_LANGUAGE"]);

    $this->assertEquals("en", self::user_language());
  }
}