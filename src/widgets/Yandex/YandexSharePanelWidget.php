<?php
/**
 * YandexSharePanelWidget class.
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
 * Renders Yandex social "Share" button.
 * Requires {@link WidgetsScripts::yandex_share} script to be included.
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
class YandexSharePanelWidget extends HtmlWidget
{
    private $_language;
    private $_layout = YandexSharePanelLayout::BUTTON;
    private $_services = array(
        'yaru',
        'vkontakte',
        'facebook',
        'twitter',
        'odnoklassniki',
        'moimir',
        'lj',
        'friendfeed',
        'moikrug',
        'gplus',
        'pinterest',
        'surfingbird'
    );

    /**
     * Button's interface language.
     * @param string $language Interface language.
     * @return \Catharsis\Web\YandexSharePanelWidget Reference to the current widget.
     */
    public function language($language)
    {
        $this->_language = (string) $language;
        return $this;
    }

    /**
     * Button's interface language.
     * @return string Interface language.
     */
    public function getLanguage()
    {
        return $this->_language;
    }

    /**
     * Visual layout/appearance of the button.
     * @param string $layout Layout of button.
     * @return \Catharsis\Web\YandexSharePanelWidget Reference to the current widget.
     */
    public function layout($layout)
    {
        $this->_layout = (string) $layout;
        return $this;
    }

    /**
     * Visual layout/appearance of the button.
     * @return string Layout of button.
     */
    public function getLayout()
    {
        return $this->_layout;
    }

    /**
     * List of included social services.
     * Valid names include :
     * [yaru, vkontakte, facebook, twitter, odnoklassniki ,moimir, lj, friendfeed,
     *  moikrug, gplus, pinterest, surfingbird].
     * @param array $services List of social services for which to render buttons.
     * @return \Catharsis\Web\YandexSharePanelWidget Reference to the current widget.
     */
    public function services($services)
    {
        $this->_services = (array) $services;
        return $this;
    }

    /**
     * List of included social services.
     * Valid names include :
     * [yaru, vkontakte, facebook, twitter, odnoklassniki ,moimir, lj, friendfeed,
     *  moikrug, gplus, pinterest, surfingbird].
     * @return array List of social services for which to render buttons.
     */
    public function getServices()
    {
        return $this->_services;
    }

    /**
     * Returns HTML markup text of widget.
     * @return string Widget's HTML markup.
     */
    public function __toString()
    {
        return self::htmlTag(
            'div',
            array(
                'class' => 'yashare-auto-init',
                'data-yashareL10n' => empty($this->getLanguage()) ? $this->userLanguage() : $this->getLanguage(),
                'data-yashareQuickServices' => implode(',', $this->getServices()),
                'data-yashareType' => $this->getLayout()
            )
        );
    }
}

?>
