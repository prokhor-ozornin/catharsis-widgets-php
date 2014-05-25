<?php
/**
 * TumblrWidgetsFactory class.
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
 * Factory for instantiation of Tumblr widgets.
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class TumblrWidgetsFactory
{
    /**
     * Creates new Tumblr "Follow" button widget.
     * @return \Catharsis\Web\TumblrFollowButtonWidget
     *         Initialized widget with default options.
     */
    public function followButton()
    {
        return new TumblrFollowButtonWidget();
    }

    /**
     * Creates new Tumblr "Share" button widget.
     * @return \Catharsis\Web\TumblrShareButtonWidget
     *         Initialized widget with default options.
     */
    public function shareButton()
    {
        return new TumblrShareButtonWidget();
    }
}

?>
