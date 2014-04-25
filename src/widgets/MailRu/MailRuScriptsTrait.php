<?php
namespace Catharsis\Web;

/**
 * Scripts bundles manager to render JavaScript code, required by Mail.ru widgets.
 */
trait MailRuScriptsTrait
{
    /**
     * Renders required JavaScript <script> tags.
     * @return string JavaScript code.
     */
    public static function mailru()
    {
        return self::javascriptLink("http://cdn.connect.mail.ru/js/loader.js");
    }
}

?>
