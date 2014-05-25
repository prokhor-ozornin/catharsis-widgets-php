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
 * Tests set for class {@link \Catharsis\Web\CackleWidgetsFactory}
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class CackleWidgetsFactoryTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of
     * {@link \Catharsis\Web\CackleWidgetsFactory::commentsCount()}
     * method.
     * @return void
     */
    public function testCommentsCountMethod()
    {
        $factory = new Catharsis\Web\CackleWidgetsFactory();
        $this->assertNotSame($factory->commentsCount(), $factory->commentsCount());
        $this->assertInstanceOf('Catharsis\Web\CackleCommentsCountWidget', $factory->commentsCount());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\CackleWidgetsFactory::comments()}
     * method.
     * @return void
     */
    public function testCommentsMethod()
    {
        $factory = new Catharsis\Web\CackleWidgetsFactory();
        $this->assertNotSame($factory->comments(), $factory->comments());
        $this->assertInstanceOf('Catharsis\Web\CackleCommentsWidget', $factory->comments());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\CackleWidgetsFactory::latestComments()}
     * method.
     * @return void
     */
    public function testLatestCommentsMethod()
    {
        $factory = new Catharsis\Web\CackleWidgetsFactory();
        $this->assertNotSame($factory->latestComments(), $factory->latestComments());
        $this->assertInstanceOf('Catharsis\Web\CackleLatestCommentsWidget', $factory->latestComments());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\CackleWidgetsFactory::login()}
     * method.
     * @return void
     */
    public function testLoginMethod()
    {
        $factory = new Catharsis\Web\CackleWidgetsFactory();
        $this->assertNotSame($factory->login(), $factory->login());
        $this->assertInstanceOf('Catharsis\Web\CackleLoginWidget', $factory->login());
    }
}

?>
