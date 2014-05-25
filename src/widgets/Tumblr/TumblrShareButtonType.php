<?php
/**
 * TumblrShareButtonType class.
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
 * Tumblr "Share" button visual appearance.
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class TumblrShareButtonType
{
    /**
     * Medium horizontal button with "plus" sign.
     */
    const FIRST = 1;

    /**
     * Medium horizontal button.
     */
    const SECOND = 2;

    /**
     * Large horizontal button.
     */
    const THIRD = 3;

    /**
     * Tiny square button.
     */
    const FORTH = 4;

    /**
     * Private internal constructor.
     */
    private function __construct()
    {

    }
}

?>
