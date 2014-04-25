<?php

/**
 * Tests set for class {@link Catharsis\Web\CackleCommentsCountWidget}
 */
final class CackleCommentsCountWidgetTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of class constructor(s).
     * @link Catharsis\Web\CackleCommentsCountWidget::__construct()
     */
    public function test_constructors()
    {
        $widget = new Catharsis\Web\CackleCommentsCountWidget();
        $this->assertAttributeEmpty("_account", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\CackleCommentsCountWidget::account(string $account)} method.
     */
    public function test_account_method()
    {
        $widget = new Catharsis\Web\CackleCommentsCountWidget();
        $this->assertAttributeEmpty("_account", $widget);
        $this->assertSame($widget, $widget->account("account"));
        $this->assertAttributeEquals("account", "_account", $widget);
    }

    /**
     * Performs testing of {@link Catharsis\Web\CackleCommentsCountWidget::__toString()} method.
     */
    public function test_toString_method()
    {
        $widget = new Catharsis\Web\CackleCommentsCountWidget();
        $this->assertEmpty((string) $widget);

        $widget = new Catharsis\Web\CackleCommentsCountWidget();
        $this->assertContains('{"widget":"CommentCount","id":"account"}', (string) $widget->account("account"));
    }
}

?>
