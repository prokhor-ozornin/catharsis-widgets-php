<?php

/**
 * Tests set for class {@link Catharsis\Web\YandexSharePanelWidget}
 */
final class YandexSharePanelWidgetTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of class constructor(s).
     * @link Catharsis\Web\YandexSharePanelWidget::__construct()
     */
    public function test_constructors()
    {
        $widget = new Catharsis\Web\YandexSharePanelWidget();
        $this->assertAttributeEmpty("_language", $widget);
        $this->assertAttributeEquals(Catharsis\Web\YandexSharePanelLayout::Button, "_layout", $widget);
        $this->assertAttributeEquals(array(
            "yaru",
            "vkontakte",
            "facebook",
            "twitter",
            "odnoklassniki",
            "moimir",
            "lj",
            "friendfeed",
            "moikrug",
            "gplus",
            "pinterest",
            "surfingbird"),
        "_services", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\YandexSharePanelWidget::language(string $language)} method.
     */
    public function test_language_method()
    {
        $widget = new Catharsis\Web\YandexSharePanelWidget();
        $this->assertAttributeEmpty("_language", $widget);
        $this->assertSame($widget, $widget->language("language"));
        $this->assertAttributeEquals("language", "_language", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\YandexSharePanelWidget::layout(string $layout)} method.
     */
    public function test_layout_method()
    {
        $widget = new Catharsis\Web\YandexSharePanelWidget();
        $this->assertAttributeEquals(Catharsis\Web\YandexSharePanelLayout::Button, "_layout", $widget);
        $this->assertSame($widget, $widget->layout("layout"));
        $this->assertAttributeEquals("layout", "_layout", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\YandexSharePanelWidget::services(array $services)} method.
     */
    public function test_services_method()
    {
        $widget = new Catharsis\Web\YandexSharePanelWidget();
        $this->assertAttributeEquals(array(
            "yaru",
            "vkontakte",
            "facebook",
            "twitter",
            "odnoklassniki",
            "moimir",
            "lj",
            "friendfeed",
            "moikrug",
            "gplus",
            "pinterest",
            "surfingbird"),
        "_services", $widget);
        $this->assertSame($widget, $widget->services(array("service")));
        $this->assertAttributeEquals(array("service"), "_services", $widget);
    }

    /**
     * * Performs testing of {@link Catharsis\Web\YandexSharePanelWidget::__toString()} method.
     */
    public function test_toString_method()
    {
        $widget = new Catharsis\Web\YandexSharePanelWidget();
        $this->assertEquals("<div class=\"yashare-auto-init\" data-yashareL10n=\"{$widget->userLanguage()}\" data-yashareQuickServices=\"yaru,vkontakte,facebook,twitter,odnoklassniki,moimir,lj,friendfeed,moikrug,gplus,pinterest,surfingbird\" data-yashareType=\"button\"></div>",
                            (string) $widget);

        $widget = new Catharsis\Web\YandexSharePanelWidget();
        $this->assertEquals('<div class="yashare-auto-init" data-yashareL10n="ru" data-yashareQuickServices="yaru" data-yashareType="link"></div>',
                            (string) $widget->services("yaru")->layout(Catharsis\Web\YandexSharePanelLayout::Link)->language("ru"));
    }
}

?>
