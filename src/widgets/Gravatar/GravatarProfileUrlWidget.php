<?php
namespace Catharsis\Web;

/**
 * Gravatar's user profile URL.
 * @link http://gravatar.com/site/implement/profiles
 */
class GravatarProfileUrlWidget extends HtmlWidget
{
    private $_format;
    private $_hash;
    private $_parameters = array();

    /**
     * Email address of the user whose profile is requested.
     * @param string $email User's email address.
     * @return \Catharsis\Web\GravatarProfileUrlWidget Reference to the current widget.
     */
    public function email($email)
    {
        return $this->hash(md5((string) $email));
    }

    /**
     * Format in which to retrieve profile's data.
     * @param string $format Profile's data format.
     * @return \Catharsis\Web\GravatarProfileUrlWidget Reference to the current widget.
     */
    public function format($format)
    {
        $this->_format = (string) $format;
        return $this;
    }

    /**
     * MD5 hash of user's email address.
     * @param string $hash Hash of user's email.
     * @return \Catharsis\Web\GravatarProfileUrlWidget Reference to the current widget.
     */
    public function hash($hash)
    {
        $this->_hash = (string) $hash;
        return $this;
    }

    /**
     * Requests JSON format for user's profile data.
     * @param string $callback Callback JavaScript function to be wrapped around the resulting JSON object.
     * @return \Catharsis\Web\GravatarProfileUrlWidget Reference to the current widget.
     */
    public function json($callback = null)
    {
        if (!empty($callback)) {
            $this->parameter("callback", (string) $callback);
        }

        return $this->format("json");
    }

    /**
     * Adds custom parameter to URL's query part.
     * @param string $name Parameter's name.
     * @param mixed $value Parameter's value.
     * @return \Catharsis\Web\GravatarProfileUrlWidget Reference to the current widget.
     */
    public function parameter($name, $value)
    {
        $this->_parameters[$name] = $value;
        return $this;
    }

    /**
     * Requests PHP format for user's profile data.
     * @return \Catharsis\Web\GravatarProfileUrlWidget Reference to the current widget.
     */
    public function php()
    {
        return $this->format("php");
    }

    /**
     * Requests QR code format for user's profile data.
     * @param integer $size Edge length in pixels of the desired QR code image.
     * @return \Catharsis\Web\GravatarProfileUrlWidget Reference to the current widget.
     */
    public function qr($size = null)
    {
        if (!empty($size)) {
            $this->parameter("size", (int) $size);
        }

        return $this->format("qr");
    }

    /**
     * Requests VCF/vCard format for user's profile data.
     * @return \Catharsis\Web\GravatarProfileUrlWidget Reference to the current widget.
     */
    public function vcf()
    {
        return $this->format("vcf");
    }

    /**
     * Requests XML format for user's profile data.
     * @return \Catharsis\Web\GravatarProfileUrlWidget Reference to the current widget.
     */
    public function xml()
    {
        return $this->format("xml");
    }

    /**
     * Returns HTML markup text of widget.
     */
    public function __toString()
    {
        if (empty($this->_hash)) {
            return "";
        }

        $format = empty($this->_format) ? "" : ".$this->_format";
        $query = empty($this->_parameters) ? "" : "?" . $this->urlQuery($this->_parameters);

        return "http://www.gravatar.com/{$this->_hash}{$format}{$query}";
    }
}

?>
