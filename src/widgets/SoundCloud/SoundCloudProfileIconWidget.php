<?php
/**
 * SoundCloudProfileIconWidget class.
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
 * Renders SoundCloud user's profile icon.
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 * @link      https://soundcloud.com/pages/embed
 */
class SoundCloudProfileIconWidget extends HtmlWidget
{
    private $_account;
    private $_color = 'orange_white';
    private $_size = SoundCloudProfileIconSize::SIZE_32;

    /**
     * SoundCloud user's account name.
     * @param string $account Account name.
     * @return \Catharsis\Web\SoundCloudProfileIconWidget
     *         Reference to the current widget.
     */
    public function account($account)
    {
        $this->_account = (string) $account;
        return $this;
    }

    /**
     * SoundCloud user's account name.
     * @return string Account name.
     */
    public function getAccount()
    {
        return $this->_account;
    }

    /**
     * Sets color of profile icon to black-and-white pattern.
     * @return \Catharsis\Web\SoundCloudProfileIconWidget
     *         Reference to the current widget.
     */
    public function blackWhite()
    {
        return $this->color('black_white');
    }

    /**
     * Color of profile icon.
     * @param string $color Icon's color.
     * @return \Catharsis\Web\SoundCloudProfileIconWidget
     *         Reference to the current widget.
     */
    public function color($color)
    {
        $this->_color = (string) $color;
        return $this;
    }

    /**
     * Color of profile icon.
     * @return string Icon's color.
     */
    public function getColor()
    {
        return $this->_color;
    }

    /**
     * Sets color of profile icon to transparent-orange pattern.
     * @return \Catharsis\Web\SoundCloudProfileIconWidget
     *         Reference to the current widget.
     */
    public function orangeTransparent()
    {
        return $this->color('orange_transparent');
    }

    /**
     * Sets color of profile icon to orange-and-white pattern.
     * @return \Catharsis\Web\SoundCloudProfileIconWidget
     *         Reference to the current widget.
     */
    public function orangeWhite()
    {
        return $this->color('orange_white');
    }

    /**
     * Edge size of profile icon in pixels.
     * @param integer $size Icon's size.
     * @return \Catharsis\Web\SoundCloudProfileIconWidget
     *         Reference to the current widget.
     */
    public function size($size)
    {
        $this->_size = (int) $size;
        return $this;
    }

    /**
     * Edge size of profile icon in pixels.
     * @return integer Icon's size.
     */
    public function getSize()
    {
        return $this->_size;
    }

    /**
     * Sets color of profile icon to white-and-orange pattern.
     * @return \Catharsis\Web\SoundCloudProfileIconWidget
     *         Reference to the current widget.
     */
    public function whiteOrange()
    {
        return $this->color('white_orange');
    }

    /**
     * Sets color of profile icon to transparent-white pattern.
     * @return \Catharsis\Web\SoundCloudProfileIconWidget
     *         Reference to the current widget.
     */
    public function whiteTransparent()
    {
        return $this->color('white_transparent');
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

        $url = "http://soundcloud.com/{$this->getAccount()}&color={$this->getColor()}&size={$this->getSize()}";

        return self::htmlTag(
            'iframe',
            array(
                'allowtransparency' => true,
                'frameborder' => 0,
                'scrolling' => "no",
                'src' => "https://w.soundcloud.com/icon/?url={$url}",
                'style' => "width: {$this->getSize()}px; height: {$this->getSize()}px;"
            )
        );
    }
}

?>
