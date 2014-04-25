<?php
namespace Catharsis\Web;

/**
 * Factory for instantiation of Google widgets.
 */
final class GoogleWidgetsFactory
{
    /**
     * Creates new Google Analytics widget.
     * @return \Catharsis\Web\GoogleAnalyticsWidget Initialized widget with default options.
     */
    public function analytics()
    {
        return new GoogleAnalyticsWidget();
    }

    /**
     * Creates new Google Map widget.
     * @return \Catharsis\Web\GoogleMapWidget Initialized widget with default options.
     */
    /* public function map()
      {
      return new GoogleMapWidget();
      } */

    /**
     * Creates new Google "+1" button widget.
     * @return \Catharsis\Web\GooglePlusOneButtonWidget Initialized widget with default options.
     */
    public function plusOneButton()
    {
        return new GooglePlusOneButtonWidget();
    }
}

?>
