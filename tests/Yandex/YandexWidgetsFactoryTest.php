<?php
/**
 * PHP version 5
 *
 * @category HTML
 * @package  WebWidgets
 * @author   Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @license  LGPL https://www.gnu.org/licenses/lgpl.html
 * @link     http://pear.php.net/package/HTML_WebWidgets
 */

/**
 * Tests set for class {@link \Catharsis\Web\YandexWidgetsFactory}
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class YandexWidgetsFactoryTest extends PHPUnit_Framework_TestCase
{
    /**
     * Performs testing of
     * {@link \Catharsis\Web\YandexWidgetsFactory::analytics()}
     * method.
     * @return void
     */
    public function testAnalyticsMethod()
    {
        $factory = new Catharsis\Web\YandexWidgetsFactory();
        $this->assertNotSame($factory->analytics(), $factory->analytics());
        $this->assertInstanceOf('Catharsis\Web\YandexAnalyticsWidget', $factory->analytics());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\YandexWidgetsFactory::likeButton()}
     * method.
     * @return void
     */
    public function testLikeButtonMethod()
    {
        $factory = new Catharsis\Web\YandexWidgetsFactory();
        $this->assertNotSame($factory->likeButton(), $factory->likeButton());
        $this->assertInstanceOf('Catharsis\Web\YandexLikeButtonWidget', $factory->likeButton());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\YandexWidgetsFactory::map()}
     * method.
     * @return void
     */
    /* public function testMap_method()
      {
      $factory = new Catharsis\Web\YandexWidgetsFactory();
      $this->assertNotSame($factory->map(), $factory->map());
      $this->assertInstanceOf('Catharsis\Web\YandexMapWidget', $factory->map());
      } */

    /**
     * Performs testing of
     * {@link \Catharsis\Web\YandexWidgetsFactory::moneyButton()}
     * method.
     * @return void
     */
    public function testMoneyButtonMethod()
    {
        $factory = new Catharsis\Web\YandexWidgetsFactory();
        $this->assertNotSame($factory->moneyButton(), $factory->moneyButton());
        $this->assertInstanceOf('Catharsis\Web\YandexMoneyButtonWidget', $factory->moneyButton());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\YandexWidgetsFactory::moneyDonateForm()}
     * method.
     * @return void
     */
    public function testMoneyDonateFormMethod()
    {
        $factory = new Catharsis\Web\YandexWidgetsFactory();
        $this->assertNotSame($factory->moneyDonateForm(), $factory->moneyDonateForm());
        $this->assertInstanceOf('Catharsis\Web\YandexMoneyDonateFormWidget', $factory->moneyDonateForm());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\YandexWidgetsFactory::moneyPaymentForm()}
     * method.
     * @return void
     */
    public function testMoneyPaymentFormMethod()
    {
        $factory = new Catharsis\Web\YandexWidgetsFactory();
        $this->assertNotSame($factory->moneyPaymentForm(), $factory->moneyPaymentForm());
        $this->assertInstanceOf('Catharsis\Web\YandexMoneyPaymentFormWidget', $factory->moneyPaymentForm());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\YandexWidgetsFactory::sharePanel()}
     * method.
     * @return void
     */
    public function testSharePanelMethod()
    {
        $factory = new Catharsis\Web\YandexWidgetsFactory();
        $this->assertNotSame($factory->sharePanel(), $factory->sharePanel());
        $this->assertInstanceOf('Catharsis\Web\YandexSharePanelWidget', $factory->sharePanel());
    }

    /**
     * Performs testing of
     * {@link \Catharsis\Web\YandexWidgetsFactory::video()}
     * method.
     * @return void
     */
    public function testVideoMethod()
    {
        $factory = new Catharsis\Web\YandexWidgetsFactory();
        $this->assertNotSame($factory->video(), $factory->video());
        $this->assertInstanceOf('Catharsis\Web\YandexVideoWidget', $factory->video());
    }
}

?>
