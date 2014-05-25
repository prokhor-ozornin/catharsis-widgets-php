<?php
/**
 * GoogleAnalyticsWidget class.
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
 * Includes Google Analytics JavaScript code into web page.
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 * @link      http://www.google.com/analytics
 */
class GoogleAnalyticsWidget extends HtmlWidget
{
    private $_account;
    private $_domain;

    /**
     * Google Analytics site identifier (UA-*).
     * This attribute is required.
     * @param string $account Site identifier.
     * @return \Catharsis\Web\GoogleAnalyticsWidget
     *         Reference to the current widget.
     */
    public function account($account)
    {
        $this->_account = (string) $account;
        return $this;
    }

    /**
     * Google Analytics site identifier (UA-*).
     * @return string Site identifier.
     */
    public function getAccount()
    {
        return $this->_account;
    }

    /**
     * Google Analytics site domain name.
     * This attribute is required.
     * @param string $domain Site domain name.
     * @return \Catharsis\Web\GoogleAnalyticsWidget
     *         Reference to the current widget.
     */
    public function domain($domain)
    {
        $this->_domain = (string) $domain;
        return $this;
    }

    /**
     * Google Analytics site domain name.
     * @return string Site domain name.
     */
    public function getDomain()
    {
        return $this->_domain;
    }

    /**
     * Returns HTML markup text of widget.
     * @return string Widget's HTML markup.
     */
    public function __toString()
    {
        if (empty($this->getAccount()) || empty($this->getDomain())) {
            return '';
        }

        return <<< EOT
<script type="text/javascript">
(function (i, s, o, g, r, a, m)
{{ i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function ()
{{ (i[r].q = i[r].q || []).push(arguments) }}, i[r].l = 1 * new Date();
a = s.createElement(o), m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g;
m.parentNode.insertBefore(a, m) }})
(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
ga("create", "{$this->getAccount()}", "{$this->getDomain()}");
ga("send", "pageview");
</script>";
EOT;
    }
}

?>
