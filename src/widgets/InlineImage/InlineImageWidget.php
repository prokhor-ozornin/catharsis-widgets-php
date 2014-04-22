<?php
namespace Catharsis\Web;

/**
 * Renders inline HTML image with BASE64-encoded binary data.
 */
class InlineImageWidget extends HtmlWidgetBase
{
  private $contents;
  private $format;

  /**
   * Binary contents of image.
   * @param binary $contents Image data.
   * @return \Catharsis\Web\InlineImageWidget Reference to the current widget.
   */
  public function contents($contents)
  {
    $this->contents = (string) $contents;
    return $this;
  }

  /**
   * MIME content-type of image.
   * @param string $format Image type.
   * @return \Catharsis\Web\InlineImageWidget Reference to the current widget.
   */
  public function format($format)
  {
    $this->format = (string) $format;
    return $this;
  }

  /**
   * Returns HTML markup text of widget.
   */
  public function __toString()
  {
    if (empty($this->contents))
    {
      return "";
    }

    $format = empty($this->format) ? "image" : $this->format;
    $contents = base64_encode($this->contents);

    return self::html_tag("img", array("src" => "data:{$format};base64,{$contents}"));
  }
}