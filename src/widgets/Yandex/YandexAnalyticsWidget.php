<?php
namespace Catharsis\Web;

/**
 * Renders Yandex.Metrika web counter's JavaScript code.
 * @link https://metrika.yandex.ru
 */
class YandexAnalyticsWidget extends HtmlWidgetBase
{
  private $account;
  private $accurate = true;
  private $click_map = true;
  private $language;
  private $no_index;
  private $track_hash = true;
  private $track_links = true;
  private $web_visor = true;

  /**
   * Identifier Yandex.Metrica site.
   * This attribute is required.
   * @param string $account Yandex.Metrika identifier.
   * @return \Catharsis\Web\YandexAnalyticsWidget Reference to the current widget.
   */
  public function account($account)
  {
    $this->account = (string) $account;
    return $this;
  }

  /**
   * Whether to use accurate track bounce. Default is TRUE.
   * @param boolean $accurate TRUE to enable accurate track bounce functionality, FALSE to disable it.
   * @return \Catharsis\Web\YandexAnalyticsWidget Reference to the current widget.
   */
  public function accurate($accurate = true)
  {
    $this->accurate = (bool) $accurate;
    return $this;
  }

  /**
   * Whether to use click map (gathering statistics for "click map" report). Default is TRUE.
   * @param boolean $click_map TRUE to enable click map functionality, FALSE to disable it.
   * @return \Catharsis\Web\YandexAnalyticsWidget Reference to the current widget.
   */
  public function click_map($click_map = true)
  {
    $this->click_map = (bool) $click_map;
    return $this;
  }

  /**
   * Language of visual counter's interface to use. Default is current locale's language/language of the current thread.
   * @param string $language Interface language to use.
   * @return \Catharsis\Web\YandexAnalyticsWidget Reference to the current widget.
   */
  public function language($language)
  {
    $this->language = (string) $language;
    return $this;
  }

  /**
   * Whether to disable indexing of site's pages. Default is FALSE.
   * @param boolean $no_index TRUE to disable indexing, FALSE to enable it.
   * @return \Catharsis\Web\YandexAnalyticsWidget Reference to the current widget.
   */
  public function no_index($no_index = true)
  {
    $this->no_index = (bool) $no_index;
    return $this;
  }

  /**
   * Whether to track address hash in URL query string. Default is TRUE.
   * @param boolean $track_hash TRUE to enable track hash functionality, FALSE to disable.
   * @return \Catharsis\Web\YandexAnalyticsWidget Reference to the current widget.
   */
  public function track_hash($track_hash = true)
  {
    $this->track_hash = (bool) $track_hash;
    return $this;
  }

  /**
   * Whether to track links (gathering statistics for external links, file uploads and "Share" button). Default is TRUE.
   * @param boolean $track_links TRUE to enable track links functionality, FALSE to disable it.
   * @return \Catharsis\Web\YandexAnalyticsWidget Reference to the current widget.
   */
  public function track_links($track_links = true)
  {
    $this->track_links = (bool) $track_links;
    return $this;
  }

  /**
   * Whether to use webvisor (recording and analysis of site's visitors behaviour). Default is TRUE.
   * @param boolean $web_visor TRUE to enable webvisor functionality, FALSE to disable it.
   * @return \Catharsis\Web\YandexAnalyticsWidget Reference to the current widget.
   */
  public function web_visor($web_visor = true)
  {
    $this->web_visor = (bool) $web_visor;
    return $this;
  }

  /**
   * Returns HTML markup text of widget.
   */
  public function __toString()
  {
    if (empty($this->account))
    {
      return "";
    }

    $config = array(
      "id" => $this->account,
      "webvisor" => $this->web_visor,
      "clickmap" => $this->click_map,
      "trackLinks" => $this->track_links,
      "accurateTrackBounce" => $this->accurate,
      "trackHash" => $this->track_hash);

    if ($this->no_index)
    {
      $config["ut"] = "noindex";
    }

    $config_json = json_encode($config, JSON_FORCE_OBJECT);
    $language = empty($this->language) ? $this->user_language() : $this->language;

    return <<< EOT
    <!-- Yandex.Metrika informer -->
     <a href="http://metrika.yandex.ru/stat/?id=12066574&amp;from=informer" target="_blank" rel="nofollow">
     <img src="//bs.yandex.ru/informer/12066574/3_1_FFFFFFFF_EFEFEFFF_0_pageviews" style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" onclick="try
     {
       Ya.Metrika.informer({i: this, id: {$this->account}, lang: '{$language}'});
       return false
     }
     catch (e)
     {
     }"/>
     </a>
     <!-- /Yandex.Metrika informer -->

     <!-- Yandex.Metrika counter -->
     <script type="text/javascript">
      (function (d, w, c)
      {
        (w[c] = w[c] || []).push(function ()
        {
          try
          {
            w.yaCounter{$this->account} = new Ya.Metrika({$config_json});
          }
          catch (e)
          {
          }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function ()
            {
              n.parentNode.insertBefore(s, n);
            };
        s.type = "text/javascript";
        s.async = true;
        s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]")
        {
          d.addEventListener("DOMContentLoaded", f, false);
        }
        else
        {
          f();
        }
      })(document, window, "yandex_metrika_callbacks");
     </script>
     <noscript><div><img src="//mc.yandex.ru/watch/12066574" style="position:absolute; left:-9999px;" alt=""/></div></noscript>
     <!-- /Yandex.Metrika counter -->
EOT;
  }
}