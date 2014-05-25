<?php
/**
 * VkontakteRecommendationsPeriod class.
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
 * Statistical report period for Vkontakte Recommendations Feed widget.
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class VkontakteRecommendationsPeriod
{
    /**
     * One day.
     */
    const DAY = 'day';

    /**
     * One week.
     */
    const WEEK = 'week';

    /**
     * One month.
     */
    const MONTH = 'month';

    /**
     * Private internal constructor.
     */
    private function __construct()
    {

    }
}

?>
