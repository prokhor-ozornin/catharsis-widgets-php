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
  public function like()
  {
    return new LiveJournalLikeButtonWidget();
  }

  /**
   * Creates new LiveJournal "Repost" button widget.
   * @return \Catharsis\Web\LiveJournalRepostButtonWidget Initialized widget with default options.
   */
  public function repost()
  {
    return new LiveJournalRepostButtonWidget();
  }
}