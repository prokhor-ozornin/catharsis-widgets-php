<?php
namespace Catharsis\Web;

/**
 * Yandex widgets helpers trait.
 */
trait YandexWidgetsTrait
{
    private static $_yandex;

    /**
     * Returns factory class instance for rendering Yandex widgets.
     * @return \Catharsis\Web\YandexWidgetsFactory
     */
    public static function yandex()
    {
        return empty(self::$_yandex)
            ? (self::$_yandex = new YandexWidgetsFactory())
            : self::$_yandex;
    }
}

?>
