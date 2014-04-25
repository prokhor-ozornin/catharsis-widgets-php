<?php
namespace Catharsis\Web;

/**
 * Factory for instantiation of SoundCloud widgets.
 */
final class SoundCloudWidgetsFactory
{
    /**
     * Creates new SoundCloud profile icon widget.
     * @return \Catharsis\Web\SoundCloudProfileIconWidget Initialized widget with default options.
     */
    public function profileIcon()
    {
        return new SoundCloudProfileIconWidget();
    }
}

?>
