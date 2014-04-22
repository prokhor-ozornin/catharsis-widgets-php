<?php
namespace Catharsis\Web;

/**
 * Renders VKontakte comments widget.
 * Requires {@link WidgetsScripts::vkontakte} script to be included.
 * @link http://vk.com/dev/Comments
 */
class VkontakteCommentsWidget extends HtmlWidgetBase
{
  private $attach = array();
  private $limit = VkontakteCommentsLimit::Limit5;
  private $width;

  /**
   * Collection of attachment types, which are allowed in comment posts.
   * @param array $attach Allowed types of post attachments.
   * @return \Catharsis\Web\VkontakteCommentsWidget Reference to the current widget.
   */
  public function attach($attach)
  {
    $this->attach = (array) $attach;
    return $this;
  }

  /**
   * Maximum number of comments to display.
   * @param integer $limit Maximum number of comments.
   * @return \Catharsis\Web\VkontakteCommentsWidget Reference to the current widget.
   */
  public function limit($limit)
  {
    $this->limit = (int) $limit;
    return $this;
  }

  /**
   * Horizontal width of comment area.
   * @param string $width Width of comments widget.
   * @return \Catharsis\Web\VkontakteCommentsWidget Reference to the current widget.
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
    $config = array("limit" => $this->limit);
    if (!empty($this->attach))
    {
      $config["attach"] = implode(",", $this->attach);
    }
    else
    {
      $config["attach"] = false;
    }
    if (!empty($this->width))
    {
      $config["width"] = $this->width;
    }
    $config_json = json_encode($config, JSON_FORCE_OBJECT);

    return self::html_tag("div", array("id" => "vk_comments")).self::javascript_inline("VK.Widgets.Comments(\"vk_comments\", $config_json);");
  }
}