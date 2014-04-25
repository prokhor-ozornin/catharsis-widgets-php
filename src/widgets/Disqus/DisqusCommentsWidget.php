<?php
namespace Catharsis\Web;

/**
 * Renders Disqus comments widget for registered website.
 * Requires {@link WidgetsScriptsBundles::disqus()} scripts bundle to be included.
 * @link http://disqus.com/websites
 */
class DisqusCommentsWidget extends HtmlWidget
{
    private $_account;

    /**
     * Identifier of registered website in the "Disqus" comments system.
     * Identifier of website.
     * @param string $account Identifier of website.
     * @return \Catharsis\Web\DisqusCommentsWidget Reference to the current widget.
     */
    public function account($account)
    {
        $this->_account = (string) $account;
        return $this;
    }

    /**
     * Returns HTML markup text of widget.
     */
    public function __toString()
    {
        if (empty($this->_account)) {
            return "";
        }

        return "<div id=\"disqus_thread\"></div><script type=\"text/javascript\">var disqus_shortname = \"{$this->_account}\";</script><noscript>Please enable JavaScript to view the <a href=\"http://disqus.com/?ref_noscript\">comments powered by Disqus.</a></noscript><a href=\"http://disqus.com\" class=\"dsq-brlink\">comments powered by <span class=\"logo-disqus\">Disqus</span></a>";
    }
}

?>
