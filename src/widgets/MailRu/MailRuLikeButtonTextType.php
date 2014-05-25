<?php
/**
 * MailRuLikeButtonTextType class.
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
 * Type of text label for Mail.ru "Like" button.
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class MailRuLikeButtonTextType
{
    /**
     * Like.
     */
    const FIRST = 1;

    /**
     * Share.
     */
    const SECOND = 2;

    /**
     * Recommend.
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
