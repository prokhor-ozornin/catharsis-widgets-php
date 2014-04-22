<?php

/**
 * Tests set for class {@link Catharsis\Web\VkontakteWidgetsFactory}
 */
final class VkontakteWidgetsFactoryTest extends PHPUnit_Framework_TestCase
{
  /**
   ** Performs testing of {@link Catharsis\Web\VkontakteWidgetsFactory::comments()} method.
   */
  public function test_comments_method()
  {
    $factory = new Catharsis\Web\VkontakteWidgetsFactory();
    $this->assertNotSame($factory->comments(), $factory->comments());
    $this->assertInstanceOf("Catharsis\Web\VkontakteCommentsWidget", $factory->comments());
  }

  /**
   ** Performs testing of {@link Catharsis\Web\VkontakteWidgetsFactory::community()} method.
   */
  public function test_community_method()
  {
    $factory = new Catharsis\Web\VkontakteWidgetsFactory();
    $this->assertNotSame($factory->community(), $factory->community());
    $this->assertInstanceOf("Catharsis\Web\VkontakteCommunityWidget", $factory->community());
  }

  /**
   ** Performs testing of {@link Catharsis\Web\VkontakteWidgetsFactory::initialize()} method.
   */
  public function test_initialize_method()
  {
    $factory = new Catharsis\Web\VkontakteWidgetsFactory();
    $this->assertNotSame($factory->initialize(), $factory->initialize());
    $this->assertInstanceOf("Catharsis\Web\VkontakteInitWidget", $factory->initialize());
  }

  /**
   ** Performs testing of {@link Catharsis\Web\VkontakteWidgetsFactory::like()} method.
   */
  public function test_like_method()
  {
    $factory = new Catharsis\Web\VkontakteWidgetsFactory();
    $this->assertNotSame($factory->like(), $factory->like());
    $this->assertInstanceOf("Catharsis\Web\VkontakteLikeButtonWidget", $factory->like());
  }

  /**
   ** Performs testing of {@link Catharsis\Web\VkontakteWidgetsFactory::subscribe()} method.
   */
  public function test_subscribe_method()
  {
    $factory = new Catharsis\Web\VkontakteWidgetsFactory();
    $this->assertNotSame($factory->subscribe(), $factory->subscribe());
    $this->assertInstanceOf("Catharsis\Web\VkontakteSubscriptionWidget", $factory->subscribe());
  }

  /**
   ** Performs testing of {@link Catharsis\Web\VkontakteWidgetsFactory::video()} method.
   */
  public function test_video_method()
  {
    $factory = new Catharsis\Web\VkontakteWidgetsFactory();
    $this->assertNotSame($factory->video(), $factory->video());
    $this->assertInstanceOf("Catharsis\Web\VkontakteVideoWidget", $factory->video());
  }
}