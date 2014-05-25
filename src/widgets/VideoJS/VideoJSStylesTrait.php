<?php
/**
 * VideoJSStylesTrait trait.
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
 * Styles bundles manager to render CSS code, required by VideoJS widgets.
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
trait VideoJSStylesTrait
{
    /**
     * Renders required CSS <link> tags.
     * @return string CSS code.
     */
    public static function videojs()
    {
        return self::cssLink('http://vjs.zencdn.net/4.3/video-js.css');
    }
}

?>
