<?php

/**
 * Tests set for class {@link Catharsis\Web\VkontakteWidgetsFactory}
 */
final class VkontakteWidgetsFactoryTest extends PHPUnit_Framework_TestCase
{
    /**
     * * Performs testing of {@link Catharsis\Web\VkontakteWidgetsFactory::comments()} method.
     */
    public function test_comments_method()
    {
        $factory = new Catharsis\Web\VkontakteWidgetsFactory();
        $this->assertNotSame($factory->comments(), $factory->comments());
        $this->assertInstanceOf("Catharsis\Web\VkontakteCommentsWidget", $factory->comments());
    }

    /**
     * * Performs testing of {@link Catharsis\Web\VkontakteWidgetsFactory::community()} method.
     */
    public function test_community_method()
    {
        $factory = new Catharsis\Web\VkontakteWidgetsFactory();
        $this->assertNotSame($factory->community(), $factory->community());
        $this->assertInstanceOf("Catharsis\Web\VkontakteCommunityWidget", $factory->community());
    }

    /**
     * * Performs testing of {@link Catharsis\Web\VkontakteWidgetsFactory::initialize()} method.
     */
    public function test_initialize_method()
    {
        $factory = new Catharsis\Web\VkontakteWidgetsFactory();
        $this->assertNotSame($factory->initialize(), $factory->initialize());
        $this->assertInstanceOf("Catharsis\Web\VkontakteInitializationWidget", $factory->initialize());
    }

    /**
     * * Performs testing of {@link Catharsis\Web\VkontakteWidgetsFactory::likeButton()} method.
     */
    public function test_likeButton_method()
    {
        $factory = new Catharsis\Web\VkontakteWidgetsFactory();
        $this->assertNotSame($factory->likeButton(), $factory->likeButton());
        $this->assertInstanceOf("Catharsis\Web\VkontakteLikeButtonWidget", $factory->likeButton());
    }

    /**
     * * Performs testing of {@link Catharsis\Web\VkontakteWidgetsFactory::subscription()} method.
     */
    public function test_subscription_method()
    {
        $factory = new Catharsis\Web\VkontakteWidgetsFactory();
        $this->assertNotSame($factory->subscription(), $factory->subscription());
        $this->assertInstanceOf("Catharsis\Web\VkontakteSubscriptionWidget", $factory->subscription());
    }

    /**
     * * Performs testing of {@link Catharsis\Web\VkontakteWidgetsFactory::video()} method.
     */
    public function test_video_method()
    {
        $factory = new Catharsis\Web\VkontakteWidgetsFactory();
        $this->assertNotSame($factory->video(), $factory->video());
        $this->assertInstanceOf("Catharsis\Web\VkontakteVideoWidget", $factory->video());
    }
}

?>
