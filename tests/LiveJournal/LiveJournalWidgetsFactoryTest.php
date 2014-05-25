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
 * Tests set for class {@link \Catharsis\Web\LiveJournalWidgetsFactory}
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class LiveJournalWidgetsFactoryTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of
     * {@link \Catharsis\Web\LiveJournalWidgetsFactory::likeButton()}
     * method.
     * @return void
     */
    public function testLikeButtonMethod()
    {
        $factory = new Catharsis\Web\LiveJournalWidgetsFactory();
        $this->assertNotSame($factory->likeButton(), $factory->likeButton());
        $this->assertInstanceOf('Catharsis\Web\LiveJournalLikeButtonWidget', $factory->likeButton());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\LiveJournalWidgetsFactory::repostButton()}
     * method.
     * @return void
     */
    public function testRepostButtonMethod()
    {
        $factory = new Catharsis\Web\LiveJournalWidgetsFactory();
        $this->assertNotSame($factory->repostButton(), $factory->repostButton());
        $this->assertInstanceOf('Catharsis\Web\LiveJournalRepostButtonWidget', $factory->repostButton());
    }
}

?>
