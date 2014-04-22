<?php
namespace Catharsis\Web;

/**
 * Renders Cackle latest comments widget for registered website.
 * Requires {@link WidgetsScriptsBundles::cackle()} scripts bundle to be included.
 * @link http://ru.cackle.me/help/widget-api
 */
class CackleLatestCommentsWidget extends HtmlWidgetBase
{
  private $account;
  private $avatar_size = 32;
  private $max = 5;
  private $text_size = 150;
  private $title_size = 40;

  /**
   * Identifier of registered website in the "Cackle" comments system.
   * This attribute is required.
   * @param string $account Identifier of website.
   * @return \Catharsis\Web\CackleLatestCommentsWidget Reference to the current widget.
   */
  public function account($account)
  {
    $this->account = (string) $account;
    return $this;
  }

  /**
   * Size of user avatars. Default is 32.
   * @param integer $size Size of user avatars.
   * @return \Catharsis\Web\CackleLatestCommentsWidget Reference to the current widget.
   */
  public function avatar_size($size)
  {
    $this->avatar_size = (int) $size;
    return $this;
  }

  /**
   * Number of comments to display. Maximum 100, default 5.
   * @param integer $max Number of comments to display.
   * @return \Catharsis\Web\CackleLatestCommentsWidget Reference to the current widget.
   */
  public function max($max)
  {
    $this->max = (int) $max;
    return $this;
  }

  /**
   * Maximum allowed count of characters in comment (0 - do not cut). Default is 150.
   * @param integer $size Maximum count of characters in comment.
   * @return \Catharsis\Web\CackleLatestCommentsWidget Reference to the current widget.
   */
  public function text_size($size)
  {
    $this->text_size = (int) $size;
    return $this;
  }

  /**
   * Maximum allowed count of characters in title (0 - do not cut). Default is 40.
   * @param integer $size Maximum count of characters in title.
   * @return \Catharsis\Web\CackleLatestCommentsWidget Reference to the current widget.
   */
  public function title_size($size)
  {
    $this->title_size = (int) $size;
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

    $config = array(
      "widget" => "CommentRecent",
      "id" => $this->account,
      "size" => $this->max,
      "avatarSize" => $this->avatar_size,
      "textSize" => $this->text_size,
      "titleSize" => $this->title_size);
    $config_json = json_encode($config, JSON_FORCE_OBJECT);

    return "<div id=\"mc-last\"></div>"
           ."<a id=\"mc-link\" href=\"http://cackle.me\">Социальные комментарии <b style=\"color:#4FA3DA\">Cackl</b><b style=\"color:#F65077\">e</b></a>"
           .self::javascript_inline("cackle_widget = window.cackle_widget || [];cackle_widget.push(${config_json});");
  }
}