<?php
namespace Catharsis\Web;

/**
 * Factory for instantiation of Disqus widgets.
 */
final class DisqusWidgetsFactory
{
  /**
   * Creates new Disqus comments widget.
   * @return \Catharsis\Web\DisqusCommentsWidget Initialized widget with default options.
   */
  public function comments()
  {
    return new DisqusCommentsWidget();
  }
}