<?php
/**
 * PHP version 5
 *
 * @category HTML
 * @package  WebWidgets
 * @author   Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @license  LGPL https://www.gnu.org/licenses/lgpl.html
 * @link     http://pear.php.net/package/HTML_WebWidgets
 */

/**
 * Tests set for class {@link \Catharsis\Web\YandexSharePanelWidget}
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class YandexSharePanelWidgetTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of class constructor(s).
     * @link \Catharsis\Web\YandexSharePanelWidget::__construct()
     * @return void
     */
    public function testConstructors()
    {
        $widget = new Catharsis\Web\YandexSharePanelWidget();
        $this->assertEmpty($widget->getLanguage());
        $this->assertEquals(Catharsis\Web\YandexSharePanelLayout::BUTTON, $widget->getLayout());
        $this->assertEquals(
            array(
                'yaru',
                'vkontakte',
                'facebook',
                'twitter',
                'odnoklassniki',
                'moimir',
                'lj',
                'friendfeed',
                'moikrug',
                'gplus',
                'pinterest',
                'surfingbird'),
            $widget->getServices()
        );
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\YandexSharePanelWidget::language(string $language)}
     * method.
     * @return void
     */
    public function testLanguageMethod()
    {
        $widget = new Catharsis\Web\YandexSharePanelWidget();
        $this->assertEmpty($widget->getLanguage());
        $this->assertSame($widget, $widget->language('language'));
        $this->assertEquals('language', $widget->getLanguage());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\YandexSharePanelWidget::layout(string $layout)}
     * method.
     * @return void
     */
    public function testLayoutMethod()
    {
        $widget = new Catharsis\Web\YandexSharePanelWidget();
        $this->assertEquals(Catharsis\Web\YandexSharePanelLayout::BUTTON, $widget->getLayout());
        $this->assertSame($widget, $widget->layout('layout'));
        $this->assertEquals('layout', $widget->getLayout());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\YandexSharePanelWidget::services(array $services)}
     * method.
     * @return void
     */
    public function testServicesMethod()
    {
        $widget = new Catharsis\Web\YandexSharePanelWidget();
        $this->assertEquals(
            array(
                'yaru',
                'vkontakte',
                'facebook',
                'twitter',
                'odnoklassniki',
                'moimir',
                'lj',
                'friendfeed',
                'moikrug',
                'gplus',
                'pinterest',
                'surfingbird'),
            $widget->getServices()
        );
        $this->assertSame($widget, $widget->services(array('service')));
        $this->assertEquals(array('service'), $widget->getServices());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\YandexSharePanelWidget::__toString()}
     * method.
     * @return void
     */
    public function testToStringMethod()
    {
        $widget = new Catharsis\Web\YandexSharePanelWidget();
        $this->assertEquals(
            "<div class=\"yashare-auto-init\" data-yashareL10n=\"{$widget->userLanguage()}\" data-yashareQuickServices=\"yaru,vkontakte,facebook,twitter,odnoklassniki,moimir,lj,friendfeed,moikrug,gplus,pinterest,surfingbird\" data-yashareType=\"button\"></div>",
            (string) $widget
        );

        $widget = new Catharsis\Web\YandexSharePanelWidget();
        $this->assertEquals(
            '<div class="yashare-auto-init" data-yashareL10n="ru" data-yashareQuickServices="yaru" data-yashareType="link"></div>',
            (string) $widget
                ->services('yaru')
                ->layout(Catharsis\Web\YandexSharePanelLayout::LINK)
                ->language('ru')
        );
    }
}

?>
