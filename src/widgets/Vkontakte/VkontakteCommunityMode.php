<?php
/**
 * VkontakteCommunityMode class.
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
 * Type of information to display for Vkontakte "Community" widget.
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class VkontakteCommunityMode
{
    /**
     * Display community's participants.
     */
    const PARTICIPANTS = 0;

    /**
     * Display only community's title.
     */
    const TITLE = 1;

    /**
     * Display community's news feed (wall).
     */
    const NEWS = 2;

    /**
     * Private internal constructor.
     */
    private function __construct()
    {

    }
}

?>
