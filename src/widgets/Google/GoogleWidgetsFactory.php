<?php
/**
 * GoogleWidgetsFactory class.
 *
 * PHP version 5
 *
 * @category HTML
 * @package  WebWidgets
 * @author   Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @license  LGPL https://www.gnu.org/licenses/lgpl.html
 * @link     http://pear.php.net/package/HTML_WebWidgets
 */
namespace Catharsis\Web;

/**
 * Factory for instantiation of Google widgets.
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class GoogleWidgetsFactory
{
    /**
     * Creates new Google Analytics widget.
     * @return \Catharsis\Web\GoogleAnalyticsWidget
     *         Initialized widget with default options.
     */
    public function analytics()
    {
        return new GoogleAnalyticsWidget();
    }

    /**
     * Creates new Google Map widget.
     * @return \Catharsis\Web\GoogleMapWidget
     *         Initialized widget with default options.
     */
    /* public function map()
      {
      return new GoogleMapWidget();
      } */

    /**
     * Creates new Google "+1" button widget.
     * @return \Catharsis\Web\GooglePlusOneButtonWidget
     *         Initialized widget with default options.
     */
    public function plusOneButton()
    {
        return new GooglePlusOneButtonWidget();
    }
}

?>
