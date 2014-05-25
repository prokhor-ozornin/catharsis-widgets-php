<?php
/**
 * SurfingbirdSurfButtonLayout class.
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
 * Surfingbird "Surf" button visual appearance/layout type.
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class SurfingbirdSurfButtonLayout
{
    /**
     * Horizontal button with a label.
     */
    const COMMON = 'common';

    /**
     * Micro/small button without label.
     */
    const MICRO = 'micro';

    /**
     * Large square button without label.
     */
    const VERTICAL = 'vert';

    /**
     * Private internal constructor.
     */
    private function __construct()
    {

    }
}

?>
