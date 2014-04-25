<?php

/**
 * Tests set for class {@link Catharsis\Web\LiveJournalWidgetsFactory}
 */
final class LiveJournalWidgetsFactoryTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of {@link Catharsis\Web\LiveJournalWidgetsFactory::likeButton()} method.
     */
    public function test_likeButton_method()
    {
        $factory = new Catharsis\Web\LiveJournalWidgetsFactory();
        $this->assertNotSame($factory->likeButton(), $factory->likeButton());
        $this->assertInstanceOf("Catharsis\Web\LiveJournalLikeButtonWidget",
            $factory->likeButton());
    }

    /**
     * Performs testing of {@link Catharsis\Web\LiveJournalWidgetsFactory::repostButton()} method.
     */
    public function test_repostButton_method()
    {
        $factory = new Catharsis\Web\LiveJournalWidgetsFactory();
        $this->assertNotSame($factory->repostButton(), $factory->repostButton());
        $this->assertInstanceOf("Catharsis\Web\LiveJournalRepostButtonWidget",
                                $factory->repostButton());
    }
}

?>
