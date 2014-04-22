<?php
namespace Catharsis\Web;

/**
 * Factory for instantiation of Twitter widgets.
 */
final class TwitterWidgetsFactory
{
  /**
   * Creates new Twitter "Follow" button widget.
   * @return \Catharsis\Web\TwitterFollowButtonWidget Initialized widget with default options.
   */
  public function follow()
  {
    return new TwitterFollowButtonWidget();
  }

  /**
   * Creates new Twitter "Tweet" button widget.
   * @return \Catharsis\Web\TwitterTweetButtonWidget Initialized widget with default options.
   */
  public function tweet()
  {
    return new TwitterTweetButtonWidget();
  }
}