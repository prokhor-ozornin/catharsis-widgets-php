<?php
namespace Catharsis\Web;

/**
 * Factory for instantiation of PayPal widgets.
 */
final class PayPalWidgetsFactory
{
  /**
   * Creates new PayPal "Buy Gift Certificate" widget.
   * @return \Catharsis\Web\PayPalBuyGiftCertificateWidget Initialized widget with default options.
   */
  public function buy_gift_certificate()
  {
    return new PayPalBuyGiftCertificateWidget();
  }

  /**
   * Creates new PayPal "Buy Now" widget.
   * @return \Catharsis\Web\PayPalBuyNowWidget Initialized widget with default options.
   */
  public function buy_now()
  {
    return new PayPalBuyNowWidget();
  }

  /**
   * Creates new PayPal "Donate" widget.
   * @return \Catharsis\Web\PayPalDonateWidget Initialized widget with default options.
   */
  public function donate()
  {
    return new PayPalDonateWidget();
  }

  /**
   * Creates new PayPal "Subscribe" widget.
   * @return \Catharsis\Web\PayPalSubscribeWidget Initialized widget with default options.
   */
  public function subscribe()
  {
    return new PayPalSubscribeWidget();
  }
}