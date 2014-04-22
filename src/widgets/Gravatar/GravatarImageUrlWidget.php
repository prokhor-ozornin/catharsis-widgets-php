<?php
namespace Catharsis\Web;

/**
 * Gravatar's avatar image URL.
 * @link http://gravatar.com/site/implement/images
 */
class GravatarImageUrlWidget extends HtmlWidgetBase
{
  private $extension;
  private $hash;
  private $parameters = array();

  /**
   * Default image to be returned when user's email address has no matching Gravatar image.
   * @param string $image URL or predefined name ({@link GravatarDefaultImage}).
   * @return \Catharsis\Web\GravatarImageUrlWidget Reference to the current widget.
   */
  public function default_image($image)
  {
    return $this->parameter("default", (string) $image);
  }

  /**
   * Email address of the user whose avatar is requested.
   * @param string $email User's email address.
   * @return \Catharsis\Web\GravatarImageUrlWidget Reference to the current widget.
   */
  public function email($email)
  {
    return $this->hash(md5((string) $email));
  }

  /**
   * File-type extension for URL (jpg, png, gif, etc).
   * @param string $extension File-type extension.
   * @return \Catharsis\Web\GravatarImageUrlWidget Reference to the current widget.
   */
  public function extension($extension)
  {
    $this->extension = (string) $extension;
    return $this;
  }

  /**
   * Forces default image to be loaded as a user's avatar.
   * @return \Catharsis\Web\GravatarImageUrlWidget Reference to the current widget.
   */
  public function force_default()
  {
    return $this->parameter("forcedefault", "y");
  }

  /**
   * MD5 hash of user's email address.
   * @param string $hash Hash of user's email.
   * @return \Catharsis\Web\GravatarImageUrlWidget Reference to the current widget.
   */
  public function hash($hash)
  {
    $this->hash = (string) $hash;
    return $this;
  }

  /**
   * Adds custom parameter to URL's query part.
   * @param string $name Parameter's name.
   * @param mixed $value Parameter's value.
   * @return \Catharsis\Web\GravatarImageUrlWidget Reference to the current widget.
   */
  public function parameter($name, $value)
  {
    $this->parameters[$name] = $value;
    return $this;
  }

  /**
   * Rating of avatar's image that represents audience restrictions.
   * @param string $rating Rating of image.
   * @return \Catharsis\Web\GravatarImageUrlWidget Reference to the current widget.
   */
  public function rating($rating)
  {
    return $this->parameter("rating", (string) $rating);
  }

  /**
   * Size of avatar's image in pixels (both width and height).
   * @param string $size Size of image.
   * @return \Catharsis\Web\GravatarImageUrlWidget Reference to the current widget.
   */
  public function size($size)
  {
    return $this->parameter("size", (string) $size);
  }

  /**
   * Returns HTML markup text of widget.
   */
  public function __toString()
  {
    if (empty($this->hash))
    {
      return "";
    }

    $extension = empty($this->extension) ? "" : ".$this->extension";
    $query = empty($this->parameters) ? "" : "?".$this->url_query($this->parameters);

    return "http://www.gravatar.com/avatar/{$this->hash}{$extension}{$query}";
  }
}