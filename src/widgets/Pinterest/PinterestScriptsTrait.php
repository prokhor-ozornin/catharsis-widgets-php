<?php
namespace Catharsis\Web;

/**
 * Scripts bundles manager to render JavaScript code, required by Pinterest widgets.
 */
trait PinterestScriptsTrait
{
    /**
     * Renders required JavaScript <script> tags.
     * @return string JavaScript code.
     */
    public static function pinterest()
    {
        return self::javascriptLink("http://assets.pinterest.com/js/pinit.js");
    }
}

?>
