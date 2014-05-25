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
 * Tests set for class {@link \Catharsis\Web\VkontakteWidgetsFactory}
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class VkontakteWidgetsFactoryTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of
     * {@link \Catharsis\Web\VkontakteWidgetsFactory::authButton()}
     * method.
     * @return void
     */
    public function testAuthButtonMethod()
    {
        $factory = new Catharsis\Web\VkontakteWidgetsFactory();
        $this->assertNotSame($factory->authButton(), $factory->authButton());
        $this->assertInstanceOf('Catharsis\Web\VkontakteAuthButtonWidget', $factory->authButton());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\VkontakteWidgetsFactory::comments()}
     * method.
     * @return void
     */
    public function testCommentsMethod()
    {
        $factory = new Catharsis\Web\VkontakteWidgetsFactory();
        $this->assertNotSame($factory->comments(), $factory->comments());
        $this->assertInstanceOf('Catharsis\Web\VkontakteCommentsWidget', $factory->comments());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\VkontakteWidgetsFactory::community()}
     * method.
     * @return void
     */
    public function testCommunityMethod()
    {
        $factory = new Catharsis\Web\VkontakteWidgetsFactory();
        $this->assertNotSame($factory->community(), $factory->community());
        $this->assertInstanceOf('Catharsis\Web\VkontakteCommunityWidget', $factory->community());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\VkontakteWidgetsFactory::initialize()}
     * method.
     * @return void
     */
    public function testInitializeMethod()
    {
        $factory = new Catharsis\Web\VkontakteWidgetsFactory();
        $this->assertNotSame($factory->initialize(), $factory->initialize());
        $this->assertInstanceOf('Catharsis\Web\VkontakteInitializationWidget', $factory->initialize());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\VkontakteWidgetsFactory::likeButton()}
     * method.
     * @return void
     */
    public function testLikeButtonMethod()
    {
        $factory = new Catharsis\Web\VkontakteWidgetsFactory();
        $this->assertNotSame($factory->likeButton(), $factory->likeButton());
        $this->assertInstanceOf('Catharsis\Web\VkontakteLikeButtonWidget', $factory->likeButton());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\VkontakteWidgetsFactory::post()}
     * method.
     * @return void
     */
    /*public function testPostMethod()
    {
        $factory = new Catharsis\Web\VkontakteWidgetsFactory();
        $this->assertNotSame($factory->post(), $factory->post());
        $this->assertInstanceOf('Catharsis\Web\VkontaktePostWidget', $factory->post());
    }*/

    /**
     * Performs testing of
     * {@link \Catharsis\Web\VkontakteWidgetsFactory::poll()}
     * method.
     * @return void
     */
    public function testPollMethod()
    {
        $factory = new Catharsis\Web\VkontakteWidgetsFactory();
        $this->assertNotSame($factory->poll(), $factory->poll());
        $this->assertInstanceOf('Catharsis\Web\VkontaktePollWidget', $factory->poll());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\VkontakteWidgetsFactory::post()}
     * method.
     * @return void
     */
    public function testPostMethod()
    {
        $factory = new Catharsis\Web\VkontakteWidgetsFactory();
        $this->assertNotSame($factory->post(), $factory->post());
        $this->assertInstanceOf('Catharsis\Web\VkontaktePostWidget', $factory->post());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\VkontakteWidgetsFactory::recommendations()}
     * method.
     * @return void
     */
    public function testRecommendationsWidget()
    {
        $factory = new Catharsis\Web\VkontakteWidgetsFactory();
        $this->assertNotSame($factory->recommendations(), $factory->recommendations());
        $this->assertInstanceOf('Catharsis\Web\VkontakteRecommendationsWidget', $factory->recommendations());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\VkontakteWidgetsFactory::subscription()}
     * method.
     * @return void
     */
    public function testSubscriptionMethod()
    {
        $factory = new Catharsis\Web\VkontakteWidgetsFactory();
        $this->assertNotSame($factory->subscription(), $factory->subscription());
        $this->assertInstanceOf('Catharsis\Web\VkontakteSubscriptionWidget', $factory->subscription());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\VkontakteWidgetsFactory::video()}
     * method.
     * @return void
     */
    public function testVideoMethod()
    {
        $factory = new Catharsis\Web\VkontakteWidgetsFactory();
        $this->assertNotSame($factory->video(), $factory->video());
        $this->assertInstanceOf('Catharsis\Web\VkontakteVideoWidget', $factory->video());
    }
}

?>
