<?php

/**
 * Tests set for class {@link Catharsis\Web\PinterestWidgetsFactory}
 */
final class PinterestWidgetsFactoryTest extends PHPUnit_Framework_TestCase
{
    /**
     * * Performs testing of {@link Catharsis\Web\PinterestWidgetsFactory::board()} method.
     */
    public function test_board_method()
    {
        $factory = new Catharsis\Web\PinterestWidgetsFactory();
        $this->assertNotSame($factory->board(), $factory->board());
        $this->assertInstanceOf("Catharsis\Web\PinterestBoardWidget", $factory->board());
    }

    /**
     * * Performs testing of {@link Catharsis\Web\PinterestWidgetsFactory::followButton()} method.
     */
    public function test_followButton_method()
    {
        $factory = new Catharsis\Web\PinterestWidgetsFactory();
        $this->assertNotSame($factory->followButton(), $factory->followButton());
        $this->assertInstanceOf("Catharsis\Web\PinterestFollowButtonWidget", $factory->followButton());
    }

    /**
     * * Performs testing of {@link Catharsis\Web\PinterestWidgetsFactory::pinItButton()} method.
     */
    public function test_pinItButton_method()
    {
        $factory = new Catharsis\Web\PinterestWidgetsFactory();
        $this->assertNotSame($factory->pinItButton(), $factory->pinItButton());
        $this->assertInstanceOf("Catharsis\Web\PinterestPinItButtonWidget", $factory->pinItButton());
    }

    /**
     * * Performs testing of {@link Catharsis\Web\PinterestWidgetsFactory::pin()} method.
     */
    public function test_pin_method()
    {
        $factory = new Catharsis\Web\PinterestWidgetsFactory();
        $this->assertNotSame($factory->pin(), $factory->pin());
        $this->assertInstanceOf("Catharsis\Web\PinterestPinWidget", $factory->pin());
    }

    /**
     * * Performs testing of {@link Catharsis\Web\PinterestWidgetsFactory::profile()} method.
     */
    public function test_profile_method()
    {
        $factory = new Catharsis\Web\PinterestWidgetsFactory();
        $this->assertNotSame($factory->profile(), $factory->profile());
        $this->assertInstanceOf("Catharsis\Web\PinterestProfileWidget", $factory->profile());
    }
}

?>
