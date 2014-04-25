<?php
namespace Catharsis\Web;

/**
 * Mail.ru widgets helpers trait.
 */
trait MailRuWidgetsTrait
{
    private static $_mailru;

    /**
     * Returns factory class instance for rendering Mail.ru widgets.
     * @return \Catharsis\Web\MailRuWidgetsFactory
     */
    public static function mailru()
    {
        return empty(self::$_mailru)
            ? (self::$_mailru = new MailRuWidgetsFactory())
            : self::$_mailru;
    }
}

?>
