<?php
namespace Catharsis\Web;

/**
 * Renders donation form for Yandex.Money (http://money.yandex.ru) payment system that allows financial transactions to be performed.
 * @link https://money.yandex.ru/embed/quickpay/donate.xml
 */
class YandexMoneyDonateFormWidget extends HtmlWidgetBase
{
  private $account;
  private $cards = true;
  private $description;
  private $payer_comment = false;
  private $payer_comment_hint;
  private $payer_email = false;
  private $payer_full_name = false;
  private $payer_phone = false;
  private $project_name;
  private $project_site;
  private $show_description = false;
  private $sum;
  private $text = YandexMoneyDonateFormText::Donate;

  /**
   * Identifier of account in the Yandex.Money payment system which is to receive money.
   * This attribute is required.
   * @param string $account Identifier of account.
   * @return \Catharsis\Web\YandexMoneyDonateFormWidget Reference to the current widget.
   */
  public function account($account)
  {
    $this->account = (string) $account;
    return $this;
  }

  /**
   * Whether to accept payment from Visa/Master Card cards. Default is TRUE.
   * @param boolean $accept TRUE to accept Visa/Master Card payments, FALSE to not.
   * @return \Catharsis\Web\YandexMoneyDonateFormWidget Reference to the current widget.
   */
  public function cards($accept = true)
  {
    $this->cards = (bool) $accept;
    return $this;
  }

  /**
   * Description of payment goal/purpose.
   * This attribute is required.
   * @param string $description Description of payment purpose.
   * @return \Catharsis\Web\YandexMoneyDonateFormWidget Reference to the current widget.
   */
  public function description($description)
  {
    $this->description = (string) $description;
    return $this;
  }

  /**
   * Whether to allow payer add custom payment comment. Default is FALSE.
   * @param boolean $require TRUE to allow payer to add a form's comment, FALSE to not.
   * @return \Catharsis\Web\YandexMoneyDonateFormWidget Reference to the current widget.
   */
  public function payer_comment($require = true)
  {
    $this->payer_comment = (bool) $require;
    return $this;
  }

  /**
   * Hint text for comment field.
   * @param string $hint Comment's hint.
   * @return \Catharsis\Web\YandexMoneyDonateFormWidget Reference to the current widget.
   */
  public function payer_comment_hint($hint)
  {
    $this->payer_comment_hint = (string) $hint;
    return $this;
  }

  /**
   * Whether to ask for email address of payer during transaction. Default is FALSE.
   * @param boolean $require TRUE to make payer's email required, FALSE to not.
   * @return \Catharsis\Web\YandexMoneyDonateFormWidget Reference to the current widget.
   */
  public function payer_email($require = true)
  {
    $this->payer_email = (bool) $require;
    return $this;
  }

  /**
   * Whether to ask for full name of payer during transaction. Default is FALSE.
   * @param boolean $require TRUE to make payer's full name required, FALSE to not.
   * @return \Catharsis\Web\YandexMoneyDonateFormWidget Reference to the current widget.
   */
  public function payer_full_name($require = true)
  {
    $this->payer_full_name = (bool) $require;
    return $this;
  }

  /**
   * Whether to ask for payer phone number during transaction. Default is FALSE.
   * @param boolean $require TRUE to make payer's phone required, FALSE to not.
   * @return \Catharsis\Web\YandexMoneyDonateFormWidget Reference to the current widget.
   */
  public function payer_phone($require = true)
  {
    $this->payer_phone = (bool) $require;
    return $this;
  }

  /**
   * Name of charitable project or program.
   * @param string $name Name of project.
   * @return \Catharsis\Web\YandexMoneyDonateFormWidget Reference to the current widget.
   */
  public function project_name($name)
  {
    $this->project_name = (string) $name;
    return $this;
  }

  /**
   * URL address of charitable project or program website.
   * @param string $url Website of project.
   * @return \Catharsis\Web\YandexMoneyDonateFormWidget Reference to the current widget.
   */
  public function project_site($url)
  {
    $this->project_site = (string) $url;
    return $this;
  }

  /**
   * Whether to show description of payment goal/purpose in the form. Default is FALSE.
   * @param boolean $show TRUE to show payment purpose text on the form, FALSE to hide it.
   * @return \Catharsis\Web\YandexMoneyDonateFormWidget Reference to the current widget.
   */
  public function show_description($show = true)
  {
    $this->show_description = (bool) $show;
    return $this;
  }

  /**
   * Monetary sum to transfer to Yandex.Money account.
   * @param type $sum Payment sum.
   * @return \Catharsis\Web\YandexMoneyDonateFormWidget Reference to the current widget.
   */
  public function sum($sum)
  {
    $this->sum = (float) $sum;
    return $this;
  }

  /**
   * Monetary sum to transfer to Yandex.Money account.
   * @param integer $text Payment sum.
   * @return \Catharsis\Web\YandexMoneyDonateFormWidget Reference to the current widget.
   */
  public function text($text)
  {
    $this->text = (int) $text;
    return $this;
  }

  /**
   * Text to display on button. Default is 1 ("Donate").
   * @param string $type Numeric code of text to display.
   * @return \Catharsis\Web\YandexMoneyDonateFormWidget Reference to the current widget.
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
    if (empty($this->account) || empty($this->description))
    {
      return "";
    }

    $width = 0;
    switch ($this->text)
    {
      case YandexMoneyDonateFormText::Donate :
        $width = 523;
      break;

      case YandexMoneyDonateFormText::Give :
        $width = 487;
      break;

      case YandexMoneyDonateFormText::Transfer :
        $width = 495;
      break;

      case YandexMoneyDonateFormText::Send :
        $width = 494;
      break;

      case YandexMoneyDonateFormText::Support :
        $width = 507;
      break;

      default :
        $width = 523;
      break;
    }
    if (!$this->cards)
    {
      $width -= 69;
    }

    $cards = $this->cards ? "&payment-type-choice=on" : "";
    $show_description = $this->show_description ? "&target-visibility=on" : "";
    $payer_comment = $this->payer_comment ? "&comment=on&hint={$this->payer_comment_hint}" : "";
    $payer_full_name = $this->payer_full_name ? "&fio=on" : "";
    $payer_email = $this->payer_email ? "&mail=on" : "";
    $payer_phone = $this->payer_phone ? "&phone=on" : "";

    return self::html_tag("iframe", array(
      "allowtransparency" => true,
      "frameborder" => 0,
      "height" => $this->payer_comment ? 210 : 133,
      "scrolling" => "no",
      "src" => "https://money.yandex.ru/embed/donate.xml?account={$this->account}&quickpay=donate{$cards}&default-sum={$this->sum}&targets={$this->description}{$show_description}&project-name={$this->project_name}&project-site={$this->project_site}&button-text=0{$this->text}{$payer_comment}{$payer_full_name}{$payer_email}{$payer_phone}",
      "width" => $width));
  }
}
