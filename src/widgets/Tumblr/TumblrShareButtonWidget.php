<?php
/**
 * TumblrShareButtonWidget class.
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
 * Renders Tumblr "Share" button.
 * Requires {@link WidgetsScripts::tumblr_share} scripts bundle to be included.
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 * @link      http://www.tumblr.com/buttons
 */
class TumblrShareButtonWidget extends HtmlWidget
{
    private $_colorScheme;
    private $_type = TumblrShareButtonType::FIRST;

    /**
     * Visual color scheme of button.
     * @param string $colorScheme Color scheme for button.
     * @return \Catharsis\Web\TumblrShareButtonWidget
     *         Reference to the current widget.
     */
    public function colorScheme($colorScheme)
    {
        $this->_colorScheme = (string) $colorScheme;
        return $this;
    }

    /**
     * Visual color scheme of button.
     * @return string Color scheme for button.
     */
    public function getColorScheme()
    {
        return $this->_colorScheme;
    }

    /**
     * Visual layout/appearance of button.
     * @param integer $type Layout of button.
     * @return \Catharsis\Web\TumblrShareButtonWidget
     *         Reference to the current widget.
     */
    public function type($type)
    {
        $this->_type = (int) $type;
        return $this;
    }

    /**
     * Visual layout/appearance of button.
     * @return integer Layout of button.
     */
    public function getType()
    {
        return $this->_type;
    }

    /**
     * Returns HTML markup text of widget.
     * @return string Widget's HTML markup.
     */
    public function __toString()
    {
        $width = 0;
        switch ($this->getType()) {
        case TumblrShareButtonType::FIRST :
            $width = 80;
            break;

        case TumblrShareButtonType::SECOND :
            $width = 70;
            break;

        case TumblrShareButtonType::THIRD :
            $width = 130;
            break;

        case TumblrShareButtonType::FORTH :
            $width = 20;
            break;

        default:
            $width = 80;
            break;
        }

        $color_scheme = !empty($this->getColorScheme()) && strtolower($this->getColorScheme()) == TumblrShareButtonColorScheme::GRAY ? 'T' : '';

        return self::htmlTag(
            'a',
            array(
                'href' => 'http://www.tumblr.com/share',
                'style' => "display:inline-block; text-indent:-9999px; overflow:hidden; width:{$width}px; height:20px; background:url('http://platform.tumblr.com/v1/share_{$this->getType()}{$color_scheme}.png') top left no-repeat transparent;",
                'title' => 'Share on Tumblr'
            ),
            'Share on Tumblr'
        );
    }
}

?>
