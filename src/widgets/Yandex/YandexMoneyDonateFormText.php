<?php
/**
 * YandexMoneyDonateFormText class.
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
 * Type of text label (verb) on Yandex.Money donation button.
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class YandexMoneyDonateFormText
{
    /**
     * Donate.
     */
    const DONATE = 1;

    /**
     * Give.
     */
    const GIVE = 2;

    /**
     * Transfer.
     */
    const TRANSFER = 3;

    /**
     * Send.
     */
    const SEND = 4;

    /**
     * Support.
     */
    const SUPPORT = 5;

    /**
     * Private internal constructor.
     */
    private function __construct()
    {

    }
}

?>
