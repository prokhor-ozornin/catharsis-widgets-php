<?php

/**
 * Tests set for trait {@link Catharsis\Web\MailRuWidgetsTrait}
 */
final class MailRuWidgetsTraitTest extends PHPUnit_Framework_TestCase
{
  use Catharsis\Web\MailRuWidgetsTrait;

  /**
   ** Performs testing of {@link Catharsis\Web\MailRuWidgetsTrait::mailru()} method.
   */
  public function test_mailru_method()
  {
    $this->assertAttributeEmpty("mailru", get_class());
    $this->assertSame(self::mailru(),self::mailru());
    $this->assertInstanceOf("Catharsis\Web\MailRuWidgetsFactory", self::mailru());
  }
}