<?php
namespace Catharsis\Web;

/**
 * Renders Pinterest embedded pin widget.
 * Requires {@link WidgetsScripts::pinterest} script to be included.
 * @link http://business.pinterest.com/widget-builder/#do_embed_pin
 */
class PinterestPinWidget extends HtmlWidgetBase
{
  private $id;

  /**
   * Unique identifier of Pinterest Pin.
   * @param string $id Identifier of pin.
   * @return \Catharsis\Web\PinterestPinWidget Reference to the current widget.
   */
  public function id($id)
  {
    $this->id = (string) $id;
    return $this;
  }

  /**
   * Returns HTML markup text of widget.
   */
  public function __toString()
  {
    if (empty($this->id))
    {
      return "";
    }

    return self::html_tag("a", array(
      "data-pin-do" => "embedPin",
      "href" => "http://www.pinterest.com/pin/$this->id"));
  }
}