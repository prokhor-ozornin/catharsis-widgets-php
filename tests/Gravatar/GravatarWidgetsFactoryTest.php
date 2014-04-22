<?php

/**
 * Tests set for class {@link Catharsis\Web\GravatarWidgetsFactory}
 */
final class GravatarWidgetsFactoryTest extends PHPUnit_Framework_TestCase
{
  /**
   * Performs testing of {@link Catharsis\Web\GravatarWidgetsFactory::image_url()} method.
   */
  public function test_image_url_method()
  {
    $factory = new Catharsis\Web\GravatarWidgetsFactory();
    $this->assertNotSame($factory->image_url(), $factory->image_url());
    $this->assertInstanceOf("Catharsis\Web\GravatarImageUrlWidget", $factory->image_url());
  }

  /**
   * Performs testing of {@link Catharsis\Web\GravatarWidgetsFactory::profile_url()} method.
   */
  public function test_profile_url_method()
  {
    $factory = new Catharsis\Web\GravatarWidgetsFactory();
    $this->assertNotSame($factory->profile_url(), $factory->profile_url());
    $this->assertInstanceOf("Catharsis\Web\GravatarProfileUrlWidget", $factory->profile_url());
  }
}