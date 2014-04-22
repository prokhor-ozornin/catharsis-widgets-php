<?php

/**
 * Tests set for class {@link Catharsis\Web\SoundCloudWidgetsFactory}
 */
final class SoundCloudWidgetsFactoryTest extends PHPUnit_Framework_TestCase
{
  /**
   ** Performs testing of {@link Catharsis\Web\SoundcloudWidgetsFactory::profile_icon()} method.
   */
  public function test_profile_icon_method()
  {
    $factory = new Catharsis\Web\SoundCloudWidgetsFactory();
    $this->assertNotSame($factory->profile_icon(), $factory->profile_icon());
    $this->assertInstanceOf("Catharsis\Web\SoundCloudProfileIconWidget", $factory->profile_icon());
  }
}