<?php
namespace Catharsis\Web;

/**
 * Renders Mail.ru Group (People In Group) widget.
 * Requires {@link WidgetsScripts::mailru} script to be included.
 * @link http://api.mail.ru/sites/plugins/groups
 */
class MailRuGroupsWidget extends HtmlWidgetBase
{
  private $account;
  private $background_color;
  private $button_color;
  private $domain;
  private $height;
  private $subscribers = true;
  private $text_color;
  private $width;

  /**
   * Account name of Mail.ru group.
   * This attribute is required.
   * @param string $account Group name.
   * @return \Catharsis\Web\MailRuGroupsWidget Reference to the current widget.
   */
  public function account($account)
  {
    $this->account = (string) $account;
    return $this;
  }

  /**
   * Color of Groups box background.
   * @param string $color Background color.
   * @return \Catharsis\Web\MailRuGroupsWidget Reference to the current widget.
   */
  public function background_color($color)
  {
    $this->background_color = (string) $color;
    return $this;
  }

  /**
   * Color of "Subscribe" button in Groups box.
   * @param string $color Button color.<
   * @return \Catharsis\Web\MailRuGroupsWidget Reference to the current widget.
   */
  public function button_color($color)
  {
    $this->button_color = (string) $color;
    return $this;
  }

  /**
   * Target site domain.
   * @param string $domain Target domain.
   * @return \Catharsis\Web\MailRuGroupsWidget Reference to the current widget.
   */
  public function domain($domain)
  {
    $this->domain = (string) $domain;
    return $this;
  }

  /**
   * Height of Groups box area.
   * This attribute is required.
   * @param string $height Area height.
   * @return \Catharsis\Web\MailRuGroupsWidget Reference to the current widget.
   */
  public function height($height)
  {
    $this->height = (string) $height;
    return $this;
  }

  /**
   * Whether to show portraits of group's subscribers or not.
   * @param boolean $show TRUE to show subscribers, FALSE to hide.
   * @return \Catharsis\Web\MailRuGroupsWidget Reference to the current widget.
   */
  public function subscribers($show = true)
  {
    $this->subscribers = (bool) $show;
    return $this;
  }

  /**
   * Color of Groups box text labels.
   * @param string $color Text color.
   * @return \Catharsis\Web\MailRuGroupsWidget Reference to the current widget.
   */
  public function text_color($color)
  {
    $this->text_color = (string) $color;
    return $this;
  }

  /**
   * Width of Groups box area.
   * This attribute is required.
   * @param string $width Area width.
   * @return \Catharsis\Web\MailRuGroupsWidget Reference to the current widget.
   */
  public function width($width)
  {
    $this->width = (string) $width;
    return $this;
  }

  /**
   * Returns HTML markup text of widget.
   */
  public function __toString()
  {
    if (empty($this->account) || empty($this->width) || empty($this->height))
    {
      return "";
    }

    $config = array("group" => $this->account, "max_sub" => 50, "width" => $this->width, "height" => $this->height);
    if ($this->subscribers)
    {
      $config["show_subscribers"] = "true";
    }
    if (!empty($this->background_color))
    {
      $config["background"] = $this->background_color;
    }
    if (!empty($this->text_color))
    {
      $config["color"] = $this->text_color;
    }
    if (!empty($this->button_color))
    {
      $config["button_background"] = $this->button_color;
    }
    if (!empty($this->domain))
    {
      $config["domain"] = $this->domain;
    }

    $query = self::url_query($config);
    $config_json = htmlentities(json_encode($config, JSON_FORCE_OBJECT), ENT_HTML401 | ENT_QUOTES);

    return "<a target=\"_blank\" class=\"mrc__plugin_groups_widget\" href=\"http://connect.mail.ru/groups_widget?{$query}\" rel=\"{$config_json}\">Группы</a>";
  }
}