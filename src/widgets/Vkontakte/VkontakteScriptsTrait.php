<?php
namespace Catharsis\Web;

/**
 * Scripts bundles manager to render JavaScript code, required by Vkontakte widgets.
 */
trait VkontakteScriptsTrait
{
    /**
     * Renders required JavaScript <script> tags.
     * @return string JavaScript code.
     */
    public static function vkontakte()
    {
        return self::javascriptLink("http://vk.com/js/api/openapi.js");
    }
}

?>
