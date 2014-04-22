<?php

/**
 * Tests set for class {@link Catharsis\Web\AddThisWidgetsFactory}
 */
final class AddThisWidgetsFactoryTest extends PHPUnit_Framework_TestCase
{
  /**
   * Performs testing of {@link Catharsis\Web\AddThisWidgetsFactory::follow_buttons()} method.
   */
  public function test_follow_buttons_method()
  {
    $factory = new Catharsis\Web\AddThisWidgetsFactory();
    $this->assertNotSame($factory->follow_buttons(), $factory->follow_buttons());
    $this->assertInstanceOf("Catharsis\Web\AddThisFollowButtonWidget", $factory->follow_buttons());
  }

  /**
   * Performs testing of {@link Catharsis\Web\AddThisWidgetsFactory::share_buttons()} method.
   */
  public function test_share_buttons_method()
  {
    $factory = new Catharsis\Web\AddThisWidgetsFactory();
    $this->assertNotSame($factory->share_buttons(), $factory->share_buttons());
    $this->assertInstanceOf("Catharsis\Web\AddThisShareButtonsWidget", $factory->share_buttons());
  }

  /**
   * Performs testing of {@link Catharsis\Web\AddThisWidgetsFactory::smart_layers()} method.
   */
  public function test_smart_layers_method()
  {
    $factory = new Catharsis\Web\AddThisWidgetsFactory();
    $this->assertNotSame($factory->smart_layers(), $factory->smart_layers());
    $this->assertInstanceOf("Catharsis\Web\AddThisSmartLayersWidget", $factory->smart_layers());
  }

  /**
   * Performs testing of {@link Catharsis\Web\AddThisWidgetsFactory::trending_content()} method.
   */
  public function test_trending_content_method()
  {
    $factory = new Catharsis\Web\AddThisWidgetsFactory();
    $this->assertNotSame($factory->trending_content(), $factory->trending_content());
    $this->assertInstanceOf("Catharsis\Web\AddThisTrendingContentWidget", $factory->trending_content());
  }

  /**
   * Performs testing of {@link Catharsis\Web\AddThisWidgetsFactory::welcome_bar()} method.
   */
  public function test_welcome_bar_method()
  {
    $factory = new Catharsis\Web\AddThisWidgetsFactory();
    $this->assertNotSame($factory->welcome_bar(), $factory->welcome_bar());
    $this->assertInstanceOf("Catharsis\Web\AddThisWelcomeBarWidget", $factory->welcome_bar());
  }
}