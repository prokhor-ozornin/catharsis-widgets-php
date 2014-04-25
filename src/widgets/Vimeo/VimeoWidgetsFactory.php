<?php
namespace Catharsis\Web;

/**
 * Factory for instantiation of Vimeo widgets.
 */
final class VimeoWidgetsFactory
{
    /**
     * Creates new Vimeo embedded video widget.
     * @return \Catharsis\Web\VimeoVideoWidget Initialized widget with default options.
     */
    public function video()
    {
        return new VimeoVideoWidget();
    }
}

?>
