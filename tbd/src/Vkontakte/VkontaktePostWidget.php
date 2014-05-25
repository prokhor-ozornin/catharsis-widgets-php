<?php
/**
 * VkontaktePostWidget class.
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
 * Renders VKontakte embedded post widget.
 * Requires {@link WidgetsScripts::vkontakte} script to be included.
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 * @link      http://vk.com/dev/Post
 */
class VkontaktePostWidget extends HtmlWidget
{
    private $_url;
    private $_width;

    /**
     * @param string $width
     * @return \Catharsis\Web\VkontaktePostWidget Reference to the current widget.
     */
    public function url($url)
    {
        $this->_url = (string) $url;
        return $this;
    }

    /**
     * @param string $width
     * @return \Catharsis\Web\VkontaktePostWidget Reference to the current widget.
     */
    public function width($width)
    {
        $this->_width = (string) $width;
        return $this;
    }

    /**
     * Returns HTML markup text of widget.
     * @return string Widget's HTML markup.
     */
    public function __toString()
    {
        if (empty($this->_url) || empty($this->_width))
        {
            return '';
        }
    }
}

?>
