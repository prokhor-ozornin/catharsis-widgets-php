<?php
namespace Catharsis\Web;

/**
 * Performs initialization of Facebook JavaScript API. Initialization must be performed before rendering Facebook widgets on the page.
 * Requires {@link WidgetsScriptsBundles::facebook()} scripts bundle to be included.
 * @link https://developers.facebook.com/docs/javascript
 */
class FacebookInitWidget extends HtmlWidgetBase
{
  private $app_id;

  /**
   * Identifier of registered Facebook application.
   * This attribute is required.
   * @param string $app_id Identifier of Facebook application.
   * @return \Catharsis\Web\FacebookInitWidget Reference to the current widget.
   */
  public function app_id($app_id)
  {
    $this->app_id = (string) $app_id;
    return $this;
  }

  /**
   * Returns HTML markup text of widget.
   */
  public function __toString()
  {
    if (empty($this->app_id))
    {
      return "";
    }

    return self::html_tag("div", array("id" => "fb-root"))."<script type=\"text/javascript\">(function(d, s, id) {{ var js, fjs = d.getElementsByTagName(s)[0]; if (d.getElementById(id)) return; js = d.createElement(s); js.id = id; js.src = \"//connect.facebook.net/en_US/all.js#xfbml=1&appId={$this->app_id}\";  fjs.parentNode.insertBefore(js, fjs); }}(document, 'script', 'facebook-jssdk'));</script>";
  }
}