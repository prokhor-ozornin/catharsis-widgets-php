<?php
/**
 * TumblrFollowButtonType class.
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
 * Tumblr "Follow" button visual appearance.
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class TumblrFollowButtonType
{
    /**
     * Large horizontal button with user's name.
     */
    const FIRST = 1;

    /**
     * Medium horizontal button without user's name.
     */
    const SECOND = 2;

    /**
     * Tiny square button.
     */
    const THIRD = 3;

    /**
     * Private internal constructor.
     */
    private function __construct()
    {

    }
}

?>
