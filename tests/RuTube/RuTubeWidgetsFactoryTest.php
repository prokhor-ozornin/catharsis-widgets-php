<?php

/**
 * Tests set for class {@link Catharsis\Web\RuTubeWidgetsFactory}
 */
final class RuTubeWidgetsFactoryTest extends PHPUnit_Framework_TestCase
{
  /**
   * Performs testing of {@link Catharsis\Web\RuTubeWidgetsFactory::video()} method.
   */
  public function test_video_method()
  {
    $factory = new Catharsis\Web\RuTubeWidgetsFactory();
    $this->assertNotSame($factory->video(), $factory->video());
    $this->assertInstanceOf("Catharsis\Web\RuTubeVideoWidget", $factory->video());
  }
}