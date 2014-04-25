<?php

/**
 * Tests set for trait {@link Catharsis\Web\SoundCloudWidgetsTrait}
 */
final class SoundCloudWidgetsTraitTest extends PHPUnit_Framework_TestCase
{
    use Catharsis\Web\SoundCloudWidgetsTrait;

    /**
     * * Performs testing of {@link Catharsis\Web\SoundcloudWidgetsTrait::soundcloud()} method.
     */
    public function test_soundcloud_method()
    {
        $this->assertAttributeEmpty("_soundcloud", get_class());
        $this->assertSame(self::soundcloud(), self::soundcloud());
        $this->assertInstanceOf("Catharsis\Web\SoundCloudWidgetsFactory", self::soundcloud());
    }
}

?>
