<?php
/**
 * PinterestPinItButtonPinCountPosition class.
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
 * Position of pin counter for Pinterest "Pin It" button.
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class PinterestPinItButtonPinCountPosition
{
    /**
     * Above button.
     */
    const ABOVE = 'above';

    /**
     * Beside button.
     */
    const BESIDE = 'beside';

    /**
     * Do not show.
     */
    const NONE = 'none';

    /**
     * Private internal constructor.
     */
    private function __construct()
    {

    }
}

?>
