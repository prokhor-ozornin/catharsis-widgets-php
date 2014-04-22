<?php

/**
 * Tests set for class {@link Catharsis\Web\FacebookWidgetsFactory}
 */
final class FacebookWidgetsFactoryTest extends PHPUnit_Framework_TestCase
{
  /**
   * Performs testing of {@link Catharsis\Web\FacebookWidgetsFactory::activity_feed()} method.
   */
  public function test_activity_feed_method()
  {
    $factory = new Catharsis\Web\FacebookWidgetsFactory();
    $this->assertNotSame($factory->activity_feed(), $factory->activity_feed());
    $this->assertInstanceOf("Catharsis\Web\FacebookActivityFeedWidget", $factory->activity_feed());
  }

  /**
   * Performs testing of {@link Catharsis\Web\FacebookWidgetsFactory::comments()} method.
   */
  public function test_comments_method()
  {
    $factory = new Catharsis\Web\FacebookWidgetsFactory();
    $this->assertNotSame($factory->comments(), $factory->comments());
    $this->assertInstanceOf("Catharsis\Web\FacebookCommentsWidget", $factory->comments());
  }

  /**
   * Performs testing of {@link Catharsis\Web\FacebookWidgetsFactory::facepile()} method.
   */
  public function test_facepile_method()
  {
    $factory = new Catharsis\Web\FacebookWidgetsFactory();
    $this->assertNotSame($factory->facepile(), $factory->facepile());
    $this->assertInstanceOf("Catharsis\Web\FacebookFacepileWidget", $factory->facepile());
  }

  /**
   * Performs testing of {@link Catharsis\Web\FacebookWidgetsFactory::follow()} method.
   */
  public function test_follow_method()
  {
    $factory = new Catharsis\Web\FacebookWidgetsFactory();
    $this->assertNotSame($factory->follow(), $factory->follow());
    $this->assertInstanceOf("Catharsis\Web\FacebookFollowButtonWidget", $factory->follow());
  }

  /**
   * Performs testing of {@link Catharsis\Web\FacebookWidgetsFactory::initialize()} method.
   */
  public function test_initialize_method()
  {
    $factory = new Catharsis\Web\FacebookWidgetsFactory();
    $this->assertNotSame($factory->initialize(), $factory->initialize());
    $this->assertInstanceOf("Catharsis\Web\FacebookInitWidget", $factory->initialize());
  }

  /**
   * Performs testing of {@link Catharsis\Web\FacebookWidgetsFactory::like()} method.
   */
  public function test_like_method()
  {
    $factory = new Catharsis\Web\FacebookWidgetsFactory();
    $this->assertNotSame($factory->like(), $factory->like());
    $this->assertInstanceOf("Catharsis\Web\FacebookLikeButtonWidget", $factory->like());
  }

  /**
   * Performs testing of {@link Catharsis\Web\FacebookWidgetsFactory::like_box()} method.
   */
  public function test_like_box_method()
  {
    $factory = new Catharsis\Web\FacebookWidgetsFactory();
    $this->assertNotSame($factory->like_box(), $factory->like_box());
    $this->assertInstanceOf("Catharsis\Web\FacebookLikeBoxWidget", $factory->like_box());
  }

  /**
   * Performs testing of {@link Catharsis\Web\FacebookWidgetsFactory::post()} method.
   */
  public function test_post_method()
  {
    $factory = new Catharsis\Web\FacebookWidgetsFactory();
    $this->assertNotSame($factory->post(), $factory->post());
    $this->assertInstanceOf("Catharsis\Web\FacebookPostWidget", $factory->post());
  }

  /**
   * Performs testing of {@link Catharsis\Web\FacebookWidgetsFactory::recommendations_feed()} method.
   */
  public function test_recommendations_feed_method()
  {
    $factory = new Catharsis\Web\FacebookWidgetsFactory();
    $this->assertNotSame($factory->recommendations_feed(), $factory->recommendations_feed());
    $this->assertInstanceOf("Catharsis\Web\FacebookRecommendationsFeedWidget", $factory->recommendations_feed());
  }

  /**
   * Performs testing of {@link Catharsis\Web\FacebookWidgetsFactory::send()} method.
   */
  public function test_send_method()
  {
    $factory = new Catharsis\Web\FacebookWidgetsFactory();
    $this->assertNotSame($factory->send(), $factory->send());
    $this->assertInstanceOf("Catharsis\Web\FacebookSendButtonWidget", $factory->send());
  }

  /**
   * Performs testing of {@link Catharsis\Web\FacebookWidgetsFactory::video()} method.
   */
  public function test_video_method()
  {
    $factory = new Catharsis\Web\FacebookWidgetsFactory();
    $this->assertNotSame($factory->video(), $factory->video());
    $this->assertInstanceOf("Catharsis\Web\FacebookVideoWidget", $factory->video());
  }
}