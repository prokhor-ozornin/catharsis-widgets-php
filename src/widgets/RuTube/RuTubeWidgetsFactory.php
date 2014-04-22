<?php
namespace Catharsis\Web;

/**
 * Factory for instantiation of RuTube widgets.
 */
final class RuTubeWidgetsFactory
{
  /**
   * Creates new RuTube embedded video widget.
   * @return \Catharsis\Web\RuTubeVideoWidget Initialized widget with default options.
   */
  public function video()
  {
    return new RuTubeVideoWidget();
  }
}