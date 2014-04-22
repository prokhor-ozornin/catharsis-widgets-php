<?php
namespace Catharsis\Web;

/**
 * Factory for instantiation of Yandex widgets.
 */
final class YandexWidgetsFactory
{
  /**
   * Creates new Yandex.Metrika analytics widget.
   * @return \Catharsis\Web\YandexAnalyticsWidget Initialized widget with default options.
   */
  public function analytics()
  {
    return new YandexAnalyticsWidget();
  }

  /**
   * Creates new Yandex "Like" button widget.
   * @return \Catharsis\Web\YandexLikeButtonWidget Initialized widget with default options.
   */
  public function like()
  {
    return new YandexLikeButtonWidget();
  }

  /**
   * Creates new Yandex Map widget.
   * @return \Catharsis\Web\YandexMapWidget Initialized widget with default options.
   */
  public function map()
  {
    return new YandexMapWidget();
  }

  /**
   * Creates new Yandex.Money button widget.
   * @return \Catharsis\Web\YandexMoneyButtonWidget Initialized widget with default options.
   */
  public function money_button()
  {
    return new YandexMoneyButtonWidget();
  }

  /**
   * Creates new Yandex.Money donation form widget.
   * @return \Catharsis\Web\YandexMoneyDonateFormWidget Initialized widget with default options.
   */
  public function money_donate_form()
  {
    return new YandexMoneyDonateFormWidget();
  }

  /**
   * Creates new Yandex.Money payment form widget.
   * @return \Catharsis\Web\YandexMoneyPaymentFormWidget Initialized widget with default options.
   */
  public function money_payment_form()
  {
    return new YandexMoneyPaymentFormWidget();
  }

  /**
   * Creates new Yandex "Share" button widget.
   * @return \Catharsis\Web\YandexSharePanelWidget Initialized widget with default options.
   */
  public function share()
  {
    return new YandexSharePanelWidget();
  }

  /**
   * Creates new Yandex embedded video widget.
   * @return \Catharsis\Web\YandexVideoWidget Initialized widget with default options.
   */
  public function video()
  {
    return new YandexVideoWidget();
  }
}