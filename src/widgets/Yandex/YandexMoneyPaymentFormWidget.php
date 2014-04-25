<?php
namespace Catharsis\Web;

/**
 * Renders payment form for Yandex.Money (http://money.yandex.ru) payment system that allows financial transactions to be performed.
 * @link https://money.yandex.ru/embed/quickpay/shop.xml
 */
class YandexMoneyPaymentFormWidget extends HtmlWidget
{
    private $_account;
    private $_askPayerAddress = false;
    private $_askPayerComment = false;
    private $_askPayerEmail = false;
    private $_askPayerFullName = false;
    private $_askPayerPhone = false;
    private $_askPayerPurpose = false;
    private $_cards = true;
    private $_description;
    private $_sum;
    private $_text = YandexMoneyPaymentFormText::Pay;

    /**
     * Identifier of account in the Yandex.Money payment system which is to receive money.
     * This attribute is required.
     * @param string $account Identifier of account.
     * @return \Catharsis\Web\YandexMoneyPaymentFormWidget Reference to the current widget.
     */
    public function account($account)
    {
        $this->_account = (string) $account;
        return $this;
    }

    /**
     * Whether to allow payer add custom payment comment. Default is FALSE.
     * @param boolean $ask TRUE to allow payer to add a form's comment, FALSE to not.
     * @return \Catharsis\Web\YandexMoneyPaymentFormWidget Reference to the current widget.
     */
    public function askPayerComment($ask = true)
    {
        $this->_askPayerComment = (bool) $ask;
        return $this;
    }

    /**
     * Whether to ask for email address of payer during transaction. Default is FALSE.
     * @param boolean $ask TRUE to make payer's email required, FALSE to not.
     * @return \Catharsis\Web\YandexMoneyPaymentFormWidget Reference to the current widget.
     */
    public function askPayerEmail($ask = true)
    {
        $this->_askPayerEmail = (bool) $ask;
        return $this;
    }

    /**
     * Whether to ask for full name of payer during transaction. Default is FALSE.
     * @param boolean $ask TRUE to make payer's full name required, FALSE to not.
     * @return \Catharsis\Web\YandexMoneyPaymentFormWidget Reference to the current widget.
     */
    public function askPayerFullName($ask = true)
    {
        $this->_askPayerFullName = (bool) $ask;
        return $this;
    }

    /**
     * Whether to ask for payer phone number during transaction. Default is FALSE.
     * @param boolean $ask TRUE to make payer's phone required, FALSE to not.
     * @return \Catharsis\Web\YandexMoneyPaymentFormWidget Reference to the current widget.
     */
    public function askPayerPhone($ask = true)
    {
        $this->_askPayerPhone = (bool) $ask;
        return $this;
    }

    /**
     * Whether to allow payer specify custom payment purpose text (TRUE) or use predefined purpose text (FALSE). Default is FALSE.
     * @param boolean $ask TRUE to allow payer specify payment purpose, FALSE to not.
     * @return \Catharsis\Web\YandexMoneyPaymentFormWidget Reference to the current widget.
     */
    public function askPayerPurpose($ask = true)
    {
        $this->_askPayerPurpose = (bool) $ask;
        return $this;
    }

    /**
     * Whether to accept payment from Visa/Master Card cards. Default is TRUE.
     * @param boolean $accept TRUE to accept Visa/Master Card payments, FALSE to not.
     * @return \Catharsis\Web\YandexMoneyPaymentFormWidget Reference to the current widget.
     */
    public function cards($accept = true)
    {
        $this->_cards = (bool) $accept;
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
        $this->_description = (string) $description;
        return $this;
    }

    /**
     * Whether to ask for payer address during transaction. Default is FALSE.
     * @param boolean $ask TRUE to make payer's address required, FALSE to not.
     * @return \Catharsis\Web\YandexMoneyPaymentFormWidget Reference to the current widget.
     */
    public function askPayerAddress($ask = true)
    {
        $this->_askPayerAddress = (bool) $ask;
        return $this;
    }

    /**
     * Monetary sum to transfer to Yandex.Money account.
     * @param float $sum Payment sum.
     * @return \Catharsis\Web\YandexMoneyPaymentFormWidget Reference to the current widget.
     */
    public function sum($sum)
    {
        $this->_sum = (float) $sum;
        return $this;
    }

    /**
     * Text to display on button. Default is 1 ("Pay").
     * @param integer $text Numeric code of text to display.
     * @return \Catharsis\Web\YandexMoneyPaymentFormWidget Reference to the current widget.
     */
    public function text($text)
    {
        $this->_text = (int) $text;
        return $this;
    }

    /**
     * Returns HTML markup text of widget.
     */
    public function __toString()
    {
        if (empty($this->_account) || empty($this->_description)) {
            return "";
        }

        $cards = $this->_cards ? "&payment-type-choice=on" : "";
        $description = urlencode($this->_description);
        $payer_purpose = $this->_askPayerPurpose ? "buyer" : "seller";
        $payer_purpose_target = $this->_askPayerPurpose ? "targets-hint" : "targets";
        $payer_comment = $this->_askPayerComment ? "&comment=on" : "";
        $payer_full_name = $this->_askPayerFullName ? "&fio=on" : "";
        $payer_email = $this->_askPayerEmail ? "&mail=on" : "";
        $payer_phone = $this->_askPayerPhone ? "&phone=on" : "";
        $payer_address = $this->_askPayerAddress ? "&address=on" : "";

        return self::htmlTag("iframe", array(
            "allowtransparency" => true,
            "frameborder" => 0,
            "height" => $this->_askPayerComment ? 255 : 200,
            "scrolling" => "no",
            "src" => "https://money.yandex.ru/embed/shop.xml?account={$this->_account}&quickpay=shop{$cards}&writer={$payer_purpose}&{$payer_purpose_target}={$description}&default-sum={$this->_sum}&button-text=0{$this->_text}{$payer_comment}{$payer_full_name}{$payer_email}{$payer_phone}{$payer_address}",
            "width" => 450));
    }
}

?>
