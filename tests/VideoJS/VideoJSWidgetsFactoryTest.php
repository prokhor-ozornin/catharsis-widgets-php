<?php

/**
 * Tests set for class {@link Catharsis\Web\VideoJSWidgetsFactory}
 */
final class VideoJSWidgetsFactoryTest extends PHPUnit_Framework_TestCase
{
    /**
     * * Performs testing of {@link Catharsis\Web\VideoJSWidgetsFactory::player()} method.
     */
    public function test_player_method()
    {
        $factory = new Catharsis\Web\VideoJSWidgetsFactory();
        $this->assertNotSame($factory->player(), $factory->player());
        $this->assertInstanceOf("Catharsis\Web\VideoJSPlayerWidget", $factory->player());
    }
}

?>
