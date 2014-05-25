<?php
/**
 * VkontakteLikeButtonLayout class.
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
 * Visual appearance/layout of Vkontakte "Like" button.
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class VkontakteLikeButtonLayout
{
    /**
     * Button with small counter.
     */
    const BUTTON = 'button';

    /**
     * Button with text counter.
     */
    const FULL = 'full';

    /**
     * Small button.
     */
    const MINI = 'mini';

    /**
     * Small button with a counter over it.
     */
    const VERTICAL = 'vertical';

    /**
     * Private internal constructor.
     */
    private function __construct()
    {

    }
}

?>
