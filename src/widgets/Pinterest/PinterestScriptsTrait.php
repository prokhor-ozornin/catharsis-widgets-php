<?php
/**
 * PinterestScriptsTrait trait.
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
 * Scripts bundles manager to render JavaScript code, required by Pinterest widgets.
 *
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
trait PinterestScriptsTrait
{
    /**
     * Renders required JavaScript <script> tags.
     * @return string JavaScript code.
     */
    public static function pinterest()
    {
        return self::javascriptLink('http://assets.pinterest.com/js/pinit.js');
    }
}

?>
