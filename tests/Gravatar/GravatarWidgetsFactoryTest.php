<?php

/**
 * Tests set for class {@link Catharsis\Web\GravatarWidgetsFactory}
 */
final class GravatarWidgetsFactoryTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of {@link Catharsis\Web\GravatarWidgetsFactory::imageUrl()} method.
     */
    public function test_imageUrl_method()
    {
        $factory = new Catharsis\Web\GravatarWidgetsFactory();
        $this->assertNotSame($factory->imageUrl(), $factory->imageUrl());
        $this->assertInstanceOf("Catharsis\Web\GravatarImageUrlWidget", $factory->imageUrl());
    }

    /**
     * Performs testing of {@link Catharsis\Web\GravatarWidgetsFactory::profileUrl()} method.
     */
    public function test_profileUrl_method()
    {
        $factory = new Catharsis\Web\GravatarWidgetsFactory();
        $this->assertNotSame($factory->profileUrl(), $factory->profileUrl());
        $this->assertInstanceOf("Catharsis\Web\GravatarProfileUrlWidget", $factory->profileUrl());
    }
}

?>
