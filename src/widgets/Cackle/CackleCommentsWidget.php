<?php
/**
 * CackleCommentsWidget class.
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
 * Renders Cackle comments widget for registered website.
 * Requires {@link WidgetsScriptsBundles::cackle()} scripts bundle to be included.
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 * @link      http://ru.cackle.me/help/widget-api
 */
class CackleCommentsWidget extends HtmlWidget
{
    private $_account;

    /**
     * Identifier of registered website in the "Cackle" comments system.
     * This attribute is required.
     * @param string $account Identifier of website.
     * @return \Catharsis\Web\CackleCommentsWidget
     *         Reference to the current widget.
     */
    public function account($account)
    {
        $this->_account = (string) $account;
        return $this;
    }

    /**
     * Identifier of registered website in the "Cackle" comments system.
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

        $config = array(
            'widget' => 'Comment',
            'id' => $this->getAccount()
        );

        $config_json = json_encode($config, JSON_FORCE_OBJECT);

        return
        '<div id="mc-container"></div>'
        . self::javascriptInline(
            "cackle_widget = window.cackle_widget || []; cackle_widget.push($config_json);"
        )
        . '<a id="mc-link" href="http://cackle.me">Социальные комментарии <b style="color:#4FA3DA">Cackl</b><b style="color:#F65077">e</b></a>';
    }
}

?>
