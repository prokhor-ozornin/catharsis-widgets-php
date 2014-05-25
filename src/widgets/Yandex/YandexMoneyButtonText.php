<?php
/**
 * YandexMoneyButtonText class.
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
 * Type of text label (verb) on Yandex.Money button.
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class YandexMoneyButtonText
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
     * Donate.
     */
    const DONATE = 4;

    /**
     * Give.
     */
    const GIVE = 5;

    /**
     * Support.
     */
    const SUPPORT = 6;

    /**
     * Private internal constructor.
     */
    private function __construct()
    {

    }
}

?>
