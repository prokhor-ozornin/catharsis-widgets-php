<?php

/**
 * Tests set for class {@link Catharsis\Web\TwitterWidgetsFactory}
 */
final class TwitterWidgetsFactoryTest extends PHPUnit_Framework_TestCase
{
  /**
   ** Performs testing of {@link Catharsis\Web\TwitterWidgetsFactory::follow()} method.
   */
  public function test_follow_method()
  {
    $factory = new Catharsis\Web\TwitterWidgetsFactory();
    $this->assertNotSame($factory->follow(), $factory->follow());
    $this->assertInstanceOf("Catharsis\Web\TwitterFollowButtonWidget", $factory->follow());
  }

  /**
   ** Performs testing of {@link Catharsis\Web\TwitterWidgetsFactory::tweet()} method.
   */
  public function test_tweet_method()
  {
    $factory = new Catharsis\Web\TwitterWidgetsFactory();
    $this->assertNotSame($factory->tweet(), $factory->tweet());
    $this->assertInstanceOf("Catharsis\Web\TwitterTweetButtonWidget", $factory->tweet());
  }
}