<?php
/**
 * DisqusCommentsWidget class.
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
 * Renders Disqus comments widget for registered website.
 * Requires {@link WidgetsScriptsBundles::disqus()} scripts bundle to be included.
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 * @link      http://disqus.com/websites
 */
class DisqusCommentsWidget extends HtmlWidget
{
    private $_account;

    /**
     * Identifier of registered website in the "Disqus" comments system.
     * This attribute is required.
     * @param string $account Identifier of website.
     * @return \Catharsis\Web\DisqusCommentsWidget
     *         Reference to the current widget.
     */
    public function account($account)
    {
        $this->_account = (string) $account;
        return $this;
    }

    /**
     * Identifier of registered website in the "Disqus" comments system.
     * @return string Identifier of website.
     */
    public function getAccount()
    {
        return $this->_account;
    }

    /**
     * Returns HTML markup text of widget.
     * @return string Widget's HTML markup.
     */
    public function __toString()
    {
        if (empty($this->getAccount())) {
            return '';
        }

        return
        '<div id="disqus_thread"></div>'
        . "<script type=\"text/javascript\">var disqus_shortname = \"{$this->getAccount()}\";</script>"
        . '<noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>'
        . '<a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>';
    }
}

?>
