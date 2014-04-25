<?php
namespace Catharsis\Web;

/**
 * Renders Yandex "Like" button.
 */
class YandexLikeButtonWidget extends HtmlWidget
{
    private $_layout = YandexLikeButtonLayout::Button;
    private $_size = YandexLikeButtonSize::Large;
    private $_text;
    private $_title;
    private $_url;

    /**
     * Visual layout/appearance of the button.
     * @param string $layout Layout of button.
     * @return \Catharsis\Web\YandexLikeButtonWidget Reference to the current widget.
     */
    public function layout($layout)
    {
        $this->_layout = (string) $layout;
        return $this;
    }

    /**
     * Size of the button.
     * @param string $size Size of button.
     * @return \Catharsis\Web\YandexLikeButtonWidget Reference to the current widget.
     */
    public function size($size)
    {
        $this->_size = (string) $size;
        return $this;
    }

    /**
     * Label text to draw on the button.
     * @param string $text Label text.
     * @return \Catharsis\Web\YandexLikeButtonWidget Reference to the current widget.
     */
    public function text($text)
    {
        $this->_text = (string) $text;
        return $this;
    }

    /**
     * Custom title text for shared page.
     * @param string $title Title text.
     * @return \Catharsis\Web\YandexLikeButtonWidget Reference to the current widget.
     */
    public function title($title)
    {
        $this->_title = (string) $title;
        return $this;
    }

    /**
     * URL address of web page to share.
     * @param string $url URL address of web page.
     * @return \Catharsis\Web\YandexLikeButtonWidget Reference to the current widget.
     */
    public function url($url)
    {
        $this->_url = (string) $url;
        return $this;
    }

    /**
     * Returns HTML markup text of widget.
     */
    public function __toString()
    {
        return self::htmlTag("a", array(
            "name" => "ya-share",
            "share_text" => $this->_text,
            "share_title" => $this->_title,
            "share_url" => $this->_url,
            "size" => $this->_size,
            "type" => $this->_layout)) . <<<EOT
      <script type="text/javascript">
        if (window.Ya && window.Ya.Share)
        {
          Ya.Share.update();
        }
        else
        {
          (function ()
          {
            if (!window.Ya)
            {
              window.Ya = {}
            };

            Ya.STATIC_BASE = 'http:\/\/yandex.st\/wow\/2.15.3\/static';
            Ya.START_BASE = 'http:\/\/my.ya.ru\/';
            var shareScript = document.createElement("script");
            shareScript.type = "text/javascript";
            shareScript.async = "true";
            shareScript.charset = "utf-8";
            shareScript.src = Ya.STATIC_BASE + "/js/api/Share.js";
            (document.getElementsByTagName("head")[0] || document.body).appendChild(shareScript);
          })();
        }
      </script>
EOT;
    }
}

?>
