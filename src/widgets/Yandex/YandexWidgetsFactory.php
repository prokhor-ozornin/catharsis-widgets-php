<?php
/**
 * YandexWidgetsFactory class.
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
 * Factory for instantiation of Yandex widgets.
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class YandexWidgetsFactory
{
    /**
     * Creates new Yandex.Metrika analytics widget.
     * @return \Catharsis\Web\YandexAnalyticsWidget
     *         Initialized widget with default options.
     */
    public function analytics()
    {
        return new YandexAnalyticsWidget();
    }

    /**
     * Creates new Yandex "Like" button widget.
     * @return \Catharsis\Web\YandexLikeButtonWidget
     *         Initialized widget with default options.
     */
    public function likeButton()
    {
        return new YandexLikeButtonWidget();
    }

    /**
     * Creates new Yandex Map widget.
     * @return \Catharsis\Web\YandexMapWidget
     *         Initialized widget with default options.
     */
    /* public function map()
      {
      return new YandexMapWidget();
      } */

    /**
     * Creates new Yandex.Money button widget.
     * @return \Catharsis\Web\YandexMoneyButtonWidget
     *         Initialized widget with default options.
     */
    public function moneyButton()
    {
        return new YandexMoneyButtonWidget();
    }

    /**
     * Creates new Yandex.Money donation form widget.
     * @return \Catharsis\Web\YandexMoneyDonateFormWidget
     *         Initialized widget with default options.
     */
    public function moneyDonateForm()
    {
        return new YandexMoneyDonateFormWidget();
    }

    /**
     * Creates new Yandex.Money payment form widget.
     * @return \Catharsis\Web\YandexMoneyPaymentFormWidget
     *         Initialized widget with default options.
     */
    public function moneyPaymentForm()
    {
        return new YandexMoneyPaymentFormWidget();
    }

    /**
     * Creates new Yandex "Share" button widget.
     * @return \Catharsis\Web\YandexSharePanelWidget
     *         Initialized widget with default options.
     */
    public function sharePanel()
    {
        return new YandexSharePanelWidget();
    }

    /**
     * Creates new Yandex embedded video widget.
     * @return \Catharsis\Web\YandexVideoWidget
     *         Initialized widget with default options.
     */
    public function video()
    {
        return new YandexVideoWidget();
    }
}

?>
