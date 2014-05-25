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
 * Tests set for class {@link \Catharsis\Web\FacebookWidgetsFactory}
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class FacebookWidgetsFactoryTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of
     * {@link \Catharsis\Web\FacebookWidgetsFactory::activityFeed()}
     * method.
     * @return void
     */
    public function testActivityFeedMethod()
    {
        $factory = new Catharsis\Web\FacebookWidgetsFactory();
        $this->assertNotSame($factory->activityFeed(), $factory->activityFeed());
        $this->assertInstanceOf('Catharsis\Web\FacebookActivityFeedWidget', $factory->activityFeed());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\FacebookWidgetsFactory::comments()}
     * method.
     * @return void
     */
    public function testCommentsMethod()
    {
        $factory = new Catharsis\Web\FacebookWidgetsFactory();
        $this->assertNotSame($factory->comments(), $factory->comments());
        $this->assertInstanceOf('Catharsis\Web\FacebookCommentsWidget', $factory->comments());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\FacebookWidgetsFactory::facepile()}
     * method.
     * @return void
     */
    public function testFacepileMethod()
    {
        $factory = new Catharsis\Web\FacebookWidgetsFactory();
        $this->assertNotSame($factory->facepile(), $factory->facepile());
        $this->assertInstanceOf('Catharsis\Web\FacebookFacepileWidget', $factory->facepile());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\FacebookWidgetsFactory::followButton()}
     * method.
     * @return void
     */
    public function testFollowButtonMethod()
    {
        $factory = new Catharsis\Web\FacebookWidgetsFactory();
        $this->assertNotSame($factory->followButton(), $factory->followButton());
        $this->assertInstanceOf('Catharsis\Web\FacebookFollowButtonWidget', $factory->followButton());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\FacebookWidgetsFactory::initialize()}
     * method.
     * @return void
     */
    public function testInitializeMethod()
    {
        $factory = new Catharsis\Web\FacebookWidgetsFactory();
        $this->assertNotSame($factory->initialize(), $factory->initialize());
        $this->assertInstanceOf('Catharsis\Web\FacebookInitializationWidget', $factory->initialize());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\FacebookWidgetsFactory::likeButton()}
     * method.
     * @return void
     */
    public function testLikeButtonMethod()
    {
        $factory = new Catharsis\Web\FacebookWidgetsFactory();
        $this->assertNotSame($factory->likeButton(), $factory->likeButton());
        $this->assertInstanceOf('Catharsis\Web\FacebookLikeButtonWidget', $factory->likeButton());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\FacebookWidgetsFactory::likeBox()}
     * method.
     * @return void
     */
    public function testLikeBoxMethod()
    {
        $factory = new Catharsis\Web\FacebookWidgetsFactory();
        $this->assertNotSame($factory->likeBox(), $factory->likeBox());
        $this->assertInstanceOf('Catharsis\Web\FacebookLikeBoxWidget', $factory->likeBox());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\FacebookWidgetsFactory::post()}
     * method.
     * @return void
     */
    public function testPostMethod()
    {
        $factory = new Catharsis\Web\FacebookWidgetsFactory();
        $this->assertNotSame($factory->post(), $factory->post());
        $this->assertInstanceOf('Catharsis\Web\FacebookPostWidget', $factory->post());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\FacebookWidgetsFactory::recommendationsFeed()}
     * method.
     * @return void
     */
    public function testRecommendationsFeedMethod()
    {
        $factory = new Catharsis\Web\FacebookWidgetsFactory();
        $this->assertNotSame($factory->recommendationsFeed(), $factory->recommendationsFeed());
        $this->assertInstanceOf('Catharsis\Web\FacebookRecommendationsFeedWidget', $factory->recommendationsFeed());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\FacebookWidgetsFactory::sendButton()}
     * method.
     * @return void
     */
    public function testSendButtonMethod()
    {
        $factory = new Catharsis\Web\FacebookWidgetsFactory();
        $this->assertNotSame($factory->sendButton(), $factory->sendButton());
        $this->assertInstanceOf('Catharsis\Web\FacebookSendButtonWidget', $factory->sendButton());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\FacebookWidgetsFactory::video()}
     * method.
     * @return void
     */
    public function testVideoMethod()
    {
        $factory = new Catharsis\Web\FacebookWidgetsFactory();
        $this->assertNotSame($factory->video(), $factory->video());
        $this->assertInstanceOf('Catharsis\Web\FacebookVideoWidget', $factory->video());
    }
}

?>
