<?php
namespace Catharsis\Web;

/**
 * Factory for instantiation of DoubleGis widgets.
 */
final class DoubleGisWidgetsFactory
{
  /**
   *
   * @return \Catharsis\Web\DoubleGisContactsMapWidget Initialized widget with default options.
   */
  public function contacts_map()
  {
    return new DoubleGisContactsMapWidget();
  }

  /**
   *
   * @return \Catharsis\Web\DoubleGisMapWidget Initialized widget with default options.
   */
  public function map()
  {
    return new DoubleGisMapWidget();
  }

  /**
   *
   * @return \Catharsis\Web\DoubleGisMiniMapWidget Initialized widget with default options.
   */
  public function mini_map()
  {
    return new DoubleGisMiniMapWidget();
  }
}