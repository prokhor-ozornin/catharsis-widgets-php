<?php
/**
 * YandexAnalyticsWidget class.
 *
 * PHP version 5
 *
 * @category HTML
 * @package  WebWidgets
 * @author   Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @license  LGPL https://www.gnu.org/licenses/lgpl.html
 * @link     http://pear.php.net/package/HTML_WebWidgets
 */
namespace Catharsis\Web;

/**
 * Renders Yandex.Metrika web counter's JavaScript code.
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 * @link      https://metrika.yandex.ru
 */
class YandexAnalyticsWidget extends HtmlWidget
{
    private $_account;
    private $_accurate = true;
    private $_clickMap = true;
    private $_language;
    private $_noIndex;
    private $_trackHash = true;
    private $_trackLinks = true;
    private $_webVisor = true;

    /**
     * Identifier Yandex.Metrica site.
     * This attribute is required.
     * @param string $account Yandex.Metrika identifier.
     * @return \Catharsis\Web\YandexAnalyticsWidget
     *         Reference to the current widget.
     */
    public function account($account)
    {
        $this->_account = (string) $account;
        return $this;
    }

    /**
     * Identifier Yandex.Metrica site.
     * @return string Yandex.Metrika identifier.
     */
    public function getAccount()
    {
        return $this->_account;
    }

    /**
     * Whether to use accurate track bounce.
     * Default is TRUE.
     * @param boolean $enabled TRUE to enable accurate track bounce functionality,
     *                         FALSE to disable it.
     * @return \Catharsis\Web\YandexAnalyticsWidget
     *         Reference to the current widget.
     */
    public function accurate($enabled)
    {
        $this->_accurate = (bool) $enabled;
        return $this;
    }

    /**
     * Whether to use accurate track bounce.
     * Default is TRUE.
     * @return boolean TRUE to enable accurate track bounce functionality,
     *                 FALSE to disable it.
     */
    public function getAccurate()
    {
        return $this->_accurate;
    }

    /**
     * Whether to use click map (gathering statistics for "click map" report).
     * Default is TRUE.
     * @param boolean $enabled TRUE to enable click map functionality,
     *                         FALSE to disable it.
     * @return \Catharsis\Web\YandexAnalyticsWidget
     *         Reference to the current widget.
     */
    public function clickMap($enabled)
    {
        $this->_clickMap = (bool) $enabled;
        return $this;
    }

    /**
     * Whether to use click map (gathering statistics for "click map" report).
     * Default is TRUE.
     * @return boolean TRUE to enable click map functionality,
     *                 FALSE to disable it.
     */
    public function getClickMap()
    {
        return $this->_clickMap;
    }

    /**
     * Language of visual counter's interface to use.
     * Default is current locale's language/language of the current thread.
     * @param string $language Interface language to use.
     * @return \Catharsis\Web\YandexAnalyticsWidget
     *         Reference to the current widget.
     */
    public function language($language)
    {
        $this->_language = (string) $language;
        return $this;
    }

    /**
     * Language of visual counter's interface to use.
     * Default is current locale's language/language of the current thread.
     * @return string Interface language to use.
     */
    public function getLanguage()
    {
        return $this->_language;
    }

    /**
     * Whether to disable indexing of site's pages.
     * Default is FALSE.
     * @param boolean $enabled TRUE to disable indexing, FALSE to enable it.
     * @return \Catharsis\Web\YandexAnalyticsWidget
     *         Reference to the current widget.
     */
    public function noIndex($enabled)
    {
        $this->_noIndex = (bool) $enabled;
        return $this;
    }

    /**
     * Whether to disable indexing of site's pages.
     * Default is FALSE.
     * @return boolean TRUE to disable indexing, FALSE to enable it.
     */
    public function getNoIndex()
    {
        return $this->_noIndex;
    }

    /**
     * Whether to track address hash in URL query string.
     * Default is TRUE.
     * @param boolean $enabled TRUE to enable track hash functionality,
     *                         FALSE to disable.
     * @return \Catharsis\Web\YandexAnalyticsWidget
     *         Reference to the current widget.
     */
    public function trackHash($enabled)
    {
        $this->_trackHash = (bool) $enabled;
        return $this;
    }

    /**
     * Whether to track address hash in URL query string.
     * Default is TRUE.
     * @return boolean TRUE to enable track hash functionality,
     *                 FALSE to disable.
     */
    public function getTrackHash()
    {
        return $this->_trackHash;
    }

    /**
     * Whether to track links (gathering statistics for external links,
     * file uploads and "Share" button).
     * Default is TRUE.
     * @param boolean $enabled TRUE to enable track links functionality,
     *                         FALSE to disable it.
     * @return \Catharsis\Web\YandexAnalyticsWidget
     *         Reference to the current widget.
     */
    public function trackLinks($enabled)
    {
        $this->_trackLinks = (bool) $enabled;
        return $this;
    }

    /**
     * Whether to track links (gathering statistics for external links,
     * file uploads and "Share" button).
     * Default is TRUE.
     * @return boolean TRUE to enable track links functionality,
     *                 FALSE to disable it.
     */
    public function getTrackLinks()
    {
        return $this->_trackLinks;
    }

    /**
     * Whether to use webvisor (recording and analysis of site's visitors behaviour).
     * Default is TRUE.
     * @param boolean $enabled TRUE to enable webvisor functionality,
     *                         FALSE to disable it.
     * @return \Catharsis\Web\YandexAnalyticsWidget
     *         Reference to the current widget.
     */
    public function webVisor($enabled)
    {
        $this->_webVisor = (bool) $enabled;
        return $this;
    }

    /**
     * Whether to use webvisor (recording and analysis of site's visitors behaviour).
     * Default is TRUE.
     * @return boolean TRUE to enable webvisor functionality,
     *                 FALSE to disable it.
     */
    public function getWebVisor()
    {
        return $this->_webVisor;
    }

    /**
     * Returns HTML markup text of widget.
     * @return string Widget's HTML markup.
     */
    public function __toString()
    {
        if (empty($this->getAccount())) {
            return '';
        }

        $config = array(
            'id' => $this->getAccount(),
            'webvisor' => $this->getWebVisor(),
            'clickmap' => $this->getClickMap(),
            'trackLinks' => $this->getTrackLinks(),
            'accurateTrackBounce' => $this->getAccurate(),
            'trackHash' => $this->getTrackHash()
        );

        if ($this->getNoIndex()) {
            $config['ut'] = 'noindex';
        }

        $config_json = json_encode($config, JSON_FORCE_OBJECT);
        $language = empty($this->getLanguage()) ? $this->userLanguage() : $this->getLanguage();

        return <<< EOT
    <!-- Yandex.Metrika informer -->
     <a href="http://metrika.yandex.ru/stat/?id=12066574&amp;from=informer" target="_blank" rel="nofollow">
     <img src="//bs.yandex.ru/informer/12066574/3_1_FFFFFFFF_EFEFEFFF_0_pageviews" style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" onclick="try
     {
       Ya.Metrika.informer({i: this, id: {$this->getAccount()}, lang: '{$language}'});
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
            w.yaCounter{$this->getAccount()} = new Ya.Metrika({$config_json});
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

?>
