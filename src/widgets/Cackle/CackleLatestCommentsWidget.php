<?php
/**
 * CackleLatestCommentsWidget class.
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
 * Renders Cackle latest comments widget for registered website.
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
class CackleLatestCommentsWidget extends HtmlWidget
{
    private $_account;
    private $_avatarSize = 32;
    private $_max = 5;
    private $_textSize = 150;
    private $_titleSize = 40;

    /**
     * Identifier of registered website in the "Cackle" comments system.
     * This attribute is required.
     * @param string $account Identifier of website.
     * @return \Catharsis\Web\CackleLatestCommentsWidget
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
     * Size of user avatars. Default is 32.
     * @param integer $size Size of user avatars.
     * @return \Catharsis\Web\CackleLatestCommentsWidget
     *         Reference to the current widget.
     */
    public function avatarSize($size)
    {
        $this->_avatarSize = (int) $size;
        return $this;
    }

    /**
     * Size of user avatars. Default is 32.
     * @return integer Size of user avatars.
     */
    public function getAvatarSize()
    {
        return $this->_avatarSize;
    }

    /**
     * Number of comments to display. Maximum 100, default 5.
     * @param integer $max Number of comments to display.
     * @return \Catharsis\Web\CackleLatestCommentsWidget
     *         Reference to the current widget.
     */
    public function max($max)
    {
        $this->_max = (int) $max;
        return $this;
    }

    /**
     * Number of comments to display. Maximum 100, default 5.
     * @return integer Number of comments to display.
     */
    public function getMax()
    {
        return $this->_max;
    }

    /**
     * Maximum allowed count of characters in comment (0 - do not cut).
     * Default is 150.
     * @param integer $size Maximum count of characters in comment.
     * @return \Catharsis\Web\CackleLatestCommentsWidget
     *         Reference to the current widget.
     */
    public function textSize($size)
    {
        $this->_textSize = (int) $size;
        return $this;
    }

    /**
     * Maximum allowed count of characters in comment (0 - do not cut).
     * Default is 150.
     * @return integer Maximum count of characters in comment.
     */
    public function getTextSize()
    {
        return $this->_textSize;
    }

    /**
     * Maximum allowed count of characters in title (0 - do not cut).
     * Default is 40.
     * @param integer $size Maximum count of characters in title.
     * @return \Catharsis\Web\CackleLatestCommentsWidget
     *         Reference to the current widget.
     */
    public function titleSize($size)
    {
        $this->_titleSize = (int) $size;
        return $this;
    }

    /**
     * Maximum allowed count of characters in title (0 - do not cut).
     * Default is 40.
     * @return integer Maximum count of characters in title.
     */
    public function getTitleSize()
    {
        return $this->_titleSize;
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
            'widget' => 'CommentRecent',
            'id' => $this->getAccount(),
            'size' => $this->getMax(),
            'avatarSize' => $this->getAvatarSize(),
            'textSize' => $this->getTextSize(),
            'titleSize' => $this->getTitleSize()
        );

        $config_json = json_encode($config, JSON_FORCE_OBJECT);

        return
            '<div id="mc-last"></div>'
            . '<a id="mc-link" href="http://cackle.me">Социальные комментарии <b style="color:#4FA3DA">Cackl</b><b style="color:#F65077">e</b></a>'
            . self::javascriptInline(
                "cackle_widget = window.cackle_widget || []; cackle_widget.push(${config_json});"
            );
    }
}

?>
