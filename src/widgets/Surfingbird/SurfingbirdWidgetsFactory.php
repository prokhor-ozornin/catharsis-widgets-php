<?php
namespace Catharsis\Web;

/**
 * Factory for instantiation of Surfingbird widgets.
 */
final class SurfingbirdWidgetsFactory
{
  /**
   * Creates new Surfingbird "Surf" button widget.
   * @return \Catharsis\Web\SurfingbirdSurfButtonWidget Initialized widget with default options.
   */
  public function surf()
  {
    return new SurfingbirdSurfButtonWidget();
  }
}