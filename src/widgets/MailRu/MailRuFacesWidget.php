<?php
namespace Catharsis\Web;

/**
 * Renders Mail.ru Faces (People On Site) widget.
 * Requires {@link WidgetsScripts::mailru} script to be included.</para>
 * @link http://api.mail.ru/sites/plugins/faces
 */
class MailRuFacesWidget extends HtmlWidgetBase
{
  private $background_color;
  private $border_color;
  private $domain;
  private $font = MailRuFacesFont::Arial;
  private $height;
  private $hyperlink_color;
  private $show_title = true;
  private $text_color;
  private $title;
  private $title_color;
  private $width;

  /**
   * Color of Faces box background.
   * @param string $color Background color.
   * @return \Catharsis\Web\MailRuFacesWidget Reference to the current widget.
   */
  public function background_color($color)
  {
    $this->background_color = (string) $color;
    return $this;
  }

  /**
   * Color of Faces box border.
   * @param string $color Border color.
   * @return \Catharsis\Web\MailRuFacesWidget Reference to the current widget.
   */
  public function border_color($color)
  {
    $this->border_color = (string) $color;
    return $this;
  }

  /**
   * Domain of target site with which users have interacted.
   * This attribute is required.
   * @param string $domain Target site domain.
   * @return \Catharsis\Web\MailRuFacesWidget Reference to the current widget.
   */
  public function domain($domain)
  {
    $this->domain = (string) $domain;
    return $this;
  }

  /**
   * Name of font, used for text labels.
   * @param string $font Font name.
   * @return \Catharsis\Web\MailRuFacesWidget Reference to the current widget.
   */
  public function font($font)
  {
    $this->font = (string) $font;
    return $this;
  }

  /**
   * Height of Faces box area.
   * This attribute is required.
   * @param string $height Area height.
   * @return \Catharsis\Web\MailRuFacesWidget Reference to the current widget.
   */
  public function height($height)
  {
    $this->height = (string) $height;
    return $this;
  }

  /**
   * Color of Faces box hyperlinks.
   * @param string $color Hyperlinks color.
   * @return \Catharsis\Web\MailRuFacesWidget Reference to the current widget.
   */
  public function hyperlink_color($color)
  {
    $this->hyperlink_color = (string) $color;
    return $this;
  }

  /**
   * Whether to show or hide Faces box title.
   * @param boolean $show TRUE to show title, FALSE to hide.
   * @return \Catharsis\Web\MailRuFacesWidget Reference to the current widget.
   */
  public function show_title($show = true)
  {
    $this->show_title = (bool) $show;
    return $this;
  }

  /**
   * Color of Faces box text labels.
   * @param string $color Text color.
   * @return \Catharsis\Web\MailRuFacesWidget Reference to the current widget.
   */
  public function text_color($color)
  {
    $this->text_color = (string) $color;
    return $this;
  }

  /**
   * Title text label of Faces box.
   * @param string $title Title text.
   * @return \Catharsis\Web\MailRuFacesWidget Reference to the current widget.
   */
  public function title($title)
  {
    $this->title = (string) $title;
    return $this;
  }

  /**
   * Color of Faces box title.
   * @param string $color Title color.
   * @return \Catharsis\Web\MailRuFacesWidget Reference to the current widget.
   */
  public function title_color($color)
  {
    $this->title_color = (string) $color;
    return $this;
  }

  /**
   * Width of Faces box area.
   * This attribute is required.
   * @param string $width Area width.
   * @return \Catharsis\Web\MailRuFacesWidget Reference to the current widget.
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
    if (empty($this->domain) || empty($this->width) || empty($this->height))
    {
      return "";
    }

    $config = array("domain" => $this->domain, "font" => $this->font, "width" => $this->width, "height" => $this->height);
    if (!empty($this->title))
    {
      $config["title"] = $this->title;
    }
    if (!$this->show_title)
    {
      $config["notitle"] = "true";
    }
    if (!empty($this->title_color))
    {
      $config["title-color"] = $this->title_color;
    }
    if (!empty($this->background_color))
    {
      $config["background"] = $this->background_color;
    }
    if (!empty($this->border_color))
    {
      $config["border"] = $this->border_color;
    }
    if (!empty($this->text_color))
    {
      $config["color"] = $this->text_color;
    }
    if (!empty($this->hyperlink_color))
    {
      $config["link-color"] = $this->hyperlink_color;
    }

    $query = self::url_query($config);
    $config_json = htmlentities(json_encode($config, JSON_FORCE_OBJECT), ENT_HTML401 | ENT_QUOTES);

    return "<a class=\"mrc__plugin_share_friends\" href=\"http://connect.mail.ru/share_friends?{$query}\" rel=\"{$config_json}\">Друзья</a>";
  }
}