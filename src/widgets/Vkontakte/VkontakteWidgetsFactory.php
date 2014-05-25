<?php
/**
 * VkontakteWidgetsFactory class.
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
 * Factory for instantiation of Vkontakte widgets.
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class VkontakteWidgetsFactory
{
    /**
     * Creates new VKontakte OAuth button widget.
     * @return \Catharsis\Web\VkontakteAuthButtonWidget
     *         Initialized widget with default options.
     */
    public function authButton()
    {
        return new VkontakteAuthButtonWidget();
    }

    /**
     * Creates new VKontakte comments widget.
     * @return \Catharsis\Web\VkontakteCommentsWidget
     *         Initialized widget with default options.
     */
    public function comments()
    {
        return new VkontakteCommentsWidget();
    }

    /**
     * Creates new VKontakte community widget.
     * @return \Catharsis\Web\VkontakteCommunityWidget
     *         Initialized widget with default options.
     */
    public function community()
    {
        return new VkontakteCommunityWidget();
    }

    /**
     * Creates new VKontakte JavaScript API initialization widget.
     * @return \Catharsis\Web\VkontakteInitializationWidget
     *         Initialized widget with default options.
     */
    public function initialize()
    {
        return new VkontakteInitializationWidget();
    }

    /**
     * Creates new VKontakte "Like" button widget.
     * @return \Catharsis\Web\VkontakteLikeWidget
     *         Initialized widget with default options.
     */
    public function likeButton()
    {
        return new VkontakteLikeButtonWidget();
    }

    /**
     * Creates new VKontakte embedded post widget.
     * @return \Catharsis\Web\VkontaktePostWidget
     *         Initialized widget with default options.
     */
    /*public function post()
    {
        return new VkontaktePostWidget();
    }*/

    /**
     * Creates new Vkontakte Poll widget.
     * @return \Catharsis\Web\VkontaktePollWidget
     *         Initialized widget with default options.
     */
    public function poll()
    {
        return new VkontaktePollWidget();
    }

    /**
     * Creates new Vkontakte embedded post widget.
     * @return \Catharsis\Web\VkontaktePostWidget
     *         Initialized widget with default options.
     */
    public function post()
    {
        return new VkontaktePostWidget();
    }

    /**
     * Creates new VKontakte Recommendations widget
     * @return \Catharsis\Web\VkontakteRecommendationsWidget
     *         Initialized widget with default options.
     */
    public function recommendations()
    {
        return new VkontakteRecommendationsWidget();
    }

    /**
     * Creates new VKontakte subscription widget.
     * @return \Catharsis\Web\VkontakteSubscribeWidget
     *         Initialized widget with default options.
     */
    public function subscription()
    {
        return new VkontakteSubscriptionWidget();
    }

    /**
     * Creates new VKontakte embedded video widget.
     * @return \Catharsis\Web\VkontakteVideoWidget
     *         Initialized widget with default options.
     */
    public function video()
    {
        return new VkontakteVideoWidget();
    }
}

?>
