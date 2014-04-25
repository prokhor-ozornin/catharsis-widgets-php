<?php
namespace Catharsis\Web;

/**
 * Adds "ICQ On-Site" widget to web page.
 * @link http://api.mail.ru/sites/plugins/icq-on-site
 */
class MailRuIcqWidget extends HtmlWidget
{
    private $_account;
    private $_language;

    /**
     * ICQ UIN number of contact person. If specified, "Ask Me" option will be added to the widget.
     * @param string $account ICQ UIN number.
     * @return \Catharsis\Web\MailRuIcqWidget Reference to the current widget.
     */
    public function account($account)
    {
        $this->_account = (string) $account;
        return $this;
    }

    /**
     * Two-letter ISO language code that determines the interface language. Default is "ru".
     * @param string $language ISO language code for interface.
     * @return \Catharsis\Web\MailRuIcqWidget Reference to the current widget.
     */
    public function language($language)
    {
        $this->_language = (string) $language;
        return $this;
    }

    /**
     * Returns HTML markup text of widget.
     */
    public function __toString()
    {
        $language = empty($this->_language) ? "ru" : $this->_language;
        $icq_account_js = empty($this->_account)
            ? null
            : self::javascriptInline("window.ICQ = {siteOwner:'{$this->_account}'};");

        return self::javascriptLink("http://c.icq.com/siteim/icqbar/js/partners/initbar_{$language}.js")
               . $icq_account_js;
    }
}

?>
