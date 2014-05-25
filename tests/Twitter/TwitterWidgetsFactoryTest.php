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
 * Tests set for class {@link \Catharsis\Web\TwitterWidgetsFactory}
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class TwitterWidgetsFactoryTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of
     * {@link \Catharsis\Web\TwitterWidgetsFactory::followButton()}
     * method.
     * @return void
     */
    public function testFollowButtonMethod()
    {
        $factory = new Catharsis\Web\TwitterWidgetsFactory();
        $this->assertNotSame($factory->followButton(), $factory->followButton());
        $this->assertInstanceOf('Catharsis\Web\TwitterFollowButtonWidget', $factory->followButton());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\TwitterWidgetsFactory::tweetButton()}
     * method.
     * @return void
     */
    public function testTweetButtonMethod()
    {
        $factory = new Catharsis\Web\TwitterWidgetsFactory();
        $this->assertNotSame($factory->tweetButton(), $factory->tweetButton());
        $this->assertInstanceOf('Catharsis\Web\TwitterTweetButtonWidget', $factory->tweetButton());
    }
}

?>
