<?php
/**
 * VkontakteAuthButtonType class.
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
 * Vkontakte OAuth authentification mode.
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class VkontakteAuthButtonType
{
    /**
     * After authentication specified JavaScript function will be called.
     */
    const DYNAMIC = 'dynamic';

    /**
     * After authentication user will be redirected to the specified URL.
     */
    const STANDARD = 'standard';

    /**
     * Private internal constructor.
     */
    private function __construct()
    {

    }
}

?>
