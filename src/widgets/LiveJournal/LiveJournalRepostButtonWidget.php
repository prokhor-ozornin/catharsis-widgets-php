<?php
namespace Catharsis\Web;

/**
 * Renders LiveJournal "Repost" button.
 * @link http://www.livejournal.com/support/faq/313.html
 */
class LiveJournalRepostButtonWidget extends HtmlWidgetBase
{
  private $text;
  private $title;

  /**
   * Text fragment to be reposted.
   * @param string $text Text fragment.
   * @return \Catharsis\Web\LiveJournalRepostButtonWidget Reference to the current widget.
   */
  public function text($text)
  {
    $this->text = (string) $text;
    return $this;
  }

  /**
   * Label text to display on the button.
   * @param string $title Button's label text.
   * @return \Catharsis\Web\LiveJournalRepostButtonWidget Reference to the current widget.
   */
  public function title($title)
  {
    $this->title = (string) $title;
    return $this;
  }

  /**
   * Returns HTML markup text of widget.
   */
  public function __toString()
  {
    return self::html_tag("lj-repost", array("button" => $this->title), $this->text);
  }
}