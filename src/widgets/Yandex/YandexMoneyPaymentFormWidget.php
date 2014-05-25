<?php
/**
 * YandexMoneyPaymentFormWidget class.
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
 * Renders payment form for Yandex.Money (http://money.yandex.ru) payment system that allows financial transactions to be performed.
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 * @link      https://money.yandex.ru/embed/quickpay/shop.xml
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
    private $_text = YandexMoneyPaymentFormText::PAY;

    /**
     * Identifier of account in the Yandex.Money payment system which is to receive money.
     * This attribute is required.
     * @param string $account Identifier of account.
     * @return \Catharsis\Web\YandexMoneyPaymentFormWidget
     *         Reference to the current widget.
     */
    public function account($account)
    {
        $this->_account = (string) $account;
        return $this;
    }

    /**
     * Identifier of account in the Yandex.Money payment system which is to receive money.
     * @return string Identifier of account.
     */
    public function getAccount()
    {
        return $this->_account;
    }

    /**
     * Whether to allow payer add custom payment comment.
     * Default is FALSE.
     * @param boolean $ask TRUE to allow payer to add a form's comment, FALSE to not.
     * @return \Catharsis\Web\YandexMoneyPaymentFormWidget
     *         Reference to the current widget.
     */
    public function askPayerComment($ask)
    {
        $this->_askPayerComment = (bool) $ask;
        return $this;
    }

    /**
     * Whether to allow payer add custom payment comment.
     * Default is FALSE.
     * @return boolean TRUE to allow payer to add a form's comment, FALSE to not.
     */
    public function getAskPayerComment()
    {
        return $this->_askPayerComment;
    }

    /**
     * Whether to ask for email address of payer during transaction.
     * Default is FALSE.
     * @param boolean $ask TRUE to make payer's email required, FALSE to not.
     * @return \Catharsis\Web\YandexMoneyPaymentFormWidget
     *         Reference to the current widget.
     */
    public function askPayerEmail($ask)
    {
        $this->_askPayerEmail = (bool) $ask;
        return $this;
    }

    /**
     * Whether to ask for email address of payer during transaction.
     * Default is FALSE.
     * @return boolean TRUE to make payer's email required, FALSE to not.
     */
    public function getAskPayerEmail()
    {
        return $this->_askPayerEmail;
    }

    /**
     * Whether to ask for full name of payer during transaction.
     * Default is FALSE.
     * @param boolean $ask TRUE to make payer's full name required, FALSE to not.
     * @return \Catharsis\Web\YandexMoneyPaymentFormWidget
     *         Reference to the current widget.
     */
    public function askPayerFullName($ask)
    {
        $this->_askPayerFullName = (bool) $ask;
        return $this;
    }

    /**
     * Whether to ask for full name of payer during transaction.
     * Default is FALSE.
     * @return boolean
     */
    public function getAskPayerFullName()
    {
        return $this->_askPayerFullName;
    }

    /**
     * Whether to ask for payer phone number during transaction.
     * Default is FALSE.
     * @param boolean $ask TRUE to make payer's phone required, FALSE to not.
     * @return \Catharsis\Web\YandexMoneyPaymentFormWidget
     *         Reference to the current widget.
     */
    public function askPayerPhone($ask)
    {
        $this->_askPayerPhone = (bool) $ask;
        return $this;
    }

    /**
     * Whether to ask for payer phone number during transaction.
     * Default is FALSE.
     * @return boolean TRUE to make payer's phone required, FALSE to not.
     */
    public function getAskPayerPhone()
    {
        return $this->_askPayerPhone;
    }

    /**
     * Whether to allow payer specify custom payment purpose text (TRUE)
     * or use predefined purpose text (FALSE).
     * Default is FALSE.
     * @param boolean $ask TRUE to allow payer specify payment purpose, FALSE to not.
     * @return \Catharsis\Web\YandexMoneyPaymentFormWidget
     *         Reference to the current widget.
     */
    public function askPayerPurpose($ask)
    {
        $this->_askPayerPurpose = (bool) $ask;
        return $this;
    }

    /**
     * Whether to allow payer specify custom payment purpose text (TRUE)
     * or use predefined purpose text (FALSE).
     * Default is FALSE.
     * @return boolean TRUE to allow payer specify payment purpose, FALSE to not.
     */
    public function getAskPayerPurpose()
    {
        return $this->_askPayerPurpose;
    }

    /**
     * Whether to accept payment from Visa/Master Card cards.
     * Default is TRUE.
     * @param boolean $accept TRUE to accept Visa/Master Card payments, FALSE to not.
     * @return \Catharsis\Web\YandexMoneyPaymentFormWidget
     *         Reference to the current widget.
     */
    public function cards($accept)
    {
        $this->_cards = (bool) $accept;
        return $this;
    }

    /**
     * Whether to accept payment from Visa/Master Card cards.
     * Default is TRUE.
     * @return boolean TRUE to accept Visa/Master Card payments, FALSE to not.
     */
    public function getCards()
    {
        return $this->_cards;
    }

    /**
     * Specifies description of payment goal/purpose (for predefined purpose)
     * or purpose hint (for custom purpose).
     * This attribute is required.
     * @param string $description Description of purpose/purpose hint.
     * @return \Catharsis\Web\YandexMoneyPaymentFormWidget
     *         Reference to the current widget.
     */
    public function description($description)
    {
        $this->_description = (string) $description;
        return $this;
    }

    /**
     * Specifies description of payment goal/purpose (for predefined purpose)
     * or purpose hint (for custom purpose).
     * @return string Description of purpose/purpose hint.
     */
    public function getDescription()
    {
        return $this->_description;
    }

    /**
     * Specifies whether to ask for payer address during transaction.
     * Default is FALSE.
     * @param boolean $ask TRUE to make payer's address required, FALSE to not.
     * @return \Catharsis\Web\YandexMoneyPaymentFormWidget
     *         Reference to the current widget.
     */
    public function askPayerAddress($ask)
    {
        $this->_askPayerAddress = (bool) $ask;
        return $this;
    }

    /**
     * Specifies whether to ask for payer address during transaction.
     * Default is FALSE.
     * @return boolean TRUE to make payer's address required, FALSE to not.
     */
    public function getAskPayerAddress()
    {
        return $this->_askPayerAddress;
    }

    /**
     * Specifies monetary sum to transfer to Yandex.Money account.
     * @param float $sum Payment sum.
     * @return \Catharsis\Web\YandexMoneyPaymentFormWidget
     *         Reference to the current widget.
     */
    public function sum($sum)
    {
        $this->_sum = (float) $sum;
        return $this;
    }

    /**
     * Specifies monetary sum to transfer to Yandex.Money account.
     * @return float Payment sum.
     */
    public function getSum()
    {
        return $this->_sum;
    }

    /**
     * Specifies text to display on button.
     * Default is 1 ("Pay").
     * @param integer $text Numeric code of text to display.
     * @return \Catharsis\Web\YandexMoneyPaymentFormWidget
     *         Reference to the current widget.
     */
    public function text($text)
    {
        $this->_text = (int) $text;
        return $this;
    }

    /**
     * Specifies text to display on button.
     * Default is 1 ("Pay").
     * @return integer Numeric code of text to display.
     */
    public function getText()
    {
        return $this->_text;
    }

    /**
     * Returns HTML markup text of widget.
     * @return string Widget's HTML markup.
     */
    public function __toString()
    {
        if (empty($this->getAccount()) || empty($this->getDescription())) {
            return '';
        }

        $cards = $this->getCards() ? '&payment-type-choice=on' : '';
        $description = urlencode($this->getDescription());
        $payer_purpose = $this->getAskPayerPurpose() ? 'buyer' : 'seller';
        $payer_purpose_target = $this->getAskPayerPurpose() ? 'targets-hint' : 'targets';
        $payer_comment = $this->getAskPayerComment() ? '&comment=on' : '';
        $payer_full_name = $this->getAskPayerFullName() ? '&fio=on' : '';
        $payer_email = $this->getAskPayerEmail() ? '&mail=on' : '';
        $payer_phone = $this->getAskPayerPhone() ? '&phone=on' : '';
        $payer_address = $this->getAskPayerAddress() ? '&address=on' : '';

        return self::htmlTag(
            'iframe',
            array(
                'allowtransparency' => true,
                'frameborder' => 0,
                'height' => $this->getAskPayerComment() ? 255 : 200,
                'scrolling' => 'no',
                'src' => "https://money.yandex.ru/embed/shop.xml?account={$this->getAccount()}&quickpay=shop{$cards}&writer={$payer_purpose}&{$payer_purpose_target}={$description}&default-sum={$this->getSum()}&button-text=0{$this->getText()}{$payer_comment}{$payer_full_name}{$payer_email}{$payer_phone}{$payer_address}",
                'width' => 450
            )
        );
    }
}

?>
