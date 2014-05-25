<?php
/**
 * VkontakteCommentsLimit class.
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
 * Number of comments to display on web page for Vkontakte "Comments" widget.
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class VkontakteCommentsLimit
{
    /**
     * Five comments.
     */
    const LIMIT_5 = 5;

    /**
     * Ten comments.
     */
    const LIMIT_10 = 10;

    /**
     * Fifteen comments.
     */
    const LIMIT_15 = 15;

    /**
     * Twenty comments.
     */
    const LIMIT_20 = 20;

    /**
     * Private internal constructor.
     */
    private function __construct()
    {

    }
}

?>
