<?php

/**
 * Tests set for class {@link Catharsis\Web\YandexWidgetsFactory}
 */
final class YandexWidgetsFactoryTest extends PHPUnit_Framework_TestCase
{
    /**
     * * Performs testing of {@link Catharsis\Web\YandexWidgetsFactory::analytics()} method.
     */
    public function test_analytics_method()
    {
        $factory = new Catharsis\Web\YandexWidgetsFactory();
        $this->assertNotSame($factory->analytics(), $factory->analytics());
        $this->assertInstanceOf("Catharsis\Web\YandexAnalyticsWidget", $factory->analytics());
    }

    /**
     * * Performs testing of {@link Catharsis\Web\YandexWidgetsFactory::likeButton()} method.
     */
    public function test_likeButton_method()
    {
        $factory = new Catharsis\Web\YandexWidgetsFactory();
        $this->assertNotSame($factory->likeButton(), $factory->likeButton());
        $this->assertInstanceOf("Catharsis\Web\YandexLikeButtonWidget", $factory->likeButton());
    }

    /**
     * * Performs testing of {@link Catharsis\Web\YandexWidgetsFactory::map()} method.
     */
    /* public function test_map_method()
      {
      $factory = new Catharsis\Web\YandexWidgetsFactory();
      $this->assertNotSame($factory->map(), $factory->map());
      $this->assertInstanceOf("Catharsis\Web\YandexMapWidget", $factory->map());
      } */

    /**
     * * Performs testing of {@link Catharsis\Web\YandexWidgetsFactory::moneyButton()} method.
     */
    public function test_moneyButton_method()
    {
        $factory = new Catharsis\Web\YandexWidgetsFactory();
        $this->assertNotSame($factory->moneyButton(), $factory->moneyButton());
        $this->assertInstanceOf("Catharsis\Web\YandexMoneyButtonWidget", $factory->moneyButton());
    }

    /**
     * * Performs testing of {@link Catharsis\Web\YandexWidgetsFactory::moneyDonateForm()} method.
     */
    public function test_moneyDonateForm_method()
    {
        $factory = new Catharsis\Web\YandexWidgetsFactory();
        $this->assertNotSame($factory->moneyDonateForm(), $factory->moneyDonateForm());
        $this->assertInstanceOf("Catharsis\Web\YandexMoneyDonateFormWidget", $factory->moneyDonateForm());
    }

    /**
     * * Performs testing of {@link Catharsis\Web\YandexWidgetsFactory::moneyPaymentForm()} method.
     */
    public function test_moneyPaymentForm_method()
    {
        $factory = new Catharsis\Web\YandexWidgetsFactory();
        $this->assertNotSame($factory->moneyPaymentForm(), $factory->moneyPaymentForm());
        $this->assertInstanceOf("Catharsis\Web\YandexMoneyPaymentFormWidget", $factory->moneyPaymentForm());
    }

    /**
     * * Performs testing of {@link Catharsis\Web\YandexWidgetsFactory::sharePanel()} method.
     */
    public function test_sharePanel_method()
    {
        $factory = new Catharsis\Web\YandexWidgetsFactory();
        $this->assertNotSame($factory->sharePanel(), $factory->sharePanel());
        $this->assertInstanceOf("Catharsis\Web\YandexSharePanelWidget", $factory->sharePanel());
    }

    /**
     * * Performs testing of {@link Catharsis\Web\YandexWidgetsFactory::video()} method.
     */
    public function test_video_method()
    {
        $factory = new Catharsis\Web\YandexWidgetsFactory();
        $this->assertNotSame($factory->video(), $factory->video());
        $this->assertInstanceOf("Catharsis\Web\YandexVideoWidget", $factory->video());
    }
}

?>
