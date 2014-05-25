<?php
/**
 * YandexMoneyButtonType class.
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
 * Type of associated payment for Yandex.Money button.
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class YandexMoneyButtonType
{
    /**
     * Pay from Visa/MasterCard cards.
     */
    const CARD = 'any-card-payment-type';

    /**
     * Pay from Yandex.Money account.
     */
    const WALLET = 'yamoney-payment-type';

    /**
     * Private internal constructor.
     */
    private function __construct()
    {

    }
}

?>
