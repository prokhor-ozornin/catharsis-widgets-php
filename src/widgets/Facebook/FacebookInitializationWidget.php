<?php
/**
 * FacebookInitializationWidget class.
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
 * Performs initialization of Facebook JavaScript API.
 * Initialization must be performed before rendering Facebook widgets on the page.
 * Requires {@link WidgetsScriptsBundles::facebook()} scripts bundle to be included.
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 * @link      https://developers.facebook.com/docs/javascript
 */
class FacebookInitializationWidget extends HtmlWidget
{
    private $_appId;

    /**
     * Identifier of registered Facebook application.
     * This attribute is required.
     * @param string $appId Identifier of Facebook application.
     * @return \Catharsis\Web\FacebookInitializationWidget
     *         Reference to the current widget.
     */
    public function appId($appId)
    {
        $this->_appId = (string) $appId;
        return $this;
    }

    /**
     * Identifier of registered Facebook application.
     * @return string Identifier of Facebook application.
     */
    public function getAppId()
    {
        return $this->_appId;
    }

    /**
     * Returns HTML markup text of widget.
     * @return string Widget's HTML markup.
     */
    public function __toString()
    {
        if (empty($this->getAppId())) {
            return '';
        }

        return
        self::htmlTag(
            'div',
            array('id' => 'fb-root')
        )
        . '<script type="text/javascript">(function(d, s, id) {{ var js, fjs = d.getElementsByTagName(s)[0];'
        . 'if (d.getElementById(id)) return; js = d.createElement(s); js.id = id;'
        . "js.src = \"//connect.facebook.net/en_US/all.js#xfbml=1&appId={$this->getAppId()}\";"
        . 'fjs.parentNode.insertBefore(js, fjs); }} (document, "script", "facebook-jssdk"));</script>';
    }
}

?>
