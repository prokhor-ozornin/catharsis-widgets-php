<?php
namespace Catharsis\Web;

/**
 * Renders Pinterest Profile widget with user's latest pins.
 * Requires {@link WidgetsScripts::pinterest} script to be included.
 * @link http://business.pinterest.com/widget-builder/#do_embed_user
 */
class PinterestProfileWidget extends HtmlWidgetBase
{
  private $account;
  private $height;
  private $image_width;
  private $width;

  /**
   * Pinterest user account.
   * This attribute is required.
   * @param string $account Account name.
   * @return \Catharsis\Web\PinterestProfileWidget Reference to the current widget.
   */
  public function account($account)
  {
    $this->account = (string) $account;
    return $this;
  }

  /**
   * Total height of profile area in pixels.
   * Min: 60; leave blank for 175.
   * @param string $height Areas's height.
   * @return \Catharsis\Web\PinterestProfileWidget Reference to the current widget.
   */
  public function height($height)
  {
    $this->height = (string) $height;
    return $this;
  }

  /**
   * Sets predefined dimensions of area and images to make it look like a site's header.
   * @return \Catharsis\Web\PinterestProfileWidget Reference to the current widget.
   */
  public function header()
  {
    return $this->image_width(115)->height(120)->width(900);
  }

  /**
   * Width of profile area's image in pixels.
   * @param string $width
   * @return \Catharsis\Web\PinterestProfileWidget Reference to the current widget.
   */
  public function image_width($width)
  {
    $this->image_width = (string) $width;
    return $this;
  }

  /**
   * Sets predefined dimensions of area and images to make it look like a site's sidebar.
   * @return \Catharsis\Web\PinterestProfileWidget Reference to the current widget.
   */
  public function sidebar()
  {
    return $this->image_width(60)->height(800)->width(150);
  }

  /**
   * Sets predefined dimensions of area and images to make it look like a site's square.
   * @return \Catharsis\Web\PinterestProfileWidget Reference to the current widget.
   */
  public function square()
  {
    return $this->image_width(80)->height(320)->width(400);
  }

  /**
   * Total width of profile area in pixels.
   * Min: 130; leave blank for auto.
   * @param string $width
   * @return \Catharsis\Web\PinterestProfileWidget Reference to the current widget.
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
    if (empty($this->account))
    {
      return "";
    }

    return self::html_tag("a", array(
      "data-pin-board-width" => $this->width,
      "data-pin-do" => "embedUser",
      "data-pin-scale-height" => $this->height,
      "data-pin-scale-width" => $this->image_width,
      "href" => "http://www.pinterest.com/$this->account"));
  }
}