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
 * Tests set for trait {@link \Catharsis\Web\LiveJournalWidgetsTrait}
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class LiveJournalWidgetsTraitTest extends PHPUnit_Framework_TestCase
{
    use Catharsis\Web\LiveJournalWidgetsTrait;

    /**
     * Performs testing of
     * {@link \Catharsis\Web\LiveJournalWidgetsTrait::livejournal()}
     * method.
     * @return void
     */
    public function testLivejournalMethod()
    {
        $this->assertAttributeEmpty('_livejournal', get_class());
        $this->assertSame(self::livejournal(), self::livejournal());
        $this->assertInstanceOf('Catharsis\Web\LiveJournalWidgetsFactory', self::livejournal());
    }
}

?>
