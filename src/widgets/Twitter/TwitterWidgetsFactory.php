<?php
/**
 * TwitterWidgetsFactory class.
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
 * Factory for instantiation of Twitter widgets.
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class TwitterWidgetsFactory
{
    /**
     * Creates new Twitter "Follow" button widget.
     * @return \Catharsis\Web\TwitterFollowButtonWidget
     *         Initialized widget with default options.
     */
    public function followButton()
    {
        return new TwitterFollowButtonWidget();
    }

    /**
     * Creates new Twitter "Tweet" button widget.
     * @return \Catharsis\Web\TwitterTweetButtonWidget
     *         Initialized widget with default options.
     */
    public function tweetButton()
    {
        return new TwitterTweetButtonWidget();
    }
}

?>
