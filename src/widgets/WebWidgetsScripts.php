<?php
namespace Catharsis\Web;

/**
 * Scripts bundles manager to render JavaScript <script> tags, required by different categories of widgets.
 */
final class WebWidgetsScripts
{
    use HtmlHelpersTrait,
        CackleScriptsTrait,
        DisqusScriptsTrait,
        GoogleScriptsTrait,
        MailRuScriptsTrait,
        PinterestScriptsTrait,
        SurfingbirdScriptsTrait,
        TumblrScriptsTrait,
        TwitterScriptsTrait,
        VideoJSScriptsTrait,
        VkontakteScriptsTrait,
        YandexScriptsTrait;

    private function __construct()
    {

    }
}

?>
