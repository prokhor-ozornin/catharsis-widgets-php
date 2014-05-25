<?php
/**
 * VkontakteRecommendationsLimit class.
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
 * Maximum number of web pages to display for Vkontakte "Recommendations Feed" widget.
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class VkontakteRecommendationsLimit
{
    /**
     * Three pages.
     */
    const THREE = 3;

    /**
     * Five pages.
     */
    const FIVE = 5;

    /**
     * Ten pages.
     */
    const TEN = 10;

    /**
     * Private internal constructor.
     */
    private function __construct()
    {

    }
}

?>
