<?php

/**
 * Tests set for class {@link Catharsis\Web\SoundCloudWidgetsFactory}
 */
final class SoundCloudWidgetsFactoryTest extends PHPUnit_Framework_TestCase
{
    /**
     * * Performs testing of {@link Catharsis\Web\SoundcloudWidgetsFactory::profileIcon()} method.
     */
    public function test_profileIcon_method()
    {
        $factory = new Catharsis\Web\SoundCloudWidgetsFactory();
        $this->assertNotSame($factory->profileIcon(), $factory->profileIcon());
        $this->assertInstanceOf("Catharsis\Web\SoundCloudProfileIconWidget", $factory->profileIcon());
    }
}

?>
