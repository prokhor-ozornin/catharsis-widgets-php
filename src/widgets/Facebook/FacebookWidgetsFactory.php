<?php
/**
 * FacebookWidgetsFactory class.
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
 * Factory for instantiation of Facebook widgets.
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class FacebookWidgetsFactory
{
    /**
     * Creates new Facebook Activity Feed widget.
     * @return \Catharsis\Web\FacebookActivityFeedWidget
     *         Initialized widget with default options.
     */
    public function activityFeed()
    {
        return new FacebookActivityFeedWidget();
    }

    /**
     * Creates new Facebook comments widget.
     * @return \Catharsis\Web\FacebookCommentsWidget
     *         Initialized widget with default options.
     */
    public function comments()
    {
        return new FacebookCommentsWidget();
    }

    /**
     * Creates new Facebook Facepile widget.
     * @return \Catharsis\Web\FacebookFacepileWidget
     *         Initialized widget with default options.
     */
    public function facepile()
    {
        return new FacebookFacepileWidget();
    }

    /**
     * Creates new Facebook "Follow" button widget.
     * @return \Catharsis\Web\FacebookFollowButtonWidget
     *         Initialized widget with default options.
     */
    public function followButton()
    {
        return new FacebookFollowButtonWidget();
    }

    /**
     * Creates new Facebook JavaScript API initialization widget.
     * @return \Catharsis\Web\FacebookInitializationWidget
     *         Initialized widget with default options.
     */
    public function initialize()
    {
        return new FacebookInitializationWidget();
    }

    /**
     * Creates new Facebook "Like" button widget.
     * @return \Catharsis\Web\FacebookLikeButtonWidget
     *         Initialized widget with default options.
     */
    public function likeButton()
    {
        return new FacebookLikeButtonWidget();
    }

    /**
     * Creates new Facebook Likebox widget.
     * @return \Catharsis\Web\FacebookLikeBoxWidget
     *         Initialized widget with default options.
     */
    public function likeBox()
    {
        return new FacebookLikeBoxWidget();
    }

    /**
     * Creates new Facebook embedded post widget.
     * @return \Catharsis\Web\FacebookPostWidget
     *         Initialized widget with default options.
     */
    public function post()
    {
        return new FacebookPostWidget();
    }

    /**
     * Creates new Facebook Recommendations Feed widget.
     * @return \Catharsis\Web\FacebookRecommendationsFeedWidget
     *         Initialized widget with default options.
     */
    public function recommendationsFeed()
    {
        return new FacebookRecommendationsFeedWidget();
    }

    /**
     * Creates new Facebook "Send" button widget.
     * @return \Catharsis\Web\FacebookSendButtonWidget
     *         Initialized widget with default options.
     */
    public function sendButton()
    {
        return new FacebookSendButtonWidget();
    }

    /**
     * Creates new Facebook embedded video widget.
     * @return \Catharsis\Web\FacebookVideoWidget
     *         Initialized widget with default options.
     */
    public function video()
    {
        return new FacebookVideoWidget();
    }
}

?>
