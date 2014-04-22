<?php
namespace Catharsis\Web;

/**
 * Factory for instantiation of VideoJS widgets.
 */
final class VideoJSWidgetsFactory
{
  /**
   * Creates new VideoJS player widget.
   * @return \Catharsis\Web\VideoJSPlayerWidget Initialized widget with default options.
   */
  public function player()
  {
    return new VideoJSPlayerWidget();
  }
}