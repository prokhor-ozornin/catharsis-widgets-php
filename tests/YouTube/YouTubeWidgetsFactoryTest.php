<?php

/**
 * Tests set for class {@link Catharsis\Web\YouTubeWidgetsFactory}
 */
final class YouTubeWidgetsFactoryTest extends PHPUnit_Framework_TestCase
{
  /**
   ** Performs testing of {@link Catharsis\Web\YouTubeWidgetsFactory::video()} method.
   */
  public function test_video_method()
  {
    $factory = new Catharsis\Web\YouTubeWidgetsFactory();
    $this->assertNotSame($factory->video(), $factory->video());
    $this->assertInstanceOf("Catharsis\Web\YouTubeVideoWidget", $factory->video());
  }
}