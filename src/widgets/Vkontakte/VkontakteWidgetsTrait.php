<?php
namespace Catharsis\Web;

/**
 * Vkontakte widgets helpers trait.
 */
trait VkontakteWidgetsTrait
{
    private static $_vkontakte;
    /**
     * Returns factory class instance for rendering Vkontakte widgets.
     * @return \Catharsis\Web\VkontakteWidgetsFactory
     */
    public static function vkontakte()
    {
        return empty(self::$_vkontakte)
            ? (self::$_vkontakte = new VkontakteWidgetsFactory())
            : self::$_vkontakte;
    }
}

?>
