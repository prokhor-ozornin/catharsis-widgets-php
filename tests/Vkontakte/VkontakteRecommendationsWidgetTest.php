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
 * Tests set for class {@link \Catharsis\Web\VkontakteRecommendationsWidget}
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class VkontakteRecommendationsWidgetTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of class constructor(s).
     * @link \Catharsis\Web\VkontakteRecommendationsWidget::__construct()
     * @return void
     */
    public function testConstructors()
    {
        $widget = new Catharsis\Web\VkontakteRecommendationsWidget();
        $this->assertEmpty($widget->getElementId());
        $this->assertEmpty($widget->getLimit());
        $this->assertEmpty($widget->getMax());
        $this->assertEmpty($widget->getPeriod());
        $this->assertEmpty($widget->getSorting());
        $this->assertEmpty($widget->getTarget());
        $this->assertEmpty($widget->getVerb());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\VkontakteRecommendationsWidget::elementId(string $id)}
     * method.
     * @return void
     */
    public function testElementId()
    {
        $widget = new Catharsis\Web\VkontakteRecommendationsWidget();
        $this->assertEmpty($widget->getElementId());
        $this->assertSame($widget, $widget->elementId('elementId'));
        $this->assertEquals('elementId', $widget->getElementId());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\VkontakteRecommendationsWidget::limit(integer $limit)}
     * method.
     * @return void
     */
    public function testLimitMethod()
    {
        $widget = new Catharsis\Web\VkontakteRecommendationsWidget();
        $this->assertEmpty($widget->getLimit());
        $this->assertSame($widget, $widget->limit(1));
        $this->assertEquals(1, $widget->getLimit());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\VkontakteRecommendationsWidget::max(integer $max)}
     * method.
     * @return void
     */
    public function testMaxMethod()
    {
        $widget = new Catharsis\Web\VkontakteRecommendationsWidget();
        $this->assertEmpty($widget->getMax());
        $this->assertSame($widget, $widget->max(1));
        $this->assertEquals(1, $widget->getMax());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\VkontakteRecommendationsWidget::period(string $period)}
     * method.
     * @return void
     */
    public function testPeriodMethod()
    {
        $widget = new Catharsis\Web\VkontakteRecommendationsWidget();
        $this->assertEmpty($widget->getPeriod());
        $this->assertSame($widget, $widget->period('period'));
        $this->assertEquals('period', $widget->getPeriod());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\VkontakteRecommendationsWidget::sorting(string $sorting)}
     * method.
     * @return void
     */
    public function testSortingMethod()
    {
        $widget = new Catharsis\Web\VkontakteRecommendationsWidget();
        $this->assertEmpty($widget->getSorting());
        $this->assertSame($widget, $widget->sorting('sorting'));
        $this->assertEquals('sorting', $widget->getSorting());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\VkontakteRecommendationsWidget::target(string $target)}
     * method.
     * @return void
     */
    public function testTargetMethod()
    {
        $widget = new Catharsis\Web\VkontakteRecommendationsWidget();
        $this->assertEmpty($widget->getTarget());
        $this->assertSame($widget, $widget->target('target'));
        $this->assertEquals('target', $widget->getTarget());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\VkontakteRecommendationsWidget::verb(integer $verb)}
     * method.
     * @return void
     */
    public function testVerbMethod()
    {
        $widget = new Catharsis\Web\VkontakteRecommendationsWidget();
        $this->assertEmpty($widget->getVerb());
        $this->assertSame($widget, $widget->verb(1));
        $this->assertEquals(1, $widget->getVerb());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\VkontakteAuthButtonWidget::__toString()}
     * method.
     * @return void
     */
    public function testToStringMethod()
    {
        $widget = new Catharsis\Web\VkontakteRecommendationsWidget();
        $this->assertEquals(
            '<div id="vk_recommendations"></div><script type="text/javascript">VK.Widgets.Recommended("vk_recommendations", {});</script>',
            (string) $widget
        );

        $widget = new Catharsis\Web\VkontakteRecommendationsWidget();
        $this->assertEquals(
            '<div id="elementId"></div><script type="text/javascript">VK.Widgets.Recommended("elementId", {"limit":5,"max":1,"period":"day","verb":0,"sort":"friend_likes","target":"target"});</script>',
            (string) $widget
                ->elementId('elementId')
                ->limit(5)
                ->max(1)
                ->period(Catharsis\Web\VkontakteRecommendationsPeriod::DAY)
                ->verb(Catharsis\Web\VkontakteRecommendationsVerb::LIKE)
                ->sorting(Catharsis\Web\VkontakteRecommendationsSorting::FRIEND_LIKES)
                ->target('target')
        );
    }
}

?>
