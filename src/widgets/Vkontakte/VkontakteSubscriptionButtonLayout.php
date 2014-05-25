<?php
/**
 * VkontakteSubscriptionButtonLayout class.
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
 * Visual appearance/layout of Vkontakte Subscription button.
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class VkontakteSubscriptionButtonLayout
{
    /**
     * Generic button.
     */
    const BUTTON = 0;

    /**
     * Lightweight button.
     */
    const LIGHT_BUTTON = 1;

    /**
     * Hyperlink.
     */
    const LINK = 2;

    /**
     * Private internal constructor.
     */
    private function __construct()
    {

    }
}

?>
