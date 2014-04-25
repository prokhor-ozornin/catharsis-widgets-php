<?php
namespace Catharsis\Web;

/**
 * Factory for instantiation of Gravatar widgets.
 */
final class GravatarWidgetsFactory
{
    /**
     * Creates new Gravatar's avatar URL widget.
     * @return \Catharsis\Web\GravatarImageUrlWidget Initialized widget with default options.
     */
    public function imageUrl()
    {
        return new GravatarImageUrlWidget();
    }

    /**
     * Creates new Gravatar's user profile URL widget.
     * @return \Catharsis\Web\GravatarProfileUrlWidget Initialized widget with default options.
     */
    public function profileUrl()
    {
        return new GravatarProfileUrlWidget();
    }
}

?>
