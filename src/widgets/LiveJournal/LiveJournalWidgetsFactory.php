<?php
namespace Catharsis\Web;

/**
 * Factory for instantiation of LiveJournal widgets.
 */
final class LiveJournalWidgetsFactory
{
    /**
     * Creates new LiveJournal "Like" button widget.
     * @return \Catharsis\Web\LiveJournalLikeButtonWidget Initialized widget with default options.
     */
    public function likeButton()
    {
        return new LiveJournalLikeButtonWidget();
    }

    /**
     * Creates new LiveJournal "Repost" button widget.
     * @return \Catharsis\Web\LiveJournalRepostButtonWidget Initialized widget with default options.
     */
    public function repostButton()
    {
        return new LiveJournalRepostButtonWidget();
    }
}

?>
