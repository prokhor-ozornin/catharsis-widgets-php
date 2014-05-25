<?php
/**
 * YandexMoneyButtonWidget class.
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
 * Renders button for Yandex.Money (http://money.yandex.ru) payment system that allows financial transactions to be performed.
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 * @link      https://money.yandex.ru/embed/quickpay/small.xml
 */
class YandexMoneyButtonWidget extends HtmlWidget
{
    private $_account;
    private $_askPayerAddress = false;
    private $_askPayerEmail = false;
    private $_askPayerFullName = false;
    private $_askPayerPhone = false;
    private $_color = YandexMoneyButtonColor::ORANGE;
    private $_description;
    private $_size = YandexMoneyButtonSize::LARGE;
    private $_sum;
    private $_text = YandexMoneyButtonText::PAY;
    private $_type = YandexMoneyButtonType::WALLET;

    /**
     * Whether to ask for payer address during transaction.
     * Default is FALSE.
     * @param boolean $ask TRUE to make payer's address required, FALSE to not.
     * @return \Catharsis\Web\YandexMoneyButtonWidget
     *         Reference to the current widget.
     */
    public function askPayerAddress($ask)
    {
        $this->_askPayerAddress = (bool) $ask;
        return $this;
    }

    /**
     * Whether to ask for payer address during transaction.
     * Default is FALSE.
     * @return boolean TRUE to make payer's address required, FALSE to not.
     */
    public function getAskPayerAddress()
    {
        return $this->_askPayerAddress;
    }

    /**
     * Whether to ask for email address of payer during transaction.
     * Default is FALSE.
     * @param boolean $ask TRUE to make payer's email required, FALSE to not.
     * @return \Catharsis\Web\YandexMoneyButtonWidget
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
     * @return \Catharsis\Web\YandexMoneyButtonWidget
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
     * @return boolean TRUE to make payer's full name required, FALSE to not.
     */
    public function getAskPayerFullName()
    {
        return $this->_askPayerFullName;
    }

    /**
     * Whether to ask for payer phone number during transaction.
     * Default is FALSE.
     * @param boolean $ask TRUE to make payer's phone required, FALSE to not.
     * @return \Catharsis\Web\YandexMoneyButtonWidget
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
     * Identifier of account in the Yandex.Money payment system which is to receive money.
     * This attribute is required.
     * @param string $account Identifier of account.
     * @return \Catharsis\Web\YandexMoneyButtonWidget
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
     * Color of button.
     * Default is "orange".
     * @param string $color Button's color.
     * @return \Catharsis\Web\YandexMoneyButtonWidget
     *         Reference to the current widget.
     */
    public function color($color)
    {
        $this->_color = (string) $color;
        return $this;
    }

    /**
     * Color of button.
     * Default is "orange".
     * @return string Button's color.
     */
    public function getColor()
    {
        return $this->_color;
    }

    /**
     * Description of payment goal/purpose.
     * This attribute is required.
     * @param string $description Description of purpose.
     * @return \Catharsis\Web\YandexMoneyButtonWidget
     *         Reference to the current widget.
     */
    public function description($description)
    {
        $this->_description = (string) $description;
        return $this;
    }

    /**
     * Description of payment goal/purpose.
     * @return string Description of purpose.
     */
    public function getDescription()
    {
        return $this->_description;
    }

    /**
     * Size of button.
     * Default is "l" (large).
     * @param string $size Button's size.
     * @return \Catharsis\Web\YandexMoneyButtonWidget
     *         Reference to the current widget.
     */
    public function size($size)
    {
        $this->_size = (string) $size;
        return $this;
    }

    /**
     * Size of button.
     * Default is "l" (large).
     * @return string Button's size.
     */
    public function getSize()
    {
        return $this->_size;
    }

    /**
     * Monetary sum to transfer to Yandex.Money account.
     * This attribute is required.
     * @param float $sum Payment sum.
     * @return \Catharsis\Web\YandexMoneyButtonWidget
     *         Reference to the current widget.
     */
    public function sum($sum)
    {
        $this->_sum = (float) $sum;
        return $this;
    }

    /**
     * Monetary sum to transfer to Yandex.Money account.
     * @return float Payment sum.
     */
    public function getSum()
    {
        return $this->_sum;
    }

    /**
     * Text to display on button.
     * Default is 1 ("pay").
     * @param integer $text Numeric text type to display.
     * @return \Catharsis\Web\YandexMoneyButtonWidget
     *         Reference to the current widget.
     */
    public function text($text)
    {
        $this->_text = (int) $text;
        return $this;
    }

    /**
     * Text to display on button.
     * Default is 1 ("pay").
     * @return integer Numeric text type to display.
     */
    public function getText()
    {
        return $this->_text;
    }

    /**
     * Type of payment option.
     * Default is "yamoney-payment-type" (pay from Yandex.Money wallet balance).
     * @param string $type Payment source.
     * @return \Catharsis\Web\YandexMoneyButtonWidget
     *         Reference to the current widget.
     */
    public function type($type)
    {
        $this->_type = (string) $type;
        return $this;
    }

    /**
     * Type of payment option.
     * Default is "yamoney-payment-type" (pay from Yandex.Money wallet balance).
     * @return string Payment source.
     */
    public function getType()
    {
        return $this->_type;
    }

    /**
     * Returns HTML markup text of widget.
     * @return string Widget's HTML markup.
     */
    public function __toString()
    {
        if (empty($this->getAccount())
            || empty($this->getSum())
            || empty($this->getDescription())
        ) {
            return '';
        }

        $width = 0;
        switch ($this->getText()) {
        case YandexMoneyButtonText::PAY :
            $width = 229;
            break;

        case YandexMoneyButtonText::BUY :
            $width = 197;
            break;

        case YandexMoneyButtonText::TRANSFER :
            $width = 242;
            break;

        case YandexMoneyButtonText::DONATE :
            $width = 283;
            break;

        case YandexMoneyButtonText::GIVE :
            $width = 231;
            break;

        case YandexMoneyButtonText::SUPPORT :
            $width = 262;
            break;

        default :
            $width = 283;
            break;
        }

        $payer_full_name = $this->getAskPayerFullName() ? '&fio=on' : '';
        $payer_email = $this->getAskPayerEmail() ? '&mail=on' : '';
        $payer_phone = $this->getAskPayerPhone() ? '&phone=on' : '';
        $payer_address = $this->getAskPayerAddress() ? '&address=on' : '';

        return self::htmlTag(
            'iframe',
            array(
                'allowtransparency' => true,
                'frameborder' => 0,
                'height' => 54,
                'scrolling' => 'no',
                'src' => "https://money.yandex.ru/embed/small.xml?account={$this->getAccount()}&quickpay=small&{$this->getType()}=on&button-text=0{$this->getText()}&button-size={$this->getSize()}&button-color={$this->getColor()}&targets={$this->getDescription()}&default-sum={$this->getSum()}{$payer_full_name}{$payer_email}{$payer_phone}{$payer_address}",
                'width' => $width
            )
        );
    }
}

?>
