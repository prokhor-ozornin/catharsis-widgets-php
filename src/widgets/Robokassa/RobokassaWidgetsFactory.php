<?php
namespace Catharsis\Web;

/**
 * Factory for instantiation of Robokassa widgets.
 */
final class RobokassaWidgetsFactory
{
  /**
   *
   * @return \Catharsis\Web\RobokassaPaymentFormWidget Initialized widget with default options.
   */
  public function payment_form()
  {
    return new RobokassaPaymentFormWidget();
  }
}