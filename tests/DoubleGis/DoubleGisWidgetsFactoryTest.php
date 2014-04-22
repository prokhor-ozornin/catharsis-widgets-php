<?php

/**
 * Tests set for class {@link Catharsis\Web\DoubleGisWidgetsFactory}
 */
final class DoubleGisWidgetsFactoryTest extends PHPUnit_Framework_TestCase
{
  /**
   * Performs testing of {@link Catharsis\Web\DoubleGisWidgetsFactory::contacts_map()} method.
   */
  public function test_contacts_map_method()
  {
    $factory = new Catharsis\Web\DoubleGisWidgetsFactory();
    $this->assertNotSame($factory->contacts_map(), $factory->contacts_map());
    $this->assertInstanceOf("Catharsis\Web\DoubleGisContactsMapWidget", $factory->contacts_map());
  }

  /**
   * Performs testing of {@link Catharsis\Web\DoubleGisWidgetsFactory::map()} method.
   */
  public function test_map_method()
  {
    $factory = new Catharsis\Web\DoubleGisWidgetsFactory();
    $this->assertNotSame($factory->map(), $factory->map());
    $this->assertInstanceOf("Catharsis\Web\DoubleGisMapWidget", $factory->map());
  }

  /**
   * Performs testing of {@link Catharsis\Web\DoubleGisWidgetsFactory::mini_map()} method.
   */
  public function test_mini_map_method()
  {
    $factory = new Catharsis\Web\DoubleGisWidgetsFactory();
    $this->assertNotSame($factory->mini_map(), $factory->mini_map());
    $this->assertInstanceOf("Catharsis\Web\DoubleGisMiniMapWidget", $factory->mini_map());
  }
}