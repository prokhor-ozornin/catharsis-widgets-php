<?php

/**
 * Tests set for class {@link Catharsis\Web\TumblrWidgetsFactory}
 */
final class TumblrWidgetsFactoryTest extends PHPUnit_Framework_TestCase
{
    /**
     * * Performs testing of {@link Catharsis\Web\TumblrWidgetsFactory::followButton()} method.
     */
    public function test_followButton_method()
    {
        $factory = new Catharsis\Web\TumblrWidgetsFactory();
        $this->assertNotSame($factory->followButton(), $factory->followButton());
        $this->assertInstanceOf("Catharsis\Web\TumblrFollowButtonWidget", $factory->followButton());
    }

    /**
     * * Performs testing of {@link Catharsis\Web\TumblrWidgetsFactory::shareButton()} method.
     */
    public function test_shareButton_method()
    {
        $factory = new Catharsis\Web\TumblrWidgetsFactory();
        $this->assertNotSame($factory->shareButton(), $factory->shareButton());
        $this->assertInstanceOf("Catharsis\Web\TumblrShareButtonWidget", $factory->shareButton());
    }
}

?>
