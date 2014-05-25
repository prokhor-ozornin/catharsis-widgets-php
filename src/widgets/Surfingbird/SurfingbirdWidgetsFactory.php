<?php
/**
 * SurfingbirdWidgetsFactory class.
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
 * Factory for instantiation of Surfingbird widgets.
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class SurfingbirdWidgetsFactory
{
    /**
     * Creates new Surfingbird "Surf" button widget.
     * @return \Catharsis\Web\SurfingbirdSurfButtonWidget
     *         Initialized widget with default options.
     */
    public function surfButton()
    {
        return new SurfingbirdSurfButtonWidget();
    }
}

?>
