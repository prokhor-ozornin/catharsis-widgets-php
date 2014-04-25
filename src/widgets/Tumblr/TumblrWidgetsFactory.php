<?php
namespace Catharsis\Web;

/**
 * Factory for instantiation of Tumblr widgets.
 */
final class TumblrWidgetsFactory
{
    /**
     * Creates new Tumblr "Follow" button widget.
     * @return \Catharsis\Web\TumblrFollowButtonWidget Initialized widget with default options.
     */
    public function followButton()
    {
        return new TumblrFollowButtonWidget();
    }

    /**
     * Creates new Tumblr "Share" button widget.
     * @return \Catharsis\Web\TumblrShareButtonWidget Initialized widget with default options.
     */
    public function shareButton()
    {
        return new TumblrShareButtonWidget();
    }
}

?>
