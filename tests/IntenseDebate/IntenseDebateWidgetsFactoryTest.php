<?php

/**
 * Tests set for class {@link Catharsis\Web\IntenseDebateWidgetsFactory}
 */
final class IntenseDebateWidgetsFactoryTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of {@link Catharsis\Web\IntenseDebateWidgetsFactory::comments()} method.
     */
    public function test_comments_method()
    {
        $factory = new Catharsis\Web\IntenseDebateWidgetsFactory();
        $this->assertNotSame($factory->comments(), $factory->comments());
        $this->assertInstanceOf("Catharsis\Web\IntenseDebateCommentsWidget", $factory->comments());
    }

    /**
     * Performs testing of {@link Catharsis\Web\IntenseDebateWidgetsFactory::link()} method.
     */
    public function test_link_method()
    {
        $factory = new Catharsis\Web\IntenseDebateWidgetsFactory();
        $this->assertNotSame($factory->link(), $factory->link());
        $this->assertInstanceOf("Catharsis\Web\IntenseDebateLinkWidget", $factory->link());
    }
}

?>
