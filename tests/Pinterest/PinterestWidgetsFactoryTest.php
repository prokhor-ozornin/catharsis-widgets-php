<?php

/**
 * Tests set for class {@link Catharsis\Web\PinterestWidgetsFactory}
 */
final class PinterestWidgetsFactoryTest extends PHPUnit_Framework_TestCase
{
  /**
   ** Performs testing of {@link Catharsis\Web\PinterestWidgetsFactory::board()} method.
   */
  public function test_board_method()
  {
    $factory = new Catharsis\Web\PinterestWidgetsFactory();
    $this->assertNotSame($factory->board(), $factory->board());
    $this->assertInstanceOf("Catharsis\Web\PinterestBoardWidget", $factory->board());
  }

  /**
   ** Performs testing of {@link Catharsis\Web\PinterestWidgetsFactory::follow_button()} method.
   */
  public function test_follow_button_method()
  {
    $factory = new Catharsis\Web\PinterestWidgetsFactory();
    $this->assertNotSame($factory->follow_button(), $factory->follow_button());
    $this->assertInstanceOf("Catharsis\Web\PinterestFollowButtonWidget", $factory->follow_button());
  }

  /**
   ** Performs testing of {@link Catharsis\Web\PinterestWidgetsFactory::pin_it_button()} method.
   */
  public function test_pin_it_button_method()
  {
    $factory = new Catharsis\Web\PinterestWidgetsFactory();
    $this->assertNotSame($factory->pin_it_button(), $factory->pin_it_button());
    $this->assertInstanceOf("Catharsis\Web\PinterestPinItButtonWidget", $factory->pin_it_button());
  }

  /**
   ** Performs testing of {@link Catharsis\Web\PinterestWidgetsFactory::pin()} method.
   */
  public function test_pin_method()
  {
    $factory = new Catharsis\Web\PinterestWidgetsFactory();
    $this->assertNotSame($factory->pin(), $factory->pin());
    $this->assertInstanceOf("Catharsis\Web\PinterestPinWidget", $factory->pin());
  }

  /**
   ** Performs testing of {@link Catharsis\Web\PinterestWidgetsFactory::profile()} method.
   */
  public function test_profile_method()
  {
    $factory = new Catharsis\Web\PinterestWidgetsFactory();
    $this->assertNotSame($factory->profile(), $factory->profile());
    $this->assertInstanceOf("Catharsis\Web\PinterestProfileWidget", $factory->profile());
  }
}