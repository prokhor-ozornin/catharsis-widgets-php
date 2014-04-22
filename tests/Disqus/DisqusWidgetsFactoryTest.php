<?php

/**
 * Tests set for class {@link Catharsis\Web\DisqusWidgetsFactory}
 */
final class DisqusWidgetsFactoryTest extends PHPUnit_Framework_TestCase
{
  /**
   * Performs testing of {@link Catharsis\Web\DisqusWidgetsFactory::comments()} method.
   */
  public function test_comments_method()
  {
    $factory = new Catharsis\Web\DisqusWidgetsFactory();
    $this->assertNotSame($factory->comments(), $factory->comments());
    $this->assertInstanceOf("Catharsis\Web\DisqusCommentsWidget", $factory->comments());
  }
}