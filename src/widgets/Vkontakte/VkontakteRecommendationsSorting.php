<?php
/**
 * VkontakteRecommendationsSorting class.
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
 * Type of materials sorting for Vkontakte "Recommendations Feed" widget.
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class VkontakteRecommendationsSorting
{
    /**
     * By nymber of friends who liked content.
     */
    const FRIEND_LIKES = 'friend_likes';

    /**
     * By total number of likes.
     */
    const LIKES = 'likes';

    /**
     * Private internal constructor.
     */
    private function __construct()
    {

    }
}

?>
