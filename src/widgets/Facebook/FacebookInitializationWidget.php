<?php
namespace Catharsis\Web;

/**
 * Performs initialization of Facebook JavaScript API. Initialization must be performed before rendering Facebook widgets on the page.
 * Requires {@link WidgetsScriptsBundles::facebook()} scripts bundle to be included.
 * @link https://developers.facebook.com/docs/javascript
 */
class FacebookInitializationWidget extends HtmlWidget
{
    private $_appId;

    /**
     * Identifier of registered Facebook application.
     * This attribute is required.
     * @param string $appId Identifier of Facebook application.
     * @return \Catharsis\Web\FacebookInitializationWidget Reference to the current widget.
     */
    public function appId($appId)
    {
        $this->_appId = (string) $appId;
        return $this;
    }

    /**
     * Returns HTML markup text of widget.
     */
    public function __toString()
    {
        if (empty($this->_appId)) {
            return "";
        }

        return self::htmlTag("div", array("id" => "fb-root"))."<script type=\"text/javascript\">(function(d, s, id) {{ var js, fjs = d.getElementsByTagName(s)[0]; if (d.getElementById(id)) return; js = d.createElement(s); js.id = id; js.src = \"//connect.facebook.net/en_US/all.js#xfbml=1&appId={$this->_appId}\";  fjs.parentNode.insertBefore(js, fjs); }}(document, 'script', 'facebook-jssdk'));</script>";
    }
}

?>
