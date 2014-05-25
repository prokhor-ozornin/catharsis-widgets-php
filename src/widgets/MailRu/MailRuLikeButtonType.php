<?php
/**
 * MailRuLikeButtonType class.
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
 * Type of Mail.ru "Like" button(s) to show.
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class MailRuLikeButtonType
{
    /**
     * Both Odnoklassniki.ru and Mail.ru buttons.
     */
    const ALL = 'combo';

    /**
     * Only Mail.ru button.
     */
    const MAILRU = 'mm';

    /**
     * Only Odnoklassniki.ru button.
     */
    const ODNOKLASSNIKI = 'ok';

    /**
     * Private internal constructor.
     */
    private function __construct()
    {

    }
}

?>
