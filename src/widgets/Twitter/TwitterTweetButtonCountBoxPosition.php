<?php
/**
 * TwitterTweetButtonCountBoxPosition class.
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
 * Relative position of count box for Twitter "Tweet" button.
 * @category  HTML
 * @package   WebWidgets
 * @author    Prokhor Ozornin <prokhor.ozornin@yandex.ru>
 * @copyright 2014 Prokhor Ozornin
 * @license   LGPL https://www.gnu.org/licenses/lgpl.html
 * @link      http://pear.php.net/package/HTML_WebWidgets
 */
final class TwitterTweetButtonCountBoxPosition
{
    /**
     * Right to the button.
     */
    const HORIZONTAL = 'horizontal';

    /**
     * Do not display count box.
     */
    const NONE = 'none';

    /**
     * Over the button.
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
