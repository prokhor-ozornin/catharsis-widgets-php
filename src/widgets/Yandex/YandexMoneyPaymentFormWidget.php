<?php
namespace Catharsis\Web;

/**
 * Renders payment form for Yandex.Money (http://money.yandex.ru) payment system that allows financial transactions to be performed.
 * @link https://money.yandex.ru/embed/quickpay/shop.xml
 */
class YandexMoneyPaymentFormWidget extends HtmlWidgetBase
{
  private $account;
  private $cards = true;
  private $description;
  private $payer_address = false;
  private $payer_comment = false;
  private $payer_email = false;
  private $payer_full_name = false;
  private $payer_phone = false;
  private $payer_purpose = false;
  private $sum;
  private $text = YandexMoneyPaymentFormText::Pay;

  /**
   * Identifier of account in the Yandex.Money payment system which is to receive money.
   * This attribute is required.
   * @param string $account Identifier of account.
   * @return \Catharsis\Web\YandexMoneyPaymentFormWidget Reference to the current widget.
   */
  public function account($account)
  {
    $this->account = (string) $account;
    return $this;
  }

  /**
   * Whether to accept payment from Visa/Master Card cards. Default is TRUE.
   * @param boolean $accept TRUE to accept Visa/Master Card payments, FALSE to not.
   * @return \Catharsis\Web\YandexMoneyPaymentFormWidget Reference to the current widget.
   */
  public function cards($accept = true)
  {
    $this->cards = (bool) $accept;
    return $this;
  }

  /**
   * Description of payment goal/purpose (for predefined purpose) or purpose hint (for custom purpose).
   * This attribute is required.
   * @param string $description Description of purpose/purpose hint.
   * @return \Catharsis\Web\YandexMoneyPaymentFormWidget Reference to the current widget.
   */
  public function description($description)
  {
    $this->description = (string) $description;
    return $this;
  }

  /**
   * Whether to ask for payer address during transaction. Default is FALSE.
   * @param boolean $require TRUE to make payer's address required, FALSE to not.
   * @return \Catharsis\Web\YandexMoneyPaymentFormWidget Reference to the current widget.
   */
  public function payer_address($require = true)
  {
    $this->payer_address = (bool) $require;
    return $this;
  }

  /**
   * Whether to allow payer add custom payment comment. Default is FALSE.
   * @param boolean $require TRUE to allow payer to add a form's comment, FALSE to not.
   * @return \Catharsis\Web\YandexMoneyPaymentFormWidget Reference to the current widget.
   */
  public function payer_comment($require = true)
  {
    $this->payer_comment = (bool) $require;
    return $this;
  }

  /**
   * Whether to ask for email address of payer during transaction. Default is FALSE.
   * @param boolean $require TRUE to make payer's email required, FALSE to not.
   * @return \Catharsis\Web\YandexMoneyPaymentFormWidget Reference to the current widget.
   */
  public function payer_email($require = true)
  {
    $this->payer_email = (bool) $require;
    return $this;
  }

  /**
   * Whether to ask for full name of payer during transaction. Default is FALSE.
   * @param boolean $require TRUE to make payer's full name required, FALSE to not.
   * @return \Catharsis\Web\YandexMoneyPaymentFormWidget Reference to the current widget.
   */
  public function payer_full_name($require = true)
  {
    $this->payer_full_name = (bool) $require;
    return $this;
  }

  /**
   * Whether to ask for payer phone number during transaction. Default is FALSE.
   * @param boolean $require TRUE to make payer's phone required, FALSE to not.
   * @return \Catharsis\Web\YandexMoneyPaymentFormWidget Reference to the current widget.
   */
  public function payer_phone($require = true)
  {
    $this->payer_phone = (bool) $require;
    return $this;
  }

  /**
   * Whether to allow payer specify custom payment purpose text (TRUE) or use predefined purpose text (FALSE). Default is FALSE.
   * @param boolean $require TRUE to allow payer specify payment purpose, FALSE to not.
   * @return \Catharsis\Web\YandexMoneyPaymentFormWidget Reference to the current widget.
   */
  public function payer_purpose($require = true)
  {
    $this->payer_purpose = (bool) $require;
    return $this;
  }

  /**
   * Monetary sum to transfer to Yandex.Money account.
   * @param float $sum Payment sum.
   * @return \Catharsis\Web\YandexMoneyPaymentFormWidget Reference to the current widget.
   */
  public function sum($sum)
  {
    $this->sum = (float) $sum;
    return $this;
  }

  /**
   * Text to display on button. Default is 1 ("Pay").
   * @param integer $text Numeric code of text to display.
   * @return \Catharsis\Web\YandexMoneyPaymentFormWidget Reference to the current widget.
   */
  public function text($text)
  {
    $this->text = (int) $text;
    return $this;
  }

  /**
   * Returns HTML markup text of widget.
   */
  public function __toString()
  {
    if (empty($this->account) || empty($this->description))
    {
      return "";
    }

    $cards = $this->cards ? "&payment-type-choice=on" : "";
    $description = urlencode($this->description);
    $payer_purpose = $this->payer_purpose ? "buyer" : "seller";
    $payer_purpose_target = $this->payer_purpose ? "targets-hint" : "targets";
    $payer_comment = $this->payer_comment ? "&comment=on" : "";
    $payer_full_name = $this->payer_full_name ? "&fio=on" : "";
    $payer_email = $this->payer_email ? "&mail=on" : "";
    $payer_phone = $this->payer_phone ? "&phone=on" : "";
    $payer_address = $this->payer_address ? "&address=on" : "";

    return self::html_tag("iframe", array(
      "allowtransparency" => true,
      "frameborder" => 0,
      "height" => $this->payer_comment ? 255 : 200,
      "scrolling" => "no",
      "src" => "https://money.yandex.ru/embed/shop.xml?account={$this->account}&quickpay=shop{$cards}&writer={$payer_purpose}&{$payer_purpose_target}={$description}&default-sum={$this->sum}&button-text=0{$this->text}{$payer_comment}{$payer_full_name}{$payer_email}{$payer_phone}{$payer_address}",
      "width" => 450));
  }
}