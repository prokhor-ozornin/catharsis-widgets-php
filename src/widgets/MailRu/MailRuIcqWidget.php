<?php
/**
 * MailRuIcqWidget class.
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
 * Adds "ICQ On-Site" widget to web page.
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 * @link      http://api.mail.ru/sites/plugins/icq-on-site
 */
class MailRuIcqWidget extends HtmlWidget
{
    private $_account;
    private $_language;

    /**
     * ICQ UIN number of contact person.
     * If specified, "Ask Me" option will be added to the widget.
     * @param string $account ICQ UIN number.
     * @return \Catharsis\Web\MailRuIcqWidget Reference to the current widget.
     */
    public function account($account)
    {
        $this->_account = (string) $account;
        return $this;
    }

    /**
     * ICQ UIN number of contact person.
     * If specified, "Ask Me" option will be added to the widget.
     * @return string ICQ UIN number.
     */
    public function getAccount()
    {
        return $this->_account;
    }

    /**
     * Two-letter ISO language code that determines the interface language.
     * Default is "ru".
     * @param string $language ISO language code for interface.
     * @return \Catharsis\Web\MailRuIcqWidget Reference to the current widget.
     */
    public function language($language)
    {
        $this->_language = (string) $language;
        return $this;
    }

    /**
     * Two-letter ISO language code that determines the interface language.
     * Default is "ru".
     * @return string ISO language code for interface.
     */
    public function getLanguage()
    {
        return $this->_language;
    }

    /**
     * Returns HTML markup text of widget.
     * @return string Widget's HTML markup.
     */
    public function __toString()
    {
        $language = empty($this->getLanguage()) ? 'ru' : $this->getLanguage();
        $icq_account_js = empty($this->getAccount())
            ? null
            : self::javascriptInline("window.ICQ = {siteOwner:'{$this->getAccount()}'};");

        return
            self::javascriptLink("http://c.icq.com/siteim/icqbar/js/partners/initbar_{$language}.js")
            . $icq_account_js;
    }
}

?>
