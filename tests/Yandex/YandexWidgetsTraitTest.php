<?php

/**
 * Tests set for trait {@link Catharsis\Web\YandexWidgetsTrait}
 */
final class YandexWidgetsTraitTest extends PHPUnit_Framework_TestCase
{
  use Catharsis\Web\YandexWidgetsTrait;

  /**
   ** Performs testing of {@link Catharsis\Web\YandexWidgetsTrait::yandex()} method.
   */
  public function test_yandex_method()
  {
    $this->assertAttributeEmpty("yandex", get_class());
    $this->assertSame(self::yandex(), self::yandex());
    $this->assertInstanceOf("Catharsis\Web\YandexWidgetsFactory", self::yandex());
  }
}