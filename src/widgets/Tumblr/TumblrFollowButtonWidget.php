<?php
/**
 * TumblrFollowButtonWidget class.
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
 * Renders Tumblr "Follow" button.
 * Requires {@link WidgetsScripts::tumblr_share} script to be included.
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 * @link      http://www.tumblr.com/buttons
 */
class TumblrFollowButtonWidget extends HtmlWidget
{
    private $_account;
    private $_colorScheme = TumblrFollowButtonColorScheme::LIGHT;
    private $_type = TumblrFollowButtonType::FIRST;

    /**
     * Name of Tumblr account (blog).
     * This attribute is required.
     * @param string $account Name of blog.
     * @return \Catharsis\Web\TumblrFollowButtonWidget
     *         Reference to the current widget.
     */
    public function account($account)
    {
        $this->_account = (string) $account;
        return $this;
    }

    /**
     * Name of Tumblr account (blog).
     * @return string Name of blog.
     */
    public function getAccount()
    {
        return $this->_account;
    }

    /**
     * Visual color scheme of button.
     * @param string $colorScheme Color scheme for button.
     * @return \Catharsis\Web\TumblrFollowButtonWidget
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
     * @param string $type Layout of button.
     * @return \Catharsis\Web\TumblrFollowButtonWidget
     *         Reference to the current widget.
     */
    public function type($type)
    {
        $this->_type = (string) $type;
        return $this;
    }

    /**
     * Visual layout/appearance of button.
     * @return string Layout of button.
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
        if (empty($this->getAccount())) {
            return '';
        }

        $width = 189;
        switch ($this->getType()) {
        case TumblrFollowButtonType::SECOND :
            $width = 113;
            break;

        case TumblrFollowButtonType::THIRD :
            $width = 18;
            break;
        }

        return self::htmlTag(
            'iframe',
            array(
                'allowtransparency' => true,
                'border' => 0,
                'class' => 'btn',
                'frameborder' => 0,
                'height' => 25,
                'scrolling' => 'no',
                'src' => "http://platform.tumblr.com/v1/follow_button.html?button_type={$this->getType()}&tumblelog={$this->getAccount()}&color_scheme={$this->getColorScheme()}",
                'width' => $width
            )
        );
    }
}

?>
