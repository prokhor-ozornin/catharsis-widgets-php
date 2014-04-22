<?php
namespace Catharsis\Web;

/**
 * Renders Yandex social "Share" button.
 * Requires {@link WidgetsScripts::yandex_share} script to be included.
 */
class YandexSharePanelWidget extends HtmlWidgetBase
{
  private $language;
  private $layout = YandexSharePanelLayout::Button;
  private $services = array("yaru", "vkontakte", "facebook", "twitter", "odnoklassniki", "moimir", "lj", "friendfeed", "moikrug", "gplus", "pinterest", "surfingbird");

  /**
   * Button's interface language.
   * @param string $language Interface language.
   * @return \Catharsis\Web\YandexSharePanelWidget Reference to the current widget.
   */
  public function language($language)
  {
    $this->language = (string) $language;
    return $this;
  }

  /**
   * Visual layout/appearance of the button.
   * @param string $layout Layout of button.
   * @return \Catharsis\Web\YandexSharePanelWidget Reference to the current widget.
   */
  public function layout($layout)
  {
    $this->layout = (string) $layout;
    return $this;
  }

  /**
   * List of included social services. Valid names include : [yaru, vkontakte, facebook, twitter, odnoklassniki ,moimir, lj, friendfeed, moikrug, gplus, pinterest, surfingbird].
   * @param array $services List of social services for which to render buttons.
   * @return \Catharsis\Web\YandexSharePanelWidget Reference to the current widget.
   */
  public function services($services)
  {
    $this->services = (array) $services;
    return $this;
  }

  /**
   * Returns HTML markup text of widget.
   */
  public function __toString()
  {
    return self::html_tag("div", array(
      "class" => "yashare-auto-init",
      "data-yashareL10n" => empty($this->language) ? $this->user_language() : $this->language,
      "data-yashareQuickServices" => implode(",", $this->services),
      "data-yashareType" => $this->layout));
  }
}