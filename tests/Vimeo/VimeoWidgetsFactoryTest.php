<?php

/**
 * Tests set for class {@link Catharsis\Web\VimeoWidgetsFactory}
 */
final class VimeoWidgetsFactoryTest extends PHPUnit_Framework_TestCase
{
    /**
     * * Performs testing of {@link Catharsis\Web\VimeoWidgetsFactory::video()} method.
     */
    public function test_video_method()
    {
        $factory = new Catharsis\Web\VimeoWidgetsFactory();
        $this->assertNotSame($factory->video(), $factory->video());
        $this->assertInstanceOf("Catharsis\Web\VimeoVideoWidget", $factory->video());
    }
}

?>
