<?php
namespace Catharsis\Web;

/**
 * Renders donation form for Yandex.Money (http://money.yandex.ru) payment system that allows financial transactions to be performed.
 * @link https://money.yandex.ru/embed/quickpay/donate.xml
 */
class YandexMoneyDonateFormWidget extends HtmlWidget
{
    private $_account;
    private $_askPayerComment = false;
    private $_askPayerEmail = false;
    private $_askPayerFullName = false;
    private $_askPayerPhone = false;
    private $_cards = true;
    private $_commentHint;
    private $_description = false;
    private $_descriptionText;
    private $_projectName;
    private $_projectSite;
    private $_sum;
    private $_text = YandexMoneyDonateFormText::Donate;

    /**
     * Identifier of account in the Yandex.Money payment system which is to receive money.
     * This attribute is required.
     * @param string $account Identifier of account.
     * @return \Catharsis\Web\YandexMoneyDonateFormWidget Reference to the current widget.
     */
    public function account($account)
    {
        $this->_account = (string) $account;
        return $this;
    }

    /**
     * Whether to allow payer add custom payment comment. Default is FALSE.
     * @param boolean $require TRUE to allow payer to add a form's comment, FALSE to not.
     * @return \Catharsis\Web\YandexMoneyDonateFormWidget Reference to the current widget.
     */
    public function askPayerComment($ask = true)
    {
        $this->_askPayerComment = (bool) $ask;
        return $this;
    }

    /**
     * Whether to ask for email address of payer during transaction. Default is FALSE.
     * @param boolean $require TRUE to make payer's email required, FALSE to not.
     * @return \Catharsis\Web\YandexMoneyDonateFormWidget Reference to the current widget.
     */
    public function askPayerEmail($ask = true)
    {
        $this->_askPayerEmail = (bool) $ask;
        return $this;
    }

    /**
     * Whether to ask for full name of payer during transaction. Default is FALSE.
     * @param boolean $require TRUE to make payer's full name required, FALSE to not.
     * @return \Catharsis\Web\YandexMoneyDonateFormWidget Reference to the current widget.
     */
    public function askPayerFullName($ask = true)
    {
        $this->_askPayerFullName = (bool) $ask;
        return $this;
    }

    /**
     * Whether to ask for payer phone number during transaction. Default is FALSE.
     * @param boolean $require TRUE to make payer's phone required, FALSE to not.
     * @return \Catharsis\Web\YandexMoneyDonateFormWidget Reference to the current widget.
     */
    public function askPayerPhone($ask = true)
    {
        $this->_askPayerPhone = (bool) $ask;
        return $this;
    }

    /**
     * Whether to accept payment from Visa/Master Card cards. Default is TRUE.
     * @param boolean $accept TRUE to accept Visa/Master Card payments, FALSE to not.
     * @return \Catharsis\Web\YandexMoneyDonateFormWidget Reference to the current widget.
     */
    public function cards($accept = true)
    {
        $this->_cards = (bool) $accept;
        return $this;
    }

    /**
     * Hint text for comment field.
     * @param string $hint Comment's hint.
     * @return \Catharsis\Web\YandexMoneyDonateFormWidget Reference to the current widget.
     */
    public function commentHint($hint)
    {
        $this->_commentHint = (string) $hint;
        return $this;
    }

    /**
     * Whether to show description of payment goal/purpose in the form. Default is FALSE.
     * @param boolean $show TRUE to show payment purpose text on the form, FALSE to hide it.
     * @return \Catharsis\Web\YandexMoneyDonateFormWidget Reference to the current widget.
     */
    public function description($show = true)
    {
        $this->_description = (bool) $show;
        return $this;
    }

    /**
     * Description of payment goal/purpose.
     * This attribute is required.
     * @param string $description Description of payment purpose.
     * @return \Catharsis\Web\YandexMoneyDonateFormWidget Reference to the current widget.
     */
    public function descriptionText($description)
    {
        $this->_descriptionText = (string) $description;
        return $this;
    }

    /**
     * Name of charitable project or program.
     * @param string $name Name of project.
     * @return \Catharsis\Web\YandexMoneyDonateFormWidget Reference to the current widget.
     */
    public function projectName($name)
    {
        $this->_projectName = (string) $name;
        return $this;
    }

    /**
     * URL address of charitable project or program website.
     * @param string $url Website of project.
     * @return \Catharsis\Web\YandexMoneyDonateFormWidget Reference to the current widget.
     */
    public function projectSite($url)
    {
        $this->_projectSite = (string) $url;
        return $this;
    }

    /**
     * Monetary sum to transfer to Yandex.Money account.
     * @param type $sum Payment sum.
     * @return \Catharsis\Web\YandexMoneyDonateFormWidget Reference to the current widget.
     */
    public function sum($sum)
    {
        $this->_sum = (float) $sum;
        return $this;
    }

    /**
     * Text to display on button. Default is 1 ("Donate").
     * @param integer $text Numeric code of text to display.
     * @return \Catharsis\Web\YandexMoneyDonateFormWidget Reference to the current widget.
     */
    public function text($text)
    {
        $this->_text = (int) $text;
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
        if (empty($this->_account) || empty($this->_descriptionText)) {
            return "";
        }

        $width = 0;
        switch ($this->_text) {
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
        if (!$this->_cards) {
            $width -= 69;
        }

        $cards = $this->_cards ? "&payment-type-choice=on" : "";
        $show_description = $this->_description ? "&target-visibility=on" : "";
        $payer_comment = $this->_askPayerComment
            ? "&comment=on&hint={$this->_commentHint}"
            : "";
        $payer_full_name = $this->_askPayerFullName ? "&fio=on" : "";
        $payer_email = $this->_askPayerEmail ? "&mail=on" : "";
        $payer_phone = $this->_askPayerPhone ? "&phone=on" : "";

        return self::htmlTag("iframe", array(
            "allowtransparency" => true,
            "frameborder" => 0,
            "height" => $this->_askPayerComment ? 210 : 133,
            "scrolling" => "no",
            "src" => "https://money.yandex.ru/embed/donate.xml?account={$this->_account}&quickpay=donate{$cards}&default-sum={$this->_sum}&targets={$this->_descriptionText}{$show_description}&project-name={$this->_projectName}&project-site={$this->_projectSite}&button-text=0{$this->_text}{$payer_comment}{$payer_full_name}{$payer_email}{$payer_phone}",
            "width" => $width));
    }
}

?>
