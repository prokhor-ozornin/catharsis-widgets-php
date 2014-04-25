<?php
namespace Catharsis\Web;

/**
 * Gravatar's avatar image URL.
 * @link http://gravatar.com/site/implement/images
 */
class GravatarImageUrlWidget extends HtmlWidget
{
    private $_extension;
    private $_hash;
    private $_parameters = array();

    /**
     * Default image to be returned when user's email address has no matching Gravatar image.
     * @param string $image URL or predefined name ({@link GravatarDefaultImage}).
     * @return \Catharsis\Web\GravatarImageUrlWidget Reference to the current widget.
     */
    public function defaultImage($image)
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
        $this->_extension = (string) $extension;
        return $this;
    }

    /**
     * Forces default image to be loaded as a user's avatar.
     * @return \Catharsis\Web\GravatarImageUrlWidget Reference to the current widget.
     */
    public function forceDefault()
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
        $this->_hash = (string) $hash;
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
        $this->_parameters[$name] = $value;
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
        if (empty($this->_hash)) {
            return "";
        }

        $extension = empty($this->_extension) ? "" : ".$this->_extension";
        $query = empty($this->_parameters) ? "" : "?" . $this->urlQuery($this->_parameters);

        return "http://www.gravatar.com/avatar/{$this->_hash}{$extension}{$query}";
    }
}

?>
