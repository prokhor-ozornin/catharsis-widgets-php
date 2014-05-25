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
 * Tests set for class {@link \Catharsis\Web\VkontakteLikeButtonWidget}
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class VkontakteLikeButtonWidgetTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of class constructor(s).
     * @link \Catharsis\Web\VkontakteLikeButtonWidget::__construct()
     * @return void
     */
    public function testConstructors()
    {
        $widget = new Catharsis\Web\VkontakteLikeButtonWidget();
        $this->assertEmpty($widget->getDescription());
        $this->assertEmpty($widget->getElementId());
        $this->assertEmpty($widget->getHeight());
        $this->assertEmpty($widget->getImage());
        $this->assertEmpty($widget->getLayout());
        $this->assertEmpty($widget->getText());
        $this->assertEmpty($widget->getTitle());
        $this->assertEmpty($widget->getUrl());
        $this->assertEmpty($widget->getVerb());
        $this->assertEmpty($widget->getWidth());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\VkontakteLikeButtonWidget::description(string $description)}
     * method.
     * @return void
     */
    public function testDescriptionMethod()
    {
        $widget = new Catharsis\Web\VkontakteLikeButtonWidget();
        $this->assertEmpty($widget->getDescription());
        $this->assertSame($widget, $widget->description('description'));
        $this->assertEquals('description', $widget->getDescription());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\VkontakteLikeButtonWidget::elementId(string $id)}
     * method.
     * @return void
     */
    public function testElementIdMethod()
    {
        $widget = new Catharsis\Web\VkontakteLikeButtonWidget();
        $this->assertEmpty($widget->getElementId());
        $this->assertSame($widget, $widget->elementId('elementId'));
        $this->assertEquals('elementId', $widget->getElementId());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\VkontakteLikeButtonWidget::height(string $height)}
     * method.
     * @return void
     */
    public function testHeightMethod()
    {
        $widget = new Catharsis\Web\VkontakteLikeButtonWidget();
        $this->assertEmpty($widget->getHeight());
        $this->assertSame($widget, $widget->height('height'));
        $this->assertEquals('height', $widget->getHeight());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\VkontakteLikeButtonWidget::image(string $url)}
     * method.
     * @return void
     */
    public function testImageMethod()
    {
        $widget = new Catharsis\Web\VkontakteLikeButtonWidget();
        $this->assertEmpty($widget->getImage());
        $this->assertSame($widget, $widget->image('url'));
        $this->assertEquals('url', $widget->getImage());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\VkontakteLikeButtonWidget::layout(string $layout)}
     * method.
     * @return void
     */
    public function testLayoutMethod()
    {
        $widget = new Catharsis\Web\VkontakteLikeButtonWidget();
        $this->assertEmpty($widget->getLayout());
        $this->assertSame($widget, $widget->layout('layout'));
        $this->assertEquals('layout', $widget->getLayout());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\VkontakteLikeButtonWidget::text(string $text)}
     * method.
     * @return void
     */
    public function testTextMethod()
    {
        $widget = new Catharsis\Web\VkontakteLikeButtonWidget();
        $this->assertEmpty($widget->getText());
        $this->assertSame($widget, $widget->text('text'));
        $this->assertEquals('text', $widget->getText());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\VkontakteLikeButtonWidget::title(string $title)}
     * method.
     * @return void
     */
    public function testTitleMethod()
    {
        $widget = new Catharsis\Web\VkontakteLikeButtonWidget();
        $this->assertEmpty($widget->getTitle());
        $this->assertSame($widget, $widget->title('title'));
        $this->assertEquals('title', $widget->getTitle());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\VkontakteLikeButtonWidget::url(string $url)}
     * method.
     * @return void
     */
    public function testUrlMethod()
    {
        $widget = new Catharsis\Web\VkontakteLikeButtonWidget();
        $this->assertEmpty($widget->getUrl());
        $this->assertSame($widget, $widget->url('url'));
        $this->assertEquals('url', $widget->getUrl());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\VkontakteLikeButtonWidget::verb(integer $verb)}
     * method.
     * @return void
     */
    public function testVerbMethod()
    {
        $widget = new Catharsis\Web\VkontakteLikeButtonWidget();
        $this->assertEmpty($widget->getVerb());
        $this->assertSame($widget, $widget->verb(0));
        $this->assertEquals(0, $widget->getVerb());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\VkontakteLikeButtonWidget::width(string $width)}
     * method.
     * @return void
     */
    public function testWidthMethod()
    {
        $widget = new Catharsis\Web\VkontakteLikeButtonWidget();
        $this->assertEmpty($widget->getWidth());
        $this->assertSame($widget, $widget->width('width'));
        $this->assertEquals('width', $widget->getWidth());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\VkontakteLikeButtonWidget::__toString()}
     * method.
     * @return void
     */
    public function testToStringMethod()
    {
        $widget = new Catharsis\Web\VkontakteLikeButtonWidget();
        $html = (string) $widget;
        $this->assertContains('<div id="vk_like"></div>', $html);
        $this->assertContains('<script type="text/javascript">', $html);
        $this->assertContains('VK.Widgets.Like("vk_like", {});', $html);

        $widget = new Catharsis\Web\VkontakteLikeButtonWidget();
        $html = (string) $widget
            ->layout(Catharsis\Web\VkontakteLikeButtonLayout::BUTTON)
            ->width('width')
            ->title('title')
            ->description('description')
            ->url('url')
            ->image('image')
            ->text('text')
            ->height('height')
            ->verb(Catharsis\Web\VkontakteLikeButtonVerb::INTEREST)
            ->elementId('elementId');
        $this->assertContains('<div id="elementId"></div>', $html);
        $this->assertContains('<script type="text/javascript">', $html);
        $this->assertContains(
            'VK.Widgets.Like("elementId", {"type":"button","width":"width","pageTitle":"title","pageDescription":"description","pageUrl":"url","pageImage":"image","text":"text","height":"height","verb":1});',
            $html
        );
    }
}

?>
