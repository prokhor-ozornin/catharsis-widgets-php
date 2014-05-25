<?php
/**
 * YandexMoneyDonateFormWidget class.
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
 * Renders donation form for Yandex.Money (http://money.yandex.ru) payment system that allows financial transactions to be performed.
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 * @link      https://money.yandex.ru/embed/quickpay/donate.xml
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
    private $_text = YandexMoneyDonateFormText::DONATE;

    /**
     * Identifier of account in the Yandex.Money payment system which is to receive money.
     * This attribute is required.
     * @param string $account Identifier of account.
     * @return \Catharsis\Web\YandexMoneyDonateFormWidget
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
     * Whether to accept payment from Visa/Master Card cards.
     * Default is FALSE.
     * @param boolean $ask TRUE to allow payer to add a form's comment,
     *                     FALSE to not.
     * @return \Catharsis\Web\YandexMoneyDonateFormWidget
     *         Reference to the current widget.
     */
    public function askPayerComment($ask)
    {
        $this->_askPayerComment = (bool) $ask;
        return $this;
    }

    /**
     * Whether to accept payment from Visa/Master Card cards.
     * Default is FALSE.
     * @return boolean TRUE to allow payer to add a form's comment,
     *                 FALSE to not.
     */
    public function getAskPayerComment()
    {
        return $this->_askPayerComment;
    }

    /**
     * Specifies whether to ask for email address of payer during transaction.
     * Default is FALSE.
     * @param boolean $ask TRUE to make payer's email required, FALSE to not.
     * @return \Catharsis\Web\YandexMoneyDonateFormWidget
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
     * @return \Catharsis\Web\YandexMoneyDonateFormWidget
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
     * @return \Catharsis\Web\YandexMoneyDonateFormWidget
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
     * Whether to accept payment from Visa/Master Card cards.
     * Default is TRUE.
     * @param boolean $accept TRUE to accept Visa/Master Card payments, FALSE to not.
     * @return \Catharsis\Web\YandexMoneyDonateFormWidget
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
     * Hint text for comment field.
     * @param string $hint Comment's hint.
     * @return \Catharsis\Web\YandexMoneyDonateFormWidget
     *         Reference to the current widget.
     */
    public function commentHint($hint)
    {
        $this->_commentHint = (string) $hint;
        return $this;
    }

    /**
     * Hint text for comment field.
     * @return string Comment's hint.
     */
    public function getCommentHint()
    {
        return $this->_commentHint;
    }

    /**
     * Whether to show description of payment goal/purpose in the form.
     * Default is FALSE.
     * @param boolean $show TRUE to show payment purpose text on the form,
     *                      FALSE to hide it.
     * @return \Catharsis\Web\YandexMoneyDonateFormWidget
     *         Reference to the current widget.
     */
    public function description($show)
    {
        $this->_description = (bool) $show;
        return $this;
    }

    /**
     * Whether to show description of payment goal/purpose in the form.
     * Default is FALSE.
     * @return boolean TRUE to show payment purpose text on the form,
     *                 FALSE to hide it.
     */
    public function getDescription()
    {
        return $this->_description;
    }

    /**
     * Description of payment goal/purpose.
     * This attribute is required.
     * @param string $description Description of payment purpose.
     * @return \Catharsis\Web\YandexMoneyDonateFormWidget
     *         Reference to the current widget.
     */
    public function descriptionText($description)
    {
        $this->_descriptionText = (string) $description;
        return $this;
    }

    /**
     * Description of payment goal/purpose.
     * @return string Description of payment purpose.
     */
    public function getDescriptionText()
    {
        return $this->_descriptionText;
    }

    /**
     * Name of charitable project or program.
     * @param string $name Name of project.
     * @return \Catharsis\Web\YandexMoneyDonateFormWidget
     *         Reference to the current widget.
     */
    public function projectName($name)
    {
        $this->_projectName = (string) $name;
        return $this;
    }

    /**
     * Name of charitable project or program.
     * @return string Name of project.
     */
    public function getProjectName()
    {
        return $this->_projectName;
    }

    /**
     * URL address of charitable project or program website.
     * @param string $url Website of project.
     * @return \Catharsis\Web\YandexMoneyDonateFormWidget
     *         Reference to the current widget.
     */
    public function projectSite($url)
    {
        $this->_projectSite = (string) $url;
        return $this;
    }

    /**
     * URL address of charitable project or program website.
     * @return string Website of project.
     */
    public function getProjectSite()
    {
        return $this->_projectSite;
    }

    /**
     * Monetary sum to transfer to Yandex.Money account.
     * @param type $sum Payment sum.
     * @return \Catharsis\Web\YandexMoneyDonateFormWidget
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
     * Specifies text to display on button.
     * Default is 1 ("Donate").
     * @param integer $text Numeric code of text to display.
     * @return \Catharsis\Web\YandexMoneyDonateFormWidget
     *         Reference to the current widget.
     */
    public function text($text)
    {
        $this->_text = (int) $text;
        return $this;
    }

    /**
     * Specifies text to display on button.
     * Default is 1 ("Donate").
     * @return integer Numeric code of text to display.
     */
    public function getText()
    {
        return $this->_text;
    }

    /**
     * Text to display on button.
     * Default is 1 ("Donate").
     * @param string $type Numeric code of text to display.
     * @return \Catharsis\Web\YandexMoneyDonateFormWidget
     *         Reference to the current widget.
     */
    public function type($type)
    {
        $this->type = (string) $type;
        return $this;
    }

    /**
     * Text to display on button.
     * Default is 1 ("Donate").
     * @return string Numeric code of text to display.
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
            || empty($this->getDescriptionText())
        ) {
            return '';
        }

        $width = 0;
        switch ($this->getText()) {
        case YandexMoneyDonateFormText::DONATE :
            $width = 523;
            break;

        case YandexMoneyDonateFormText::GIVE :
            $width = 487;
            break;

        case YandexMoneyDonateFormText::TRANSFER :
            $width = 495;
            break;

        case YandexMoneyDonateFormText::SEND :
            $width = 494;
            break;

        case YandexMoneyDonateFormText::SUPPORT :
            $width = 507;
            break;

        default :
            $width = 523;
            break;
        }
        if (!$this->getCards()) {
            $width -= 69;
        }

        $cards = $this->getCards() ? '&payment-type-choice=on' : '';
        $show_description = $this->getDescription() ? '&target-visibility=on' : '';
        $payer_comment = $this->getAskPayerComment() ? "&comment=on&hint={$this->getCommentHint()}" : '';
        $payer_full_name = $this->getAskPayerFullName() ? '&fio=on' : '';
        $payer_email = $this->getAskPayerEmail() ? '&mail=on' : '';
        $payer_phone = $this->getAskPayerPhone() ? '&phone=on' : '';

        return self::htmlTag(
            'iframe',
            array(
                'allowtransparency' => true,
                'frameborder' => 0,
                'height' => $this->getAskPayerComment() ? 210 : 133,
                'scrolling' => "no",
                'src' => "https://money.yandex.ru/embed/donate.xml?account={$this->getAccount()}&quickpay=donate{$cards}&default-sum={$this->getSum()}&targets={$this->getDescriptionText()}{$show_description}&project-name={$this->getProjectName()}&project-site={$this->getProjectSite()}&button-text=0{$this->getText()}{$payer_comment}{$payer_full_name}{$payer_email}{$payer_phone}",
                'width' => $width
            )
        );
    }
}

?>
