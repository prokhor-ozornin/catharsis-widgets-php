<?php

/**
 * Tests set for class {@link Catharsis\Web\FacebookWidgetsFactory}
 */
final class FacebookWidgetsFactoryTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of {@link Catharsis\Web\FacebookWidgetsFactory::activityFeed()} method.
     */
    public function test_activityFeed_method()
    {
        $factory = new Catharsis\Web\FacebookWidgetsFactory();

        $this->assertNotSame($factory->activityFeed(),
                             $factory->activityFeed());

        $this->assertInstanceOf("Catharsis\Web\FacebookActivityFeedWidget",
                                $factory->activityFeed());
    }

    /**
     * Performs testing of {@link Catharsis\Web\FacebookWidgetsFactory::comments()} method.
     */
    public function test_comments_method()
    {
        $factory = new Catharsis\Web\FacebookWidgetsFactory();

        $this->assertNotSame($factory->comments(),
                             $factory->comments());

        $this->assertInstanceOf("Catharsis\Web\FacebookCommentsWidget",
                                $factory->comments());
    }

    /**
     * Performs testing of {@link Catharsis\Web\FacebookWidgetsFactory::facepile()} method.
     */
    public function test_facepile_method()
    {
        $factory = new Catharsis\Web\FacebookWidgetsFactory();

        $this->assertNotSame($factory->facepile(),
                             $factory->facepile());

        $this->assertInstanceOf("Catharsis\Web\FacebookFacepileWidget",
                                $factory->facepile());
    }

    /**
     * Performs testing of {@link Catharsis\Web\FacebookWidgetsFactory::followButton()} method.
     */
    public function test_followButton_method()
    {
        $factory = new Catharsis\Web\FacebookWidgetsFactory();

        $this->assertNotSame($factory->followButton(),
                             $factory->followButton());

        $this->assertInstanceOf("Catharsis\Web\FacebookFollowButtonWidget",
                                $factory->followButton());
    }

    /**
     * Performs testing of {@link Catharsis\Web\FacebookWidgetsFactory::initialize()} method.
     */
    public function test_initialize_method()
    {
        $factory = new Catharsis\Web\FacebookWidgetsFactory();

        $this->assertNotSame($factory->initialize(),
                             $factory->initialize());

        $this->assertInstanceOf("Catharsis\Web\FacebookInitializationWidget",
                                $factory->initialize());
    }

    /**
     * Performs testing of {@link Catharsis\Web\FacebookWidgetsFactory::likeButton()} method.
     */
    public function test_likeButton_method()
    {
        $factory = new Catharsis\Web\FacebookWidgetsFactory();

        $this->assertNotSame($factory->likeButton(),
                             $factory->likeButton());

        $this->assertInstanceOf("Catharsis\Web\FacebookLikeButtonWidget",
                                $factory->likeButton());
    }

    /**
     * Performs testing of {@link Catharsis\Web\FacebookWidgetsFactory::likeBox()} method.
     */
    public function test_likeBox_method()
    {
        $factory = new Catharsis\Web\FacebookWidgetsFactory();

        $this->assertNotSame($factory->likeBox(),
                             $factory->likeBox());

        $this->assertInstanceOf("Catharsis\Web\FacebookLikeBoxWidget",
                                $factory->likeBox());
    }

    /**
     * Performs testing of {@link Catharsis\Web\FacebookWidgetsFactory::post()} method.
     */
    public function test_post_method()
    {
        $factory = new Catharsis\Web\FacebookWidgetsFactory();

        $this->assertNotSame($factory->post(),
                             $factory->post());

        $this->assertInstanceOf("Catharsis\Web\FacebookPostWidget",
                                $factory->post());
    }

    /**
     * Performs testing of {@link Catharsis\Web\FacebookWidgetsFactory::recommendationsFeed()} method.
     */
    public function test_recommendationsFeed_method()
    {
        $factory = new Catharsis\Web\FacebookWidgetsFactory();

        $this->assertNotSame($factory->recommendationsFeed(),
                             $factory->recommendationsFeed());

        $this->assertInstanceOf("Catharsis\Web\FacebookRecommendationsFeedWidget",
                                $factory->recommendationsFeed());
    }

    /**
     * Performs testing of {@link Catharsis\Web\FacebookWidgetsFactory::sendButton()} method.
     */
    public function test_sendButton_method()
    {
        $factory = new Catharsis\Web\FacebookWidgetsFactory();

        $this->assertNotSame($factory->sendButton(),
                             $factory->sendButton());

        $this->assertInstanceOf("Catharsis\Web\FacebookSendButtonWidget",
                                $factory->sendButton());
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

?>
