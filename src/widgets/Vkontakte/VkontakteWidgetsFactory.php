<?php
namespace Catharsis\Web;

/**
 * Factory for instantiation of Vkontakte widgets.
 */
final class VkontakteWidgetsFactory
{
    /**
     * Creates new VKontakte comments widget.
     * @return \Catharsis\Web\VkontakteCommentsWidget Initialized widget with default options.
     */
    public function comments()
    {
        return new VkontakteCommentsWidget();
    }

    /**
     * Creates new VKontakte community widget.
     * @return \Catharsis\Web\VkontakteCommunityWidget Initialized widget with default options.
     */
    public function community()
    {
        return new VkontakteCommunityWidget();
    }

    /**
     * Creates new VKontakte JavaScript API initialization widget.
     * @return \Catharsis\Web\VkontakteInitializationWidget Initialized widget with default options.
     */
    public function initialize()
    {
        return new VkontakteInitializationWidget();
    }

    /**
     * Creates new VKontakte "Like" button widget.
     * @return \Catharsis\Web\VkontakteLikeWidget Initialized widget with default options.
     */
    public function likeButton()
    {
        return new VkontakteLikeButtonWidget();
    }

    /**
     * Creates new VKontakte subscription widget.
     * @return \Catharsis\Web\VkontakteSubscribeWidget Initialized widget with default options.
     */
    public function subscription()
    {
        return new VkontakteSubscriptionWidget();
    }

    /**
     * Creates new VKontakte embedded video widget.
     * @return \Catharsis\Web\VkontakteVideoWidget Initialized widget with default options.
     */
    public function video()
    {
        return new VkontakteVideoWidget();
    }
}

?>
