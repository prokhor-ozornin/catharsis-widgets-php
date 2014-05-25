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
 * Tests set for class {@link \Catharsis\Web\MailRuWidgetsFactory}
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class MailRuWidgetsFactoryTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of
     * {@link \Catharsis\Web\MailRuWidgetsFactory::faces()}
     * method.
     * @return void
     */
    public function testFacesMethod()
    {
        $factory = new Catharsis\Web\MailRuWidgetsFactory();
        $this->assertNotSame($factory->faces(), $factory->faces());
        $this->assertInstanceOf('Catharsis\Web\MailRuFacesWidget', $factory->faces());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\MailRuWidgetsFactory::groups()}
     * method.
     * @return void
     */
    public function testGroupsMethod()
    {
        $factory = new Catharsis\Web\MailRuWidgetsFactory();
        $this->assertNotSame($factory->groups(), $factory->groups());
        $this->assertInstanceOf('Catharsis\Web\MailRuGroupsWidget', $factory->groups());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\MailRuWidgetsFactory::icq()}
     * method.
     * @return void
     */
    public function testIcqMethod()
    {
        $factory = new Catharsis\Web\MailRuWidgetsFactory();
        $this->assertNotSame($factory->icq(), $factory->icq());
        $this->assertInstanceOf('Catharsis\Web\MailRuIcqWidget', $factory->icq());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\MailRuWidgetsFactory::likeButton()}
     * method.
     * @return void
     */
    public function testLikeButtonMethod()
    {
        $factory = new Catharsis\Web\MailRuWidgetsFactory();
        $this->assertNotSame($factory->likeButton(), $factory->likeButton());
        $this->assertInstanceOf('Catharsis\Web\MailRuLikeButtonWidget', $factory->likeButton());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\MailRuWidgetsFactory::video()}
     * method.
     * @return void
     */
    public function testVideoMethod()
    {
        $factory = new Catharsis\Web\MailRuWidgetsFactory();
        $this->assertNotSame($factory->video(), $factory->video());
        $this->assertInstanceOf('Catharsis\Web\MailRuVideoWidget', $factory->video());
    }
}

?>
