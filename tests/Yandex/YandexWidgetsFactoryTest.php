<?php

/**
 * Tests set for class {@link Catharsis\Web\YandexWidgetsFactory}
 */
final class YandexWidgetsFactoryTest extends PHPUnit_Framework_TestCase
{
  /**
   ** Performs testing of {@link Catharsis\Web\YandexWidgetsFactory::analytics()} method.
   */
  public function test_analytics_method()
  {
    $factory = new Catharsis\Web\YandexWidgetsFactory();
    $this->assertNotSame($factory->analytics(), $factory->analytics());
    $this->assertInstanceOf("Catharsis\Web\YandexAnalyticsWidget", $factory->analytics());
  }

  /**
   ** Performs testing of {@link Catharsis\Web\YandexWidgetsFactory::like()} method.
   */
  public function test_like_method()
  {
    $factory = new Catharsis\Web\YandexWidgetsFactory();
    $this->assertNotSame($factory->like(), $factory->like());
    $this->assertInstanceOf("Catharsis\Web\YandexLikeButtonWidget", $factory->like());
  }

  /**
   ** Performs testing of {@link Catharsis\Web\YandexWidgetsFactory::map()} method.
   */
  public function test_map_method()
  {
    $factory = new Catharsis\Web\YandexWidgetsFactory();
    $this->assertNotSame($factory->map(), $factory->map());
    $this->assertInstanceOf("Catharsis\Web\YandexMapWidget", $factory->map());
  }

  /**
   ** Performs testing of {@link Catharsis\Web\YandexWidgetsFactory::money_button()} method.
   */
  public function test_money_button_method()
  {
    $factory = new Catharsis\Web\YandexWidgetsFactory();
    $this->assertNotSame($factory->money_button(), $factory->money_button());
    $this->assertInstanceOf("Catharsis\Web\YandexMoneyButtonWidget", $factory->money_button());
  }

  /**
   ** Performs testing of {@link Catharsis\Web\YandexWidgetsFactory::money_donate_form()} method.
   */
  public function test_money_donate_form_method()
  {
    $factory = new Catharsis\Web\YandexWidgetsFactory();
    $this->assertNotSame($factory->money_donate_form(), $factory->money_donate_form());
    $this->assertInstanceOf("Catharsis\Web\YandexMoneyDonateFormWidget", $factory->money_donate_form());
  }

  /**
   ** Performs testing of {@link Catharsis\Web\YandexWidgetsFactory::money_payment_form()} method.
   */
  public function test_money_payment_form_method()
  {
    $factory = new Catharsis\Web\YandexWidgetsFactory();
    $this->assertNotSame($factory->money_payment_form(), $factory->money_payment_form());
    $this->assertInstanceOf("Catharsis\Web\YandexMoneyPaymentFormWidget", $factory->money_payment_form());
  }

  /**
   ** Performs testing of {@link Catharsis\Web\YandexWidgetsFactory::share()} method.
   */
  public function test_share_method()
  {
    $factory = new Catharsis\Web\YandexWidgetsFactory();
    $this->assertNotSame($factory->share(), $factory->share());
    $this->assertInstanceOf("Catharsis\Web\YandexSharePanelWidget", $factory->share());
  }

  /**
   ** Performs testing of {@link Catharsis\Web\YandexWidgetsFactory::video()} method.
   */
  public function test_video_method()
  {
    $factory = new Catharsis\Web\YandexWidgetsFactory();
    $this->assertNotSame($factory->video(), $factory->video());
    $this->assertInstanceOf("Catharsis\Web\YandexVideoWidget", $factory->video());
  }
}