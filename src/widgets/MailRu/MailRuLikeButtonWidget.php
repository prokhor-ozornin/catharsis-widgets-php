<?php
namespace Catharsis\Web;

/**
 * Renders Mail.ru "Like" button on web page.
 * Requires {@link WidgetsScripts::mailru} script to be included.
 * @link http://api.mail.ru/sites/plugins/share
 */
class MailRuLikeButtonWidget extends HtmlWidgetBase
{
  private $counter = true;
  private $counter_position = MailRuLikeButtonCounterPosition::Right;
  private $layout = MailRuLikeButtonLayout::First;
  private $size = MailRuLikeButtonSize::Size20;
  private $text = true;
  private $text_type = MailRuLikeButtonTextType::First;
  private $type = MailRuLikeButtonType::All;

  /**
   * Whether to render share counter next to a button. Default is TRUE.
   * @param boolean $counter TRUE to show share counter, FALSE to hide.
   * @return \Catharsis\Web\MailRuLikeButtonWidget Reference to the current widget.
   */
  public function counter($counter = true)
  {
    $this->counter = (bool) $counter;
    return $this;
  }

  /**
   * Position of a share counter.
   * @param string $position Position of a counter.
   * @return \Catharsis\Web\MailRuLikeButtonWidget Reference to the current widget.
   */
  public function counter_position($position)
  {
    $this->counter_position = (string) $position;
    return $this;
  }

  /**
   * Visual layout/appearance of button.
   * @param integer $layout Visual layout of button.
   * @return \Catharsis\Web\MailRuLikeButtonWidget Reference to the current widget.
   */
  public function layout($layout)
  {
    $this->layout = (int) $layout;
    return $this;
  }

  /**
   * Vertical size of button.
   * @param string $size Vertical size of button.
   * @return \Catharsis\Web\MailRuLikeButtonWidget Reference to the current widget.
   */
  public function size($size)
  {
    $this->size = (string) $size;
    return $this;
  }

  /**
   * Whether to show text label on button. Default is TRUE.
   * @param boolean $text TRUE to show text label, FALSE to hide.
   * @return \Catharsis\Web\MailRuLikeButtonWidget Reference to the current widget.
   */
  public function text($text = true)
  {
    $this->text = (bool) $text;
    return $this;
  }

  /**
   * Type of button.
   * @param type $type Type of button.
   * @return \Catharsis\Web\MailRuLikeButtonWidget Reference to the current widget.
   */
  public function type($type)
  {
    $this->type = (string) $type;
    return $this;
  }

  /**
   * Type of text label to show on button.
   * @param integer $type Type of text label.
   * @return \Catharsis\Web\MailRuLikeButtonWidget Reference to the current widget.
   */
  public function text_type($type)
  {
    $this->text_type = (int) $type;
    return $this;
  }

  /**
   * Returns HTML markup text of widget.
   */
  public function __toString()
  {
    $config = array("sz" => $this->size, "st" => $this->layout, "tp" => $this->type);

    if (!$this->counter)
    {
      $config["nc"] = 1;
    }
    else if (!empty($this->counter_position) && strtolower($this->counter_position) == MailRuLikeButtonCounterPosition::Upper)
    {
      $config["vt"] = 1;
    }

    if (!$this->text)
    {
      $config["nt"] = 1;
    }
    else
    {
      $config["cm"] = $this->text_type;
      $config["ck"] = $this->text_type;
    }

    return self::html_tag("a", array(
      "class" => "mrc__plugin_uber_like_button",
      "data-mrc-config" => json_encode($config, JSON_FORCE_OBJECT),
      "href" => "http://connect.mail.ru/share",
      "target" => "_blank"),
      "Нравится");
  }
}