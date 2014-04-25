<?php
namespace Catharsis\Web;

/**
 *
 */
class YandexVideoWidget extends HtmlWidget
{
    private $_height;
    private $_id;
    private $_user;
    private $_width;

    /**
     * Height of video control.
     * This attribute is required.
     * @param string $height Height of video.
     * @return \Catharsis\Web\YandexVideoWidget Reference to the current widget.
     */
    public function height($height)
    {
        $this->_height = (string) $height;
        return $this;
    }

    /**
     * Identifier of video.
     * This attribute is required.
     * @param string $id Identifier of video.
     * @return \Catharsis\Web\YandexVideoWidget Reference to the current widget.
     */
    public function id($id)
    {
        $this->_id = (string) $id;
        return $this;
    }

    /**
     * Account identifier of video's uploader.
     * This attribute is required.
     * @param string $user User's account identifier.
     * @return \Catharsis\Web\YandexVideoWidget Reference to the current widget.
     */
    public function user($user)
    {
        $this->_user = (string) $user;
        return $this;
    }

    /**
     * Width of video control.
     * This attribute is required.
     * @param string $width Width of video.
     * @return \Catharsis\Web\YandexVideoWidget Reference to the current widget.
     */
    public function width($width)
    {
        $this->_width = (string) $width;
        return $this;
    }

    /**
     * Returns HTML markup text of widget.
     */
    public function __toString()
    {
        if (empty($this->_id) || empty($this->_user) || empty($this->_height) || empty($this->_width)) {
            return "";
        }

        return self::htmlTag("iframe", array(
            "allowfullscreen" => true,
            "frameborder" => 0,
            "height" => $this->_height,
            "mozallowfullscreen" => true,
            "src" => "http://video.yandex.ru/iframe/{$this->_user}/{$this->_id}",
            "webkitallowfullscreen" => true,
            "width" => $this->_width));
    }
}

?>
