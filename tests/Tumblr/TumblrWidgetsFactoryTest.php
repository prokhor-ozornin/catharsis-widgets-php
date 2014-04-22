<?php

/**
 * Tests set for class {@link Catharsis\Web\TumblrWidgetsFactory}
 */
final class TumblrWidgetsFactoryTest extends PHPUnit_Framework_TestCase
{
  /**
   ** Performs testing of {@link Catharsis\Web\TumblrWidgetsFactory::follow()} method.
   */
  public function test_follow_method()
  {
    $factory = new Catharsis\Web\TumblrWidgetsFactory();
    $this->assertNotSame($factory->follow(), $factory->follow());
    $this->assertInstanceOf("Catharsis\Web\TumblrFollowButtonWidget", $factory->follow());
  }

  /**
   ** Performs testing of {@link Catharsis\Web\TumblrWidgetsFactory::share()} method.
   */
  public function test_share_method()
  {
    $factory = new Catharsis\Web\TumblrWidgetsFactory();
    $this->assertNotSame($factory->share(), $factory->share());
    $this->assertInstanceOf("Catharsis\Web\TumblrShareButtonWidget", $factory->share());
  }
}