<?php
namespace Catharsis\Web;

/**
 * Factory for instantiation of IntenseDebate widgets.
 */
final class IntenseDebateWidgetsFactory
{
    /**
     * Creates new IntenseDebate comments widget.
     * @return \Catharsis\Web\IntenseDebateCommentsWidget Initialized widget with default options.
     */
    public function comments()
    {
        return new IntenseDebateCommentsWidget();
    }

    /**
     * Creates new IntenseDebate link widget.
     * @return \Catharsis\Web\IntenseDebateLinkWidget Initialized widget with default options.
     */
    public function link()
    {
        return new IntenseDebateLinkWidget();
    }
}

?>
