<?php
namespace Catharsis\Web;

/**
 * Renders button for Yandex.Money (http://money.yandex.ru) payment system that allows financial transactions to be performed.
 * @link https://money.yandex.ru/embed/quickpay/small.xml
 */
class YandexMoneyButtonWidget extends HtmlWidget
{
    private $_account;
    private $_askPayerAddress = false;
    private $_askPayerEmail = false;
    private $_askPayerFullName = false;
    private $_askPayerPhone = false;
    private $_color = YandexMoneyButtonColor::Orange;
    private $_description;
    private $_size = YandexMoneyButtonSize::Large;
    private $_sum;
    private $_text = YandexMoneyButtonText::Pay;
    private $_type = YandexMoneyButtonType::Wallet;

    /**
     * Whether to ask for payer address during transaction. Default is FALSE.
     * @param boolean $ask TRUE to make payer's address required, FALSE to not.
     * @return \Catharsis\Web\YandexMoneyButtonWidget Reference to the current widget.
     */
    public function askPayerAddress($ask = true)
    {
        $this->_askPayerAddress = (bool) $ask;
        return $this;
    }

    /**
     * Whether to ask for email address of payer during transaction. Default is FALSE.
     * @param boolean $ask TRUE to make payer's email required, FALSE to not.
     * @return \Catharsis\Web\YandexMoneyButtonWidget Reference to the current widget.
     */
    public function askPayerEmail($ask = true)
    {
        $this->_askPayerEmail = (bool) $ask;
        return $this;
    }

    /**
     * Whether to ask for full name of payer during transaction. Default is FALSE.
     * @param boolean $ask TRUE to make payer's full name required, FALSE to not.
     * @return \Catharsis\Web\YandexMoneyButtonWidget Reference to the current widget.
     */
    public function askPayerFullName($ask = true)
    {
        $this->_askPayerFullName = (bool) $ask;
        return $this;
    }

    /**
     * Whether to ask for payer phone number during transaction. Default is FALSE.
     * @param boolean $ask TRUE to make payer's phone required, FALSE to not.
     * @return \Catharsis\Web\YandexMoneyButtonWidget Reference to the current widget.
     */
    public function askPayerPhone($ask = true)
    {
        $this->_askPayerPhone = (bool) $ask;
        return $this;
    }

    /**
     * Identifier of account in the Yandex.Money payment system which is to receive money.
     * This attribute is required.
     * @param string $account Identifier of account.
     * @return \Catharsis\Web\YandexMoneyButtonWidget Reference to the current widget.
     */
    public function account($account)
    {
        $this->_account = (string) $account;
        return $this;
    }

    /**
     * Color of button. Default is "orange".
     * @param string $color Button's color.
     * @return \Catharsis\Web\YandexMoneyButtonWidget Reference to the current widget.
     */
    public function color($color)
    {
        $this->_color = (string) $color;
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
        $this->_description = (string) $description;
        return $this;
    }

    /**
     * Size of button. Default is "l" (large).
     * @param string $size Button's size.
     * @return \Catharsis\Web\YandexMoneyButtonWidget Reference to the current widget.
     */
    public function size($size)
    {
        $this->_size = (string) $size;
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
        $this->_sum = (float) $sum;
        return $this;
    }

    /**
     * Text to display on button. Default is 1 ("pay").
     * @param integer $text Numeric text type to display.
     * @return \Catharsis\Web\YandexMoneyButtonWidget Reference to the current widget.
     */
    public function text($text)
    {
        $this->_text = (int) $text;
        return $this;
    }

    /**
     * Type of payment option. Default is "yamoney-payment-type" (pay from Yandex.Money wallet balance).
     * @param string $type Payment source.
     * @return \Catharsis\Web\YandexMoneyButtonWidget Reference to the current widget.
     */
    public function type($type)
    {
        $this->_type = (string) $type;
        return $this;
    }

    /**
     * Returns HTML markup text of widget.
     */
    public function __toString()
    {
        if (empty($this->_account) || empty($this->_sum) || empty($this->_description)) {
            return "";
        }

        $width = 0;
        switch ($this->_text) {
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

        $payer_full_name = $this->_askPayerFullName ? "&fio=on" : "";
        $payer_email = $this->_askPayerEmail ? "&mail=on" : "";
        $payer_phone = $this->_askPayerPhone ? "&phone=on" : "";
        $payer_address = $this->_askPayerAddress ? "&address=on" : "";

        return self::htmlTag("iframe",array(
            "allowtransparency" => true,
            "frameborder" => 0,
            "height" => 54,
            "scrolling" => "no",
            "src" => "https://money.yandex.ru/embed/small.xml?account={$this->_account}&quickpay=small&{$this->_type}=on&button-text=0{$this->_text}&button-size={$this->_size}&button-color={$this->_color}&targets={$this->_description}&default-sum={$this->_sum}{$payer_full_name}{$payer_email}{$payer_phone}{$payer_address}",
            "width" => $width));
    }
}

?>
