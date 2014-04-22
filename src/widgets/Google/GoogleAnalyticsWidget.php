<?php
namespace Catharsis\Web;

/**
 * Includes Google Analytics JavaScript code into web page.
 * @link http://www.google.com/analytics
 */
class GoogleAnalyticsWidget extends HtmlWidgetBase
{
  private $account;
  private $domain;

  /**
   * Google Analytics site identifier (UA-*).
   * This attribute is required.
   * @param string $account Site identifier.
   * @return \Catharsis\Web\GoogleAnalyticsWidget Reference to the current widget.
   */
  public function account($account)
  {
    $this->account = (string) $account;
    return $this;
  }

  /**
   * Google Analytics site domain name.
   * This attribute is required.
   * @param string $domain Site domain name.
   * @return \Catharsis\Web\GoogleAnalyticsWidget Reference to the current widget.
   */
  public function domain($domain)
  {
    $this->domain = (string) $domain;
    return $this;
  }

  /**
   * Returns HTML markup text of widget.
   */
  public function __toString()
  {
    if (empty($this->account) || empty($this->domain))
    {
      return "";
    }

    return "<script type=\"text/javascript\">(function (i, s, o, g, r, a, m) {{ i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {{ (i[r].q = i[r].q || []).push(arguments) }}, i[r].l = 1 * new Date(); a = s.createElement(o), m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m) }})(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga'); ga(\"create\", \"$this->account\", \"$this->domain\"); ga(\"send\", \"pageview\"); </script>";
  }
}