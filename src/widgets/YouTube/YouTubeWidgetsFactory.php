<?php
namespace Catharsis\Web;

/**
 * Factory for instantiation of YouTube widgets.
 */
final class YouTubeWidgetsFactory
{
    /**
     * Creates new YouTube embedded video widget.
     * @return \Catharsis\Web\YouTubeVideoWidget Initialized widget with default options.
     */
    public function video()
    {
        return new YouTubeVideoWidget();
    }
}

?>
