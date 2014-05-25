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
 * Tests set for class {@link \Catharsis\Web\FacebookActivityFeedWidget}
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class FacebookActivityFeedWidgetTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of class constructor(s).
     * @link \Catharsis\Web\FacebookActivityFeedWidget::__construct()
     * @return void
     */
    public function testConstructors()
    {
        $widget = new Catharsis\Web\FacebookActivityFeedWidget();
        $this->assertEmpty($widget->getActions());
        $this->assertEmpty($widget->getAppId());
        $this->assertEmpty($widget->getColorScheme());
        $this->assertEmpty($widget->getDomain());
        $this->assertEmpty($widget->getHeader());
        $this->assertEmpty($widget->getHeight());
        $this->assertEmpty($widget->getLinkTarget());
        $this->assertEmpty($widget->getMaxAge());
        $this->assertEmpty($widget->getRecommendations());
        $this->assertEmpty($widget->getTrackLabel());
        $this->assertEmpty($widget->getWidth());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\FacebookActivityFeedWidget::actions(array $actions)}
     * method.
     * @return void
     */
    public function testActionsMethod()
    {
        $widget = new Catharsis\Web\FacebookActivityFeedWidget();
        $this->assertEmpty($widget->getActions());
        $this->assertSame($widget, $widget->actions(array('action')));
        $this->assertEquals(array('action'), $widget->getActions());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\FacebookActivityFeedWidget::appId(string $appId)}
     * method.
     * @return void
     */
    public function testAppIdMethod()
    {
        $widget = new Catharsis\Web\FacebookActivityFeedWidget();
        $this->assertEmpty($widget->getAppId());
        $this->assertSame($widget, $widget->appId('appId'));
        $this->assertEquals('appId', $widget->getAppId());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\FacebookActivityFeedWidget::colorScheme(string $colorScheme)}
     * method.
     * @return void
     */
    public function testColorSchemeMethod()
    {
        $widget = new Catharsis\Web\FacebookActivityFeedWidget();
        $this->assertEmpty($widget->getColorScheme());
        $this->assertSame($widget, $widget->colorScheme('colorScheme'));
        $this->assertEquals('colorScheme', $widget->getColorScheme());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\FacebookActivityFeedWidget::domain(string $domain)}
     * method.
     * @return void
     */
    public function testDomainMethod()
    {
        $widget = new Catharsis\Web\FacebookActivityFeedWidget();
        $this->assertEmpty($widget->getDomain());
        $this->assertSame($widget, $widget->domain('domain'));
        $this->assertEquals('domain', $widget->getDomain());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\FacebookActivityFeedWidget::header(boolean $show)}
     * method.
     * @return void
     */
    public function testHeaderMethod()
    {
        $widget = new Catharsis\Web\FacebookActivityFeedWidget();
        $this->assertEmpty($widget->getHeader());
        $this->assertSame($widget, $widget->header(true));
        $this->assertTrue($widget->getHeader());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\FacebookActivityFeedWidget::height(string $height)}
     * method.
     * @return void
     */
    public function testHeightMethod()
    {
        $widget = new Catharsis\Web\FacebookActivityFeedWidget();
        $this->assertEmpty($widget->getHeight());
        $this->assertSame($widget, $widget->height('height'));
        $this->assertEquals('height', $widget->getHeight());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\FacebookActivityFeedWidget::linkTarget(string $target)}
     * method.
     * @return void
     */
    public function testLinkTargetMethod()
    {
        $widget = new Catharsis\Web\FacebookActivityFeedWidget();
        $this->assertEmpty($widget->getLinkTarget());
        $this->assertSame($widget, $widget->linkTarget('linkTarget'));
        $this->assertEquals('linkTarget', $widget->getLinkTarget());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\FacebookActivityFeedWidget::maxAge(integer $maxAge)}
     * method.
     * @return void
     */
    public function testMaxAgeMethod()
    {
        $widget = new Catharsis\Web\FacebookActivityFeedWidget();
        $this->assertEmpty($widget->getMaxAge());
        $this->assertSame($widget, $widget->maxAge(1));
        $this->assertEquals(1, $widget->getMaxAge());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\FacebookActivityFeedWidget::recommendations(boolean $show)}
     * method.
     * @return void
     */
    public function testRecommendationsMethod()
    {
        $widget = new Catharsis\Web\FacebookActivityFeedWidget();
        $this->assertEmpty($widget->getRecommendations());
        $this->assertSame($widget, $widget->recommendations(true));
        $this->assertTrue($widget->getRecommendations());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\FacebookActivityFeedWidget::trackLabel(string $label)}
     * method.
     * @return void
     */
    public function testTrackLabelMethod()
    {
        $widget = new Catharsis\Web\FacebookActivityFeedWidget();
        $this->assertEmpty($widget->getTrackLabel());
        $this->assertSame($widget, $widget->trackLabel('trackLabel'));
        $this->assertEquals('trackLabel', $widget->getTrackLabel());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\FacebookActivityFeedWidget::width(string $width)}
     * method.
     * @return void
     */
    public function testWidthMethod()
    {
        $widget = new Catharsis\Web\FacebookActivityFeedWidget();
        $this->assertEmpty($widget->getWidth());
        $this->assertSame($widget, $widget->width('width'));
        $this->assertEquals('width', $widget->getWidth());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\FacebookActivityFeedWidget::__toString()}
     * method.
     * @return void
     */
    public function testToStringMethod()
    {
        $widget = new Catharsis\Web\FacebookActivityFeedWidget();
        $this->assertEquals('<div class="fb-activity"></div>', (string) $widget);

        $widget = new Catharsis\Web\FacebookActivityFeedWidget();
        $this->assertEquals(
            '<div class="fb-activity" data-action="actions" data-app-id="app_id" data-colorscheme="dark"'
            .' data-header="true" data-height="height" data-linktarget="link_target" data-max-age="1"'
            .' data-recommendations="true" data-ref="track_label" data-site="domain" data-width="width"></div>',
            (string) $widget
                ->domain('domain')
                ->appId('app_id')
                ->actions('actions')
                ->width('width')
                ->height('height')
                ->colorScheme(Catharsis\Web\FacebookColorScheme::DARK)
                ->header(true)
                ->linkTarget('link_target')
                ->maxAge(1)
                ->recommendations(true)
                ->trackLabel('track_label')
        );
    }
}

?>
