<?php
namespace Catharsis\Web;

/**
 * Renders Yandex social "Share" button.
 * Requires {@link WidgetsScripts::yandex_share} script to be included.
 */
class YandexSharePanelWidget extends HtmlWidget
{
    private $_language;
    private $_layout = YandexSharePanelLayout::Button;
    private $_services = array(
        "yaru",
        "vkontakte",
        "facebook",
        "twitter",
        "odnoklassniki",
        "moimir",
        "lj",
        "friendfeed",
        "moikrug",
        "gplus",
        "pinterest",
        "surfingbird"
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
     * List of included social services. Valid names include : [yaru, vkontakte, facebook, twitter, odnoklassniki ,moimir, lj, friendfeed, moikrug, gplus, pinterest, surfingbird].
     * @param array $services List of social services for which to render buttons.
     * @return \Catharsis\Web\YandexSharePanelWidget Reference to the current widget.
     */
    public function services($services)
    {
        $this->_services = (array) $services;
        return $this;
    }

    /**
     * Returns HTML markup text of widget.
     */
    public function __toString()
    {
        return self::htmlTag("div", array(
            "class" => "yashare-auto-init",
            "data-yashareL10n" => empty($this->_language)
                ? $this->userLanguage()
                : $this->_language,
            "data-yashareQuickServices" => implode(",", $this->_services),
            "data-yashareType" => $this->_layout));
    }
}

?>
