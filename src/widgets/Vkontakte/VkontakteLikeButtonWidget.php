<?php
namespace Catharsis\Web;

/**
 * Renders VKontakte "Like" button widget.
 * Requires {@link WidgetsScripts::vkontakte} script to be included.
 * @link http://vk.com/dev/Like
 */
class VkontakteLikeButtonWidget extends HtmlWidgetBase
{
  private $height;
  private $layout;
  private $page_description;
  private $page_image_url;
  private $page_title;
  private $page_url;
  private $text;
  private $verb;
  private $width;

  /**
   * Vertical height of the button in pixels. Default value is "22".
   * @param string $height Height of button.
   * @return \Catharsis\Web\VkontakteLikeButtonWidget Reference to the current widget.
   */
  public function height($height)
  {
    $this->height = (string) $height;
    return $this;
  }

  /**
   * Visual layout/appearance of the button.
   * @param string $layout Layout of button.
   * @return \Catharsis\Web\VkontakteLikeButtonWidget Reference to the current widget.
   */
  public function layout($layout)
  {
    $this->layout = (string) $layout;
    return $this;
  }

  /**
   * Description of the page (to display in preview mode for record on the wall).
   * @param string $description Description of the page.
   * @return \Catharsis\Web\VkontakteLikeButtonWidget Reference to the current widget.
   */
  public function page_description($description)
  {
    $this->page_description = (string) $description;
    return $this;
  }

  /**
   * URL of the thumbnail image (to display in preview mode for record on the wall).
   * @param string $url URL of post's thumbnail image.
   * @return \Catharsis\Web\VkontakteLikeButtonWidget Reference to the current widget.
   */
  public function page_image_url($url)
  {
    $this->page_image_url = (string) $url;
    return $this;
  }

  /**
   * Title of the page (to display in preview mode for record on the wall).
   * @param string $title Title of the page.
   * @return \Catharsis\Web\VkontakteLikeButtonWidget Reference to the current widget.
   */
  public function page_title($title)
  {
    $this->page_title = (string) $title;
    return $this;
  }

  /**
   * URL of the page to "like" (this URL will be shown in a record on the wall). Default is URL of the current page.
   * @param string $url URL of target web page.
   * @return \Catharsis\Web\VkontakteLikeButtonWidget Reference to the current widget.
   */
  public function page_url($url)
  {
    $this->page_url = (string) $url;
    return $this;
  }

  /**
   * Text to be published on the wall when "Tell to friends" is pressed. Maximum length is 140 characters. Default value equals to page's title.
   * @param string $text Text for publishing.
   * @return \Catharsis\Web\VkontakteLikeButtonWidget Reference to the current widget.
   */
  public function text($text)
  {
    $this->text = (string) $text;
    return $this;
  }

  /**
   * Type of text to display on the button.
   * @param integer $verb Displayed button's verb.
   * @return \Catharsis\Web\VkontakteLikeButtonWidget Reference to the current widget.
   */
  public function verb($verb)
  {
    $this->verb = (int) $verb;
    return $this;
  }

  /**
   * Width of button in pixels (integer value > 200, default value is 350). Parameter value has meaning only for a button with a text counter (layout = "full").
   * @param string $width Width of button.
   * @return \Catharsis\Web\VkontakteLikeButtonWidget Reference to the current widget.
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
    $config = array();
    if (!empty($this->layout))
    {
      $config["type"] = $this->layout;
    }
    if (!empty($this->width))
    {
      $config["width"] = $this->width;
    }
    if (!empty($this->page_title))
    {
      $config["pageTitle"] = $this->page_title;
    }
    if (!empty($this->page_description))
    {
      $config["pageDescription"] = $this->page_description;
    }
    if (!empty($this->page_url))
    {
      $config["pageUrl"] = $this->page_url;
    }
    if (!empty($this->page_image_url))
    {
      $config["pageImage"] = $this->page_image_url;
    }
    if (!empty($this->text))
    {
      $config["text"] = $this->text;
    }
    if (!empty($this->height))
    {
      $config["height"] = $this->height;
    }
    if (!empty($this->verb))
    {
      $config["verb"] = $this->verb;
    }

    $config_json = json_encode($config, JSON_FORCE_OBJECT);

    return self::html_tag("div", array("id" => "vk_like")).self::javascript_inline("VK.Widgets.Like(\"vk_like\", $config_json);");
  }
}