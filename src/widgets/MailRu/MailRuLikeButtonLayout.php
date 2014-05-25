<?php
/**
 * MailRuLikeButtonLayout class.
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
 * Visual appearance (layout) of Mail.ru "Like" button.
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class MailRuLikeButtonLayout
{
    /**
     * Rectangular with high curved edges.
     */
    const FIRST = 1;

    /**
     * Rectangular with small curved edges.
     */
    const SECOND = 2;

    /**
     * Rectangular.
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
