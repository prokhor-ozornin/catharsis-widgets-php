<?php
namespace Catharsis\Web;

/**
 * Initializes Cackle comments count widget to show comments count with hyperlinks.
 * Requires {@link WidgetsScriptsBundles::cackle()} scripts bundle to be included.
 * @link http://ru.cackle.me/help/widget-api
 */
class CackleCommentsCountWidget extends HtmlWidget
{
    private $_account;

    /**
     * Identifier of registered website in the "Cackle" comments system.
     * This attribute is required.
     * @param string $account Identifier of website.
     * @return \Catharsis\Web\CackleCommentsCountWidget Reference to the current widget.
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

        $config = array("widget" => "CommentCount", "id" => $this->_account);
        $config_json = json_encode($config, JSON_FORCE_OBJECT);
        return self::javascriptInline("cackle_widget = window.cackle_widget || [];cackle_widget.push(${config_json};");
    }
}

?>
