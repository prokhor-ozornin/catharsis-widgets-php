<?php

/**
 * Tests set for class {@link Catharsis\Web\TwitterWidgetsFactory}
 */
final class TwitterWidgetsFactoryTest extends PHPUnit_Framework_TestCase
{
    /**
     * * Performs testing of {@link Catharsis\Web\TwitterWidgetsFactory::followButton()} method.
     */
    public function test_followButton_method()
    {
        $factory = new Catharsis\Web\TwitterWidgetsFactory();
        $this->assertNotSame($factory->followButton(), $factory->followButton());
        $this->assertInstanceOf("Catharsis\Web\TwitterFollowButtonWidget", $factory->followButton());
    }

    /**
     * * Performs testing of {@link Catharsis\Web\TwitterWidgetsFactory::tweetButton()} method.
     */
    public function test_tweetButton_method()
    {
        $factory = new Catharsis\Web\TwitterWidgetsFactory();
        $this->assertNotSame($factory->tweetButton(), $factory->tweetButton());
        $this->assertInstanceOf("Catharsis\Web\TwitterTweetButtonWidget", $factory->tweetButton());
    }
}

?>
