<?php
/**
 * CackleCommentsCountWidget class.
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
 * Initializes Cackle comments count widget to show comments count with hyperlinks.
 * Requires {@see \Catharsis\Web\WebWidgetsScripts::cackle()}
 * scripts bundle to be included.
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 * @see       http://ru.cackle.me/help/widget-api Cackle API description.
 */
class CackleCommentsCountWidget extends HtmlWidget
{
    private $_account;

    /**
     * Identifier of registered website in the "Cackle" comments system.
     * This attribute is required.
     * @param string $account Identifier of website.
     * @return \Catharsis\Web\CackleCommentsCountWidget
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
            'widget' => 'CommentCount',
            'id' => $this->getAccount()
        );

        $config_json = json_encode($config, JSON_FORCE_OBJECT);

        return self::javascriptInline(
            "cackle_widget = window.cackle_widget || []; cackle_widget.push(${config_json};"
        );
    }
}

?>
