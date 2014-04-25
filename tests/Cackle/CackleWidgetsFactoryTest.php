<?php

/**
 * Tests set for class {@link Catharsis\Web\CackleWidgetsFactory}
 */
final class CackleWidgetsFactoryTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of {@link Catharsis\Web\CackleWidgetsFactory::commentsCount()} method.
     */
    public function test_commentsCount_method()
    {
        $factory = new Catharsis\Web\CackleWidgetsFactory();
        $this->assertNotSame($factory->commentsCount(), $factory->commentsCount());
        $this->assertInstanceOf("Catharsis\Web\CackleCommentsCountWidget", $factory->commentsCount());
    }

    /**
     * Performs testing of {@link Catharsis\Web\CackleWidgetsFactory::comments()} method.
     */
    public function test_comments_method()
    {
        $factory = new Catharsis\Web\CackleWidgetsFactory();
        $this->assertNotSame($factory->comments(), $factory->comments());
        $this->assertInstanceOf("Catharsis\Web\CackleCommentsWidget", $factory->comments());
    }

    /**
     * Performs testing of {@link Catharsis\Web\CackleWidgetsFactory::latestComments()} method.
     */
    public function test_latestComments_method()
    {
        $factory = new Catharsis\Web\CackleWidgetsFactory();
        $this->assertNotSame($factory->latestComments(), $factory->latestComments());
        $this->assertInstanceOf("Catharsis\Web\CackleLatestCommentsWidget", $factory->latestComments());
    }

    /**
     * Performs testing of {@link Catharsis\Web\CackleWidgetsFactory::login()} method.
     */
    public function test_login_method()
    {
        $factory = new Catharsis\Web\CackleWidgetsFactory();
        $this->assertNotSame($factory->login(), $factory->login());
        $this->assertInstanceOf("Catharsis\Web\CackleLoginWidget", $factory->login());
    }
}

?>
