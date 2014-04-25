<?php
namespace Catharsis\Web;

/**
 * Renders LiveJournal "Like" button.
 * @link http://www.livejournal.com/support/faq/313.html
 */
class LiveJournalLikeButtonWidget extends HtmlWidget
{
    /**
     * Returns HTML markup text of widget.
     */
    public function __toString()
    {
        return '<lj-like buttons="repost"/>';
    }
}

?>
