<?php
namespace Catharsis\Web;

/**
 * Renders Cackle social user login widget for registered website.
 * Requires {@link WidgetsScriptsBundles::cackle()} scripts bundle to be included.
 * @link http://ru.cackle.me/help/widget-api
 */
class CackleLoginWidget extends HtmlWidgetBase
{
  private $account;

  /**
   * Identifier of registered website in the "Cackle" comments system.
   * This attribute is required.
   * @param string $account Identifier of website.
   * @return \Catharsis\Web\CackleLoginWidget Reference to the current widget.
   */
  public function account($account)
  {
    $this->account = (string) $account;
    return $this;
  }

  /**
   * Returns HTML markup text of widget.
   */
  public function __toString()
  {
    if (empty($this->account))
    {
      return "";
    }

    $config = array("widget" => "Login", "id" => $this->account);
    $config_json = json_encode($config, JSON_FORCE_OBJECT);

    return "<div id=\"mc-login\"></div>".self::javascript_inline("cackle_widget = window.cackle_widget || [];cackle_widget.push(${config_json});");
  }
}