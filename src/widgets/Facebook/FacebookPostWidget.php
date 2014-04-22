<?php
namespace Catharsis\Web;

/**
 * Renders embedded Facebook post on web page.
 * Requires Facebook JavaScript initialization to be performed first.
 * @link https://developers.facebook.com/docs/plugins/embedded-posts
 */
class FacebookPostWidget extends HtmlWidgetBase
{
  private $url;
  private $width;

  /**
   * Specified URL address of Facebook post to embed.
   * This attribute is required.
   * @param string $url URL of Facebook post.
   * @return \Catharsis\Web\FacebookPostWidget Reference to the current widget.
   */
  public function url($url)
  {
    $this->url = (string) $url;
    return $this;
  }

  /**
   * Specifies width of Facebook post area on page.
   * @param string $width Width of post.
   * @return \Catharsis\Web\FacebookPostWidget Reference to the current widget.
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
    if (empty($this->url))
    {
      return "";
    }

    return self::html_tag("div", array(
      "class" => "fb-post",
      "data-href" => $this->url,
      "data-width" => $this->width));
  }
}