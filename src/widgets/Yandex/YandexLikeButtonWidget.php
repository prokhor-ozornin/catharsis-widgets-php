<?php
/**
 * YandexLikeButtonWidget class.
 *
 * PHP version 5
 *
 * @category HTML
 * @package  WebWidgets
 * @author   Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @license  LGPL https://www.gnu.org/licenses/lgpl.html
 * @link     http://pear.php.net/package/HTML_WebWidgets
 */
namespace Catharsis\Web;

/**
 * Renders Yandex "Like" button.
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
class YandexLikeButtonWidget extends HtmlWidget
{
    private $_layout = YandexLikeButtonLayout::BUTTON;
    private $_size = YandexLikeButtonSize::LARGE;
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
     * Visual layout/appearance of the button.
     * @return string Layout of button.
     */
    public function getLayout()
    {
        return $this->_layout;
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
     * Size of the button.
     * @return string Size of button.
     */
    public function getSize()
    {
        return $this->_size;
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
     * Label text to draw on the button.
     * @return string Label text.
     */
    public function getText()
    {
        return $this->_text;
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
     * Custom title text for shared page.
     * @return string Title text.
     */
    public function getTitle()
    {
        return $this->_title;
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
     * URL address of web page to share.
     * @return string URL address of web page.
     */
    public function getUrl()
    {
        return $this->_url;
    }

    /**
     * Returns HTML markup text of widget.
     * @return string Widget's HTML markup.
     */
    public function __toString()
    {
        return self::htmlTag(
            'a',
            array(
                'name' => 'ya-share',
                'share_text' => $this->getText(),
                'share_title' => $this->getTitle(),
                'share_url' => $this->getUrl(),
                'size' => $this->getSize(),
                'type' => $this->getLayout()
            )
        ) . <<<EOT
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
