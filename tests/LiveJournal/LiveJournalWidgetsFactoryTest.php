<?php

/**
 * Tests set for class {@link Catharsis\Web\LiveJournalWidgetsFactory}
 */
final class LiveJournalWidgetsFactoryTest extends PHPUnit_Framework_TestCase
{
  /**
   * Performs testing of {@link Catharsis\Web\LiveJournalWidgetsFactory::like()} method.
   */
  public function test_like_method()
  {
    $factory = new Catharsis\Web\LiveJournalWidgetsFactory();
    $this->assertNotSame($factory->like(), $factory->like());
    $this->assertInstanceOf("Catharsis\Web\LiveJournalLikeButtonWidget", $factory->like());
  }

  /**
   * Performs testing of {@link Catharsis\Web\LiveJournalWidgetsFactory::repost()} method.
   */
  public function test_repost_method()
  {
    $factory = new Catharsis\Web\LiveJournalWidgetsFactory();
    $this->assertNotSame($factory->repost(), $factory->repost());
    $this->assertInstanceOf("Catharsis\Web\LiveJournalRepostButtonWidget", $factory->repost());
  }
}