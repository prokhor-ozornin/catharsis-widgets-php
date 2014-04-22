<?php
namespace Catharsis\Web;

/**
 * Renders button for Yandex.Money (http://money.yandex.ru) payment system that allows financial transactions to be performed.
 * @link https://money.yandex.ru/embed/quickpay/small.xml
 */
class YandexMoneyButtonWidget extends HtmlWidgetBase
{
  private $account;
  private $color = YandexMoneyButtonColor::Orange;
  private $description;
  private $payer_address = false;
  private $payer_email = false;
  private $payer_full_name = false;
  private $payer_phone = false;
  private $size = YandexMoneyButtonSize::Large;
  private $sum;
  private $text = YandexMoneyButtonText::Pay;
  private $type = YandexMoneyButtonType::Wallet;

  /**
   * Identifier of account in the Yandex.Money payment system which is to receive money.
   * This attribute is required.
   * @param string $account Identifier of account.
   * @return \Catharsis\Web\YandexMoneyButtonWidget Reference to the current widget.
   */
  public function account($account)
  {
    $this->account = (string) $account;
    return $this;
  }

  /**
   * Color of button. Default is "orange".
   * @param string $color Button's color.
   * @return \Catharsis\Web\YandexMoneyButtonWidget Reference to the current widget.
   */
  public function color($color)
  {
    $this->color = (string) $color;
    return $this;
  }

  /**
   * Description of payment goal/purpose.
   * This attribute is required.
   * @param string $description Description of purpose.
   * @return \Catharsis\Web\YandexMoneyButtonWidget Reference to the current widget.
   */
  public function description($description)
  {
    $this->description = (string) $description;
    return $this;
  }

  /**
   * Whether to ask for payer address during transaction. Default is FALSE.
   * @param boolean $require TRUE to make payer's address required, FALSE to not.
   * @return \Catharsis\Web\YandexMoneyButtonWidget Reference to the current widget.
   */
  public function payer_address($require = true)
  {
    $this->payer_address = (bool) $require;
    return $this;
  }

  /**
   * Whether to ask for email address of payer during transaction. Default is FALSE.
   * @param boolean $require TRUE to make payer's email required, FALSE to not.
   * @return \Catharsis\Web\YandexMoneyButtonWidget Reference to the current widget.
   */
  public function payer_email($require = true)
  {
    $this->payer_email = (bool) $require;
    return $this;
  }

  /**
   * Whether to ask for full name of payer during transaction. Default is FALSE.
   * @param boolean $require TRUE to make payer's full name required, FALSE to not.
   * @return \Catharsis\Web\YandexMoneyButtonWidget Reference to the current widget.
   */
  public function payer_full_name($require = true)
  {
    $this->payer_full_name = (bool) $require;
    return $this;
  }

  /**
   * Whether to ask for payer phone number during transaction. Default is FALSE.
   * @param boolean $require TRUE to make payer's phone required, FALSE to not.
   * @return \Catharsis\Web\YandexMoneyButtonWidget Reference to the current widget.
   */
  public function payer_phone($require = true)
  {
    $this->payer_phone = (bool) $require;
    return $this;
  }

  /**
   * Size of button. Default is "l" (large).
   * @param string $size Button's size.
   * @return \Catharsis\Web\YandexMoneyButtonWidget Reference to the current widget.
   */
  public function size($size)
  {
    $this->size = (string) $size;
    return $this;
  }

  /**
   * Monetary sum to transfer to Yandex.Money account.
   * This attribute is required.
   * @param float $sum Payment sum.
   * @return \Catharsis\Web\YandexMoneyButtonWidget Reference to the current widget.
   */
  public function sum($sum)
  {
    $this->sum = (float) $sum;
    return $this;
  }

  /**
   * Text to display on button. Default is 1 ("pay").
   * @param integer $text Numeric text type to display.
   * @return \Catharsis\Web\YandexMoneyButtonWidget Reference to the current widget.
   */
  public function text($text)
  {
    $this->text = (int) $text;
    return $this;
  }

  /**
   * Type of payment option. Default is "yamoney-payment-type" (pay from Yandex.Money wallet balance).
   * @param string $type Payment source.
   * @return \Catharsis\Web\YandexMoneyButtonWidget Reference to the current widget.
   */
  public function type($type)
  {
    $this->type = (string) $type;
    return $this;
  }

  /**
   * Returns HTML markup text of widget.
   */
  public function __toString()
  {
    if (empty($this->account) || empty($this->sum) || empty($this->description))
    {
      return "";
    }

    $width = 0;
    switch ($this->text)
    {
      case YandexMoneyButtonText::Pay :
        $width = 229;
      break;

      case YandexMoneyButtonText::Buy :
        $width = 197;
      break;

      case YandexMoneyButtonText::Transfer :
        $width = 242;
      break;

      case YandexMoneyButtonText::Donate :
        $width = 283;
      break;

      case YandexMoneyButtonText::Give :
        $width = 231;
      break;

      case YandexMoneyButtonText::Support :
        $width = 262;
      break;

      default :
        $width = 283;
      break;
    }

    $payer_full_name = $this->payer_full_name ? "&fio=on" : "";
    $payer_email = $this->payer_email ? "&mail=on" : "";
    $payer_phone = $this->payer_phone ? "&phone=on" : "";
    $payer_address = $this->payer_address ? "&address=on" : "";

    return self::html_tag("iframe", array(
      "allowtransparency" => true,
      "frameborder" => 0,
      "height" => 54,
      "scrolling" => "no",
      "src" => "https://money.yandex.ru/embed/small.xml?account={$this->account}&quickpay=small&{$this->type}=on&button-text=0{$this->text}&button-size={$this->size}&button-color={$this->color}&targets={$this->description}&default-sum={$this->sum}{$payer_full_name}{$payer_email}{$payer_phone}{$payer_address}",
      "width" => $width));
  }
}