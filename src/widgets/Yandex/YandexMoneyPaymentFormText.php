<?php
/**
 * YandexMoneyPaymentFormText class.
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
 * Type of text label (verb) on Yandex.Money donation form button.
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class YandexMoneyPaymentFormText
{
    /**
     * Pay.
     */
    const PAY = 1;

    /**
     * Buy.
     */
    const BUY = 2;

    /**
     * Transfer.
     */
    const TRANSFER = 3;

    /**
     * Give.
     */
    const GIVE = 4;

    /**
     * Private internal constructor.
     */
    private function __construct()
    {

    }
}

?>
